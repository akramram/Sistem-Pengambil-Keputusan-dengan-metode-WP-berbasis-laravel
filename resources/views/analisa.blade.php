@extends('layouts.master')

@section('navbar')

@section('content')

		 <!-- Main component for a primary marketing message or call to action -->
         <div class="panel panel-primary">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Analisa</div>
		  <div class="panel-body">
			<div>
				<canvas id="canvas"></canvas>
			</div>
			<br />
			<center>
			<?php
				
			?>
			</center>
		  </div>
		</div>


@stop
<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : [
			<?php 
				for($i=0;$i<$a;$i++){
					echo '"'.$alt_name[$i].'",';
				}
			?>
		],
		datasets : [
			{
				fillColor : "rgba(0,0,255,0.75)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(0,128,255,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [
					<?php 
						for($i=0;$i<$a;$i++){
							echo $v[$i].',';
						}
					?>
				]
			},
			/*{
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			}*/
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}

</script>