<?php
$link = mysqli_connect("localhost", "root", "","gym2");


$user = mysqli_real_escape_string($link, $_REQUEST['trainer_id']);
$password = mysqli_real_escape_string($link, $_REQUEST['name']);
$number = mysqli_real_escape_string($link, $_REQUEST['phone']);

$sql = "INSERT INTO trainer VALUES ('$trainer_id', '$name',$phone)";
	if(mysqli_query($link, $sql)){
	    //echo "Records added successfully.";
	}
	header('Location: arpit.html');
mysqli_close($link);
?>
