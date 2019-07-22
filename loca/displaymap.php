<?php 
 $server="localhost";
 $username="root";
 $password="";
 $database="map";

 $conn=mysqli_connect($server,$username,$password,$database);
 $db_select = mysqli_select_db($conn, $database);
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($connection));
}
 if (!$conn) {
 	echo "connection lost";
 }else{
 	echo "awsome good connection";
 }
 $sql="SELECT *FROM codinates";
 $query=mysqli_query($sql);
 if (!$query) {
 	echo mysqli_error();
 	# code...
 }else{
 	echo "query listed";
 }
 ?>