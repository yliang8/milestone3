<?php
	

session_start();

/* Get the variables passed from newIndex.php, and hash the password. */
$email = $_POST['email'];
$password = $_POST['password'];
$hash = md5($password);
$rememberMe = isset($_POST['rememberMe']);


/* Check if the user is in Database */
$conn = new mysqli("localhost", "zzengnin", 
					"Nopointhackingme!128", "zzengnin_ws");
$query = "SELECT * FROM info where hashpw= '$hash'";
$result = mysqli_query($conn,$query);
if ($row = mysqli_fetch_assoc($result))
{
	if($row['email'] == $email)
	{
		/* If the creditials are correct, start session, and the session. */
		$_SESSION['email'] = $email;
		$_SESSION['type'] = $row['type'];
		$duration = 10;
		if ($rememberMe) $duration = 60 * 60 * 24 * 14;
		setcookie('email', $email, time() + $duration);
		setcookie('password', $password, time() + $duration);
		header('Location: newHome.php');
	}
	else
	{
		header('Location: newIndex.php?err=1');
		/* Redirect back to hearder.php */
		die("Wrong Credentials");
		/* The die() function prints a message and exits the current script. */
	}
}
else
{
	header('Location: newIndex.php?err=1');
	die("Wrong Credentials");
}
?>


