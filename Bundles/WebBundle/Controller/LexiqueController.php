<?php
	
	namespace Bundles\WebBundle\Controller;
	
	class LexiqueController 
	{
		public function LexiqueAction($params)
		{
			return \App\Services::get('TemplateService')->render('/Bundles/WebBundle/Templates/Lexique/index.tpl.html', array());
		}
	}