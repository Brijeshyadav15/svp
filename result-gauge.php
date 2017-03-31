<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon-q-ac1a76f2c200e9026b5b1147519bb4fab6256910588b831e2411bc6c7c1218c3.png" />
		<title>RESULT SVP</title>
	<link rel="stylesheet" media="all" href="../css/main.css" />
	<link rel="stylesheet" href="../css/font-awesome.css">
	<link rel="stylesheet" media="all" href="../css/app.css" />
	<link href="../css/lib.css" rel="stylesheet">
	<link href="../css/plugins.css" rel="stylesheet">
	<link href="../css/elements.css" rel="stylesheet">	
	<link href="../css/rtl.css" rel="stylesheet">	
	<link rel="stylesheet" type="text/css" href="../style.css">
	  <link rel="stylesheet" href="css/style.css"/>
  <link href='css/Montserat.css' rel='stylesheet' type='text/css'>
  <link href="css/bootstrap.min.css" rel="stylesheet" >

	<script src="../js/main.js"></script>
	<link href='../images/logo-q-180x180-0f5a6a439c99203ed4aea6f656e7604c543d287be43d8b17c7591c1131f09a59.png' rel='apple-touch-icon'>
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<input type="hidden" name="env" id="quanto-env"/>
</head>
<body  onload="initialize()">
	<div class='wrapper' id='main-home'>
		<div class='navbar navbar-default navbar-red navbar-static-top' id='app-navbar' style=" background-color:transparent;">
			<div class='container-fluid'>
				<div class='navbar-header'>
					<button class='navbar-toggle collapsed' data-target='#app-navbar-collapse' data-toggle='collapse'>
						<span class='icon hamburger-menu'></span>
					</button>
						<a class='navbar-brand' href='index.php'>
							<div class='logo-image'></div>
						</a>
				</div>
					
					<div class='collapse navbar-collapse' id='app-navbar-collapse'>
						<ul class='nav navbar-nav navbar-right'>
						
							<li class='no-border'>
								<a class='header' href='../'>Home</a>
							</li>
							
							<li>
								<a class='header' href='about/'>About us</a>
							</li>
							
							<li>
								<a class='header' href='../contact/'>Contact Us</a>
							</li>
						</ul>
					</div>
			</div>
	</div>
</div>

	<div class='tile-pane row tile-row' style="margin:5%;background-color: white;">
		<div class="row">
        <div class="col-md-12 pull-left">
             <h2>
             <label>
             	<?php
             	$company=$_POST['search'];
             	// $conn=new mysqli("localhost","root","","svp");

             	// $sql=mysqli_query($conn,"Select * from tickers where company_name='$company'");
             	// $result=mysqli_fetch_array($sql);
             	// echo $company['company_name']."<br>".$company['ticker'];

             	echo $company."<br>"."ticker";

             	?>
             </label>
             </h2>
              <div class="col-md-4" id="chart-container">
              </div>
              <div class="col-md-2">
              </div>

              <div class="col-md-5" id="chart" style="left:10%;left:10%;">
                    <center>
                 	 	<label style="margin-top:-30%;">
                 	 	<?php
                 	 	$accuracy= -1;//$array['accuracy'];
                 	 		if ($accuracy<0) 
                 	 		{
                 	 			echo "SELL";
                 	 		}
                 	 		else
                 	 		{
                 	 			echo "BUY";	
                 	 		}
                 	 	?>
						</label>
                    </center>
                    <span id="fuelGaugeContainer"></span>
                          
                          
              </div>
                
            
			<div class="col-md-1">
              </div>              
                  
          
        </div>
    </div>
</body>
</html>
<script src="../js/jquery-3.2.1.js"></script>
<script src="../js/fusioncharts.js"></script>
<script src="../js/fusioncharts.charts.js"></script>
<script src="../js/fusioncharts.theme.fint.js"></script>
<script src="../js/jquery.min-d3.js"></script>
<script src="../js/d3.min.js"></script>

<style type="text/css"> 
      .navbar
      {
        background-color: transparent;
        border: none;
      }
      .navbar-brand
      {
        font-size: 56px;
      }
</style>

