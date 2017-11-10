<?php

class ProduitKilo extends Produit{

	private $poids;
	private $prixKilo;
	
	public function __construct($poids, $prixKilo){
		parent::__construct();
		$this->poids=$poids;
		$this->prixKilo=$prixKilo;
	}
	
	 abstract public function calculPrix(){
		return ($this->poids*$this->prixKilo);
	}
}

?>