<?php

/*

{
	'properties':
	{
		'scrollToTop': False,
		'temporary': False,
		'dialogPhase': 'Completion',
		'views': [
		{
			'group': 'com.apple.ace.assistant', 
			'class': 'AssistantUtteranceView', 
			'properties':
			{
				'text': 'Falling back on the webservice. Please wait',
				'listenAfterSpeaking': False,
				'speakableText': 'Falling back on the webservice. Please wait',
				'dialogIdentifier': 'Misc#ident'
			}
		}
		]
	}, 
	'aceId': 'E24C93DE-EA60-418A-9928-FF0998775B7C',
	'group': 'com.apple.ace.assistant',
	'refId': 'ABD2BF66-E287-4372-B55E-61D075E64656',
	'class': 'AddViews'
}

{
	'group': 'com.apple.ace.clock',
	'class': 'Snippet',
	'properties':
	{
		'clocks':[
		{
			'group': 'com.apple.ace.clock',
			'class': 'Object',
			'properties':
			{
				'timezoneId': 'Europe/Amsterdam'
			}
		}
		]
	}
}

*/

 $Arr1 = array(
 				'group' => 'com.apple.ace.assistant',
 				'class' => 'AssistantUtteranceView',
 				'properties' => array(
 					'text' => 'Debug: ' . print_r( $_GET, 1 ),
 					'listenAfterSpeaking' => false,
 					'speakableText' => 'I cant recognize your command. I am sorry',
 					'dialogIdentifier' => 'Misc#identt'
 				)
 			);
 			
 $okay = array(
 				'group' => 'com.apple.ace.assistant',
 				'class' => 'AssistantUtteranceView',
 				'properties' => array(
 					'text' => "You're welcome!",
 					'listenAfterSpeaking' => false,
 					'speakableText' => "You're welcome!",
 					'dialogIdentifier' => 'Misc#identt'
 				)
 			);
 
 $ClockObj = array(
 						'group' => 'com.apple.ace.clock',
 						'class' => 'Object',
 						'properties' => array(
 							'timezoneId' => 'Europe/Istanbul',
 							'cityName' => 'Tokyo',
 							'countryCode' => 'JP',
 							'countryName' => 'Japan',
 							'unlocalizedCityName' => 'Tokyo',
 							'unlocalizedCountryName' => 'Japan',
 						),
 						//'properties' => "{ 'timezoneId': 'Europe/Amsterdam' }",
 					);
 
 $Arr2 = array(
 				'group' => 'com.apple.ace.clock',
 				'class' => 'Snippet',
 				'properties' => array(
 					'clocks' => array( array(
 						'group' => 'com.apple.ace.clock',
 						'class' => 'Object',
 						'properties' => array(
 							'timezoneId' => 'Europe/Istanbul',
 							'cityName' => 'Tokyo',
 							'countryCode' => 'JP',
 							'countryName' => 'Japan',
 							'unlocalizedCityName' => 'Tokyo',
 							'unlocalizedCountryName' => 'Japan',
 						),
 					) ),
 				)
 			);
 #$Arr2 = "{'group':'com.apple.ace.clock','class':'Snippet','properties':{'clocks':[{'group':'com.apple.ace.clock','class':'Object','properties':{'timezoneId':'Europe/Amsterdam'}}]}";

 $Arr = array( $Arr1 );

 if( $_GET['text'] == trim( 'thanks' ) )
 {
	
	echo json_encode( array( $okay ) );
 } elseif( eregi( 'time', $_GET['text'] ) )
 {
	
	echo json_encode( array( $Arr1, $Arr2 ) );
 } else {
 	echo json_encode( $Arr );
 }
 
?>