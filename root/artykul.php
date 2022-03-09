<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agregat - artykuł</title>
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
<script>
/*-------------------------Dodanie ID do formularza-------------------------*/
function zmien(a,b)
{
    document.getElementById("id_art").value = a;
    document.getElementById("id_agr").value = b;
}
function nowy(a)
{
	document.getElementById("id_agr").value = a;
}
</script>
<div class="logowanie">
<h2>Artykuł: </h2>
  <form action="artykul_zmien.php" method="post">
    <input type="hidden" name="id_art" id = "id_art"/>
    <input type="hidden" name="id_agr" id = "id_agr" required />

    <p>
      Tytuł:
      <input type="text" name="title" id="title" required />
    </p>
    <p>
      Adres:
      <input type="text" name="adres" id="adres" required />
    </p>
    <p>
      Wstęp:
      <input type="text" name="desc" id="desc" required />
    </p>
    <p>
      Ważność:
      <input type="text" name="impor" id="impor" required />
    </p>
    <p>
      Zmiana ważności:
      <input type="text" name="impor_chan" id="impor_chan" required />
    </p>


    <div class="btn-block">
      <button type="submit" href="/">Zapisz</button>
    </div>
  </form>
</div>
<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if($_POST["id_art"] != "")
{
$id_article = $_POST["id_art"];
$id_agregat = $_POST["id_agr"];
echo "<script>zmien('".$id_article."','".$id_agregat."')</script>";
}
else
{
$id_agregat = $_POST["id_agr"];
echo "<script>nowy('".$id_agregat."')</script>";
}

?>


</div>
</body>
</html>