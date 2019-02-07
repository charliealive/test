<?php
function makeHelloWorld($name) {
	$i = 0; 
	return function() use($name, &$i){ echo $name."\n"; $i++; echo $i."\n"; }; 
	} 
	$hello1 = makeHelloWorld("test"); 
	$hello2 = makeHelloWorld("test1"); 
	$hello1(); 
	$hello1(); 
	$hello1(); 
	$hello2(); 
#闭包
?>