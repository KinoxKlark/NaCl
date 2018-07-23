<?php
	
	/*
	 * App Core
	 * - Coeur de l'application
	 *   tout commence ici !!
	 */
	
	namespace App;
	
	class Core {
		
		static $config = array();
		
		// 1 - Récuperer la requête
		
		// 2 - Appeler le routeur
		
		// 3 - Charger le bundle concerné
		
		// 4 - Appeler le bon controller
		
		// 5 - Retourner le code HTML de la page
		
		/*
		 *	
		 */
		public function init()
		{
			// var_dump($_SERVER);
			// var_dump($_SERVER['REQUEST_METHOD']);
			// var_dump($_REQUEST);
			
			if(empty(self::$config))
			{
				self::$config = \App\Services::get('ConfigService')->getConfig('config/infos.json');
			}
			
			$toCall = \App\Services::get('RouterService')->getController($_SERVER['REQUEST_URI']);
			
			// var_dump($toCall);
			
			if(isset($toCall['type']))
			{
				switch($toCall['type']){
					case 'controller':
						$html = \App\Bundles::call($toCall['controller'], $toCall['params']);
						break;
					case 'error':
						throw new \Exception($toCall['value']);
						break;
				}
			}
			
			// $html = '';
			
			return $html;
		}
		
	}