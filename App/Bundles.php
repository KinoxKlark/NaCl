<?php
	
	namespace App;
	
	class Bundles
	{
		static public function call($name, $params = array())
		{
			if(\App\Services::get('ConfigService')->isValideBundleName($name))
			{
				$n = explode(':', $name);
				return self::getAction($n[0], $n[1], $n[2], $params);
			}
			else
			{
				throw new \Exception('Le nom du controller n\'est pas correct. Il faut respecter la nomenclature "<em>bundle:controller:action</em>"');
			}
		}
		
		static public function getAction($b, $c, $a, $params)
		{
			$controller = self::getController($b, $c);
			// var_dump($controller);
			if(!is_callable(array($controller, $a))) throw new \Exception('L\'action n\'existe pas pour ce controller. ('.$b.':'.$c.':'.$a.')');
			return $controller->$a($params);
		}
		
		static public function getController($b, $c)
		{
			$bundle = self::getBundle($b);
			
			$c = 'Bundles\\'.$b.'\\Controller\\'.$c;
			return new $c();
		}
		
		static public function getBundle($b)
		{
			$c = '\Bundles\\'.$b.'\\'.$b;
			return new $c();
		}
	}