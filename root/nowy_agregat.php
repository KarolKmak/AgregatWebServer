<?php
session_start();
$db = "agregat";
$nazwa = $_POST["nazwa"];
$desc = $_POST["desc"];
$host = "localhost";
$conn = mysqli_connect($host,"root","usbw",$db);
mysql_query("SET NAMES UTF8");
if($conn)
{
	$czy_jest = "select * from agregats where Name like '$nazwa'";
	$result = mysqli_query($conn, $czy_jest);
	if(mysqli_num_rows($result) > 0)
	{
		echo "<script>alert('Nazwa jest już zajęta');
		window.location.href = '/nowy_agregat.html'
		</script>";
	}
	else
	{
	$q2 = "INSERT INTO agregat.agregats (Name,Description) VALUES ('$nazwa','$desc')";
	$result2 = mysqli_query($conn, $q2);
	//stworzenie agregatu
	
	$q3 = "select * from agregats where Name like '$nazwa'";
	$result3 = mysqli_query($conn, $q3);
		if ($result3->num_rows > 0) {
			// output data of each row
			while($row = $result3->fetch_assoc()) {
			$GLOBALS['IDA'] = $row["ID_agregat"];
			//pobranie ID utworzonego agregatu
			}					
		}
	fun();
	}
}
function fun()
{
	$IDA = $GLOBALS['IDA'];
	$conn = mysqli_connect("localhost","root","usbw","agregat");
	$q4 = "INSERT INTO agregat.`users-agregats` (User_ID,Agregat_ID) VALUES ('".$_SESSION["id"]."','$IDA')";
	if ($conn->query($q4) === TRUE)
	{
		echo "New record created successfully";
	}
	else
	{
		echo "Error: " . $q4 . "<br>" . $conn->error;
	}
	header("Location: http://localhost/agregaty.php");
}
?>