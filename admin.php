<?php 
print '
	<head>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

<div id="wrapper">
	

	<h2 style=centar>Admin</h2>

	';
	if ($_SESSION['user']['valid'] == 'true') {
		if (!isset($action)) { $action = 1; }
		print '
		<div id="admin">
			<ul>
				<li><a href="index.php?menu=7&amp;action=1">Korisnici</a></li>
			</ul>';
			# Admin Users
			if ($action == 1) { include("admin/users.php"); }
					
			
		print '
		</div>';
	}
	else {
		$_SESSION['message'] = '<p>Molim vas da se prijavite ili registrirate!</p>';
		header("Location: index.php?menu=6");
	}
?>