<script type="text/javascript">
    FusionCharts.ready(function () {
    var visitChart = new FusionCharts({
        type: 'line',
        renderAt: 'chart-container',
        width: '500',
        height: '300',
        dataFormat: 'json',
        dataSource: {
            "chart": {
                "caption": "Previous Data",
                "subCaption": "Last week",
                "xAxisName": "Day",
                "yAxisName": "Share Prices",
                "anchorRadius": "5",
                "showValues": "0",
                //Vertical grid connfiguration
                "numVDivLines": "5",
                "showAlternateVGridColor": "1",
                //Theme
                "theme" : "fint"
            },
            
            "data": [
                {
                    "label": "Mon",
                    "value": "5123"
                }, 
                {
                    "label": "Tue",
                    "value": "4233"
                }, 
                {
                    "label": "Wed",
                    "value": "5507"
                }, {
                    "label": "Thu",
                    "value": "4110"
                }, 
                {
                    "label": "Fri",
                    "value": "5529"
                }, 
                {
                    "label": "Sat",
                    "value": "5803"
                }, 
                {
                    "label": "Sun",
                    "value": "6202"
                }
            ]
        }
    });
    
    visitChart.render();
});
</script>
</div>

	<div class='footer' style="padding-top:2%;padding-bottom:2%;">
		<div class='container'>
			<div class='row'>

				<div class='col-sm-fourth span3'>
				</div>

				<div class='col-sm-fourth span3'>
					<div class='header'>Company</div>
						<div class='footer-row'>
							<a href='#'>HOME</a>
						</div>
					
						<div class='footer-row'>
							<a href='#'>About</a>
						</div>
						
						<div class='footer-row'>
							<a href='#'>Contact Us</a>
						</div>
				</div>


				<div class='col-sm-fourth span3'>
					<div class='header'>Reach Us at:</div>
						
						<div class='footer-row'>
							<a>SVP</a>
						</div>
					
						<div class='footer-row'>
							<a>LJIET, Ahmedabad</a>
						</div>
						
						<div class='footer-row'>
							<a>123-456-7890</a>
						</div>
				</div>

				<div class='col-sm-fourth span3'>
					<div class='header'>Follow Us
					</div>
				
						<div class='footer-row'>
							<a>Twitter</a>
						</div>
				
						<div class='footer-row'>
							<a>Facebook</a>
						</div>
				
						<div class='footer-row'>
							<a>LinkedIn</a>
						</div>
				</div>
		</div>
	</div>

<div class='row' style="margin-left:2%;">
	<center><h4 style="color:white;">Copyright: SVP @ 2017</h4></center>
</div>
</body>
</html>

<style type="text/css">
body
{
	overflow-x: hidden;
}
h1 
{
  text-transform: uppercase;
  font-weight: 700;
  letter-spacing: 0.015em;
}

.btn-primary 
{
  display: inline-block;
  background-color: blue;
  padding: 15px 30px;
  border: 2px solid #fff;
  text-transform: uppercase;
  letter-spacing: 0.015em;
  font-size: 18px;
  font-weight: 700;
  line-height: 1;
  color: #fff;
  text-decoration: none;
  -webkit-transition: all 0.4s;
     -moz-transition: all 0.4s;
       -o-transition: all 0.4s;
          transition: all 0.4s;
}
</style>

<script type="text/javascript">
	var gauges = [];


function initialize()
			{
				createGauge("fuel", <?php 
									$minus="20";
									echo $minus; 
									?>,		
											<?php 
											$plus=100-$minus;
											echo $plus; 
											?>); 
          		setInterval(updateGauges, 5000);
			}
			
function createGauge(name, label, level, min, max)
{
	var config ={
					size: 150,
					label: label,
					min: undefined != min ? min : 0,
					max: undefined != max ? max : 100,
            		level: level, 
					minorTicks: 5
				}
	var range = config.max - config.min;
    	      	config.greenZones = [{ from: config.min, to: config.level }];
        	   	config.redZones = [{ from: config.min, to: config.max }];
				gauges[name] = new Gauge(name + "GaugeContainer", config);
				gauges[name].render();
		for (var key in gauges)
		{
            gauges[key].redraw(config.level);
         }
}

