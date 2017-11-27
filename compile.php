<?php
require "lessc.inc.php";
try{
	$parser = new Less_Parser();
	$parser->parseFile( 'less/style.less', 'css/' );
	$css = $parser->getCss();
}catch(Exception $e){
	$error_message = $e->getMessage();
}