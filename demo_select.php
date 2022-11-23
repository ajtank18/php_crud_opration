<?php
$conn=new mysqli("localhost","root","","demo");
if($conn->connect_error)
{
	die("connection failed");
}
$sql="SELECT * FROM `d1`";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	echo "<table border='5x' align='center'>
			<tr>
				<td><b>no</td>
				<td><b>NAME</td>
				<td><b>HOBBY</td>
				<td><b>E_MAIL</td>
				<td><b>PICTURE</td>
				<td><b>OPERATION</td>
			</tr>";
	while($row=$result->fetch_assoc())
	{
		echo "<tr>
					<td>".$row['id']."</td>
					<td>".$row['name']."</td>
					<td>".$row['hobby']."</td>
					<td>".$row['email']."</td>
					<td><img src='$row[picture]' height=150 width=80></td>
					<td><a href='demo_delete.php?n=$row[name]'>delete</a></td>
				</td>";	 
	}
	echo "</table>";
}
else
{
	echo "0 row selected";
}
?>