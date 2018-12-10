<?php

	$numbers = get_numbers();
	$numberSup = get_numberSup();

	/*partie html*/
	
	echo "<html>";
	echo 	'<head>
				<meta charset="UTF8"/>
				<title>Loto</title>
				<link rel="stylesheet" type="text/css" href="assets/style/style.css">
			</head>';
	echo "<body>";
	echo 	"<div class='background'>";
	echo 		"<div class='titre'>LOTO</div><br>";
	echo		"<div class='container'>";
	echo			"<div class='listenum'>Liste des numéros: &nbsp;</div>";
	echo 			"<div class='numbers'>";
						foreach ($numbers as $value) {
							echo "<div class='number'>" . $value . "</div>";
						}
						echo "<div class='numberSup'>" . $numberSup . "</div>";
						echo "<button class='positionbt' onclick='window.location.reload(true);'>REJOUER</button>";
	echo 			"</div>";
	echo 		"</div>";
	echo 		'<table cellspacing=20><tbody>';

	$i = 0;

	for($ligne=0;$ligne<7;$ligne++) {
		echo "<tr>";
		for($colonne=1;$colonne<=7;$colonne++) {
			$i++;
			if(in_array($i,$numbers)){
				echo "<td class='selected'>" . $i . "</td>";
			} else {
				echo "<td>" . $i . "</td>";
			}
		}
		echo "</tr>";
	}

	echo "</table>";
	echo "</div>";
	echo "</body>";

	function get_numbers(){
		$numbers = [];
		$nbNumber = 0;
		$i = 0;

		while($nbNumber < 5) {
			$valeur = rand(1,49);
			if(in_array($valeur, $numbers) === false){
				$numbers[$i] = $valeur;
				$i++;
				$nbNumber++;
			} else {
				
			}
		}
        return $numbers;
    }
    
    function get_numberSup(){
        return rand(1,9);
    }
?>