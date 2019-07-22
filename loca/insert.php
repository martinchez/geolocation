!DOCTYPE html>
 <?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'dad_trading';

$dbconn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($db);




if (isset($_POST['submit']))
{
    $Lastname   = $_POST['LastName'];
    $firstname  = $_POST['FirstName'];
    $Middlename = $_POST['MiddleName'];
    $address    = $_POST['Address'];
    $city       = $_POST['City'];
    $zipcode    = $_POST['ZipCode'];
    $email      = $_POST['email'];
    $number     = $_POST['number'];


     $query = ("INSERT INTO customer ([LName], [FName], [MName], [Street], [City], [ZipCode], [Email], [ContactNo]) VALUES ('$Lastname', '$firstname', '$Middlename', '$address', '$city','$zipcode', '$email', '$number')");

if(mysql_query($query))
 {
echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
}
else
 {
 echo "<script>alert('FAILED TO INSERT');</script>";
 }

 }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>sample</title>
    </head>
    <body>
        <form action="" method = "POST">

   First name:   
  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  Middle Name:
  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  Last Name:<br>
  <input name="FirstName" size="15" style="height: 19px;"  type="text" required>
      &nbsp; &nbsp; &nbsp; 
  <input name="MiddleName" size="15" style="height: 19px;"  type="text" required>
      &nbsp; &nbsp; &nbsp; 
  <input name="LastName" size="15" style="height: 19px;"  type="text" required>

  <br><br>

    Email Address:<br>
  <input name="email"  type="text" required placeholder="Enter A Valid Email Address" style="height: 19px;" size="30"><br><br>

  Home Address: <br>
  <input name="Address" type="text" required placeholder="Enter your home Address" style="height: 19px;" size="30" maxlength="30"><br><br>

  City:
   &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  Zipcode:
   <br>
  <input name="City" size="7" style="height: 19px;"  type="text" required>
    &nbsp; &nbsp; 
    <input name="ZipCode" size="7" style="height: 19px;"  type="text" required>
    <br><br>

  Telephone/Mobile Number: <br>
  <input name="number" type="text" required id="number" placeholder="Mobile Number" style="height: 19px;">

<br>
<br>

<button type ="submit" name="submit" value="send to database"> SEND TO DATABASE </button>
</form>
    </body>
</html>   