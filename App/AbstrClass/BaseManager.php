<?php
	
	/*
	 *	BaseManager
	 *	- Samuel Ernst
	 *	- Classe de base dont hérite les managers
	 */
	
	namespace App\AbstrClass;
	
	abstract class BaseManager
	{
		protected $db;
		public function __construct()
		{
			$this->db = \App\Services::get('DataBaseService')->getDataBase();
		}
		
		/*
		 *	Exemple de fonctions Manager qui peuvent être héritées
		 *	N'hésitez pas à en ajouter d'autre comme : getMulti, search, etc...
		 */
		public function getOne($id){ return null; }
		public function saveOne($id){ return null; }
		public function deleteOne($id){ return null; }
		
		/*
		 *	params null
		 *	return string
		 *	- Retourne le nom du manager
		 */
		abstract public function getName();
		
		/*
		 *	params null
		 *	return string
		 *	- Retourne la description du manager
		 */
		abstract public function getDescription();
	}