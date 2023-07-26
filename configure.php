<?php
$cookie_name = "Join";
$cookie_value = "Latest Adventures";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
$_SESSION["quote"] = "Start an Adventure";
//$_SESSION[""] = "Start an Adventure";
$_SESSION["tagline"] = "Made with 💖 by TREKKO";
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'trekko');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($conn == false) {
dir('Error: Cannot connect');
}
$sql = "SELECT * FROM events";
$query = mysqli_query($conn, $sql);

if (isset($_REQUEST['add_event'])) {
$venue = $_REQUEST['venue'];
$details = $_REQUEST['details'];
$phone = $_REQUEST['phone'];
$name = $_REQUEST['name'];
$charge = $_REQUEST['charge'];
$email = $_REQUEST['email'];
$sql = "INSERT INTO events(name, email,phone,venue,charge, details) 
VALUES('$name', '$email', '$phone','$venue', '$charge', '$details')";
mysqli_query($conn, $sql);
echo $sql;
header("Location: home page.php?info=added");
exit();
}
// Get data based on id
if(isset($_REQUEST['id'])){
$id = $_REQUEST['id'];
$sql = "SELECT * FROM events WHERE id = $id";
$query = mysqli_query($conn, $sql);

}
// // Delete an event
if(isset($_REQUEST['delete'])){
$id = $_REQUEST['id'];
$sql = "DELETE FROM events WHERE id = $id";
mysqli_query($conn, $sql);
header("Location: home page.php?info=deleted");
exit();
}
// Update an event
if(isset($_REQUEST['update'])){
$venue = $_REQUEST['venue'];
$details = $_REQUEST['details'];
$phone = $_REQUEST['phone'];
$name = $_REQUEST['name'];
$charge = $_REQUEST['charge'];
$email = $_REQUEST['email'];
$id = $_REQUEST['id'];
$sql = "UPDATE events SET name = '$name', email = '$email', phone ='$phone', venue = '$venue', charge = '$charge', details= '$details' WHERE id = $id";
mysqli_query($conn, $sql);
header("Location: home page.php?info=updated");
exit();
}
?>