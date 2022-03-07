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
<?php
session_start();
$id_art = $_POST["id_art"];
$conn = mysqli_connect("localhost","root","usbw","agregat");
mysql_query("SET NAMES UTF8");
$adres = $_POST["adres"];
$tytul = $_POST["title"];
$opis = $_POST["desc"];
$id_agr = $_POST["id_agr"];
$impor = $_POST["impor"];
$impor_chan = $_POST["impor_chan"];
if($id_art == "")
{
//nowy artykuł
if($conn)
{
	
		$q1 = "INSERT INTO agregat.articles (Adress,Title,Description) VALUES ('$adres','$tytul','$opis')";
		$result1 = mysqli_query($conn, $q1);
		$q2 = "select * from articles where Adress like '$adres' AND Title like '$tytul' AND Description like '$opis'";
		$result2 = mysqli_query($conn, $q2);
		if ($result2->num_rows > 0)
		{
			// output data of each row
			while($row = $result2->fetch_assoc())
			{
			$ID_article = $row["ID_article"];
			//pobranie ID dodanego artykułu
			}	
		if(ID_article != "")
		{
		$q3 = "INSERT INTO agregat.sugested_articles (Agregat_ID,User_ID,Article_ID,Importance,Importance_change) VALUES ('$id_agr','".$_SESSION["id"]."','$ID_article','$impor','$impor_chan')";
		$result3 = mysqli_query($conn, $q3);
		header("Location:/index.php");
		}
		else
		echo "<script>alert('Nie udało się dodać artykułu')</script>";
		}
		else
		echo "błąd";
}
}
else
{
if($conn)
{
$q1 = "UPDATE articles SET Adress = '$adres', Title = '$tytul', Description = '$opis' WHERE ID_article = '$id_art'";
$q2 = "UPDATE sugested_articles SET Importance = '$impor', Importance_change = '$impor_chan' WHERE Article_ID = '$id_art' AND Agregat_ID = '$id_agr'";	
		if ($conn->query($q1) && $conn->query($q2) == TRUE)
		{
 		echo "Record updated successfully";
		}
		else
		{
  		echo "Error updating record: " . $conn->error;
		}
}
}
?>


</div>
</body>
</html>