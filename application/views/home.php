<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project Desa</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url();?>assets/font/font1.css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font/font1.css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/coming-soon.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="overlay"></div>
    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <center><img src="<?php echo base_url();?>assets/img/logo.png" alt=""></center><br>
              <form class="form-horizontal row-border" method="post" action="<?php echo site_url('welcome/login'); ?>">
                  <center><h3>Sistem Informasi Desa</h3>
    			        <h5 class="mb-3">Provinsi Sulawesi Tenggara</h5></center>
                  <div class='form-group'>
        						<div class='col-md-10'>
        							<input type="text" class="form-control" placeholder="Enter Username" name="username" aria-describedby="basic-addon">
        						</div>
        					</div>
        					<div class='form-group'>
        						<div class='col-md-10'>
        			            	<input type="password" class="form-control" placeholder="Enter Password" name="password" aria-describedby="basic-addon">
        						</div>
        					</div>
        					<div class='form-group'>
        		          <div class='col-md-10'>
        				        <input type="submit" class="btn btn-md btn-primary" name="login" value="Login">
        						  </div>
        					</div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="social-icons">
      <ul class="list-unstyled text-center mb-0">
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/vide/jquery.vide.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>assets/js/coming-soon.min.js"></script>

  </body>

</html>
