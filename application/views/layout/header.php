<!DOCTYPE html>
<html>
<head>
	<title>App</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css') ?>">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>

<div class="navbar navbar-default">
	<div class="container">
		<!--<h2><span class="glyphicon glyphicon-home"></span>&nbsp;App</h2>-->
     <nav class="navbar navbar-dark bg-dark">
    <ul class="nav navbar-nav">
    	<?php

			echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
 			echo '<label><a href="'.base_url().'main/logout">Logout</a></label>';
              
                ?>
      <li ><a href="<?php echo base_url('Employee/index'); ?>">Home</a></li>
      <li><a href="<?php echo base_url('EmployeeRecord/index'); ?>">Service Records</a></li>
       <li><a href="<?php echo base_url('Excel_export/index'); ?>">Reports</a></li>
     <!-- <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> class="active"-->
    </ul>
</nav>
  


	</div>

</div>
<div class="container">

