<?php
$server = "localhost";
$username = "root";
$passwod = "root1234";
$db = "NS";

$conn = mysqli_connect($server, $username, $passwod, $db);

$email = $_REQUEST["email"];
$pass = $_REQUEST["pass"];

if (!$conn) {
  die(mysqli_connect_error());
}

$sql = "SELECT * FROM Client WHERE email= '$email';";

$result = mysqli_query($conn, $sql);
$check = mysqli_num_rows($result);

if ($check > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    if ($row['password'] == 'notuser123' && $email=='notuser@gmail.com') {
     header("Location: admin.html");
    }
    else if ($row['password'] == $pass) {
      header("Location: checkout.html");

    } else
      header("Location: login1.html");
  }
} else
  header("Location: login1.html");

mysqli_close($conn);
?>