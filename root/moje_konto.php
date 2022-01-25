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
function konto(){
  window.location.href = "/moje_konto.php";
}
function dane(){
  window.location.href = "/moje_dane.php";
}
function glowna(){
  window.location.href = "/index.php";
}
function agregaty(){
  window.location.href = "/agregaty.php";
}
</script>



<div class="logowanie">
      <h2>Zmiana podstawowych danych</h2>
      <form action="zmiana danych.php" method="post">

        
        <p>
          <input type="text" name="mail"placeholder="e-mail"/>
        </p>
        <p>
          <input type="password" name="haslo"placeholder="Hasło"/>
        </p>
        Twój opis konta:
        <p>
          <textarea name="desc"></textarea>
        </p>


          <div class="btn-block">
              <button type="submit" href="/">Zmień dane</button>
          </div>
      </form>
    </div>
</div>



</body>
</html>