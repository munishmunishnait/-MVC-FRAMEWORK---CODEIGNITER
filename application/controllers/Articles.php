<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Articles extends CI_Controller {
function __construct()
{
 parent::__construct();
 $this->load->helper('form'); // loading this for the entire class/controller
 $this->load->library('form_validation'); // loading this for the entire class/controller
 $this->load->database(); // ummm…ditto
}

    public function index(){
    $data['heading'] = "Articles";
    $this->load->model('articles_model');
    $data['results'] = $this->articles_model->get_articles();
    $this->load->view('includes/header', $data);
    $this->load->view('articles_read_view',$data);
    $this->load->view('includes/footer');
    } 

    public function detail($id)
    {
    if(!is_numeric($id)){ 
    redirect('/', 'location');
    }

    $this->load->library('typography');
    $data['heading'] = "Articles";
    $this->load->model('articles_model');
    $data['results'] = $this->articles_model->get_articles_detail($id);
    $this->load->view('includes/header',$data);
    $this->load->view('articles_detail_view',$data);
    $this->load->view('includes/footer');
    }// \ detail

    public function write()
    {
        if (!$this->ion_auth->logged_in())
            {
            redirect('/auth/login/');
            }else{
            $data['author_id'] = $this->ion_auth->user()->row()->id;
            }
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('title', 'Title','required|min_length[4]|max_length[40]');
        $this->form_validation->set_rules('articles', 'Articles',
        'required|min_length[20]|max_length[2000]'); 

    // Validation Library was loaded in the constructor.
    if ($this->form_validation->run() == FALSE)
    {
    $this->load->view('includes/header');
    $this->load->view('articles_write_view');
    $this->load->view('includes/footer');
    }
    else
    {
        // echo "SUCCESS"; 
        $data['title'] = $this->input->post('title');
        $data['articles']= $this->input->post('articles');
        $data['filename']= $this->input->post('filename');

        $this->load->model('articles_model');
        $this->articles_model->insert_articles($data);
        $this->session->set_userdata('message', 'Insert Successful');
        redirect("articles/index", 'location');
    }
    } // \ write
    
    public function edit($id)
    {
        if(!is_numeric($id)){
            redirect('/', 'location');
        }

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('title', 'Title','required|min_length[4]|max_length[40]');
        $this->form_validation->set_rules('articles', 'Articles',
        'required|min_length[20]|max_length[2000]'); 

        $this->load->model('articles_model'); // just moved this up so we can call the model function

    // Validation Library was loaded in the constructor.
    if ($this->form_validation->run() == FALSE)
    {
    $data['results'] = $this->articles_model->get_articles_detail($id);
    $this->load->view('includes/header');
    $this->load->view('articles_edit_view', $data); // a new view here
    $this->load->view('includes/footer');
    }
    else
    {
        // echo "SUCCESS"; 
        $data['title'] = $this->input->post('title');
        $data['articles']= $this->input->post('articles');
        $this->articles_model->edit_articles($data,$id);

        $this->load->model('articles_model');
        $this->session->set_userdata('message', 'Edited');
        redirect('articles/edit/' . $id, 'location');
    }
    } // \ write
    


    

}