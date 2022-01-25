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
      <h2>Dane osobiste - opcjonalne</h2>
      <form action="dane osobiste.php" method="post">

        
        <p>
          <input type="text" name="name" placeholder="imię" required/>
        </p>
        <p>
          <input type="text" name="surn" placeholder="nazwisko" required/>
        </p>
        Data urodzenia:
        <p>
          <input type="date" name="date" required/>
        </p>
        Adres:
      </br>
        (kraj, region (opcjonalnie), miejscowość, ulica)
        <p>
          <input type="text" name="adres" required/>
        </p>
        <div class="btn-block">
          <button type="submit" href="/">Zmień dane</button>
        </div>
      </form>
    </div>
</div>



</body>
</html>