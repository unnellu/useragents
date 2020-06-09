<?php 
ini_set("display_errors",1);
error_reporting(E_ALL);


$gg= file(__DIR__."/1.txt");
foreach($gg as $m){
	$ex = explode(",", trim($m));
	$ex[2]=trim($ex[2]);
	$fd[$ex[2]]=$ex[2];
	//die();
}
file_put_contents(__DIR__."/ua.txt", implode("\n", $fd));
?>