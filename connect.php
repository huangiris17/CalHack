<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','test');

// get the post records
$txtName = $_POST['nickname'];
$txtMilk = $_POST['milk'];

// database insert SQL code
$sql = "INSERT INTO `input` (`nickname`, `milk`) VALUES ('$txtName', '$txtMilk')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>