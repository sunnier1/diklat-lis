<?php 
if(!empty($_POST['data'])) {
	$data = $_POST['data'];
	$con = mysqli_connect('localhost','root','','crud1');
	if($con) {
		$sql = "insert into crud (data) values ('".$data."')";
		if(mysqli_query($con, $sql)){
		echo "Success";
		}
		else echo "Failed to insert data";
	} else echo "Failed to connect to database";
}