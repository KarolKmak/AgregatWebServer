<html>
  <head>
    <meta charset="utf-8">
    <title>Agregat - społecznościowy agregat wiadomości</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
</html>
<?php
$user = $_POST["login"];
$pass = $_POST["haslo"];
$conn = mysqli_connect("localhost","root","usbw","agregat");
mysql_query("SET NAMES UTF8");
if($conn)
{
	$q = "select * from users where Username like '$user' and Password like '$pass'";
	$result = mysqli_query($conn, $q);
	if(mysqli_num_rows($result) > 0)
		{
			session_start();
			$_SESSION["loggedin"] = 1;
			$row = $result->fetch_assoc();
			$_SESSION["id"] = $row["ID_user"];
			header("Location: /index.php");
		}
		else
		{	
		echo    "<script>alert('Błędne hasło lub nazwa użytkownika');
						 window.location.href = '/index.html';
				</script>";
		}
}
else
echo "error, not connected";
?>