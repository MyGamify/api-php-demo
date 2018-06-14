<?php
	define( "apiKey", "{yourApiKey}" );
	define( "idGame", "{yourIdGame}" );

	// Uncoment the mod you need
	// define( "apiMod", "local" );
	// define( "apiMod", "dev" );
	define( "apiMod", "prod" );

	/**
	 * false: Display only the last http header & body response.  
	 * true: Display all.  
	 */
	define( "displayFull", false );

	switch ( apiMod )
	{
		case 'local':
			$ssl = false;
			$apiUrl = "http://127.0.0.1:8000/apiV2/";
			break;
		case 'dev':
			$ssl = true;
			$apiUrl = "preprod.mygamify.fr/apiV2";
			break;
		default:
			$ssl = true;
			$apiUrl = "https://www.mygamify.fr/apiV2/";
			break;
	}
?>