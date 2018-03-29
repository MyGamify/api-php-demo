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
	$chData = curl_exec($ch);
	$datas = explode("\r\n\r\n", $chData );

	if ( isset( $datas[2] ) )
	{
		/*
		 * Handdle HTTP 100 & 300
		 */
		foreach ( $datas as $key => $data )
		{
			if( json_decode( $data ) !== null )
			{
				$ret["header"] = $datas[ (int) $key -1 ];
				$ret["body"] = $datas[ (int) $key ];
			}
		}
	}
	elseif( isset( $datas[1] ) )
	{
		$ret["header"] = $datas[0];
		$ret["body"] = $datas[1];
	}
	else
	{
		$ret["body"] = $datas[0];
	}
	$ret["full"] = $chData;
	return $ret;
}

/**
 * @author Golga <r-ro@bulko.net>
 * @since 0.0.1 ( 2018-03-29 )
 *
 * @param Array $data
 * @param Bool $ful
 * @return Void
 */
function diplayGamifyCallBack( Array $data, Bool $full = false )
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
	
	if ( $full )
	{
		echo "<pre>" . $data["full"] . "</pre>";
	}
	else
	{
		echo "<h3>Header : </h3>";
		if ( isset( $data["header"] ) )
		{
			echo "<pre>" . $data["header"] . "</pre>";
		}
		echo "<pre>" . $data["header"] . "</pre>";
		echo "<h4>Body : </h4>";
		echo "<pre>" . $data["body"] . "</pre>";
	}
	echo "</div>";
}
?>