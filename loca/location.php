 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "location";

// Create connection
$conn = new mysqli($servername, $username,  $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO loca (firstname, lastname, email)
VALUES ('',$_POST[long]','$_POST[lati]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

<!DOCTYPE html>
<html>
<body>


<button  onclick="getLocation()">co-oordinaes</button>
<button name="submit">Insert</button>
<form>
<input name="long" id="long">
<input name="lati" id="lati">
</form>

<p id="demo"></p>

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
 document.getElementById('long').value=position.coords.longitude
 document.getElementById('lati').value=position.coords.latitude
  
}
function showPosition(position) {
  var latlon = position.coords.latitude + "," + position.coords.longitude;

  var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=14&size=400x300&sensor=false&key=YOUR_:KEY";

  document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
</script>

</body>
</html>


function showPosition(position) {
  var latlon = position.coords.latitude + "," + position.coords.longitude;

  var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=14&size=400x300&sensor=false&key=YOUR_:KEY";

  document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}