<!DOCTYPE html>

<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Login Page</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">

   
  </head>
  <body>
   



  <div class="col-md-4 col-md-offset-4 well" style="margin-top: 150px;">

<h1>LOGIN:</h1>

  <?php echo form_open('Auth/ceklogin');?>
<div class="panel panel-default">
       <div class="panel-body">

  <div class="form-group">
    <label for="">Username</label>
    <input type="text" class="form-control" id="username" placeholder="Username"  name="username">
    <span class="text-danger"><?php echo form_error("username");?>
    </span>
  </div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
     <span class="text-danger"><?php echo form_error("password");?>
    </span>
  </div>
 

  <div >


  <button class="btn btn-primary" name="login">LOGIN</button>
  <a href="<?php echo base_url();?>Auth/register" class="btn btn-link">REGISTER</a>
  <?php echo form_close()?>
  </div>
  </div>
  </div>
  </div>
</div>
</div>
</form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url ();?> asset/js/bootstrap.min.js"></script>
  </body>
</html>

    <!-- Optional JavaScript -->



























