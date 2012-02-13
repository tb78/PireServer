<?php

 class clockObject extends defaultObject
 {
 	
 	function __construct( $Time = false )
 	{
 		if( $Time == false )
 		{
 			$Time = 'Europe/Amsterdam';
 		}
 	
 		$this -> object = array(
 			'group' => 'com.apple.ace.clock',
 			'class' => 'Snippet',
 			'properties' => array(
 				'clocks' => array( array(
 					'group' => 'com.apple.ace.clock',
 					'class' => 'Object',
 					'properties' => array(
 						'timezoneId' => 'Europe/Amsterdam',
 						'cityName' => 'Amsterdam',
 						'countryCode' => 'NL',
 						'countryName' => 'Amsterdam',
 						'unlocalizedCityName' => 'Amsterdam',
 						'unlocalizedCountryName' => 'Amsterdam',
 					),
 				) ),
 			)
 		);
 	}
 	
 	function __destruct()
 	{
 		
 	}
 	
 }

?>