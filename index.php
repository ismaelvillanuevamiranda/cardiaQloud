<!DOCTYPE HTML>
<html>
	<head>
		<title>Story by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="assets/css/ecg.css" rel="stylesheet" type="text/css">


		<!-- Scripts -->
			<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


				<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/rickshaw/1.6.3/rickshaw.min.css'>
				<link rel="stylesheet" href="css/style.css">



					<!-- Styles -->
					<style>
					#chartdiv {
						width	: 100%;
						height	: 400px;
					}
					#RRduration {
						width	: 100%;
						height	: 400px;
					}															
					</style>

					<!-- Resources -->
					<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
					<script src="https://www.amcharts.com/lib/3/gauge.js"></script>
					<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
					<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
					<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>


						<!-- Chart code -->
						<script>
						var gaugeChart = AmCharts.makeChart( "chartdiv", {
						  "type": "gauge",
						  "theme": "light",
						  "fontSize":  20,
						  "axes": [ {
						    "axisThickness": 1,
						    "axisAlpha": 0.2,
						    "tickAlpha": 0.2,
						    "valueInterval": 10,
						    "bands": [ {
						      "color": "#fd8f00",
						      "endValue": 30,
						      "innerRadius": "65%",
						      "startValue": 0
						    }, {
						      "color": "#fdd400",
						      "endValue": 60,
						      "innerRadius": "65%",
						      "startValue": 30
						    }, {
						      "color": "#84b761",
						      "endValue": 100,
						      "innerRadius": "65%",
						      "startValue": 60
						    }, {
						      "color": "#cc4748",
						      "endValue": 130,
						      "innerRadius": "65%",
						      "startValue": 100
						    }, {
						      "color": "#ff1c1d",
						      "endValue": 160,
						      "innerRadius": "65%",
						      "startValue": 130
						    } ],
						    "bottomText": "0 BPM",
						    "bottomTextYOffset": -20,
						    "endValue": 160
						  } ],
						  "arrows": [ {} ],
						  "export": {
						    "enabled": true
						  }
						} );

						var RRduration = AmCharts.makeChart( "RRduration", {
						  "type": "gauge",
						  "theme": "light",
						  "fontSize":  20,
						  "axes": [ {
						    "axisThickness": 1,
						    "axisAlpha": 0.2,
						    "tickAlpha": 0.2,
						    "valueInterval": 300,
						    "bands": [ {
						      "color": "#ff1c1d",
						      "endValue": 600,
						      "innerRadius": "65%",
						      "startValue": 0
						    }, {
						      "color": "#84b761",
						      "endValue": 1200,
						      "innerRadius": "65%",
						      "startValue": 600
						    }, {
						      "color": "#ff1c1d",
						      "endValue": 2500,
						      "innerRadius": "65%",
						      "startValue": 1200
						    }],
						    "bottomText": "0 ms",
						    "bottomTextYOffset": -20,
						    "endValue": 2500,
						    "startValue": 0
						  } ],
						  "arrows": [ {} ],
						  "export": {
						    "enabled": true
						  }
						} );
						</script>



	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper" class="divided">
				<!-- Five -->
					<section class="wrapper style1 align-center">
						    <center>
							  	<div id="chart_container">
							  		<div id="y_axis"></div>
							  		<div id="demo_chart"></div>
								</div>						    
						    </center>
					</section>

				<!-- Six -->
					<!-- <section class="wrapper style1 align-center"> -->
						<div class="inner">
							<div class="items style1 medium onscroll-fade-in">
								<section>
									<center>
									<h3><b>R-R Interval</b></h3>
									</center>
										<div id="RRduration"></div>
								</section>
								<section>
									<center>
									<h3><b>Heart rate</b></h3>
									</center>								
										<div id="chartdiv"></div>
								</section>
								<section>
									<center>
									<p><img src="logo.png"></p>
									<b>Team Members:</b>
									<p>	<br>
										Ismael Villanueva-Miranda<br>
									</p>
									</center>	
								</section>
							</div>
						</div>
					<!-- </section> -->
			</div>

				
				<script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.2.0/d3.js'></script>
				<script src='https://cdnjs.cloudflare.com/ajax/libs/rickshaw/1.6.5/rickshaw.js'></script>
				<script  src="js/index.js"></script>			
	</body>
</html>