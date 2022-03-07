<html>
  <head>
    <meta charset="utf-8">
    <title>Agregat - zarządzanie kontem</title>
    <link rel="stylesheet" href="style.css">
  </head>
  </html>
<?php
session_start();
$name = $_POST["name"];
$surn = $_POST["surn"];
$date = $_POST["date"];
$adres = $_POST["adres"];
$conn = mysqli_connect("localhost","root","usbw","agregat");
mysql_query("SET NAMES UTF8");
if($conn)
{

	$czy_istnieje = "select * from users_data where ID_user_data like '$_SESSION[id]'";
	$result = mysqli_query($conn, $czy_istnieje);
	if(mysqli_num_rows($result) > 0)
	{
		echo "<script>window.location.href = \"/index.php\";</script>";
	}
	else
	{
	$q = "INSERT INTO agregat.users_data (ID_user_data,Name,Surname,Date_of_birth,Adress) VALUES ('$_SESSION[id]','$name','$surn','$date','$adres')";
	if($conn->query($q) === TRUE)
		{
			echo "string";
		}
		else
		{
			echo "błąd";
		}
	}
}


else
{
	echo "error, not connected";
}

?>