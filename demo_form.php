<html>
<table align="center" border="5x">
<form method="post" enctype="multipart/form-data" action="demo_form.php">
	<tr><td>Name:</td><td><input type="text" name="nm"></td></tr><br>
	<tr><td>Email:</td><td><input type="text" name="em"></td></tr><br>
	<tr><td>Mobile_no:</td><td><input type="text" name="mn"></td></tr><br>
	<tr><td>Gender:</td><td><input type="radio" name="r1" value="male">male
			<input type="radio" name="r1" value="female">female</td></tr><br>
	<tr><td>Education:</td><td><input type="text" name="edu"></td></tr><br>
	<tr><td>Hobby:</td><td><input type="text" name="c1"></td><tr><br>
	<tr><td>Experience:</td><td><input type="text" name="exp"></td><tr><br>
	<tr><td>Picture:</td><td><input type="file" name="pic"></td></br>
	<tr><td>Message:</td><td><input type="text" name="mess"></td></tr><br>
	<tr><td></td><td><input type="submit" name="s1"></td></tr><br>
</table>
</form>
</html>
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

//echo "data inserted";
//header("demo_select.php");
echo "<br><br><br><br><br>";
include("demo_select.php");

$insert->close();
$conn->close();
?>