function Gauge(placeholderName, configuration)
{
	this.placeholderName = placeholderName;
	
	var self = this; // for internal d3 functions
	
	this.configure = function(configuration)
	{
		this.config = configuration;
		this.config.size = this.config.size * 3;
		this.config.raduis = this.config.size * 0.97 / 2;
		this.config.cx = this.config.size / 2;
		this.config.cy = this.config.size / 2;
		this.config.I = 0;
		this.config.min = undefined != configuration.min ? configuration.min : 0; 
		this.config.max = undefined != configuration.max ? configuration.max : 100; 
		this.config.range = this.config.max - this.config.min;
		this.config.majorTicks = configuration.majorTicks || 9;
		this.config.minorTicks = configuration.minorTicks || 2;
		this.config.greenColor = configuration.greenColor || "#109618";
		this.config.redColor 	= configuration.redColor || "red";
    	this.config.transitionDuration = configuration.transitionDuration || 500;
	}
 
	this.render = function()
	{
		this.body = d3.select("#" + this.placeholderName)
							.append("svg:svg")
							.attr("class", "gauge")
							.attr("width", this.config.size)
							.attr("height", this.config.size);
   
     	for (var index in this.config.redZones)
		{
			this.drawRestBand(this.config.redZones[index].from, this.config.redZones[index].to, self.config.redColor);
		}
		for (var index in this.config.greenZones)
		{
			this.drawBand(this.config.greenZones[index].from, this.config.greenZones[index].to, self.config.greenColor);
		}
    	if (undefined != this.config.label)
		{
			var fontSize = Math.round(this.config.size / 9);
			this.body.append("svg:text")
						.attr("x", this.config.cx)
						.attr("y", this.config.cy / 2 + fontSize / 2)
						.attr("dy", fontSize / 2)
						.attr("text-anchor", "middle")
						.text(this.config.label)
						.style("font-size", fontSize + "px")
						.style("fill", "#333")
						.style("stroke-width", "0px");
		}
		var fontSize = Math.round(this.config.size / 16);
		var majorDelta = this.config.range / (this.config.majorTicks - 1);
		for (var major = this.config.min; major <= this.config.max; major += majorDelta)
		{
			var minorDelta = majorDelta / this.config.minorTicks;
			for (var minor = major + minorDelta; minor < Math.min(major + majorDelta, this.config.max); minor += minorDelta)
			{
				var point1 = this.valueToPoint(minor, 0.75);
				var point2 = this.valueToPoint(minor, 0.85);
				
				this.body.append("svg:line")
							.attr("x1", point1.x)
							.attr("y1", point1.y)
							.attr("x2", point2.x)
							.attr("y2", point2.y)
							.style("stroke", "#666")
							.style("stroke-width", "0px");
			}
			
			var point1 = this.valueToPoint(major, 0.6);
			var point2 = this.valueToPoint(major, 0.9);	
			
			//Delete the  #FFF to remove white lines from inbetween gauge and adjust stroke-width accordingly
			this.body.append("svg:line")
						.attr("x1", point1.x)
						.attr("y1", point1.y)
						.attr("x2", point2.x)
						.attr("y2", point2.y)
						.style("stroke", "#fff")
						.style("stroke-width", "6px");
			
			if ( major == this.config.max)
			{
				var point = this.valueToPoint(major, 0.82);
				this.body.append("svg:text")
				 			.attr("x", point.x - 4)
				 			.attr("y", point.y + 12)
				 			.attr("dy", fontSize / 3)
				 			.attr("text-anchor", major == this.config.min ? "start" : "end")
				 			.text("")
				 			.style("font-size", (fontSize + 5 ) + "px")
							.style("fill", "#333")
							.style("stroke-width", "0px")
                 .style("font-weight", "bold");
			}
      if (major == this.config.min )
			{
				var point = this.valueToPoint(major, 0.82);
				this.body.append("svg:text")
							.attr("x", point.x + 2)
				 			.attr("y", point.y + 12)
				 			.attr("dy", fontSize / 3)
				 			.attr("text-anchor", major == this.config.min ? "start" : "end")
				 			.text("")
				 			.style("font-size", (fontSize + 5 ) + "px")
							.style("fill", "#333")
							.style("stroke-width", "0px")
                .style("font-weight", "bold");
			}
}
		var pointerContainer = this.body.append("svg:g").attr("class", "pointerContainer");
		var midValue = (this.config.min + this.config.max) / 2;
		var pointerPath = this.buildPointerPath(midValue);
		var pointerLine = d3.svg.line()
									.x(function(d) { return d.x })
									.y(function(d) { return d.y })
									.interpolate("basis");
		pointerContainer.selectAll("path")
							.data([pointerPath])
							.enter()
							.append("svg:path")
							.attr("d", pointerLine)
							.style("fill", "#000000")
							.style("stroke", "#000000")
							.style("fill-opacity", 1)

		pointerContainer.append("svg:circle")
							.attr("cx", this.config.cx)
							.attr("cy", this.config.cy)
							.attr("r", 0.06 * this.config.raduis)
							.style("fill", "#000000")
							.style("stroke", "#000000")
							.style("opacity", 1);

		var fontSize = Math.round(this.config.size / 10);
		pointerContainer.selectAll("text")
							.data([midValue])
							.enter()
							.append("svg:text")
							.attr("x", this.config.cx)
							.attr("y", this.config.size - this.config.cy / 1.6 - fontSize)
							.attr("dy", fontSize / 2)
							.attr("text-anchor", "middle")
							.style("font-size", fontSize + "px")
							.style("fill", "#000")
							.style("stroke-width", "0px");
	this.redraw(this.config.min, 0);
}
	this.buildPointerPath = function(value)
	{
		var delta = this.config.range / 13;
		var head = valueToPoint(value, 0.6);
		var head1 = valueToPoint(value - delta, 0.12);
		var head2 = valueToPoint(value + delta, 0.12);
		var tailValue = value - (this.config.range * (1/(180/360)) / 2);
		var tail = valueToPoint(tailValue, -.1);
		var tail1 = valueToPoint(tailValue - delta, 0.12);
		var tail2 = valueToPoint(tailValue + delta, 0.12);
		return [head, head1, tail2, tail, tail1, head2, head];
		function valueToPoint(value, factor)
		{
			var point = self.valueToPoint(value, factor);
			point.x -= self.config.cx;
			point.y -= self.config.cy;
			return point;
		}
	}
	
	this.drawBand = function(start, end, color)
	{
		if (0 >= end - start) return;     
		var bands = this.body.append("svg:path").attr("class", 'bands');
    	var theend = this.valueToRadians(end);
     	var arc = d3.svg.arc()
						.innerRadius(0.65 * this.config.raduis)
						.outerRadius(0.85 * this.config.raduis)
              .startAngle(0);

     	var bandsdraw = this.body.select(".bands").attr("transform", function() { return "translate(" + self.config.cx + ", " + self.config.cy + ") rotate(270)" });

     if ( self.config.I === 0)
     {
     	var arcs = bandsdraw
				.datum({endAngle: 0 })
        	    .style("fill", color)
            	.attr("d",arc); 
     }
     else
     {
     	var arcs = bandsdraw
					.datum({endAngle: this.valueToRadians(self.config.I) })
            .style("fill", color)
            .attr("d",arc);
     }
     
     arcs.transition().duration(500).call(arcTween, end);
     
    function arcTween(transition, newAngle) 
    {
        transition.attrTween("d", function(d) {
            var theAngle = (newAngle / 100 * 180 - (0 / 100 * 180 )) * Math.PI / 180;
            var interpolate = d3.interpolate(d.endAngle, theAngle);
            return function(t) {
                d.endAngle = interpolate(t);
                self.config.I = newAngle;
                return arc(d);
            };
          });
      }
	}
   
   this.drawRestBand = function(start, end, color)
	{
		if (0 >= end - start) return;     
		var bands = this.body.append("svg:path").attr("class", 'backbands');
    	var theend = this.valueToRadians(end);
     	var bandsdrawn = this.body.select(".backbands").attr("transform", function() { return "translate(" + self.config.cx + ", " + self.config.cy + ") rotate(270)" });
     	var arcEnd = d3.svg.arc()
						.innerRadius(0.65 * this.config.raduis)
						.outerRadius(0.85 * this.config.raduis)
              .startAngle(this.valueToRadians(start))
               .endAngle(this.valueToRadians(end));
     var arcss = bandsdrawn
            .style("fill", color)
            .attr("d",arcEnd);         
	}

	this.redraw = function(value, transitionDuration)
	{
		var pointerContainer = this.body.select(".pointerContainer");
		
		pointerContainer.selectAll("text").text(Math.round(value) + '%');
		
		var pointer = pointerContainer.selectAll("path");
		pointer.transition()
					.duration(undefined != transitionDuration ? transitionDuration : this.config.transitionDuration)
					.attrTween("transform", function()
					{
						var pointerValue = value;
						if (value > self.config.max) pointerValue = self.config.max + 0.02*self.config.range;
						else if (value < self.config.min) pointerValue = self.config.min - 0.02*self.config.range;
						var targetRotation = (self.valueToDegrees(pointerValue) - 90);
						var currentRotation = self._currentRotation || targetRotation;
						self._currentRotation = targetRotation;
						
						return function(step) 
						{
							var rotation = currentRotation + (targetRotation-currentRotation)*step;
							return "translate(" + self.config.cx + ", " + self.config.cy + ") rotate(" + rotation + ")"; 
						}
					});  
     
	}
	this.valueToDegrees = function(value)
	{
		return value / this.config.range * 180 - (this.config.min / this.config.range * 180 );
	}
	
	this.valueToRadians = function(value)
	{
		return this.valueToDegrees(value) * Math.PI / 180;
	}
	
	this.valueToPoint = function(value, factor)
	{
		return { 	x: this.config.cx - this.config.raduis * factor * Math.cos(this.valueToRadians(value)),
					y: this.config.cy - this.config.raduis * factor * Math.sin(this.valueToRadians(value)) 		};
	}
	this.configure(configuration);	
}
</script>