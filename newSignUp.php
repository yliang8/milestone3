<?php

/* Insert User Info */
$id = microtime(true); //Generate Id Using Unix Time
$email = $_POST['email'];
$password = $_POST['password'];
$hash = md5($password);
$type = $_POST['type'];
/*  */
$conn = new mysqli("localhost", "zzengnin", 
					"Nopointhackingme!128", "zzengnin_ws");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";

$sql = "Insert into info values ('$id', '$email','$hash','NULL','$type')";
if ($conn->query($sql) === TRUE)
{
	//echo "New Account created successfully";
	header('Location: newIndex.php?success=1');
}
else
{
    //echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location: newIndex.php?success=0');
}
$conn->close();


// /* Validate Email */
// function validateForm() {
//     var x = document.forms["myForm"]["email"].value;
//     var atpos = x.indexOf("@");
//     var dotpos = x.lastIndexOf(".");
//     if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
//         alert("Not a valid e-mail address");
//         return false;
//     }
// }

// /* Validate Password */
// (fld.value.length < 7) 

// 
?>