<!DOCTYPE html>
<html>
<head>
  <title></title>

<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
  
#tab_position {

position: absolute;

top: 500px;
left: 500px;
bottom: 100px;

}

#pagination_position {

position: absolute;
right:150px;
bottom: -225px;

}
#buttox {
position: absolute;

top: 150px;
right: 100px;

}

#tweet {

  margin-left: 30px;
}

</style>
</head>

<body>
  <!--button Tweet-->
  
  <div id="tab_position">

   <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" id="tab">
    <li role="presentation" class="active"><a href="#timelane" aria-controls="home" role="tab" data-toggle="tab">Timeline</a></li>
    <li role="presentation"><a href="#followers" id="as" aria-controls="profile" role="tab" data-toggle="tab">Followers</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Following</a></li>
    

  <!-- Tab panes -->
 <div class="thumbnail">
   
  <div class="tab-content" id="tab">
    <div role="tabpanel" class="tab-pane active" id="timelane">asdasdasdasdasdasdasdasdasdasdasdasdasdaadsasdasdasdasdasdasdasdasdasdasdas<br>dasdasd</div>
    <div role="tabpanel" class="tab-pane" id="followers">sadas</div>
    <div role="tabpanel" class="tab-pane" id="messages">asdasdasdasdasdasdasdasd</div>
    
  </div>
</div><!--col-->
<!--thubnail-->
</div><!--tab position-->
</div>
<div id="pagination_position">
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
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>assetss/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assetss/jsk/bootstrap.min.js"></script>

<script type="text/javascript">
  
$('#tab').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});

$('#tab ["#timeline"]').tab('show'); // Select tab by name

var save_method;
  var table;


  function Tweet(){

    save_method ='add';
    $('#porm')[0].reset();
    $('#modall_form').modal('show');


  }




</script>


</body>
</html>