<?php
$server="localhost";
$username="root";
$password="root1234";
$db="NS";

$conn=mysqli_connect($server, $username, $password, $db);

$email=$_REQUEST["email"];
$pass=$_REQUEST["pass"];

if (!$conn) {
  die (mysqli_connect_error());
}

$sql="SELECT * FROM Client WHERE email='$email'";
$response=mysqli_query($conn,$sql);
if($response) {
    echo"";

} else
    echo "error";

mysqli_close($conn);
?>