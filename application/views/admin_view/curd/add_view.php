<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <center> <h4 class="modal-title">ADD USER</h4></center>
      </div>

      <div class="modal-body form">
        <form action="<?php echo base_url();?>Curd/action_add" id="form" class="form-horizontal" method="post">
          <input type="hidden" name="user_id">

          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Username</label>
              <div class="col-md-9">
                <input type="text" name="username" placeholder="Username" class="form-control">

              </div>
            </div>
          </div>


          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">password</label>
              <div class="col-md-9">
                <input type="password" name="password" placeholder="Password" class="form-control">

              </div>
            </div>
          </div>


          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Email</label>
              <div class="col-md-9">
                <input type="Email" name="email" placeholder="Email" class="form-control">

              </div>
            </div>
          </div>


          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Name</label>
              <div class="col-md-9">
                <input type="text" name="name" placeholder="Name" class="form-control">

              </div>
            </div>
          </div>

          <div class="form-body">
          <div class="form-group">
              <label class="control-label col-md-3" ">Level:</label>
              <div class="col-md-9">
             <select class="form-control" name="level">


             <option value="admin">admin</option>
             <option value="user">user</option>
             </select>
             </div>
           </div>
         </div>

        
      </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" value="save" name="action_add" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>
</html>