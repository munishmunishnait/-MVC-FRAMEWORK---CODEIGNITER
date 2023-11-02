<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
    <link href="<?php echo base_url(); ?>css/icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title><?php
    if(APP_NAME){
    $title = APP_NAME;
    }
    if(isset($heading)){
    $title = $title . " - " . $heading;
    }
    echo $title;
    ?></title>
    <script type="text/javascript">
      $(document).ready(function(){
      // fade #message if exists
      if($('#message').length){
      $( "#message" ).delay(3000).fadeOut({}, 3000);
      }
      });
    </script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url()?>"><span class="material-symbols-outlined">
        home
      </span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php if ($this->ion_auth->logged_in()) : ?>
              <?php
                  $user_id = $this->ion_auth->user()->row()->id ;
                  $username = $this->ion_auth->user()->row()->username ;
                  ?>
                  Logged in <?php echo $username; ?>
                <?php else: ?>
                  Login
                <?php endif; ?> 
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo base_url()?>articles/write">Write Articles</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url()?>auth/forgot_password">Change Password</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url()?>auth/logout">Logout</a></li>
              </ul>
            </li>
            <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url()?>register">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php $message = $this->session->userdata('message'); ?>
    <?php if(isset($message)): ?>
      <h3 class="alert alert-primary" id="message"><span class="material-symbols-outlined">
      thumb_up
      </span><?php echo $message ?></h3>
    <?php endif; ?>
<?php $this->session->unset_userdata('message'); ?>
        
        
