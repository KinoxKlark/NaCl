<?php
	
	namespace Bundles\WikiBundle\Controller;
	
	use \Bundles\WikiBundle\Entity\Manager\PageManager;
	use \Bundles\WikiBundle\Entity\PageEntity;
	
	class DefaultController 
	{
		public function WikiAction($params)
		{
			$slug = $params['slug'];
			$exploded_slug = explode('-', $slug);
			$id = end($exploded_slug);
			
			$pManager = new PageManager();
			$page = $pManager->getOne($id);
			
			if($page === null)
			{
				throw new \Exception('La page "'.$slug.'" du wiki n\'existe pas !');
			}
			
			return \App\Services::get('TemplateService')->render('/Bundles/WikiBundle/Templates/wiki.tpl.html', array(
				'id'		=>	$page->getId(),
				'title'		=>	$page->getTitle(),
				'content'	=>	$page->getContent(),
			));
		}
	}