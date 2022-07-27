<!doctype html>
<html>
	<head>
	<?php
	$title = "Foto Studio Blic | Kontakt";
	$description = "Web stranica Foto Studija Blic"; 
	$keywords = "foto, studio, blic"; 
		include "includes/head.php";
	?>
	<script src="js/date.js"></script>
	</head>
	<body>
		<div class="container">
		<?php include "includes/navigation.php"; ?>
		<br><br><br>
				<div class="box">
					<h1>Kontaktirajte nas</h1>
					<div class="row">
						<div class="contact-left col-12 col-lg-8 col-md-12 col-sm-12">
							<h3>Pošaljite nam upit</h3>
							<form>
								<div class="row">
									<div class="col-12 col-lg-4 col-md-12 col-sm-12">
										<label">Name</label>
										<input type="text" placeholder="Ivan Horvat">
									</div>
									<div class="col-12 col-lg-4 col-md-12 col-sm-12">
										<label">Phone</label>
										<input type="text" placeholder="+385/98 1234 569">
									</div>
								</div>
								<div class="row">
									<div class="col-12 col-lg-4 col-md-12 col-sm-12">
										<label">Email</label>
										<input type="email" placeholder="ivan.horvat@gmail.com">
									</div>
									<div class="col-12 col-lg-4 col-md-12 col-sm-12">
										<label">Subject</label>
										<input type="text" placeholder="Naslov">
									</div>
								</div>
								<label>Poruka</label>
								<textarea rows="5" placeholder="Napišite poruku"></textarea>

								<button type="submit">Pošalji</button>
							</form>

						</div>
						<div class="contact-right col-12 col-lg-4 col-md-12 col-sm-12">
						<h3>Naš kontakt</h3>
							<table>
								<tr>
									<td>Email</td>
									<td><a href="mailto:fotostudioblic@gmail.com">fotostudioblic@gmail.com</a></td>
								</tr>
								<tr>
									<td>Telefon</td>
									<td>051/123 456</td>
								</tr>								
								<tr>
									<td>Adresa</td>
									<td>Ul. Radmile Matejčić 5 <br>51000, Rijeka</td>
								</tr>
							</table>
						</div>
					</div>
            </div>
		</div>
	</body>
</html>
