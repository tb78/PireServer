<?php
 
 class Time {
 	
 	function CurrentTime( $Core )
 	{
		$Core -> loadObject( 'speak' );
		$Core -> loadObject( 'clock' );
		
		$Rand = rand( 1, 3 );
		
		$speakObject = new speakObject( 'The current time in Amsterdam is:', 'The current time in Amsterdam is '.date('H:i a') );
		$clockObject = new clockObject( 'Europe/Amsterdam' );
				
 		
		return array( $speakObject -> getArr(), $clockObject -> getArr() );
 	}
 	
 	function Howareyou( $Core )
 	{
		$Core -> loadObject( 'speak' );
		
		$Rand = rand( 1, 3 );
		
		switch( $Rand ) {
			case 1:
				$Object = new speakObject( 'Fine, thanks for asking!', false, true );
				break;
			case 2:
				$Object = new speakObject( 'I\'m good, thanks for asking!', false, true );
				break;
			case 3:
				$Object = new speakObject( 'I\'m still alive!', false, true );
				break;
			default:
				$Object = new speakObject( 'Fine, thanks for asking!', false, true );
				break;
 		}
 			
		return array( $Object -> getArr() );
 	}
 	
 }
 
?>