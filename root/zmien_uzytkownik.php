<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agregat - strona główna</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>


<div class="containner">


<div class="header"> 
  <h1>
    Agregat
  </h1>
  <div class="menu" onclick="glowna()">
Strona główna
</div>
  <div class="menu" onclick="agregaty()">
Moje agregaty
</div>
<div class="menu" onclick="konto()">
  Moje konto
</div>
<div class="menu" onclick="dane()">
  Dane osobiste
</div>
</div>

<script type="text/javascript">
/*-------------------------podstawowe przyciski-------------------------*/
function konto(){
  window.location.href = "/moje_konto.php";
}
function glowna(){
  window.location.href = "/index.php";
}
function dane(){
  window.location.href = "/moje_dane.php";
}
function agregaty(){
  window.location.href = "/agregaty.php";
}
</script>




<form action="zarzadzaj_agregatem.php" method="post" id = "wroc">
<input type="hidden" name="id" id = "id"/>
<button type="submit" href="zarzadzaj_agregatem.php" style = "visibility: hidden;">a</button>
</form>

<script>
function wroc(a)
{
	alert("Zmiana wykonana pomyślnie");
	document.getElementById("id").value = a;
	document.getElementById("wroc").submit();
}
</script>
<?php
session_start();
$id_uzytkownika = $_POST["id"];
$zmiana = $_POST["zmiana"];
$rola = $_POST["rola"];
if($zmiana==1)
{
//zmiana uprawnień użytkownika
$conn = mysqli_connect("localhost","root","usbw","agregat");
mysql_query("SET NAMES UTF8");
if($conn)
{
	$q1 = "UPDATE `users-agregats` SET Role = '$rola' WHERE user_ID = $id_uzytkownika AND Agregat_ID = ".$_SESSION["agregat"];
	if ($conn->query($q1) === TRUE)
	{
 	echo "<script>wroc(".$_SESSION["agregat"].");</script>";
	}
	else
	{
  	echo "Error updating record: " . $conn->error;
	}
}
}
else
{
//usunięcie użytkownika z agregatu
$conn = mysqli_connect("localhost","root","usbw","agregat");
if($conn)
{
	$q1 = "DELETE FROM `agregat`.`users-agregats` WHERE user_ID = $id_uzytkownika AND Agregat_ID = ".$_SESSION["agregat"];
	if ($conn->query($q1) === TRUE)
	{
 	echo "<script>wroc(".$_SESSION["agregat"].");</script>";
	}
	else
	{
  	echo "Error deleting record: " . $conn->error;
	}
}
}
?>

</div>
</body>
</html>