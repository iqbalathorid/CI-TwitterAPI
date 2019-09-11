
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sosial Account</title>

     <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
  
#body2{

margin-left: 50px;


}
#body4{

margin-left: 230px

}

#body5{

position: absolute;
right:550px;
margin-top: 50px;


}
#tulis {


  margin-left: 20px;
}



</style>
   

  
  </head>
  <body>
       
      <div class="nav">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url();?>Users/dasboard_admin">Dasboard </a></li>
        <li><a href="<?php echo base_url();?>Users/akun_view" name="sosial">Sosial Account</a></li>
         <li><a href="<?php echo base_url();?>Auth/cview" name="sosial">User management</a></li>
     </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">USER<span class="caret"></span></a>
          <ul class="dropdown-menu">
           
            <li><a href="<?php echo base_url();?>Users/setting_user">Setting</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url();?>Auth/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</div>
</nav>

<div id="body5">
  <div class="thumbnail">
    <a href="<?php echo base_url();?>asset/img/1.jpg">
<img src="<?php echo base_url();?>asset/img/1.jpg" width="300px" heigth="400px">
</a>
<center>
<h1>TWITER NAME </h1>
<h3>@screen_name</h3>

<div class="tulis">
<br>
<h4> Tweets Following Followers</h4>
</center>
</div>
</div>
</div>


 <div id="body2">
  
 <br>

 <button type="button" class="btn btn-primary" onclick="add_user()">AddUser</button>

<br>

<br>
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="media-left">
     <center><img  class="media-object" src="<?php echo base_url();?>asset/img/1.jpg" alt="image" heigth="100px" width="100px" ></center>
     
     <div class="media-body">
      <center>
      <ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
</ul>
</center>
        <h4 class="media-heading"></h4>

        <p></p>
      </div>
        
      </div>
    </div>
    </div>
  </div> 



<div lass="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="media-left">
     <center><img  class="media-object" src="<?php echo base_url();?>asset/img/1.jpg" alt="image" heigth="100px" width="100px" ></center>
     
     <div class="media-body">
      
      <ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
</ul>

        <h4 class="media-heading"></h4>

        <p></p>
      </div>
        
      </div>
    </div>
    </div>
  </div>


<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="media-left">
     <center><img  class="media-object" src="<?php echo base_url();?>asset/img/1.jpg" alt="image" heigth="100px" width="100px" ></center>
     
     <div class="media-body">
      <center>
      <ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
</ul>
</center>
        <h4 class="media-heading"></h4>

        <p></p>
      </div>
        
      </div>
    </div>
    </div>
  </div>


<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="media-left">
     <center><img  class="media-object" src="<?php echo base_url();?>asset/img/1.jpg" alt="image" heigth="100px" width="100px" ></center>
     
     <div class="media-body">
      <center>
      <ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
</ul>
</center>
        <h4 class="media-heading"></h4>

        <p></p>
      </div>
        
      </div>
    </div>
    </div>
  </div>

<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="media-left">
     <center><img  class="media-object" src="<?php echo base_url();?>asset/img/1.jpg" alt="image" heigth="100px" width="100px" ></center>
     
     <div class="media-body">
      <center>
      <ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
</ul>
</center>
        <h4 class="media-heading"></h4>

        <p></p>
      </div>
        
      </div>
    </div>
    </div>
  </div>
  </div>
<div id="body4">
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</div>
</div>

<div id="body4">
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</div>
</div>
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url ();?>asset/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
      

var save_method;
  var table;


  function add_user(){

    save_method ='add';
    $('#form')[0].reset();
    $('#modal_form').modal('show');


  }




    </script>

    <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <center> <h4 class="modal-title">Add New Account</h4></center>
      </div>
      <div class="modal-body form">
        <form action="" method="POST" id="form" class="form-horizontal">
          <div class="form-body">
       <div class="form-group">
            <label class="control-label col-md-3" for="recipient-name" class="control-label" >Screen name</label>
            <div class="col-md-9">
            <input type="text" class="form-control" id="recipient-name" placeholder="@Screen name">
          </div>
        </div>
        </div>
          <div class="form-body">
       <div class="form-group">
            <label class="control-label col-md-3" for="recipient-password" class="control-label" >Password</label>
            <div class="col-md-9">
            <input type="text" class="form-control" id="recipient-name" placeholder="Password">
          </div>
        </div>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
      
     
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</form>
</body>
</html>