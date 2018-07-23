<?php
	
	namespace Bundles\NomenclatureBundle\Entity;
	
	class ComposeEntity extends \App\AbstrClass\BaseEntity
	{
		/*
		 *	Attributs : 
		 */
		
		protected $formuleChimique;
		protected $nom;
		protected $nCas;
		protected $masseMolaire;
		protected $fusion;
		protected $ebullition;
		protected $densite;
		protected $active;
		
		/*
		 *	Methods : 
		 */
		
		// divers méthodes ici
		
		/*
		 *	Accesseurs : 
		 */
		
		public function getFormuleChimique()
		{
			return $this->formuleChimique;
		}
		public function setFormuleChimique($str)
		{
			$this->formuleChimique = $str;
		}
		
		public function getNom()
		{
			return $this->nom;
		}
		public function setNom($str)
		{
			$this->nom = $str;
		}
		
		public function getNCas()
		{
			return $this->nCas;
		}
		public function setNCas($str)
		{
			$this->nCas = $str;
		}
		
		public function getMasseMolaire()
		{
			return $this->masseMolaire;
		}
		public function setMasseMolaire($str)
		{
			$this->masseMolaire = $str;
		}
		
		public function getFusion()
		{
			return $this->fusion;
		}
		public function setFusion($str)
		{
			$this->fusion = $str;
		}
		
		public function getEbullition()
		{
			return $this->ebullition;
		}
		public function setEbullition($str)
		{
			$this->ebullition = $str;
		}
		
		public function getDensite()
		{
			return $this->densite;
		}
		public function setDensite($str)
		{
			$this->densite = $str;
		}
		
		public function getActive()
		{
			return $this->active;
		}
		public function setActive($bool)
		{
			$this->active = $bool;
		}
		
		/*
		 *	Abstract : 
		 */
		
		public function configManager()
		{
			return '\Bundles\NomenclatureBundle\Entity\Manager';
		}
		
		public function getName()
		{
			return 'ComposeEntity';
		}
		
		public function getDescription()
		{
			return 'Composé inorganique';
		}
	}