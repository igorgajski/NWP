<?php 
$json = file_get_contents('http://api.hnb.hr/tecajn/v1');

//Decode JSON
$json_data = json_decode($json,true);
		
print '
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
	  body {
		width: 80%;
		margin: 0 auto;
	  }
	</style>
</head>
	<body>
		
			<table class="table">
				<thead>
					<tr>
						<th width="16">Broj</th>
						<th width="42">Datum</th>
						<th width="16">Zemlja</th>
						<th width="16">Kod</th>
						<th width="16">Valuta</th>
						<th width="32">Količna</th>
						<th width="100">Kupovni</th>
						<th width="100">Srednji</th>
						<th width="100">Prodajni</th>
					</tr>
				</thead>
				<tbody>';
				foreach($json_data as $key => $value) { 
						
				print '
				<tr>
					<td>' . $json_data[$key]["Broj tečajnice"] . '</td>
					<td>' . $json_data[$key]["Datum primjene"] . '</td>
					<td>' . $json_data[$key]["Država"] . '</td>
					<td>' . $json_data[$key]["Šifra valute"] . '</td>
					<td>' . $json_data[$key]["Valuta"] . '</td>
					<td>' . $json_data[$key]["Jedinica"] . '</td>
					<td>' . $json_data[$key]["Kupovni za devize"] . '</td>
					<td>' . $json_data[$key]["Srednji za devize"] . '</td>
					<td>' . $json_data[$key]["Prodajni za devize"] . '</td>
				</tr>';
			}
			print '
			</tbody>
		</table>
	</body>
	<form action="http://localhost/apartmani/index.php?menu=1">
<center><input type="submit" value="Nazad"> </center>
</form>
</html>';
	
?>