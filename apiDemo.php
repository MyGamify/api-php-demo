<?php
	echo "<div class='test-api'>";
	echo "<h2>API Hello World</h2>";
	diplayGamifyCallBack( getCurlData( $apiUrl . "test", [], $ssl ), displayFull );
	
	echo "<h2>API Gift</h2>";
	$gamifyCallBack = getCurlData( $apiUrl . "gift/" . idGame, [
		[
			"id" => 1, // (Int 11) identifiant unique du lot
			"origine" => "audio", // (String 255) origine gift
			"name" => "Un mug 🦄", // (String 255) nom du lot
			"ig" => "2017-05-12 00:00:00" // (Date time (0000-00-00 00:00:00) ) instant gagnant
		],
		[ "id" => 2, "origine" => "web", "name" => "Un mug 🦄", "ig" => "2017-05-12 00:00:00" ],
		[ "id" => 3, "origine" => "sms", "name" => "Un mug 🦄", "ig" => "2017-05-12 00:00:00" ],
	], $ssl );
	diplayGamifyCallBack( $gamifyCallBack, displayFull );
	echo "</div>";

	echo "<div class='test-api'>";
	echo "<h2>API Stats</h2>";
	$gamifyCallBack = getCurlData( $apiUrl . "stats/" . idGame, [
		[
			"id" => 1, // (Int 11) identifiant unique de la donnée
			"origine" => "audio", // (String 255) origine stats
			"number_call" => 12, //  (Int 11) nombre d'appels
			"number_unfactured_call" => 6, // (Int 11) temps cumulé des appels non facturés en ms
			"number_sms" => 3, // (Int 11) nombre de sms
			"calling_duration" => "80000", // (Int 11) temps cumulé des appels en ms
			"calling_average" => "500", // (Int 11) temps moyen des appels en ms
			"start_at" => "2017-05-12 00:00:00", // (Date time (0000-00-00 00:00:00) ) début de la tranche donnée
			"end_at" => "2017-05-12 00:00:05"  // (Date time (0000-00-00 00:00:00) ) fin de la tranche donnée
		],
		[ "id" => 2, "origine" => "web", "number_call" => 12, "number_unfactured_call" => 6, "number_sms" => 3, "calling_duration" => "80000", "calling_average" => "500", "start_at" => "2017-05-12 00:00:00", "end_at" => "2017-05-12 00:00:05" ],
		[ "id" => 3, "origine" => "sms", "number_call" => 12, "number_unfactured_call" => 6, "number_sms" => 3, "calling_duration" => "80000", "calling_average" => "500", "start_at" => "2017-05-12 00:00:00", "end_at" => "2017-05-12 00:00:05" ],
	], $ssl );
	diplayGamifyCallBack( $gamifyCallBack, displayFull );
	echo "</div>";

	echo "<div class='test-api'>";
	echo "<h2>API Played</h2>";
	$gamifyCallBack = getCurlData( $apiUrl . "played/" . idGame, [
		[
			"id" => 1, // (Int 11) identifiant unique de la donnée
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
			"no_card" => "12345678", // (Int 11) numéros de carte
			"optin" => 1 // (Bolean) optin oui/non
		],
		[ "id" => 2, "origine" => "web", "audio" => "https://www.url-audio", "participation_date" => "2017-05-12 00:00:00", "gift" => 2, "phone" => "33000000000", "phone_bis" => "33000000000", "email" => null, "last_name" => "Dhoe", "first_name" => "Jhon", "address" => "32 rue du mirail", "address_bis" => null, "post_code" => "33000", "city" => "Bordeaux", "country" => "France", "no_card" => "12345679", "optin" => 0 ],
		[ "id" => 3, "origine" => "sms", "audio" => "https://www.url-audio", "participation_date" => "2017-05-12 00:00:00", "gift" => 3, "phone" => "33000000000", "phone_bis" => "33000000000", "email" => null, "last_name" => "Durant", "first_name" => "Arthur", "address" => "32 rue du mirail", "address_bis" => null, "post_code" => "33000", "city" => "Bordeaux", "country" => "France", "no_card" => "12345610", "optin" => 1 ]
	], $ssl );
	diplayGamifyCallBack( $gamifyCallBack, displayFull );
	echo "</div>";
?>