<?php 

define('__APP__', TRUE);
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	# Start session
    session_start();
	
	# Database connection
	include ("dbconn.php");
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
	# Classes & Functions
    include_once("functions.php");

    print '
<body>
	<header>
		<div'; if ($menu > 1) { print ' class="hero-subimage"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>';
			include("menu.php");
		print '</nav>
	</header>
	<main>';

	
	if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
	
	# Homepage
	if (!isset($menu) || $menu == 1) { include("home.php"); }
	
	# New books
	else if ($menu == 2) { include("gallery.php"); }
		
	# About us
	else if ($menu == 9) { include("Apartmani.php"); }

	else if ($menu == 3) { include("contact.php"); }
	# Contact
	else if ($menu == 4) { include("video.php"); }
	
	# Register
	else if ($menu == 6) { include("register.php"); }
	
	# Signin
	else if ($menu == 7) { include("signin.php"); }
	
	# Admin webpage
	else if ($menu == 8) { include("admin.php"); }

	
	# API OMDB

	else if ($menu == 10) { include("omdb.php"); }
	


	else if ($menu == 15) { include("send.php"); }
	

	print '


<div id="footer">
		<p>Social media:<br>
			<a href="https://hr-hr.facebook.com" target="_blank"><img src="images/fb.png" alt="Facebook" title="Facebook" style="width:24px; margin-top:0.4em"></a>
			<a href="https://www.linkedin.com/in/tim-berners-lee-b41808ab/" target="_blank"><img src="images/linkedin.svg" alt="Linkedin" title="Linkedin" style="width:24px; margin-top:0.4em"></a>
			<a href="https://twitter.com/timberners_lee" target="_blank"><img src="images/twitter.svg" alt="Twitter" title="Twitter" style="width:24px; margin-top:0.4em"></a>
			<a href="https://plus.google.com/113372414904624897851" target="_blank"><img src="images/google+.svg" alt="Google+" title="Google+" style="width:24px; margin-top:0.4em"></a>
			<a href="https://https://www.instagram.com/?hl=hr" target="_blank"><img src="images/inst.png" alt="Instagram" title="Instagram" style="width:24px; margin-top:0.4em"></a>
		</p>
	<p>&copy;Apartmani Gajo. All rights reserved. Design by <a >Igor Gajski </a>. </p>
</div>
';
?>

