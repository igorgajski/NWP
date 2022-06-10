<?php 
	print '
<head>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

	
	
';
	if (!isset($_POST['action']) || $_POST['action'] == '') { $_POST['action'] = FALSE; }
		
		if ($_POST['action'] == FALSE) {
			print '
			<body>
<div id="wrapper">
	<div id="menu-wrapper">
	
	<main>
			  <h1 style="text-align:center;">Pretraži filmove</h1>
			  <div>
			  <form class="form-horizontal" action="" name="imdbsearch" method="POST">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="title">Naziv filma *:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="title" placeholder="Unesi naziv filma, primjer: Fight club; Bad boys" name="title" required>
					</br>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="year">Godina: </label>
				  <div class="col-sm-10">          
					<input type="year" class="form-control" id="year" placeholder="Unesi godinu filma, primjer: 1999; 1995; 2020" name="year" pattern="[0-9]{4}">
					</br>
				  </div>
				</div>
				<input type="hidden" name="action" value="TRUE">
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
				  </br>
					<input type="submit" value="Potvrdi">
				  </div>
				</div>
			  </form>';
		} 
		else if ($_POST['action'] == TRUE) {
			print '
			<body>
			<div id="wrapper">
				<div id="menu-wrapper">
				</div>
				
				<main>

			<h1>Rezultati pretraživanja</h1>';
			$key = 'be5ea402';
		
			if ($_POST['year'] != '') { $url = 'http://www.omdbapi.com/?apikey='.$key.'&t=' . urlencode($_POST['title']) . '&y=' . urlencode($_POST['year']); } 
			else { $url = 'http://www.omdbapi.com/?apikey='.$key.'&t=' . urlencode($_POST['title']); }

			$json = file_get_contents($url);
			$_data = json_decode($json,true);

			if (isset($_data['Title']) && $_data['Title'] != '') {
				print '
				<p><a href="index.php?menu=10">NAZAD</a></p>
				<div style="float: center;width: 22%;margin-right: 2%;">
					<img src="' . $_data['Poster'] . '" alt="' . $_data['Title'] . '" style="width: 100%;border:1px solid grey; padding: 2px; margin:0 10px 10px 0; float:left;">
				</div>
				<div style="float:center;width:70%">
					<p><strong>Naslov filma:</strong> ' . $_data['Title'] . '</p>
					<p><strong>Godina:</strong> ' . $_data['Year'] . '</p>
					<p><strong>Ocjena:</strong> ' . $_data['Rated'] . '</p>
					<p><strong>Trajanje:</strong> ' . $_data['Runtime'] . '</p>
					<p><strong>Žanr:</strong> ' . $_data['Genre'] . '</p>
					<p><strong>Redatelj:</strong> ' . $_data['Director'] . '</p>
					<p><strong>Scenarist:</strong> ' . $_data['Writer'] . '</p>
					<p><strong>Glumci:</strong> ' . $_data['Actors'] . '</p>
					<p><strong>Radnja:</strong> ' . $_data['Plot'] . '</p>
					<p><strong>Jezik:</strong> ' . $_data['Language'] . '</p>
					<p><strong>Zemlja:</strong> ' . $_data['Country'] . '</p>
					<p><strong>Nagrade:</strong> ' . $_data['Awards'] . '</p>
					
				</div>
				<div style="clear:both"></div>';
			}
			else {
				echo '<p>Nešto je pošlo po zlu. Molim ponovite pretraživanje.</p>';
			}
		}
	print '
	</div>
	
	
	';
?>