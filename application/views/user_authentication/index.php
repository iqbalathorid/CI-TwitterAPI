<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOME</title>
<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
#kiri { height:900px;  padding:10px; float:left; width:400px; margin-left: 70px;}
 
 #kanan { height:900px; padding:10px;float:right;width:875px; }
 #tengah { height:900px; padding:10px;background-color: #CCCCCC; width: 100px; }
p.error{font-size: 16px;color: #EA4335;}
.table-fixed thead {
  width: 97%;
}
.table-fixed tbody {
  height: 230px;
  overflow-y: auto;
  width: 100%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
  display: block;
}
.table-fixed tbody td, .table-fixed thead > tr> th {
  float: left;
  border-bottom-width: 0;
}
</style>
</head>
<body>
  <?php
if(!empty($error_msg)){?>
<p class="error"><?php echo $error_msg ?></p>;  
<?php }?>
<?php if(!empty($userData)){?>
<div class="nav">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img class="navbar-brand"  src="<?php echo base_url();?>asset/img/icon2.png">
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url();?>Auth/dasboard">Dasboard</a></li>
        <li><a href="<?php echo base_url();?>user_authentication/index" name="sosial">Sosial Account</a></li>
         
     </ul>
   
       <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $userData['username'];?><span class="caret"></span></a>
          <ul class="dropdown-menu">
           
            <li><a href="<?php echo base_url();?>admin/C_admin/setting">Edit</li></a>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url()?>user_authentication/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</nav>

  <div id="kiri">
 <div class="container">
  <div class="row">
    <br><br><br>
    <div class="col-md-1">
<button type="button" class="btn btn-info" onclick="add_user()" aria-label="Left Align">
  Account
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
</div>
  </div>
    </div>

<br><br>

<div class="container-fluid">
 
  <div class="row">
    <div class="col-md-12 well well-sm">
  <img src="<?php echo base_url();?>asset/img/Black.jpg"" style="float:left; height:75px; width:75px; margin-top: 5px;>margin-bottom: 5px;" >
  <div class="col-md" style="margin-left: 80px;">
       </div>
      </div>
    </div>
  
  
  <div class="container">
    <div class="row">
        <div class="col-md-3">
            <!--Tampilkan pagination-->
        </div>
    </div>
</div>
</div>
 </div> 


<div id="kanan">		
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-1 col-md-offset-8">
      <br><br><br>
<button type="button" class="btn btn-info" onclick="send_tweet()" aria-label="Left Align">
  Send Tweet
</button>
</div>
  </div>  
<br>


    <div class="row">
      <div class="col-md-3" >
        <img src="<?php echo $userData['picture_url'];?>" style="float:left; height:200px; width:200px; margin-top: 4px;">
        </div>
  <div class="col-md-5">
    <h1><?php echo $userData['first_name'];?> <?php echo $userData['last_name']?></h1>
    <h2>@<?php echo $userData['username'];?></h2>
    <br>
    <div class="col-md-2" style="margin-left: 20px;">
        <h4><p style="margin-left: 10px;"></p><?php echo $userData['tweet_count'];?></p></h4>
    <h4>tweets</h4>
       </div>
       <div class="col-md-3" style="margin-left: 20px;">
           <h4><p style="margin-left: 17px;"><?php echo $userData['following_count']; ?></p></h4>
       <h4> Following</h4>
       </div>
       <div class="col-md-3" style="margin-left: 20px;">
        <h4><p style="margin-left: 16px;"><?php echo $userData['followers_count']; ?></p></h4>
        <h4>Followers</h4>
       </div>
</div>

  </div>
  <br><br>
   <div class="container-fluid">
  <div class="row">
    <div class="col-md-12" style="height: 375px;">
      <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Timeline</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Following</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Followers</a></li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content well well-sm" style="height: 335px;">
    <div role="tabpanel" class="tab-pane active" id="home">
      	
<a class="twitter-timeline" href="https://twitter.com/<?php echo $userData['username']; ?>" data-tweet-limit="2">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    
  </div>
</div>
</div><!--container fluid -->
</th>
</div>
    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>

</div>
    </div>
    <br>
     <div class="row">
        <div class="col-md-4 col-md-offset-8">
            <!--Tampilkan pagination-->
        </div>
    </div>
  
</div><!--id kanan-->
</div>
</div></div>
<?php }else{?>
<div class="container-fluid">
<div class="col-md-5 col-md-offset-4" style="margin-top: 250px;">
  <div class="row">
 <button type="btn btn-info"><a href=<?php echo $oauthURL;?>>KLIK DISINI UNTUK MELIHAT CONTEN :)</button></a>
</div>
</div>
</div>

<?php } ?>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url ();?>asset/js/bootstrap.min.js"></script>
    <script type="text/javascript">

    var save_method;
    var table;
    function add_user(){
      save_method='add';
      $('#form')[0].reset();
      $('#modal_form').modal('show');
    }
    function send_tweet(){
       save_method='send';
      $('#send')[0].reset();
      $('#send_modal').modal('show');
    }
   
    </script>

    <div aria-hidden="true"  role="dialog"  id="modal_form" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                  <center><h4 class="modal-title">Add user</h4></center>
              </div>
               <div class="modal-body form" >
              <form class="form-horizontal" action="#" id="form" method="post"  role="form">
                  <input type="hidden" value="" name="user_id"/> 
                        <div class="form-body"> 
                        <div class="form-group">
                            <label class="col-lg-3 col-sm-3 control-label">Screen Name</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="username" placeholder="@Screen Name">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-3 col-sm-3 control-label">Password</label>
                            <div class="col-lg-8">
                              <input type="password"  class="form-control" name="password" placeholder="Password"></textarea>
                          </div>
                          </div>
                        </div>
                    </form>


     <div aria-hidden="true"  role="dialog"  id="send_modal" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                  <center><h4 class="modal-title">Tweet</h4></center>
              </div>
               <div class="modal-body form">
              <form class="form-horizontal" action="#" id="send" method="">
                  <input type="hidden" value="" name="user_id"/> 
                        <div class="form-body"> 
                        <div class="form-group">
                            <label class="col-lg-3 col-sm-3 control-label">Tweet</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" name="masage"></textarea>
                            </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
 
    </form>

</body>
</html>