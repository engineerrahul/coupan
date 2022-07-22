<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" >

</head>
<body>

<!-- partial:index.partial.html -->
<div id="login-form-wrap">
  <h2>Login</h2>
  <form id="login-form" action="<?php echo base_url('admin/login');?>" method="post">
    <p>
    <input type="text" id="username" name="username" placeholder="Username" >
    <?php echo form_error('username');?>
    </p>
    <p>
    <input type="password" id="password" name="password" placeholder="Password" >
    </p>
    <?php echo form_error('password');?>
    <p>
    <input type="submit" id="login" value="Login">
    </p>
  </form>
  <div id="create-account-wrap">
    <!--<p>Not a member? <a href="#">Create Account</a><p>-->
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
<!-- partial -->
  
</body>
</html>
