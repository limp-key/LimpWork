<?php

namespace Fork\Bin\Assembly;

class Juxtaposition{

    public static function Start(){
	$SearchingParameters = 'find ../route/ | grep ".php"';
	
	exec($SearchingParameters,$Route);
	
	if(is_array($Route)){
	    foreach($Route as $IncludeRoute){
		require_once $IncludeRoute;
	    }
	}
    }
}
