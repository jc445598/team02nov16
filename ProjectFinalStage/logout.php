<?php
  session_start();
  if(isset($_SESSION['valid_user']))
  {
  	$old_user = $_SESSION['valid_user'];  // store  to test if user *was* logged in
  	unset($_SESSION['valid_user']);		// free session var valid_user 
  }
  else
  	$old_user = "";

  if (!empty($old_user))	//user logged in
  {
    if (isset($_SESSION['valid_user']))	//if valid_user still exist
	// user was logged in and could not be logged out
    {
	  echo "<html>";
	  echo "<body>";
	  echo "<h1>Log out</h1>";
      echo "Could not log you out.<br>";
    } 
	else //valid_user not exist
	{
	  echo "<html>";
	  echo "<body>";
	  echo "<h1>Log out</h1>";
      echo "$old_user, you logged out.<br>";
	}
  }
  else //not logged in
  {
	  echo "<html>";
	  echo "<body>";
	  echo "<h1>Log out</h1>";
    // if user was not logged in but came to this page somehow
    echo "You were not logged in, and so have not been logged out.<br>"; 
  }
  echo '<a href="login.php">Back to login page</a>';
  echo '</body>';
  echo '</html>';
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