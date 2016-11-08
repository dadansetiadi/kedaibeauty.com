<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <script scr="<?php echo base_url();?>assets/js/jquery.js"></script>
  <script scr="<?php echo base_url();?>assets/js/bootstrap.main.js"></script>
</head>
<body>
<?php 
$id = "";
$username = "";
$password = "";
if($op=="edit"){
  foreach ($sql->result() as $value) {
    $op = "edit";
    $id = $value->id;
    $username = $value->username;
    $password = $value->password;
    }
  }

?>
<h2>Add User</h2>
<form class="form-horizontal" role="form" action="<?php echo base_url();?>users/simpan" method="POST">
    <input type="hidden"  id="op" name="op" value="<?php echo $op; ?>" class="col-sm-2 control-label">
    <input type="hidden"  id="id" name="id" value="<?php echo $id; ?>" class="col-sm-2 control-label">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" placeholder="username">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

</body>
</html>