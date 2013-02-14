<?php

Autoloader::map(array(
	'SimplePie' => path('bundle').'rssparser/libraries/simplepie/SimplePie.php',	
	'rssparser' => path('bundle').'rssparser/rssparser.php',
));

Autoloader::underscored(array(
 	'SimplePie' => path('bundle').'rssparser/libraries/simplepie/SimplePie',
));

IoC::singleton('simplepie', function(){
	$sp = new SimplePie();
	return $sp;
});