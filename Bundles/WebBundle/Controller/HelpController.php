<?php
	
	namespace Bundles\WebBundle\Controller;
	
	class HelpController 
	{
		public function HelpAction($params)
		{
			return \App\Services::get('TemplateService')->render('/Bundles/WebBundle/Templates/Help/index.tpl.html', array());
		}
	}