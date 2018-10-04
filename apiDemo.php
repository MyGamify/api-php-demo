<?php
	echo "<div class='test-api'>";
	echo "<h2>API Hello World</h2>";
	diplayGamifyCallBack( getCurlData( $apiUrl . "test", 
		[], 
	$ssl ), 
	displayFull );
	
	echo "<h2>API Gift</h2>";
	$gamifyCallBack = getCurlData( $apiUrl . "gift/" . idGame, 
		[
			"key" => 1, // (Int 11) identifiant unique du lot
			"origine" => "audio", // (String 255) origine gift
			"name" => "Un mug 🦄", // (String 255) nom du lot
			"ig" => "2017-05-12 00:00:00" // (Date time (0000-00-00 00:00:00) ) instant gagnant
		],
		[ "key" => 2, "origine" => "web", "name" => "Un mug 🦄", "ig" => "2017-05-12 00:00:00" ],
		[ "key" => 3, "origine" => "sms", "name" => "Un mug 🦄", "ig" => "2017-05-12 00:00:00" ],
	], $ssl );
	diplayGamifyCallBack( $gamifyCallBack, displayFull );
	echo "</div>";
	echo "<div class='test-api'>";
	echo "<h2>API Played</h2>";
	$gamifyCallBack = getCurlData( $apiUrl . "played/" . idGame, [
		[
			"key" => 1, // (Int 11) identifiant unique de la donnée
			"origine" => "audio", // (String 255) origine stats
			"audio" => "https://www.url-audio", // (URL valide et accessible en get) fichier audio
			"participation_date" => "2017-05-12 00:00:00", // (Date time (0000-00-00 00:00:00) ) date de la participation
			"gift" => null, // (Int 11) id du lot gagné
			"phone" => "33000000000", // (String 11) n° de téléphone au format international
			"phone_bis" => "33000000000", // (String 11) n° de téléphone bis au format international
			"email" => "emai@dmain.ext", // (Email) email du participant
			"last_name" => "Durant", // (String 255) nom du participant
			"first_name" => "Arthur", // (String 255) prénom du participant
			"address" => "32 rue du mirail", // (String 255) addresse du participant
			"address_bis" => null, // (String 255) addresse bis du participant
			"post_code" => "33000", // (String 255) code postal du participant
			"city" => "Bordeaux", // (String 255) ville du participant
			"country" => "France", // (String 255) pays du participant
			"no_card" => "12345678", // (String 255) numéros de carte
			"number_sms" => null, // (Int 11) nombre de sms
			"calling_duration" => 200, // (Int 11) durée d'appel en seconde
			"optin" => 1, // (Bolean) optin oui/non
			"birth_date" => "2000-03-14", // (Date format YYYY-MM-DD) Date de naissance
			"status" => 0 // (Int) Status de la participation (obligatoire)
		],
		[ "key" => 2, "origine" => "web", "audio" => "https://www.url-audio", "participation_date" => "2017-05-12 00:00:00", "gift" => 2, "phone" => "33000000000", "phone_bis" => "33000000000", "email" => null, "last_name" => "Dhoe", "first_name" => "Jhon", "address" => "32 rue du mirail", "address_bis" => null, "post_code" => "33000", "city" => "Bordeaux", "country" => "France", "no_card" => "12345679", "number_sms" => null,
			"calling_duration" => null, "optin" => 0, "status" => 14 ],
		[ "key" => 3, "origine" => "sms", "audio" => "https://www.url-audio", "participation_date" => "2017-05-12 00:00:00", "gift" => 3, "phone" => "33000000000", "phone_bis" => "33000000000", "email" => null, "last_name" => "Durant", "first_name" => "Arthur", "address" => "32 rue du mirail", "address_bis" => null, "post_code" => "33000", "city" => "Bordeaux", "country" => "France", "no_card" => "12345610", "number_sms" => 4,
			"calling_duration" => null, "optin" => 1, "status" => 5 ]
	], $ssl );
	diplayGamifyCallBack( $gamifyCallBack, displayFull );
	echo "</div>";
?>
