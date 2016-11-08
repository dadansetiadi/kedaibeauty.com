<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<script scr="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script scr="<?php echo base_url();?>assets/js/bootstrap.main.js"></script>
</head>
<body>
<div class="container-fluid">
<h2>User Page</h2>
<a href="<?php echo base_url(); ?>users/add" class="btn btn-primary">Tambah</a>
<table class="table table-bordered">
  <tr>
  	<th>No</th>
  	<th>Username</th>
  	<th>Password</th>
  	<th>Aksi</th>
  </tr>
  <?php
  $no=0;
  foreach ($sql1->result() as $value) {
  	$no++;
  	?>
  		<tr>
  			<td><?php echo $no; ?></td>
  			<td><?php echo $value->username ?></td>
  			<td><?php echo $value->password ?></td>
			<td>
			<a href="<?php echo base_url(); ?>users/edit/<?php echo $value->id; ?>" class="btn btn-info btn-xs">Edit</a>
			<a href="javascript:if(confirm('Anda yakin ingin menghapus??')){document.location='<?php echo base_url();?>users/hapus/<?php echo $value->id; ?>';}" class="btn btn-danger btn-xs">Hapus</a>
			</td>

  		</tr>
  <?php
  }

  ?>
</table>
</div>

</body>
</html>