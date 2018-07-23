<?php
	
	namespace Bundles\NomenclatureBundle\Controller;
	
	use \Bundles\NomenclatureBundle\Entity\Manager\ComposeManager;
	use \Bundles\NomenclatureBundle\Entity\ComposeEntity;
	
	class ExerciceController 
	{
		public function DefaultAction($params)
		{
			return \App\Services::get('TemplateService')->render('/Bundles/NomenclatureBundle/Templates/Exercice/default.tpl.html', array());
		}
		
		public function ExerciceAction($params)
		{
			$cManager = new ComposeManager();
			$list = $cManager->getRandomList($params['nb']);
			
			$json_array = array();
			foreach($list as $c)
			{
				$t = array();
				$t['id'] = $c->getId();
				$t['formule'] = utf8_encode($c->getFormuleChimique());
				$t['name'] = utf8_encode($c->getNom());
				$json_array[] = $t;
			}
			
			return \App\Services::get('TemplateService')->render('/Bundles/NomenclatureBundle/Templates/Exercice/exercice.tpl.html', array(
				'json_array'	=>	json_encode($json_array),
			));
		}
	}