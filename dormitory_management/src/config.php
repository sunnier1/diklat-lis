<?php 
$conn = mysqli_connect("localhost", "root", "", "wad");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
