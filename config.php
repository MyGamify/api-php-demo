<?php
	define( "apiKey", "{yourApiKey}" );
	define( "idGame", "00012A" ); // id Test

	// Uncoment the mod you need
	define( "apiMod", "local" );
	// define( "apiMod", "dev" );
	// define( "apiMod", "prod" );

	switch ( apiMod )
	{
		case 'local':
			$ssl = false;
			$apiUrl = "http://127.0.0.1:8000/api/";
			break;
		case 'dev':
			/* Not implemented yet */
			$ssl = true;
			$apiUrl = "boby.my-gamify.fr/api";
			break;
		default:
			$ssl = true;
			$apiUrl = "https://www.my-gamify.fr/api/";
			break;
	}
?>