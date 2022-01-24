<?php
$db = "agregat";
$user = $_POST["login"];
$pass = $_POST["haslo"];
$host = "localhost";
echo $user.$pass;
$conn = mysqli_connect($host,"root","usbw",$db);
if($conn)
{
	$q = "select * from users where Username like '$user' and Password like '$pass'";
	$result = mysqli_query($conn, $q);

	if(mysqli_num_rows($result) > 0)
		{
			echo "zalogowano";

			session_start();
			$_SESSION["loggedin"] = 1;
			$row = $result->fetch_assoc();
			$_SESSION["id"] = $row["ID_user"];
			header("Location: http://localhost/index.php");

		}
		else
		{	
			echo "nie zalogowano";
		}

}


else
{
	echo "error, not connected";
}

?>