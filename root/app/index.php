<?php
$conn = new mysqli("localhost","root","usbw","agregat");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
die();
}
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$test = $_POST["agregat"];

if($test == ""){
	$stmt = $conn->prepare("SELECT Adress,Title,article_description, Importance FROM agregat WHERE Importance > 4;");
}
else{
		$stmt = $conn->prepare("SELECT Adress,Title,article_description, Importance FROM agregat WHERE $test;");
}

$stmt->execute();
$stmt->bind_result($Adress, $Title, $article_description, $Importance);
$articles = array(); 
while($stmt->fetch())
{
$temp = array();
$temp['Adress'] = $Adress; 
$temp['Title'] = $Title; 
$temp['article_description'] = $article_description; 
$temp['Importance'] = $Importance;
array_push($articles, $temp);
}
echo json_encode($articles);
?>