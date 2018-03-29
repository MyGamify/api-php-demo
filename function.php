<?php
/**
 * @author Golga <r-ro@bulko.net>
 * @since 0.0.1 ( 2018-03-06 )
 *
 * @param String $url
 * @param Array|array $fields
 * @param Bool|boolean $https
 * @param String|null $login
 * @return Array
 */
function getCurlData( String $url, Array $fields = [], Bool $https = false, String $login = null )
{
	$ch = curl_init();
	$data_json = json_encode( $fields );

	curl_setopt( $ch, CURLOPT_URL, $url );
	curl_setopt( $ch, CURLOPT_POST, true );

	// Login HTTP use to access to development serv
	if( $login )
	{
		curl_setopt($ch, CURLOPT_USERPWD, $login);
	}
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $data_json );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt($ch, CURLOPT_HEADER, true); // Display Http header
	curl_setopt( $ch, CURLOPT_HTTPHEADER, [
		"content-type: application/json",
		'content-length: ' . strlen( $data_json ),
		"gamifyKey: " . sha1( apiKey . md5( date('Y-m-d') ) ) 
	] );
	if ( !$https )
	{
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	}
	$data = explode("\r\n\r\n", curl_exec($ch) );

	if ( isset( $data[1] ) )
	{
		$ret["header"] = $data[0];
		$ret["body"] = $data[1];
	}
	else
	{
		$ret["body"] = $data[0];
	}
	return $ret;
}

/**
 * @author Golga <r-ro@bulko.net>
 * @since 0.0.1 ( 2018-03-29 )
 *
 * @param Array $data
 * @return Void
 */
function diplayGamifyCallBack( Array $data )
{
	$dataJson = json_decode( $data["body"] );
	if ( isset( $dataJson->success ) )
	{
		$class = "success";
	}
	else
	{
		$class = "error";
	}
	echo "<div class='api-data " . $class . "'>";
		echo "<h3>Header : </h3>";
		echo $data["header"];
		echo "<h4>Body : </h4>";
		echo "<pre>" . $data["body"] . "</pre>";
	echo "</div>";
	
}
?>