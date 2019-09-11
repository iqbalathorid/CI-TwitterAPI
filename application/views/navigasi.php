<style type="text/css">
  
  *{margin:0px auto;}
#container{
    position:relative;
}
 
#header{
    background:#0cf;
    padding:10px;
}
#content{
    padding:10px;
}
#footer{
    height:50px;
    line-height:50px;
    background:#333;
    color:#fff;
}
</style>
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
        <li><a href="<?php echo base_url();?>Auth/dasboard"",$data>Dasboard</a></li>
        <li><a href="<?php echo base_url();?>user_authentication/index" name="sosial">Sosial Account</a></li>
         
     </ul>
   
       <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">user
            <span class="caret"></span></a>
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

<div id="footer">
        Copyright &copy; 2014
        Designed by ..............
    </div>
</div>