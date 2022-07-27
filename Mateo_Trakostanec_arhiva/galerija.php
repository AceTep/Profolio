<!doctype html>
<html>
	<head>
	<?php
	$title = "Foto Studio Blic | Galerija";
	$description = "Web stranica Foto Studija Blic"; 
	$keywords = "foto, studio, blic"; 
		include "includes/head.php";
	?>
    <script src="js/cijeli-zaslon.js"></script>
	</head>

	<body>
		<div class="container">
		<?php include "includes/navigation.php"; ?>
		    <br><br><br><br><br>
            <h2>Galerija slika</h2><hr>
            <div id="galerija">
                <div>
                    <img src="images/gallery/DSC_0296.jpg" alt="Rijeka terminal" />
                    <img src="images/gallery/rizalazak.jpg" alt="Riječina zalazak" />
                    <img src="images/gallery/planine.jpg" alt="Planine" />
                </div> 
                <div>
                    <img src="images/gallery/cvijet.jpg" alt="Cvijet" />
                    <img src="images/gallery/rijekaart.jpg" alt="Rijeka stube art" />
                    <img src="images/gallery/gameofthrones.jpg" alt="Game of thrones" />
                </div>   
                <div>
                    <img src="images/gallery/planine2.jpg" alt="Planine iz zagorja" />
                    <img src="images/gallery/undeground.jpg" alt="Bleping computer" />
                    <img src="images/gallery/kamenjak.jpg" alt="Kamenjak pogled" />
                </div>   
                <div>
                    <img src="images/gallery/dubrovnik.jpg" alt="Dubrovnik stari grad" />
                    <img src="images/gallery/budapesttower.jpg" alt="Budimpešta panorama dvorca" />
                    <img src="images/gallery/budapestbridge.jpg" alt="Budimpešta grad" />
                </div>
            </div>
            <hr>
		</div>
	</body>
</html>
