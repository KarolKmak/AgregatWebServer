<?php
$conn = new mysqli("localhost","root","usbw","agregat");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
die();
}
$stmt = $conn->prepare("SELECT Name, Description FROM agregats;");
$stmt->execute();
$stmt->bind_result($Name, $Description);
$agregats = array(); 
while($stmt->fetch())
{
$temp = array();
$temp['Name'] = $Name; 
$temp['Description'] = $Description; 
array_push($agregats, $temp);
}
echo json_encode($agregats);
?>