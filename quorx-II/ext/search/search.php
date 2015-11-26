<?php
/**
*	Easy Search Redirect (GeHackE)
*	@extension search
*	@dev Michael McCouman Jr.
*	@date 04.26.2015
*
*	@info Hier muss noch <https://domain.tld> und <feedname> über php firtz dings vars, ausgelesen werden.
*		dann muss man nicht mehr die gesamte url im formular mitschleifen.
*/

if ( isset( $_GET["s"] ) && !empty( $_GET["s"] ) && isset( $_GET["r"] ) && !empty( $_GET["r"] ) ) {

	#laber%20rababer
	$tag = @$_GET["s"]; 
	
	#<https://domain.tld>/<feedname>/show/search/ 
	$url = @$_GET["r"]; 

	header('location: ' . $url . '/show/search/' . $tag);
}

?>