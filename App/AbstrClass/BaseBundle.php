<?php
	
	/*
	 *	BaseBundle
	 *	- Samuel Ernst
	 *	- Classe de base dont hérite un bundle
	 */
	
	namespace App\AbstrClass;
	
	abstract class BaseBundle
	{
		public function __construct()
		{
			$this->loadBundle();
		}
		
		/*
		 *
		 */
		public function callAction($str)
		{
			$controller = $this->callController($str);
			
			$d = explode(':', $str);
			if(sizeof($d) != 3) throw new \Exception('Le nom du controller n\'est pas correct. Il faut respecter la nomenclature "<em>bundle:controller:action</em>"');
			
			if(!is_callable(array($controller, $d[2]))) throw new \Exception('L\'action n\'existe pas pour ce controller. ('.$str.')');
			return $controller->$d[2]();
		}
		
		/*
		 *	params str $controller - Nom du controller (format xx:yy:zz)
		 *	return str - Page au format html
		 */
		public function callController($str)
		{
			$d = explode(':', $str);
			if(sizeof($d) != 3) throw new \Exception('Le nom du controller n\'est pas correct. Il faut respecter la nomenclature "<em>bundle:controller:action</em>"');
			
			$ctr = 'Bundles\\'.$d[0].'\\Controller\\'.$d[1];
			$controller = new $ctr();
			
			return $controller;
		}
		
		/*
		 *	params null
		 *	return void
		 *	- Charge les sources du bundle
		 *	  (voir dans /bundles/ExempleBundle)
		 */
		private function loadBundle()
		{
			// Load les sources
			// A discuter de l'utilité de cette méthode ici, c'est juste un exemple ;)
			
			// En fait c'est de la grosse merde, on s'en fou :P
		}
		
		/*
		 *	params null
		 *	return string
		 *	- Retourne le nom du bundle
		 */
		abstract public function getName();
		
		/*
		 *	params null
		 *	return string
		 *	- Retourne la description du bundle
		 */
		abstract public function getDescription();
	}