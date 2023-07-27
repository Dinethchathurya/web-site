<?php
$server="localhost";
$usename="root";
$password="root1234";
$dbname="NS";

$conn=mysqli_connect($server,$usename,$password,$dbname);

//$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$uname = $_REQUEST["uname"];
$pass = $_REQUEST["pass"];
$addres = $_REQUEST["address"];
$tele = $_REQUEST["tele"];

if (!$conn) {
    die("Connection faild: " . mysqli_connect_error());
}
$sql="INSERT INTO Client(Lname,username,password,address,number) VALUES('$lname','$uname','$pass','$addres','$tele')";

if (mysqli_query($conn,$sql)) {
    echo"recoded";
}else echo"error";

mysqli_close($conn);
?>