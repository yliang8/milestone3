<?php

session_start();

/*
	Check if session is logged in, if 
	not, then redirect the user back to 
	Index page. If they already logged 
	in, then display "Welcome Back" and
	a button to log out. Once they click 
	on the logout button, they will be 
	redirected to the newLogout.php file
	which contains the logout functions.
*/

if(!isset($_SESSION['email'])) // not logged in
{
	header('Location:newIndex.php');
}
else
{
	echo "Welcome Back, " . $_SESSION['email'] . ". You are Logged in. " .
	"<input type = 'button' value = 'Logout' 
	onclick = \"window.location = 'newLogout.php'\" />";
	if($_SESSION['type'] == 1)
	{
		echo "<br>Offer a Ride: 
		<form action = 'newDriverEt.php' method = 'POST'>
		Location From: <input type='text' name = 'locFrom'/>
		Location To: <input type='text' name = 'locTo'/>
		Time From: <input type='text' name = 'timeFrom'/>
		Time To: <input type='text' name = 'timeTo'/>
		Maximum Riders: <input type='text' name = 'maxRiders'/>
		<input type='submit' value = 'Submit'/>
		</form>";
	}
	else if($_SESSION['type'] == 2)
	{
		echo "<br>Request a Ride: 
		<form action = 'newRiderEt.php' method = 'POST'>
		Location From: <input type='text' name = 'locFrom'/>
		Location To: <input type='text' name = 'locTo'/>
		Time From: <input type='text' name = 'timeFrom'/>
		Time To: <input type='text' name = 'timeTo'/>
		<input type='submit' value = 'Submit'/>
		</form>";
	}
	else if($_SESSION['type'] == 3)
	{
		echo "<br>Offer a Ride: 
		<form action = 'newDriverEt.php' method = 'POST'>
		Location From: <input type='text' name = 'locFrom'/>
		Location To: <input type='text' name = 'locTo'/>
		Time From: <input type='text' name = 'timeFrom'/>
		Time To: <input type='text' name = 'timeTo'/>
		Maximum Riders: <input type='text' name = 'maxRiders'/>
		<input type='submit' value = 'Submit'/>
		</form>";
		echo "<br>Request a Ride: 
		<form action = 'newRiderEt.php' method = 'POST'>
		Location From: <input type='text' name = 'locFrom'/>
		Location To: <input type='text' name = 'locTo'/>
		Time From: <input type='text' name = 'timeFrom'/>
		Time To: <input type='text' name = 'timeTo'/>
		<input type='submit' value = 'Submit'/>
		</form>";
	}
}





