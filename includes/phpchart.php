<?php


require_once('includes/config.php');
$data = "SELECT * FROM shopping1.data order by end_year desc";

$result = mysqli_query($con, $data);

while ($row = mysqli_fetch_assoc($result)) {
	$end_year[] = $row['end_year'];
	$intensity[] = $row['intensity'];

	;
}



/* The following 4 code lines contain the database connection information. Alternatively, you can move these code lines to a separate file and include the file here. You can also modify this code based on your database connection. */


?>





<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Graph</title>
	<style id="compiled-css" type="text/css">
		.chartWrapper {
			/* w w w. j a v  a2 s.co  m*/
			/* position: relative; */
		}

		.chartWrapper>chartjs_bar {
			position: absolute;
			left: 0;
			top: 0;
			pointer-events: none;
		}

		.chartAreaWrapper {
			width: 600px;
			overflow-x: scroll;
		}
	</style>

</head>

<body>
	<div style="width:100%;hieght:100%;text-align:center">
		<h2 class="page-header">Analytics Reports </h2>
		<div>Product </div>
		<canvas id="chartjs_bar"></canvas>
		<!-- <div class="chartWrapper"> 
		 <div class="chartAreaWrapper"> 
			<canvas id="chartjs_bar" height="300" width="1200"></canvas> 
		 </div> 
		 <canvas id="myChartAxis" height="300" width="0"></canvas>  -->
	</div>

	<!-- <div>
				<input type="date" onchange="startYear(this)" value="2010" min="2010" max="2016">
				<input type="date" onchange="startYear(this)" value="2016" min="2010" max="2016">
			</div> -->
	</div>

</body>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
	var ctx = document.getElementById("chartjs_bar").getContext('2d');


	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: <?php echo json_encode($end_year); ?>,
			datasets: [{
				label: 'Bar Chart',
				data: <?php echo json_encode($intensity); ?>,
				backgroundColor: 'rgba(171, 39, 60)',
				borderWidth: 1
			}]
		},


		
		// options: {
		// 	legend: {
		// 		display: true,
		// 		position: 'bottom',
		// 		fontColor: 'red',

		// 		labels: {
		// 			fontColor: 'red',
		// 			fontFamily: 'Circular Std Book',
		// 			fontSize: 14,
		// 		}

		// 	},


		// }
	});
</script>

</html>