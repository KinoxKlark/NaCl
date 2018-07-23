<?php

	/*
	 *	DataBaseService
	 *	- Samuel Ernst
	 *	- Service base de donnée
	 */
	
	namespace Base\Services;
	
	use App\AbstrClass\BaseService;
	
	class DataBaseService extends BaseService
	{
		static $config = array();
		static $db = null;
		
		/*
		 *	Retourne une instance de la base de donnée
		 */
		public function getDataBase()
		{
			if(empty(self::$config))
			{
				self::$config = \App\Services::get('ConfigService')->getConfig('config/app.json')->database;
			}
			
			if(self::$db === null)
			{
				try{
					self::$db = new \PDO('mysql:host='.self::$config->host.';dbname='.self::$config->name, self::$config->user, self::$config->pass); //, array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
					//self::$db = new \PDO('mysql:host=127.0.0.1;dbname=tip-nomenclature', 'root', '');
				}catch(\Exception $e){
					die($e->getMessage());
				}
			}
			
			return self::$db;
		}
		
		public function getName()
		{
			return 'DataBaseService';
		}
		
		public function getDescription()
		{
			return 'Gère la base de donnée';
		}
	}