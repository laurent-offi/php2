<?php

	$age = array('15', '18');

	$age_mark = $age[0];
	$age_sarrah = $age[1];


		if($age_mark < 18) {
			$minor = "mineur.";
		} else {
			$major = "majeur.";
		}

		if($age_sarrah < 18) {
			$minor = "mineure.";
		} else {
			$major = "majeure.";
		}

?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 1 (2) PHP</title>
	</head>

	<body>


		<?php echo "Mark a actuellement " . $age_mark . " ans, il est donc " . $minor; ?>
		<br />
		<?php echo "Sarrah a actuellement " . $age_sarrah . " ans, elle est donc " . $major; ?>
	</body>

</html>