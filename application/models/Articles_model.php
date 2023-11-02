<?php
class Articles_model extends CI_Model {
 function __construct()
        {
        // Call the Model constructor
        parent::__construct();
        }
        function get_articles(){
        $query = $this->db->get('ci_articles');
        if ( $query->num_rows() > 0 ){
        return $query->result();
        }else{
        return FALSE;
        }
        }

        function get_articles_detail($id){
            $this->db->select('*');
            $this->db->join('users', 'users.id = ci_articles.author_id');
            $this->db->where('articles_id', $id);
            $query = $this->db->get('ci_articles');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return FALSE;
            }
        }
        

        function insert_articles($data){
            if (isset($_FILES['filename']) && $_FILES['filename']['name'] != '') {
                // set the "filename" field to the name of the uploaded file
                $data['filename'] = $_FILES['filename']['name'];
            }
            $this->db->insert('ci_articles', $data);
        } 

        function edit_articles($data,$id){
            $this->db->where('articles_id', $id);
            $this->db->update('ci_articles', $data);
        }
}