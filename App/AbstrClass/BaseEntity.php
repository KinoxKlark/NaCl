<?php
	
	/*
	 *	BaseEntity
	 *	- Samuel Ernst
	 *	- Classe de base dont hérite les entités
	 */
	
	namespace App\AbstrClass;
	
	abstract class BaseEntity
	{
		protected $id = null;
		protected $manager = null;
		
		public function __construct($data = array())
		{
			if(!empty($data)) $this->hydrate($data);
		}
		
		public function hydrate($data)
		{
			foreach($data as $key=>$value)
			{
				$method = 'set'.ucfirst($key);
				if(method_exists($this, $method))
				{
					$this->$method($value);
				}
			}
		}
		
		/*
		 *	Accesseurs sur ID
		 */
		public function getId()
		{
			return $this->id;
		}
		public function setId($id)
		{
			$this->id = $id;
		}
		
		/*
		 *	params null
		 *	return Manager
		 *	- Retourne le manager de cette entité
		 */
		abstract public function configManager();
		public function getManager()
		{
			if($this->manager === null)
			{
				$this->manager = new $this->configManager();
			}
			return $this->manager;
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