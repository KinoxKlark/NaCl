<?php

	/*
	 *	TemplateFunctionsService
	 *	- Samuel Ernst
	 *	- Service de fonctions des template
	 */
	
	namespace Base\Services;
	
	use App\AbstrClass\BaseService;
	
	class TemplateFunctionsService extends BaseService
	{
		
		
		/*
		 *	Vérifie si le template est valide
		 */
		public function call($function, $params)
		{
			switch($function)
			{
				case 'getUrl':
					$p = isset($params[1]) ? json_decode(preg_replace('#([^\\\]?)\'#isu', '$1"', $params[1]), true) : array();
					return self::getUrlFromRoute($params[0], is_array($p) ? $p : array());
					break;
				case 'getPrevUrl':
					return self::getPrevUrl();
					break;
				case 'dump':
					return self::dump($params[0]);
					break;
				case 'sanitize':
					return self::sanitize($params[0]);
					break;
			}
		}
		
		/*
		 *	Retourne une chaine de caractère de façon utilisable dans une url
		 */
		public function sanitize($str)
		{
			$str = strtolower($str);
			$str = str_replace(' /_\'"?!.,:;[]{}', '-', $str);
			$str = str_replace(' ', '-', $str);
			$str = str_replace('/', '-', $str);
			
			$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
			$str = strtr( $str, $unwanted_array );
			
			return $str;
		}
		
		/*
		 *	Fait un dump de $var
		 */
		public function dump($var)
		{
			// return '<pre>'.print_r(\App\Services::get('TemplateService')->getVariable($var), true).'</pre>';
		}
		
		/*
		 *	Transforme une route en url
		 */
		public function getUrlFromRoute($route, $p)
		{
			if(($r = \App\Services::get('RouterService')->getRoute($route)) !== false)
			{
				foreach($p as $t=>$d)
				{
					$r = preg_replace('#\{ *'.$t.' *\}#isu', self::sanitize($d), $r);
				}
				
				return $r;
			}
			return null;
		}
		
		/*
		 *	Retourne l'url de la page depuis laquel le client arrive
		 */
		public function getPrevUrl()
		{
			return $_SERVER['HTTP_REFERER'];
		}
		
		public function getName()
		{
			return 'TemplateFunctionsService';
		}
		
		public function getDescription()
		{
			return 'Gère les fonctions dans les templates';
		}
	}