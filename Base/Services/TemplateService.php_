<?php

	/*
	 *	TemplateService
	 *	- Samuel Ernst
	 *	- Service template
	 */
	
	namespace Base\Services;
	
	use App\AbstrClass\BaseService;
	
	class TemplateService extends BaseService
	{
		// Liste des status
		static public $NOTHING_INTERESTING = 0;
		static public $INCLUDE_PART = 1;
		static public $REQUIRE_PART = 2;
		static public $PART_PASSED_AS_STRING = 3;
		
		static public $BLOCKS = array();
		static public $VARS = array();
		static public $FOR_COUNT = 0;
		
		/*
		 *	Retourne le html d'un template construit
		 *	- string $tpl : Chemin vers le template
		 *	- array $vars : Tableau associatif des variables du template
		 */
		public function render($tpl, $vars)
		{	
			$html = '';
			if($tpl = self::isTplValid($tpl))
			{
				$html = self::renderPart($tpl, $vars, 0);
			}
			
			return $html;
		}
		
		/*
		 *	Rend un bout de template
		 *	- string $path : Chemin vers le template
		 *	- array $vars : Tableau associatif des variables du template
		 *	- int $status : Type de template (normal, include, require, etc)
		 */
		protected function renderPart($path, $vars, $status = 0)
		{
			self::$VARS = array_merge(self::$VARS, $vars);
			if($status == self::$PART_PASSED_AS_STRING)
			{
				$tpl = $path;
			}
			else
			{
				$tpl = file_get_contents($path);
			}
			
			if(true)
			{
				$for = '';
				$tpl = preg_replace_callback(
					'#\{% *for#isu', 
					function($matches)
					{
						$s = \App\Services::get('TemplateService');
						$s::$FOR_COUNT++;
						
						return '{'.$s::$FOR_COUNT.'% for';
					}, 
					$tpl);
					
				$lvl = 0;
				$ids = array();
				foreach(explode("\n", $tpl) as $l=>$str)
				{
					if(preg_match('#\{(\d+)% *for +(.+?) +in +(.+?) *?%\}#is', $str))
					{
						if($lvl == 0)
						{
							$str = preg_replace('#.*\{(\d+)% *for +(.+?) +in +(.+?) *?%\}#is', '$1:$3:$2%for_params%', $str);
							$e = explode('%for_params%', $str);
							// var_dump($e);
							$str = $e[1];
							$t = explode(':', $e[0]);
							$ids[$lvl] = $t[0];
							$var = $t[1];
							$obj = $t[2];
							$key = null;
							if(preg_match('#,#is', $obj))
							{
								$key = array_shift(explode(',', $obj));
								$obj = end(explode(',', $obj));
							}
						}
						$lvl++;
					}
					if($lvl > 0 and !preg_match('#\{% *endfor *%\}.*#is', $str))
					{
						$tpl = str_replace($str, '', $tpl);
						$for .= $str;
					}
					if(preg_match('#\{% *endfor *%\}.*#is', $str))
					{
						// var_dump(array($l, $lvl));
						// var_dump($str);
						if($lvl > 1) $for .= $str;
						else $for .= preg_replace('#\{% *endfor *%\}.*#is', '', $str);
						$lvl --; if($lvl < 0) $lvl = 0;
						if($lvl == 0)
						{
							$p_lines = '';
							for($i = 0; $i < $l; $i++)
							{
								$p_lines .= '.*?'.'\n';
							}
							$tpl = preg_replace('#('.$p_lines.'.*?)\{% *endfor *%\}(.*)#is', '$1{'.$ids[$lvl].'% endfor %}$2', $tpl);
							$v = self::getVariable($var);
							if(!is_array($v)) throw new \Exception('La variable <b>'.$var.'</b> n\'est pas un tableau.');
							$html = '';
							foreach($v as $k=>$c)
							{
								$vars = array();
								if($key != null) $vars[$key] = $k;
								$vars[$obj] = $c;
								
								$html .= utf8_encode(self::renderPart($for, $vars, self::$PART_PASSED_AS_STRING));
							}
							$tpl = utf8_decode(preg_replace('#\{'.$ids[$lvl].'% *for.*?\{'.$ids[$lvl].'% *endfor *%\}#is', $html, $tpl));
							$for = '';
						}
						
					}
				}
			}
			
			if(true) // Pour de futur conditions sur l'affichage de variables
			{
				$tpl = preg_replace_callback(
					'#\{\{ *(.+?) *\}\}#isu', 
					function($matches)
					{
						$s = \App\Services::get('TemplateService');
						$var = $s::getVariable($matches[1]);
						return utf8_encode($var);
						
						// if(!isset($s::$VARS[$matches[1]])) throw new \Exception('La variable : <b>'.$matches[1].'</b> n\'existe pas.');
						// return utf8_encode($s::$VARS[$matches[1]]);
						// return utf8_encode($tmp_var);
					}, 
					$tpl);
			}
			
			if(true) // Pour de futur conditions sur l'appel de fonctions
			{
				$tpl = preg_replace_callback(
					'#\{% *?([^ ]*?)\((.*?)\) *?%\}#isu',
					function($matches)
					{
						$params = explode(',', $matches[2]);
						foreach($params as $k=>$p)
						{
							$params[$k] = trim(trim($p), "'");
						}
						
						return \App\Services::get('TemplateFunctionsService')->call($matches[1], $params);
					},
					$tpl);
			}
			
			if(true) // Pour de futur conditions sur l'include
			{
				$tpl = preg_replace_callback(
					'#\{% *include +\'(.*?)\' *%\}#isu', 
					function($matches)
					{
						$s = \App\Services::get('TemplateService');
						return $s->render($matches[1], $s::$VARS, $s::$INCLUDE_PART);
					}, 
					$tpl);
			}
			
			if(true) //$status != self::$INCLUDE_PART)
			{
				$lvl = 0;
				$blocks = array();
				foreach(explode("\n", $tpl) as $l=>$str)
				{
					if(preg_match('#\{% *block +(.+?) *%\}#is', $str))
					{
						$blocks[$lvl][] = preg_replace('#.*\{% *?block +(.+?) *?%\}.*#is', '$1', $str);
						$lvl ++;
					}
					if(preg_match('#\{% *endblock *%\}#is', $str))
					{
						$lvl --;
					}
				}
				krsort($blocks);
				
				foreach($blocks as $lvl=>$names)
				{
					foreach($names as $name)
					{
						$tpl = preg_replace_callback(
							'#\{% *block +('.$name.') *%\}(.*?)\{% *endblock *%\}#isu',
							function($matches)
							{
								$s = \App\Services::get('TemplateService');
								$replace = isset($s::$BLOCKS[$matches[1]]) ? $s::$BLOCKS[$matches[1]] :null;
								$s::$BLOCKS[$matches[1]] = $matches[2];
								
								return $replace;
							},
							$tpl);
					}
				}
				
				// $tpl = preg_replace_callback(
					// '#\{% *block +(.+?) *%\}(.*?)\{% *endblock *%\}#isu',
					// function($matches)
					// {
						// $replace = isset(self::$BLOCKS[$matches[1]]) ? self::$BLOCKS[$matches[1]] : null;
						// self::$BLOCKS[$matches[1]] = $matches[2];
						// return $replace;
					// },
					// $tpl);
			}
			
			if($status != self::$INCLUDE_PART)
			{
				$tpl = preg_replace_callback(
					'#\{% *extend +\'(.*?)\' *%\}#is',
					function($matches)
					{
						// var_dump(self::$BLOCKS);
						$s = \App\Services::get('TemplateService');
						return $s->render($matches[1], $s::$VARS, $s::$REQUIRE_PART);
					},
					$tpl);
			}
			
			return $tpl;
		}
		
		/*
		 *	Retourne la valeure de la variable selon si c'est une simple variable, un tableau ou un objet.
		 */
		public function getVariable($var_o)
		{
			$var = (!is_array($var_o)) ? explode('.', $var_o) : $var_o;
			$tmp_var = self::$VARS;
			foreach($var as $v)
			{
				if(is_array($tmp_var) and isset($tmp_var[$v]))
				{
					$tmp_var = $tmp_var[$v];
				}
				else if(($tmp_var instanceof \stdClass) and isset($tmp_var->$v))
				{
					$tmp_var = $tmp_var->$v;
				}
				else if(($tmp_var instanceof \App\AbstrClass\BaseEntity) and method_exists($tmp_var, 'get'.ucfirst($v)))
				{
					$method = 'get'.ucfirst($v);
					$tmp_var = $tmp_var->$method();
				}
				else
				{
					throw new \Exception('La variable : <b>'.$var_o.'</b> n\'existe pas.');
				}
			}
			return $tmp_var;
		}
		
		/*
		 *	Vérifie si le template est valide
		 */
		protected function isTplValid($path)
		{
			$path = str_replace('\\', '/', $path);
			$path = trim($path, '/');
			if(!file_exists($path)) throw new \Exception('Le template "'.$path.'" n\'existe pas.');
			return $path;
		}
		
		/*
		 *	Transforme une route en url
		 */
		public function getUrlFromRoute($route)
		{
			if($r = \App\Services::get('RouterService')->getRoute($route) !== false)
			{
				
			}
			return null;
		}
		
		public function getName()
		{
			return 'TemplateService';
		}
		
		public function getDescription()
		{
			return 'Gère les templates';
		}
	}