<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html" charset="ISO-8859-1" />

    <title>SpelShoppen</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css"> 
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">SpelShoppen</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url(); ?>">Startsidan</a></li>
			
			<?php if(!$this->session->userdata('logged_in')) : ?>
			
            <li><a href="<?php echo base_url(); ?>users/register">Registrera</a></li>
			
			<?php endif; ?>
			
          </ul>
		  
		  <?php if(!$this->session->userdata('logged_in')) : ?>
		  
		   <form method="post" action="<?php echo base_url(); ?>users/login"class="navbar-form navbar-right">
				<div class="form-group">
					<input name="username" type="text" class="form-control" placeholder="Användarnamn">
				</div>
				<div class="form-group">
					<input name="password" type="password" class="form-control" placeholder="Lösenord">
				</div>
				<button name="submit" type="submit" class="btn btn-default">Logga in</button>
			</form>
			
		  <?php else: ?>
		  
				<form class="navbar-form navbar-right" method="post" action="<?php echo base_url(); ?>users/logout">
				<button name="submit" type="submit" class="btn btn-default">Logga ut</button>
				</form>
		  
		  <?php endif; ?>
			
			
			
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
		<div class="row">
			<div class="col-md-4">
			<?php $this->load->view('layouts/includes/sidebar'); ?>
			</div>
			
			
		
			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
				<div class="panel-heading panel-heading-green">
					<h3 class="panel-title">Spelshoppen</h3>
				</div>
				<div class="panel-body">