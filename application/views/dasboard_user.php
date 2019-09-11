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

    #kiri { height:900px;  padding:10px; float:left; width:500px; margin-left: 70px;}
    #kanan { height:900px; padding:10px;float:right;width:500px; }
    #tengah { height:900px; padding:10px;background-color: #CCCCCC; width: 100px; }
  </style>
   

  
</head>
<body>
  <div id="kiri" style="margin-right: -10px;">
    <div class="container-fluid">
      <div class="row">
        <h1>Sosial Media Activity</h1>
        <div class="col-md-5">
          <div id="container" style="width: 500px; height: 500px;"></div>

        </div>
      </div>
      <div class="row">
        <h1>Sosial Media Account</h1>
        <div class="col-md-3">
           <img src="<?php echo base_url();?>asset/img/Black.jpg"" style="height:50px; width:50px; margin-top: 4px;">
    </div>
  </div>
</div>
</div>
<div id="kanan">
  <h1>Sosial Media Time Line</h1>
  <div class="container-fluid well" style="height: 750px;" >
    <div class="row">
      <a class="twitter-timeline" href="https://twitter.com/iqbalathorid17" data-tweet-limit="4">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>
  </div>
</div>

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
        text: 'User Activity chart'
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
