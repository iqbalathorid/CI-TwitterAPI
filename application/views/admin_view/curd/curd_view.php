<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>User Management</title>

  <!-- Bootstrap -->
    <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets3/css/dataTables.bootstrap.css" rel="stylesheet">
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <!-- /.modal -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  </head>
  <body>

 
<div class="panel-body">
  <div class="container">
    <br><br>
    <button type="button" onclick="add_user()" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="add your user" ">AddUser<i class="glyphicon glyphicon-plus"></i></button>
    <br>
    <br>

    <table id="table_id" class="table table-stripped table-bordered">

    	<thead>
    		<tr>

         
    		 <th>Name</th>
    		 <th>Username</th>
    		 <th>Email</th>
    		 <th>Level</th>
    		 <th>Action</th>
    	</tr>
</thead>

<tbody>
  <?php foreach ($users as $key) {?>
         
         <tr>

          
        
          <td><?php echo $key->name;?></td>
          <td><?php echo $key->username;?></td>
          <td><?php echo $key->email;?></td>
          <td><?php echo $key->level;?></td>

        <td>
			   <button class="btn btn-info">Viewlog<span class="glyphicon glyphicon-user" aria-hidden="true"></span></button>     
		     <button class="btn btn-warning" onclick="edit_user(<?php echo $key->user_id;?> )">Ubah<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
         <button class="btn btn-danger" onclick="user_delete(<?php echo $key->user_id;?>)">Hapus <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>

		</td>



	</tr>

  <?php } ?>

</tbody>
</table>
</div>
</div>
<script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url();?>assets3/js/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url();?>assets3/js/dataTables.bootstrap.js"></script>
  <!-- Modal Tambah -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('#table_id').dataTable();
    });
    var save_method;
    var table;
    function add_user(){
      save_method='add';
      $('#form')[0].reset();
      $('#modal_form').modal('show');
    }
   

    function save(){
      var url;
      if (save_method=='add')
      {
        url="<?php echo site_url('Curd/add')?>";
      }
      else
      {
        url="<?php echo site_url('Curd/user_add')?>";
      }
      $.ajax({
      url:url,
      type:"POST",
      data:$('#form').serialize(),
      dataType:"JSON",
      success:function(data)
      {
        $('$modal_form').modal('hide');
        location.reload();

      },
      error:function(jqXHR,textStatus,errorThrown)
      {
        alert('eroor adding/update data');
      }
    });
    }
    function user_delete(id)
    {
     if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('Curd/user_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
      }
    }

    function edit_user(id)
    {
      save_method = 'update';
      $('#form_edit')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('Curd/user_update')?>/"+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
 
            $('[name="username"]').val(data.username);
            $('[name="password"]').val(data.password);
            $('[name="email"]').val(data.email);
            $('[name="name"]').val(data.name);
            $('[name="level"]').val(data.level);
 
 
            $('#modal_edit').modal('show'); // show bootstrap modal when complete loaded
            
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
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
                            <label class="col-lg-2 col-sm-2 control-label">Username</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Password</label>
                            <div class="col-lg-10">
                              <input type="password"  class="form-control" name="password" placeholder="Password"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group" from>
                            <label class="col-lg-2 col-sm-2 control-label">Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label" >Level:</label>
                          <div class="col-lg-10">
                           <select class="form-control" id="level" name="level">

                           <option name="admin">admin</option>
                           <option name="user">user</option>
                           </select>
                           </div>
                        </div>
                    </div><!--modal-body!-->
                    <div class="modal-footer">
                        <button class="btn btn-primary" id="btnSave" onclick="save()" type="submit"> Simpan</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- END Modal edit -->
  

   <div aria-hidden="true"  role="dialog"  id="modal_edit" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                  <h4 class="modal-title">Add user</h4>
              </div>
               <div class="modal-body form" >
              <form class="form-horizontal" action="#" id="form_edit" method="post"  role="form">
                  <input type="hidden" value="" name="user_id"/> 
                        <div class="form-body"> 
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">username</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label" >Level:</label>
                          <div class="col-lg-10">
                           <select class="form-control" id="level" name="level">

                           <option name="admin">admin</option>
                           <option name="user">user</option>
                           </select>
                           </div>
                        </div>
                         <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Old Password</label>
                            <div class="col-lg-10">
                              <input type="password"  class="form-control" name="password" placeholder="Password"></textarea>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">New Password</label>
                            <div class="col-lg-10">
                              <input type="password"  class="form-control" name="new_password" placeholder="New password"></textarea>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Retype Password</label>
                            <div class="col-lg-10">
                              <input type="password"  class="form-control" name="R_password" placeholder="Retype Password"></textarea>
                            </div>
                        </div>
                    </div><!--modal-body!-->
                    <div class="modal-footer">
                        <button class="btn btn-primary" id="btnSave" onclick="save()" type="submit"> Simpan</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- END Modal Tambah -->
   
</body>
</html>