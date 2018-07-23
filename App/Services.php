<?php
	
	/*
	 * App Services
	 * - Gestion des services
	 */
	
	namespace App;
	
	class Services
	{
		static private $services = array();
		static private $s_list = array();
		
		/*
		 * 	Retourne le service demandé
		 *	- params string $name - nom du service
		 *	- params string $alias - alias au nom du service (permet d'instancié plusieurs fois le meme service
		 *	- return service
		 */
		static public function get($name, $alias = null)
		{
			Services::init();
			
			$n = (isset($alias)) ? $alias : $name;
			if(!isset(self::$services[$n]))
			{
				// if(is_callable(array(self::$s_list, $name)))
				// {
					$c = '\\'.str_replace('/', '\\', self::$s_list->$name);
					self::$services[$n] = new $c();
				// } else {
					// throw new \Exception('Le service demandé n\'existe pas. (name: <em>'.$name.'</em>, alias: <em>'.$alias.'</em>)');
				// }
			}
			
			return self::$services[$n];
		}
		
		/*
		 * Initialise la classe Services selon les besoins
		 */
		static public function init()
		{
			if(!isset(self::$services['ConfigService'])) self::$services['ConfigService'] = new \Base\Services\ConfigService();
			if(empty(self::$s_list)) self::$s_list = self::$services['ConfigService']->getConfig('config/services.json');
		}
	}