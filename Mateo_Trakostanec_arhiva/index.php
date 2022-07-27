<!doctype html>
<html>
	<head>
	<?php
	$title = "Foto Studio Blic | Početna";
	$description = "Web stranica Foto Studija Blic"; 
	$keywords = "foto, studio, blic"; 
		include "includes/head.php";
	?>
	<script src="js/date.js"></script>
	</head>

	<body>
	<br><br>
	<?php include "includes/header.php"; ?>
		<div class="container">
		<?php include "includes/navigation.php"; ?>
			<div class="row">
				<br><br>
				<div class="col-12 col-md-6 col-sm-6">
					<img class="divimage" src="images/photographer.png" alt="https://unsplash.com/photos/cdksyTqEXzo?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink"/>
					<!--https://unsplash.com/photos/cdksyTqEXzo?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink-->
				</div>
				<div class="cont col-12 col-md-6 col-sm-6">
				<div class="content">
						<h2>Matija Matejčić</h2>
						<p>
							Fotograf i snimatelj - vlasnik
						</p>
					</div>
				</div>	
			</div> 
			<div class="row">
				<div class="cont col-12 col-md-6 col-sm-6">
					<div class="content" style="text-align: justify ;">
						<p>
							<i>"Profesionalni fotograf, bavim se slikanjem žive i mrtve prirode. Vodim svoj Foto studio "Blic". 
							Volim putovati i istraživati nove krajolike."</i> <br> - Matija Matejčić
					</div>
				</div>
				<div class="col-12 col-md-6 col-sm-6">
					<img class="divimage" src="images/backdrop.jpg" alt=""/>
				</div>
			</div>
			<br>
		</div>
		<?php include "includes/footer.php"; ?>
	</body>
</html>
