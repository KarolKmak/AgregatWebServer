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



<div class="articles">
<h2>Moje ostatnie artykuły</h2>
<script type="text/javascript">
function link(adres)
{
  window.location.href = adres;
}
</script>
<?php
session_start();
$conn = mysqli_connect("localhost","root","usbw","agregat");
mysql_query("SET NAMES UTF8");
$q = "select Title,title_description,Adress from agregat where User_ID like '".$_SESSION["id"]."' ORDER BY ID_sugested_article ASC LIMIT 50";
$result = mysqli_query($conn, $q);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div class = 'article'>";
    echo "<h3 onclick = 'link(\"".$row['Adress']."\")'>".$row["Title"]."</h3>";
    echo $row["title_description"];
    
  }
} else {
  echo "Brak artykułów. Może coś dodaj?";
}

?>
</div>






</div>
</body>
</html>