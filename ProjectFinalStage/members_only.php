<?php
  session_start();

  echo "<h1>Members only</h1>";

  // check session variable

  if (isset($_SESSION['valid_user']))
  {
    echo "<p>You are logged in as " . $_SESSION['valid_user'] . "</p>";
    echo "<p>you can continue to payment now</p>";
	echo "<a href=\"logout.php\">Logout</a>";
  }
  else
  {
    echo "<p>You are not logged in.</p>";
    echo "<p>Only logged in members may see this page.</p>";
	echo "<a href=\"login.php\">Login page</a>";
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
    <a href="https://www.paypal.com/au/signin"><img src="PayPal-logo-1.png"  alt=" " style="border-radius:10px; height:500px; width:1200px; margin-left:px; margin-top:px;"/></a>
		
	</div>
		
	
	<div id="footer">
	    Copyright &copy 2016-17 
            
	</div>

</div>

</body>


</html>