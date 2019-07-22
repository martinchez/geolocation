
<?php
$con=mysqli_connect("localhost","root","","map");
// Check connection
if (isset($_POST["submit"])) {
	

$sql="INSERT INTO codinates (longitude, latitude,) VALUES ('','$_POST[firstname]','$_POST[lastname]')";

}

?> 


 <html>
<body>

<form>Firstname: 
<input type="text" name="firstname">Lastname:
<input type="text" name="lastname">
<button name="">submit Querry</button>
</form>

</body>
</html>