<?php

	$age = intval(18);
	
	$gender = array('homme', 'femme');


	$man = $gender[0];
	$woman = $gender[1];

	$character = $man;
	
	if($character == $man) {
		if($age < 18) {
			echo "Vous êtes un homme et vous êtes mineur";
		} else {
			echo "Vous êtes un homme et vous êtes majeur";
		}
	} else if($character == $woman) {
		if($age < 18) {
			echo "Vous êtes une femme et vous êtes mineure";
		} else {
			echo "Vous êtes une femme et vous êtes majeure";
		}		
	}

?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 3 (2) PHP</title>
	</head>


</html>