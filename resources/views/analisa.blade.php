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

for($i=0;$i<$k_count;$i++){
    $tkep = $tkep + $kep[$i];  //18
}
for($i=0;$i<$k;$i++){
    $bkep[$i] = ($kep[$i]/$tkep); //5/18
    $tbkep = $tbkep + $bkep[$i]; //0,2778 + dst
}
for($i=0;$i<$k;$i++){
    if($cb[$i]=="cost"){
        $pangkat[$i] = (-1) * $bkep[$i];
    }
    else{
        $pangkat[$i] = $bkep[$i];
    }
}
for($i=0;$i<$a;$i++){
    for($j=0;$j<$k;$j++){
        $s[$i][$j] = pow(($alt[$i][$j]),$pangkat[$j]);
    }
$ss[$i] = $s[$i][0]*$s[$i][1]*$s[$i][2]*$s[$i][3]*$s[$i][4];
}

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