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
			
			echo "<h3>TP 5</h3>" ;			
			$clients = array(
				array('Monique', '55', 'f') ,
				array('Jean', '23', 'm') ,
				array('Frédéric', '45', 'm') ,
				array('Noémie', '34', 'f') ,
				array('Calypso', '20', 'f') ,
				array('Titouan', '22', 'm') ,
				array('Priscilla', '27', 'f') ,
				array('Etienne', '56', 'm') ,
				array('Amélie', '41', 'f') ,
				) ;
			//echo "<pre>" . print_r($clients) . "</pre>" ;
			
			foreach ($clients as $client)
			{
				if ($client[1] > 18 AND $client[1] < 41 AND $client[2] == "f" ) 
				{
					echo $client[0] . " est une ménagère de moins de 40 ans<br/><br/>" ;
				}
			}
			
			$cpt = 0 ;
			do
			{
				$pair = rand(0, 999) ;
				$impair1 = rand(0 , 999) ;
				$impair2 = rand(0 , 999) ;
				$cpt++ ;
				$s = "" ;
				if ($cpt > 1) { $s = "s" ; }
				if ($pair % 2 == 0 AND $impair1 % 2 == 1 AND $impair2 % 2 == 1)
				{
					echo "<h3>TP 6</h3>" ;
					echo $pair . "<br/>" . $impair1 . "<br/>" . $impair2 . "<br/>" ;
					echo "<br/>Il a fallu " . $cpt . " coup" . $s . " pour y arriver" ;
				}
			} while ($pair % 2 != 0 OR $impair1 % 2 != 1 OR $impair2 % 2 != 1)
			?>
	</body>
</html>
