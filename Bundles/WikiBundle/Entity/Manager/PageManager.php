<?php
	
	namespace Bundles\WikiBundle\Entity\Manager;
	
	use \Bundles\WikiBundle\Entity\PageEntity;
	
	class PageManager extends \App\AbstrClass\BaseManager
	{
		public function getOne($id)
		{
			$q = $this->db->prepare('SELECT * FROM page_wiki WHERE id = :id GROUP BY id LIMIT 1');
			$q->execute(
				array(
					':id'=>$id,
				)
			);
			$t = $q->fetch();
			
			if($t) return new PageEntity($t);
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