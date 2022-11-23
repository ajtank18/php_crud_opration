<?php
$nme=$_POST['nm'];
$mail=$_POST['em'];
$mobile=$_POST['mn'];
$ge=$_POST['r1'];
$ed=$_POST['edu'];
$hb=$_POST['c1'];
$ex=$_POST['exp'];
$p=$_FILES['pic']['name'];
$msg=$_POST['mess'];
$conn=new mysqli("localhost","root","","demo");
if($conn->connect_error)
{
	die("connection failed");
}

$insert=$conn->prepare("INSERT INTO `d1`(`name`, `email`, `mobile_no`, `gender`, `education`, `hobby`, `experience`, `picture`, `message`)
						VALUES (?,?,?,?,?,?,?,?,?)");
$insert->bind_param("ssisssiss",$name,$email,$mobile_no,$gender, $education, $hobby, $experience, $picture, $message);

$name=$nme;
$email=$mail;
$mobile_no=$mobile;
$gender=$ge;
$education=$ed;
$hobby=$hb;
$experience=$ex;
$picture=$p;
$message=$msg;
$insert->execute();

echo "data inserted";
//header("demo_select.php");
//include("demo_select.php");

$insert->close();
$conn->close();
?>