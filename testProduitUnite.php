<?php
	
	ini_set('display_errors','1');
	require_once("class/ProduitUnite.php");

	$c = new ProduitUnite(20,30);
	echo $c;

	echo "<br> Prix : ".$c->calculPrix();

?>