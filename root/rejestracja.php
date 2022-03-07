<?php
$db = "agregat";
$user = $_POST["login"];
$pass = $_POST["haslo"];
$email = $_POST["e-mail"];
$host = "localhost";
$conn = mysqli_connect($host,"root","usbw",$db);
mysql_query("SET NAMES UTF8");
if($conn)
{
	$czy_jest = "select * from users where Username like '$user'";
	$result = mysqli_query($conn, $czy_jest);
	if(mysqli_num_rows($result) > 0)
	{
		echo "<script>alert('Nazwa jest już zajęta');
		window.location.href = '/rejestracja.html'
		</script>";
	}
	else
	{
	$q = "INSERT INTO agregat.users (Username,Password,Email) VALUES ('$user','$pass','$email')";
	if($conn->query($q) === TRUE)
		{
			$q2 = "select * from users where Username like '$user' and Password like '$pass'";
			$result = mysqli_query($conn, $q2);
			session_start();
			$_SESSION["loggedin"] = 1;
			$_SESSION["id"] = $row["ID_users"];
			header("Location: http://localhost/index.php");
		}
		else
		{
			echo "Error: " . $q . "<br>" . $conn->error;
		}
		


	}
}
else
{
	echo "error, not connected";
}

?>