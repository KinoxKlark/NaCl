<?php

	/*
	 *	RouterService
	 *	- Samuel Ernst
	 *	- Service Routeur - Retourne un controller pour une uri
	 */
	
	namespace Base\Services;
	
	use App\AbstrClass\BaseService;
	
	class RouterService extends BaseService
	{
		static protected $routes = array();
		
		/*
		 *	Retourne le controller à appeler pour l'uri donnée
		 *	- param  string $uri - uri de la page demandée
		 *	- return array - controller à appeler
		 */
		public function getController($uri)
		{
			$uri = '/'.trim($uri, '/');
			
			// Si l'uri est un fichier existant (image, script, etc)
			if(file_exists($uri))
			{
				
			}
			
			if(empty(self::$routes)) self::$routes = \App\Services::get('ConfigService')->getConfig('config/router.json');
			
			foreach(self::$routes as $name=>$route)
			{
				$params = self::compareRoute($route, $uri);
				
				if($params === false) continue;
				
				$return = array(
							'type' => 'controller',
							'name' => $name, 
							'controller' => $route->controller,
							'params' => $params,
						);
				
				return $return;
				
			}
			
			return array('type' => 'error', 'value' => '404');
		}
		
		protected function compareRoute($route, $uri)
		{
			$r = explode('/', $route->path);
			$u = explode('/', $uri);
			$params = array();
			
			if(count($r) == count($u))
			{
				for($i = 0;$i < count($r); $i++)
				{
					if(preg_match('#^\{.*\}$#is', $r[$i]))
					{
						$param = preg_replace('#^\{(.*)\}$#is', '$1', $r[$i]);
						$rule = isset($route->requirement->$param) ? $route->requirement->$param : '.*';
						if(preg_match('#^'.$rule.'$#is', $u[$i]))
						{
							$params[$param] = $u[$i];
						}
						else
						{
							return false;
						}
					}
					else
					{
						if($r[$i] != $u[$i]) return false;
					}
				}
				return $params;
			}
			return false;
		}
		
		public function getRoutes()
		{
			if(empty(self::$routes)) self::$routes = \App\Services::get('ConfigService')->getConfig('config/router.json');
			return self::$routes;
		}
		
		public function getRoute($r)
		{
			$rs = self::getRoutes();
			if(isset($rs->$r))
			{
				return $rs->$r->path;
			}
			else
			{
				return false;
			}
		}
		
		public function getName()
		{
			return 'RouterService';
		}
		
		public function getDescription()
		{
			return 'Router - Retourne le controller à appeler pour une uri donnée';
		}
	}