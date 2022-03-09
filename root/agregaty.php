<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agregat - zarządzanie kontem</title>
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
function glowna(){
  window.location.href = "/index.php";
}
function konto(){
  window.location.href = "/moje_konto.php";
}
function dane(){
  window.location.href = "/moje_dane.php";
}
function nowy_agregat(){
  window.location.href = "/nowy_agregat.html";
}
function agregaty(){
  window.location.href = "/agregaty.php";
}
var act_agr = 0;
function agregat(a,b){
  if(act_agr != 0)
  {
    document.getElementById(act_agr).style.color = "gray";
  }
  act_agr = a;
  document.getElementById(act_agr).style.color = "#ff6600";
  if(b == 0)
  {
  document.getElementById("id_form").value = act_agr;
  document.getElementById("formularz").submit();
  }
}

function zarzadzaj()
{
	if(act_agr==0)
	{
	alert("Jak chcesz coś zmienić w danym agregacie to może go najpierw wybierz?");
	return;
	}
	document.getElementById("id_agregat").value = act_agr;
	document.getElementById("agregat_form").submit();
}


function nowy()
{
    document.getElementById("id_agr").value = act_agr;
    document.getElementById("artyk").submit();
}
function zmien(a)
{
    document.getElementById("id_art").value = a;
    document.getElementById("id_agr").value = act_agr;
    document.getElementById("artyk").submit();
}



</script>


<div class="agregat">
Moje agregaty: 
</div>
<script type="text/javascript">
function link(adres)
{
  window.location.href = adres;
}
</script>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
$conn = mysqli_connect("localhost","root","usbw","agregat");
mysql_query("SET NAMES UTF8");
$q = "select Name, ID_agregat from agregat_users where ID_user = '".$_SESSION["id"]."'";
$result = mysqli_query($conn, $q);
if ($result->num_rows > 0)
{
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div class = 'agregat' id = '".$row["ID_agregat"]."' onclick = 'agregat(".$row["ID_agregat"].",0)''>".$row["Name"]."</div>";
    
  }
}
else
{
header("Location:/nowy_agregat.html");
}
?>
<div class="agregat" id="nowy_agregat" onclick="nowy_agregat()">dodaj nowy agregat</div>
<div class= "articles">
<button type="button" onclick="nowy()">Dodaj nowy artykuł</button>
<button type="button" onclick="zarzadzaj()">Zarządzaj agregatem</button>
</div>

<?php
$id = 0;
$id = $_POST["id"];
if($id != 0)
{
  echo "<script>agregat(".$id.");</script>";

echo "<div class=\"articles\">";
$q2 = "select Title,article_description,Adress,ID_sugested_article from agregat where Agregat_ID like '".$id."' ORDER BY ID_sugested_article DESC LIMIT 50";
$result2 = mysqli_query($conn, $q2);
if ($result2->num_rows > 0)
  {
  // output data of each row
  while($row = $result2->fetch_assoc())
    {
    echo "<div class = 'article'>";
    echo "<h3 onclick = 'link(\"".$row['Adress']."\")'>".$row["Title"]."</h3>";
    echo $row["article_description"];
    echo "</br><button type=\"button\" onclick = \"zmien(".$row["ID_sugested_article"].")\">Zmień</button>";
    }
  }
echo "</div>";

}
?>

<!--przejście do zarządzania agregatem-->
<form action="zarzadzaj_agregatem.php" method="post" id = "agregat_form">
<input type="hidden" name="id" id = "id_agregat"/>
<button type="submit" href="zarzadzaj_agregatem.php" style = "visibility: hidden;">a</button>
</form>

<!--Wyświetlenie zawartości agregatów-->
<form action="agregaty.php" method="post" id = "formularz">
<input type="hidden" name="id" id = "id_form"/>
<button type="submit" href="agregaty.php" style = "visibility: hidden;">a</button>
</form>

<!--edytowanie/dodanie artykułu-->
<form action="artykul.php" method="post" id = "artyk">
<input type="hidden" name="id_art" id = "id_art"/>
<input type="hidden" name="id_agr" id = "id_agr"/>
<button type="submit" href="artykul.php" style = "visibility: hidden;">a</button>
</form>

</div>
</body>
</html>