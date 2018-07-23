<?php
	
	namespace Bundles\WebBundle\Controller;
	
	class AideMemoireController 
	{
		public function AideMemoireAction($params)
		{
			return \App\Services::get('TemplateService')->render('/Bundles/WebBundle/Templates/AideMemoire/index.tpl.html', array());
		}
	}