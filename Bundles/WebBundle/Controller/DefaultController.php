<?php
	
	namespace Bundles\WebBundle\Controller;
	
	class DefaultController 
	{
		// Page d'accueil
		public function IndexAction($params)
		{
			return \App\Services::get('TemplateService')->render('/Bundles/WebBundle/Templates/Default/index.tpl.html', array(
				'app_version' => \App\Core::$config->app->version,
			));
		}
		
		// Page de téléchargement
		public function DownloadAction($params)
		{
			return \App\Services::get('TemplateService')->render('/Bundles/WebBundle/Templates/Default/download.tpl.html', array());
		}
	}