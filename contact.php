<?php 
	print '
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		
		<title>Kontakt</title>
	</head>
<body>
	<header>
		<div class="hero-image" style="height: 10px;"></div>
		</header>
	<main>
		<h1>Kontaktna forma</h1>
		<div id="contact">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2855.217991601522!2d15.08256401497675!3d44.30546887910437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476223cea79742e7%3A0x74aa563fb3b3c115!2sApartmani%20Gajo!5e0!3m2!1shr!2shr!4v1578257095877!5m2!1shr!2shr" width="650" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></iframe>
			<form action="index.html" id="contact_form" name="contact_form" method="POST">
				<label for="fname">Vaše ime *</label>
				<input type="text" id="fname" name="firstname" placeholder="Vaše ime..." required><br>
				
				<label for="lname">Vaše prezime *</label>
				<input type="text" id="lname" name="lastname" placeholder="Vaše prezime..." required><br>
				
				<label for="lname">Vaš E-mail *</label>
				<input type="email" id="email" name="email" placeholder="Vaš e-mail..." required><br>
				
				<label for="country">Zemlja</label>
				<select id="country" name="country">
				  <option value="">Please select</option>
				  <option value="BE">Belgija</option>
				  <option value="IT">Italija</option>
				  <option value="SRB">Srbija</option>
				  <option value="HR" selected>Hrvatska</option>
				  <option value="AU">Austrija</option>
				  <option value="HU">Mađarska</option> 
				</select><br>
				
				<label for="subject">Predmet</label>
				<textarea id="subject" name="subject" placeholder="Napišite nešto..." style="height:50px"></textarea><br>
				
				<input type="submit" value="Submit">
			</form>
		</div>
	</main>

</body>
';
?>