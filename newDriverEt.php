<?php

session_start();

$EtId = microtime(true); //Generate Event Id Using Unix Time
$locFrom= $_POST['locFrom'];
$locTo = $_POST['locTo'];
$timeFrom = $_POST['timeFrom'];
$timeTo = $_POST['timeTo'];
$maxRiders = $_POST['maxRiders'];


$conn = new mysqli("localhost", "zzengnin", 
					"Nopointhackingme!128", "zzengnin_ws");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "Insert into sellerEt values ('$EtId', '$locFrom','$locTo',
	'$timeFrom','$timeTo','0','$maxRiders','0')";
if ($conn->query($sql) === TRUE)
{
	echo "New offer created successfully";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>