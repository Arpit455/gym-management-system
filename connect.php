<?php
$inputuser= $_POST['user'];
$inputpass = $_POST['pass'];
$login_type = $_POST['login_type'];

$user="root";
$password="";
$database = "gym2";
$connect=mysqli_connect('localhost',$user,$password,$database);

if ($login_type == "Admin") {
	if($inputuser=="Admin" && $inputpass=="gymdbms"){
	//echo "YES";
	header('Location: admin-panel.php');
}
else{
	echo "NO";
	header('Location: arpit.html');
}
}

?>
