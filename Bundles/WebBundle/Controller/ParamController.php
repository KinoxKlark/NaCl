<?php
	
	namespace Bundles\WebBundle\Controller;
	
	class ParamController 
	{
		public function ParamAction($params)
		{
			return \App\Services::get('TemplateService')->render('/Bundles/WebBundle/Templates/Param/index.tpl.html', array());
		}
	}