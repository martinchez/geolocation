<?php 

$conn=mysqli_connect("localhost","root" ,"","map");


if (isset($_POST["upload"])) {
  mysqli_query($conn,"INSERT INTO codinates(adress,lng, lat) VALUES ('$_POST[content]','$_POST[longitudes]','$_POST[latitudes]') ");
  
}

 ?>

<!DOCTYPE html>
<html>
<body>


<button  onclick="getLocation()">co-oordinaes</button>

<form action="" method = "POST">
<input name="content" >
<input name="longitudes" id="longi">
<input name="latitudes" id="latii">
<button name="upload">Submit Query</button>
</form>
<a href="index.php">maps</a>

<p id="demo">getting there</p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
 document.getElementById('longi').value=position.coords.longitude
 document.getElementById('latii').value=position.coords.latitude
  
}

</script>


</body>
</html>
