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


<div class="logowanie">
<h2>Artykuł: </h2>
  <form action="dodaj_do_agregatu.php" method="post">
    <input type="hidden" name="id_art" id = "id_art"/>
        <input type="hidden" name="id_agr" id = "id_agr"/>

    <p>
      Nazwa użytkownika:
      <input type="text" name="user" required/>
    </p>
    <p>
      Role użytkownika:
    </p>
	<p>
	<input type="checkbox" name="admin" value="TRUE">
	<label for="admin">Admnistrator agregatu</label>
	</p>
	<p>
	<input type="checkbox" name="redaktor" value="TRUE">
	<label for="admin">Redaktor</label>
	</p>
	<input type="hidden" name="jest" value=0/>
    <div class="btn-block">
      <button type="submit" href="/">Zapisz</button>
    </div>
  </form>
</div>
<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if($_POST["jest"])
{
$rola = 0;
$admin = $_POST["admin"];
if ($_POST['admin'] == 'TRUE')
$rola = 10;
$redaktor = $_POST["redaktor"];
if ($_POST['redaktor'] == 'TRUE')
$rola += 1;


$user = $_POST["user"];
$conn = mysqli_connect("localhost","root","usbw","agregat");
mysql_query("SET NAMES UTF8");
if($conn)
{
	$czy_jest = "select * from users where Username like '$user'";
	$result = mysqli_query($conn, $czy_jest);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = $result->fetch_assoc())
		{
		$user = $row["ID_user"];
		}
	
	$q = "INSERT INTO agregat.`users-agregats` (User_ID,Agregat_ID,Role) VALUES ('$user','".$_SESSION["agregat"]."','$rola')";
	$result2 = mysqli_query($conn, $q);
	
	}
}
else
{
	echo "error, not connected";
}
}
?>


</div>
</body>
</html>