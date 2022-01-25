<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agregat - społecznościowy agregat wiadomości</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div class="containner">
<div class="header"> 
  <h1>
    Agregat
  </h1>
</div>


<div class="logowanie">
<h2>Artykuł: </h2>
  <form action="logowanie.php" method="post">
    <input type="hidden" name="id_art" id = "id_art"/>
        <input type="hidden" name="id_agr" id = "id_agr"/>

    <p>
      Tytuł:
      <input type="text" name="title" id="title" required/>
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
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
$id_art = $_POST["id_art"];
$id_agr = $_POST["id_agr"];

if($id_art == "")
{
  echo "nowy";
}
else
{
  echo "zmień";
  echo $id_art;
}
?>


</div>
</body>
</html>