<?php
	
	namespace Bundles\NomenclatureBundle\Entity\Manager;
	
	use \Bundles\NomenclatureBundle\Entity\ComposeEntity;
	
	class ComposeManager extends \App\AbstrClass\BaseManager
	{
		/*
		 *	Retourne une liste aléatoire de $nb composés
		 */
		public function getRandomList($nb = 10)
		{
			$nb = intval($nb);
			if($nb <= 0) throw new \Exception('Parametre passé à <b>NomenclatureBundle\\Entity\\ComposeEntity</b> ce doit d\'être un nombre plus grand que 0.');
			
			$q = $this->db->prepare('SELECT * FROM composes_inorganique WHERE active = true AND formuleChimique != "" AND nom != "" ORDER BY rand() LIMIT '.$nb);
			$q->execute(
				array(
					// ':nb'=>$nb,
				)
			);
			
			$list = array();
			foreach($q->fetchAll() as $c)
			{
				$list[] = new ComposeEntity($c);
			}
			
			return $list;
		}
		
		public function getOne($id)
		{
			$q = $this->db->prepare('SELECT * FROM composes_inorganique WHERE id = :id GROUP BY id LIMIT 1');
			$q->execute(
				array(
					':id'=>$id,
				)
			);
			$t = $q->fetch();
			
			if($t) return new ComposeEntity($t);
			else return null;
		}
		
		public function saveOne($id)
		{
			
		}
		
		public function deleteOne($id)
		{
			
		}
		
		public function getName()
		{
			return 'PageController';
		}
		
		public function getDescription()
		{
			return 'Manager des pages du wiki';
		}
	}