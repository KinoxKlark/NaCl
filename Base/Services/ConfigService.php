<?php

	/*
	 *	ConfigService
	 *	- Samuel Ernst
	 *	- Service qui permet de jouer avec les fichiers de config
	 */
	
	namespace Base\Services;
	
	use App\AbstrClass\BaseService;
	
	class ConfigService extends BaseService
	{
		public function getConfig($file)
		{
			if(!file_exists($file)) throw new \Exception('Fichier de config inexistant. ('.$file.')');
			if(!preg_match('#\.json$#is', $file)) throw new \Exception('Les fichiers de config doivent être en json');
			return json_decode(file_get_contents($file));
			// return yaml_parse(yaml_parse_file($file));
		}
		
		/*
		 * 	Vérifie si $str est un nom d'Action valide (Bundle:Controller:Action)
		 *	- string $str - nom potentiel d'une action
		 */
		public function isValideBundleName($str)
		{
			return preg_match('#^[^:]+:[^:]+:[^:]+$#is', $str);
		}
		
		public function getName()
		{
			return 'ConfigService';
		}
		
		public function getDescription()
		{
			return 'Permet de jouer avec les fichiers de config.';
		}
	}