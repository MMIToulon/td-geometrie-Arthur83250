<?php

class ProduitUnite extends Produit{

	private $nbVendu;
	private $prixUnite;
	
	public function __construct($nbVendu, $prixUnite){
		parent::__construct();
		$this->nbVendu=$nbVendu;
		$this->prixUnite=$prixUnite;
	}
	
	 abstract public function calculPrix(){
		return ($this->nbVendu*$this->prixUnite);
	}
}

?>

