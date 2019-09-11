<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dasboard</title>
	 <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
	 <style type="text/css">

	 #user {

	 	position: absolute;

	  right: 850px;
	  top: 200px;
	 }	
#account {

position: absolute;
right: 400px;
top: 200px;
}

</style>
</head>
<body>

    

<div class="container" style="margin-right: 50px; margin-top: 50px;">
	<div class="row">
		<div class="col-md-5" style="border: 1px black solid;">
			<center><h1>10</h1>
			<h1>User</h1></center>
		</div>
		
		<div class="col-md-5" style="border: 1px black solid; margin-left: 100px;">
			<center><h1>30</h1>
			<h1>Sosial Account</h1></center>
		</div>
		</div>
		<div class="row">
			<div class="col-md-2">
      <div id="container" style="width: 400px; height: 400px;"></div>
      </div>
      <div class="col-md-2 col-md-offset-4" >
      	<div id="contener" style="width: 400px; height: 400px;"></div>
      </div>
  </div>
	</div>



	   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('asset/js/jquery.min.js')?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('asset/js/bootstrap.min.js')?>"></script>
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
    	Highcharts.chart('contener', {
    chart: {
        type: 'column'
    },

    title: {
        text: 'Sosial Account Activity chart'
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