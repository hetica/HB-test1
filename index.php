<?php
	/*
	 * la documentation
	 * Les '*' ne sont pas obligatoires
	 * mais ils sont habituels
	 */
	$prenom = "Benoit" ;
	
	function multiplier($a, $b = 2) {
		return $a * $b ;
	}
	
	function aireCercle($rayon) {
		return pi() * pow($rayon, 2) ;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Cours PHP</title>	
	</head>
	
	<body>
		<h1>Cours PHP</h1>
		
			<?php 
			echo "Salut " . $prenom ;
			
			echo "<br/>" . multiplier(5) ;
			$rayon = 6 ;
			echo "<br/> l'aire de " . $rayon . " est " . aireCercle($rayon) ;
			?>
			<h3>Les tableaux</h3>
			<?php
			$stagiaires = array(
				array(	'prenom' => "Alain" ,
						'age' => 44),
				array(	'prenom' => "Jean-Michel",
						'age' => 23),
				array(	'prenom' => "Abdel", 
						'age' => 19),
				array(	'prenom' => "Benoit", 
						'age' => 49),
			);
			
			foreach ($stagiaires as $personne) {				
				echo "<p>" . $personne['prenom'] . " a " . $personne['age'] . " ans</p>" ;
			}
			
			
			?>
	</body>
</html>
