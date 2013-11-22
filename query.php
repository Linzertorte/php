<?php
host="localhost";
$username="root";
$password="root";
$dbname="test";
$con=mysqli_connect($host,$username,$password,$dbname);
$result = mysqli_query($con,"SELECT * FROM Contact");
while($row=mysqli_fetch_array($result))
  {
   
      echo $row['Name']. "'s phone number is ". $row['Phone'];
      echo "<br>";
  }

$mysqli_close($con);

?>
