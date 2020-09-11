<?php
	/**
	 * 
	 */
	class Visiteur 
	{
		private $nom ; 
		protected $age ; 
		function __construct($aNom)
		{
			$this->setName($aNom) ; 
		}
		public function getName()
		{
			return $this->nom ; 
		}
		public function setName($nom)
		{
			$this->nom = $nom ; 
		} 
		//$visite = new Visiteur('kaire') ; 
	}
?>