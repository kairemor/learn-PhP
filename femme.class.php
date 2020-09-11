<?php
	/**
	 * 
	 */
	include_once 'Visiteur.class.php';

	class Femme extends Visiteur
	{
		function __construct($nom , $age)
		{
			$this->setName($nom) ; 
			$this->age = $age ; 
		}
		//$fatou = new Femme("fatou" , 19) ; 
		//echo $fatou->age ; //
	}
?>