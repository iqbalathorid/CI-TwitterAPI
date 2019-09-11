<?php ?>
<!DOCTYPE html>

<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Register page</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">

   
  </head>
  <body>
   



   

  <div class="col-lg-6 col-lg-offset-2">

<?php  if(isset($_SESSION['success'])){  ?>

<div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>


<?php


}?>
<br><br><br>

<?php  echo validation_errors('<div class="alert alert-danger">','</div>');  ?>
 <form action="" method="POST">
<div class="panel panel-default">
       <div class="panel-body">

  <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" id="username" placeholder="Username"  name="username">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name="email" >
    </div>


<div class="form-group">
    <label for="password">Old Password</label>
    <input type="password" class="form-control" id="oldpassword" placeholder="Old Password" name="password">
  </div>

<div class="form-group">
    <label for="password">New Password</label>
    <input type="password" class="form-control" id="password" placeholder=" New Password" name="password">
  </div>
 
   <div class="form-group">
    <label for="name">Retype Password</label>
    <input type="password" class="form-control" id="password" placeholder="Retype Password" name="password">

  </div>
  
  


  <div class="form-group">
  <button class="btn btn-danger" name="register">Cancel</button>
   <button class="btn btn-success" name="save">Save</button>
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
    <script src="<?php echo base_url ();?>asset/js/bootstrap.min.js"></script>
  </body>
</html>

    <!-- Optional JavaScript -->



























