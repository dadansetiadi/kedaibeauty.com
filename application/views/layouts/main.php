<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<script scr="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script scr="<?php echo base_url();?>assets/js/bootstrap.main.js"></script>
</head>
<body>

<div class="container">
	<div class="col-xs-3">
		<?php $this->load->view('users/login_view'); ?>
	</div>

	<div class="col-xs-9">
		<?php $this->load->view($main_view); ?>
	</div>
	
</div>


</body>
</html>