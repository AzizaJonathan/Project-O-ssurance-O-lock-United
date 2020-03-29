<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>O'ssurance</title>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,900&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="left">
			<h1 class="color53" >O'ssurance</h1>
			<h2 class="color53" >Calcul du tarif de votre client</h2>

			<form action="array.php" method="POST">
				<label class="black900 block" for="age">Âge</label>
				<input type="number" name="age">
				<br>
				<br>
				
				<label class="black900 block" for="annees_permis">Années de permis</label>
				<input type="number" name="annees_permis">
				<br>
				<br>
				
				<label class="black900 block" for="accidents">Nombre d'accidents responsables</label>
				<input type="number" name="accidents">
				<br>
				<br>
				
				<label class="black900 block" for="annees_assureur">Années chez son assureur</label>
				<input type="number" name="annees_assureur">
				<br>
				<br>

				<input class="superbutton" type="submit" value="Calculer le tarif">
			</form>

			<?php

			$palier = 1;

			if (isset($_POST['age'],$_POST['annees_permis'],$_POST['accidents'],$_POST['annees_assureur'])) {
				if ($_POST['accidents'] > 0) {
					$palier = $palier - $_POST['accidents'];
				}
				if ($_POST['annees_permis'] > 2) {
					$palier++;
				}
				if ($_POST['age'] > 25) {
					$palier++;
				}
				if ($_POST['annees_assureur'] > 5 && $palier > 0){
					$palier++;
                }
                if ($_POST['accidents'] >= 4) {
					$palier = 0;
				}
                
                $color = array (
                    "<strong class=\"grey\"> Refus </strong>",
                    "<strong class=\"red\"> Rouge </strong>",
                    "<strong class=\"Orange\"> Orange </strong>",
                    "<strong class=\"green\"> Vert </strong>",
                    "<strong class=\"blue\"> Bleu </strong>"
               );

                $color = $color[$palier];

                // var_dump($color);

				echo "<p>Votre client a droit au tarif" . $color . ".</p>";
			}

			?>
		</div>
		<div class="right">
			<img src="images/voitures.jpg" alt="voiture">
		</div>
	</body>
</html>
