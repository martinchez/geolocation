<!DOCTYPE html>

<html>
<head>
	<title>Display on map</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/googlemap.js"></script>
	<style type="text/css">
		.container {
			height: 300px;
		}
		#map {
			width: 100%;
			height: 100%;
		}
		#data, #allData {
			display: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<center><h1>Displayed</h1></center>
		<?php 
			require 'education.php';
			$edu = new education;
			$coll = $edu->getCollegesBlankLatLng();
			$coll = json_encode($coll, true);
			echo '<div id="data">' . $coll . '</div>';

			$allData = $edu->getAllColleges();
			$allData = json_encode($allData, true);
			echo '<div id="allData">' . $allData . '</div>';			
		 ?>
		<div id="map"></div>
	</div>
</body>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxP062m6gN4KTzzK2QW6PGwP5ACjJJxw4&callback=loadMap">
</script>
</html>