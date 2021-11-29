<?php
$db = "agregat";
$user = $_POST["user"];
$pass = $_POST["pass"];
$host = "localhost";

$conn = mysqli_connect($host,$user,$pass,$db);
if($conn)
{
	
	$q = "select * from users where username like '$user' and password like '$pass'";
	$result = mysqli_query($conn, $q);

	if(mysqli_num_rows($result) > 0)
		{
			echo "zalogowano";
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