<?php
	define( "apiKey", "{yourApiKey}" );
	define( "idGame", "{yourIdGame}" );

	// Uncoment the mod you need
	define( "apiMod", "local" );
	// define( "apiMod", "dev" );
	// define( "apiMod", "prod" );
	// define( "apiMod", "hcnx" );

	/**
	 * false: Display only the last http header & body response.  
	 * true: Display all.  
	 */
	define( "displayFull", true );

	switch ( apiMod )
	{
		case 'local':
			$ssl = false;
			$apiUrl = "http://127.0.0.1:8000/apiV3/";
			break;
		case 'dev':
			$ssl = true;
			$apiUrl = "https://preprod.mygamify.fr/apiV3";
			break;
		case 'hcnx':
			$ssl = true;
			$apiUrl = "https://www.hcnx-tools.com/apiV3";
			break;
		default:
			$ssl = true;
			$apiUrl = "https://www.mygamify.fr/apiV3/";
			break;
	}
?>