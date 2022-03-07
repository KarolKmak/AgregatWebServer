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


<script>
/*-------------------------Przyciski zarządzające użytkownikami agregatu-------------------------*/
function nowy()
{
	window.location.href = "dodaj_do_agregatu.php";
}
function zmien(a,b)
{
  document.getElementById("id_uzytkownika").value = a;
  c = a+"_ad";
  wynik = 0;
  if(document.getElementById(c).checked)
  wynik+=10;
  c= a+"_red";
  if(document.getElementById(c).checked)
  wynik+=1;
  document.getElementById("rola").value = wynik;
  document.getElementById("zmiana").value = b;
  document.getElementById("formularz").submit();

}

</script>

<div class="articles">
<?php
session_start();
$agregat_ID = $_SESSION["agregat"] = $_POST["id"];
//wyświetlanie nazwy agregatu i sprawdzanie poprawności połączenia
$conn = mysqli_connect("localhost","root","usbw","agregat");
mysql_query("SET NAMES UTF8");
$q = "select * from agregats where ID_agregat like '$agregat_ID'";
$result = mysqli_query($conn, $q);
if ($result->num_rows > 0) 
{
	// output data of each row
	while($row = $result->fetch_assoc())
		{
		echo "<h2>".$row["Name"]."</h2>";
		}
}
$q2 = "select * from agregat_users where ID_agregat like '$agregat_ID'";
$result = mysqli_query($conn, $q2);
while($row = $result->fetch_assoc())
		{
		echo "<p>".$row["Username"];
		//Wyświetlanie statusu właściciela agregatu
		if($row["Role"]>=100)
		echo " - Właściciel";
		else
		{		
			//Wyświetlanie statusu administratora agregatu
			if(($row["Role"]%100)>=10)
			echo "</br><input type='checkbox' name='admin' value='TRUE' id='".$row["ID_user"]."_ad' checked>";
			else
			echo "</br><input type='checkbox' name='admin' value='TRUE' id='".$row["ID_user"]."_ad'>";
			echo "<label for='admin'>Admnistrator</label>";
				
		
			//Wyświetlanie statusu redaktora agregatu
			if(($row["Role"]%10)>=1)
			echo "</br><input type='checkbox' name='redaktor' value='TRUE' id='".$row["ID_user"]."_red' checked>";
			else
			echo "</br><input type='checkbox' name='redaktor' value='TRUE' id='".$row["ID_user"]."_red'>";
			echo "<label for='redaktor'>Redaktor</label></br>";
			echo " <button onclick= zmien(".$row["ID_user"].",1)>ustaw uprawnienia</button>";
			echo " <button onclick= zmien(".$row["ID_user"].",2)>usuń użytkownika</button>";
			echo "</p>";
		}
		}
mysqli_close($conn);
?>
<button type="button" onclick="nowy()">Dodaj użytkownika</button>
</div>

<!------------------ formularz obsługujący zmianę lub usunięcie użytkownika -------------->
<form action="zmien_uzytkownik.php" method="post" id = "formularz">
<?php
//konieczne by przekazać id agregatu w formularzu
echo "<input type='hidden' name='id' id = 'id' value='".$_SESSION["agregat"]."'/>"
?>
<input type="hidden" name="id" id = "id_uzytkownika"/>
<input type="hidden" name="rola" id = "rola"/>
<input type="hidden" name="zmiana" id = "zmiana"/>
<button type="submit" href="zmien_uzytkownik.php" style = "visibility: hidden;">a</button>
</form>


</body>
</html>