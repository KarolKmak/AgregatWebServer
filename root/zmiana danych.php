<html>
  <head>
    <meta charset="utf-8">
    <title>Agregat - zarządzanie kontem</title>
    <link rel="stylesheet" href="style.css">
  </head>
  </html>
<?php
session_start();
$pass = $_POST["haslo"];
$desc = $_POST["desc"];
$mail = $_POST["mail"];
$conn = mysqli_connect("localhost","root","usbw","agregat");
mysql_query("SET NAMES UTF8");

if($conn)
{
	if($pass != "")
	{	
		$q1 = "UPDATE users SET Password = '$pass' WHERE users.ID_user = ".$_SESSION["id"];
		if ($conn->query($q1) === TRUE)
		{
 		echo "Record updated successfully";
		}
		else
		{
  		echo "Error updating record: " . $conn->error;
		}
	}
	if($mail != "")
	{	
		$q1 = "UPDATE users SET Email = '$mail' WHERE users.ID_user = ".$_SESSION["id"];
		if ($conn->query($q1) === TRUE)
		{
 		echo "Record updated successfully";
		}
		else
		{
  		echo "Error updating record: " . $conn->error;
		}
	}
	if($desc != "")
	{	
		$q1 = "UPDATE users SET Description = '$desc' WHERE users.ID_user = ".$_SESSION["id"];
		if ($conn->query($q1) === TRUE)
		{
 		echo "Record updated successfully";
		}
		else
		{
  		echo "Error updating record: " . $conn->error;
		}
	}

}


else
{
	echo "error, not connected";
}

?>