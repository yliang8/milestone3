<?php

session_start();

if (isset($_GET['err']))
{		
	echo '<span style="color: red;">Incorrect credentials</span><br/>';
}
if (isset($_GET['success']) && $_GET['success'] == 1)
{
	echo '<span style="color: green;">Account created successfully</span><br/>';
}
if (isset($_GET['success']) && $_GET['success'] == 0)
{
	echo '<span style="color: red;">Account creation failed</span><br/>';
}
/* Not Logged In Yet */
if(!isset($SESSION['email']))
{
	echo "Log In: 
	<form action = 'newLogin.php' method = 'POST' name='logInTo'>
	Email: <input type='text' name = 'email'/>
	Password: <input type='password' name = 'password'/><br>
	<input type='checkbox' name='rememberMe' value='remember' /> Remember me for longer than 10 seconds and up to 2 weeks<br>
	<input type='submit' value = 'LogIn'/>
	</form>";
}
/* Logged In */
else
{
	header('Location:newHome.php');
}
?>


<!doctype html>
<html>
<head>
</head>
<body>

<!-- Display The Sign Up Content -->
Sign Up:
<form action = 'newSignUp.php' method = 'POST'>
Email: <input type='text' name = 'email'/>
Password: <input type='password' name = 'password'/>
Re-Confirm Password: <input type='password' name = 'Re-Password'/>
You are a 
<select name='type'>
  <option value="1">Driver</option>
  <option value="2">Rider</option>
  <option value="3">Both</option>
</select>
<input type='submit' value = 'SignUp'/>
</form>


<!-- Check If Cookie Is Set -->
<script type="text/javascript" src = "">
/* 
   Because it is in the body, 
   the script will run as the page loads.
   So we will check if the cookie is there
   once we are at the index page. 
 */
var email = getCookie("email");
var password = getCookie("password");
    if (email != "" && password != "")
    {
        alert("Your Cookie Is Still There: " + email);
        /*
		   Passing the informations in cookies
		   to login.php with the email and 
		   password in the cookie.
        */
        document.logInTo.email.value=email;
        document.logInTo.password.value=password;
        document.logInTo.submit();
    }
</script>
</body>
</html>