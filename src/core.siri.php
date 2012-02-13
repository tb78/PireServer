<?php

 class Core
 {
 	var $response = false;
 	var $command = false;
 	var $location = false;
 	var $language = false;
 	
 	var $corePath = false;
 	var $coreRoute = false;
 	
 	function __construct()
 	{
 		$this -> corePath = dirname( __FILE__ );
 		require_once( $this -> corePath . '/objects/defaultObject.php' );
 		$this -> coreRoute = $this -> loadRoute();
 	}
 	
 	function loadRoute()
 	{
 		return include( $this -> corePath . '/config/route.php' );
 	}
 	
 	function setLocation( $Latitude, $Longitude )
 	{
 		$this -> location = array(
 			'latitude' => $Latitude,
 			'longitude' => $Longitude
 		);
 	}
 	
 	function setLanguage( $Language )
 	{
 		$this -> language = $Language;
 	}
 	
 	function doAction( $Command )
 	{
 		$this -> command = $Command;
 		$this -> processCommand();
 	}
 	
 	function processCommand()
 	{
 		//$this -> command;
 		
 		foreach( $this -> coreRoute AS $Key => $Value )
 		{
 			if( preg_match( $Key, $this -> command ))
 			{
 				$classProp = explode( '::', $Value );
 			
 				include_once( $this -> corePath . '/plugins/' . strtolower( $classProp[0] ) . '.php' );
 				
 				$Class = $classProp[0];
 				$Func = $classProp[1];
 				$ClassObj = new $Class;
 				
 				$this -> response = $ClassObj -> $Func( $this );
 			}
 		}
 	}
 	
 	function getResponse( )
 	{
 		if( $this -> response != false )
 		{
 			return $this -> response;
 		} else {
 		
 			$this -> loadObject( 'speak' );
			$this -> loadObject( 'button' );
 			$speakObject = new speakObject( 'Sorry, i dont recognize \''.$this -> command.'\'' );
			$buttonObject = new buttonObject( 'Test button' );
 			
 			return array( $speakObject -> getArr(), $buttonObject -> getArr() );
 		}
 	}
 	
 	function loadObject( $Object )
 	{
 		require_once( $this -> corePath . '/objects/' . $Object . 'Object.php' );
 	}
 	
 	function __destruct()
 	{
 		
 	}
 	
 }

?>