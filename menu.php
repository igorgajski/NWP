<?php 
	print '

	
	<div id="menu-wrapper">
		<div id="menu" class="container">
	<ul>
		<li><a href="index.php?menu=1">Naslovnica</a></li>
		<li><a href="index.php?menu=2">Galerija</a></li>
		<li><a href="index.php?menu=9">Apartmani</a></li>
		<li><a href="index.php?menu=3">Kontakt</a></li>
		<li><a href="index.php?menu=4">Video</a></li>';
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<li><a href="index.php?menu=6">Registracija</a></li>
			<li><a href="index.php?menu=7">Prijava</a></li>';
		}
		else if ($_SESSION['user']['valid'] == 'true') {
			print '
			<li><a href="index.php?menu=8">Admin</a></li>
			<li><a href="signout.php">Odjava</a></li>';
		}
		print '
		<li><a href="index.php?menu=10"> Filmovi</a></li>
		
		
		
	</ul>

	</div>
	
	<div id="logo" class="container">';
?>