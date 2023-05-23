<?php
	
session_start();
$_SESSION["flag"]="";

 $id = $_REQUEST["id"];
$pass = $_REQUEST["psw"];

// Connect to the database

$con = mysqli_connect("127.0.0.1","root","","project21");

if(!$con)
{
    die('Connection Failed'.mysql_error());
}



$result = mysqli_query($con,"SELECT * FROM `register` WHERE user_id=$id");


$row = mysqli_fetch_array($result);
// echo "<pre>";
// print_r($row);
// echo "</pre>";
if($row["user_id"]==$id && $row["password"]==$pass && $row["role"]=="Admin")
{
	//echo "I recognize you";
	 $_SESSION["flag"]="success";
	 header("Location:admin/index.php");
}
else if($row["user_id"]==$id && $row["password"]==$pass && $row["role"]=="Student")
{
	$_SESSION["flag"]="success";
	 header("Location:student/index.php");
} 
else if($row["user_id"]==$id && $row["password"]==$pass && $row["role"]=="Teacher")
{
	$_SESSION["flag"]="success";
	 header("Location:teacher/index.php");
}
else{
	echo "Sorry,no registered account found for the given credentials!";
	header("Location:login.php ?error=incorrect");

}
	
	
	?>