<?php
abstract class Produit
{
	static $nb_produits = 0;
	
	public function __construct(){
		echo "Construction d'un produit";
		self::$nb_produits++;
	}
	
	abstract public function calculPrix();
}

?>