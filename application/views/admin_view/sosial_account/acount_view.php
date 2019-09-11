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

    #kiri { height:900px;  padding:10px; float:left; width:400px; margin-left: 70px;}
    #kanan { height:900px; padding:10px;float:right;width:875px; }
    #tengah { height:900px; padding:10px;background-color: #CCCCCC; width: 100px; }
  </style>
   

  
</head>
<body>

<br>
<div id="kiri">
<div class="container">
  <div class="row">
<div class="form-group">
 <div class="col-md-2">
        <button type="button" class="btn btn-info"><select class="form-control" name="category">
                <option  value="">---Select User---</option>                    
            <?php foreach($data->result() as $row) { ?>
                <option value="<?php echo $row->username;?>"><?php echo $row->username?></option>
            <?php } ?>
        </select></button>    
    </div>                
</div>    

<br><br>
 <?php foreach ($data->result() as $row ): ?>
  <div class="row">
    <div class="col-md-4 well well-sm">
<img src="<?php echo $row->picture_url;?>" style="float:left; height:85px; width:85px; margin-top: 4px;">
        <div class="col-md" style="margin-left: 100px;">
        <h2><?php echo $row->first_name;?><?php echo $row->last_name;?></h2>
      <h4>@<?php echo $row->username;?></h4>
        </div>
      </div>
    </div>
  

<?php endforeach?>
</div>
       <div class="row">
        <div class="col-md-2">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
</div>
</div>
<?php if(!empty($data)){?>
<div id="kanan">
 <br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3" >
        <img src="<?php echo base_url();?>asset/img/Black.jpg"" style="float:left; height:200px; width:200px; margin-top: 4px;">
      </div>
  <div class="col-md-4">
    <h1>Twiter</h1>
    <h2>@Screen name</h2>
    <br>
    <div class="col-md-2" style="margin-left: 10px;">
        <h4><p style="margin-left: 10px;">10</p></h4>
      <h4>tweets</h4>
       </div>
       <div class="col-md-3" style="margin-left: 20px;">
        <h4><p style="margin-left: 17px;">10</p><h4>
        <h4>Following<h4>
       </div>
       <div class="col-md-1" style="margin-left: 20px;">
        <h4><p style="margin-left: 16px;">10</p></h4>
        <h4>Followers</h4>
       </div>
</div>
    <div class="col-md-2">
      <div id="container" style="width: 300px; height: 300px;"></div>
      </div>
  </div>
  <div class="row">
  <br>
  <div class="col-md-12 well well-sm" style="height: 340px;">
      <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Timeline</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Following</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Followers</a></li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">...</div>
    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>

</div>
    </div>
<?php }?>
   <div class="row">
        <div class="col-md-4 col-md-offset-7 ">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
  </div><!--container fluid -->
</div><!--id kanan-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url ();?>asset/js/bootstrap.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>



<script type="text/javascript">
  

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },

    title: {
        text: 'Activity chart'
    },

    xAxis: {
        categories: ['2010', '2011', '2012', '2013', '2014']
    },

    yAxis: {
        allowDecimals: false,
        min: 0,
        
            
        
    },

    tooltip: {
        formatter: function () {
            return '<b>' + this.x + '</b><br/>' +
                this.series.name + ': ' + this.y + '<br/>' +
                'Total: ' + this.point.stackTotal;
        }
    },

    plotOptions: {
        column: {
            stacking: 'normal'
        }
    },

    series: [{
        name: 'like',
        data: [5, 3, 4, 7, 2],
        stack: 'male'
    }, {
        name: 'comment',
        data: [3, 4, 4, 2, 5],
        stack: 'male'
    }, {
        name: 'tweet',
        data: [2, 5, 6, 2, 1],
        stack: 'female'
    }, {
        name: 'retweet',
        data: [3, 0, 4, 4, 3],
        stack: 'female'
    }]
});
</script>

    
</body>
</html>