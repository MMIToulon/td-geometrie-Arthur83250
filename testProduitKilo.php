<?php

	ini_set('display_errors','1');
	require_once("class/ProduitKilo.php");

	$c = new ProduitKilo(100,20);
	echo $c;

	echo "<br> Prix : ".$c->calculPrix();
	
?>