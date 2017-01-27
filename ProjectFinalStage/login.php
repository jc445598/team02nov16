<?php
//must appear BEFORE the <html> tag
session_start();
include_once('config.php');	

if( isset($_POST["email"])&& isset($_POST["email"]) )
{
	$email = $_POST["email"];
		
	$password = $_POST["password"];
	
	if ($email && $password)
	{
	  // if the user has just tried to log in
	
	  //make the database connection
	  $conn  = db_connect();	
	  
	  //make a query to check if user login successfully
	  $sql = "select * from users where email='$email' and password='$password'";
	  $result = $conn -> query($sql);
	  $numOfRows = $result -> num_rows;

	  if ($numOfRows)
	  {
		// login successfully, keep the user's email
		$_SESSION['valid_user'] = $email;
	  }
	  $conn -> close();
	}
}
if (isset($_SESSION['valid_user']))
{
  header("location: members_only.php");  
}
else
{
  if (isset($email))
  {
    // if user tried and failed to log in
    echo "<b>Incorrect - Please try it again </b><br>";
	echo "<a href=\"registration.html\">Sign-up</a><br>";
  }
  else 
  {
    // user has not tried to log in yet or has logged out
    echo "<b>You are not logged in</b><br>";
  }

  // provide form to log in: same page for action  
  echo "<form method=post action=\"login.php\">";
  echo "<table>";
  echo "<tr><td>Email:</td>";
  echo "<td><input type=text name=email></td></tr>";
  echo "<tr><td>Password:</td>";
  echo "<td><input type=password name=password></td></tr>";
  echo "<tr><td colspan=2 align=center>";
  echo "<input type=submit value=\"Log in\"></td></tr>";
  echo "</table></form>";
}

?>


<html>

<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">	
   <link href="responsive.css" rel="stylesheet" media="screen and
(max-width: 960px)">

</head>

<body>

<div class="container">

	<div id="header"><img src="logo1.png.png"  alt=" " style="border-radius:10px; height:100px; width:150px; margin-left:10px; margin-top:2px;" />
	
	</div>
	
	<div id="nav">
		<ul>
			
			<li><a href="http://10.250.0.9/team02nov16/index.html" style="margin-left:20px;">Home</a></li>
            <li><a href="http://10.250.0.9/team02nov16/registration.html">Support</a></li>
			<li><a href="http://10.250.0.9/team02nov16/AboutUs.html">About Us</a></li>
            	<li><a href="http://10.250.0.9/team02nov16/login.php">Login</a></li>
			<li><a href="http://10.250.0.9/team02nov16/ContactUs.html">Contact Us</a></li>
            </ul>
	</div>

	<div id="content">
		
	</div>
		
	
	<div id="footer">
	    Copyright &copy 2016-17 
            
	</div>

</div>

</body>


</html>




