<?php
	
	// Point d'arrivée de l'app :)
	
	try {
		
		require_once 'App/autoload.php';
		
		$app = new App\Core();
		echo $app->init();
		
		// Exemple d'utilisation de service :
		// var_dump( \App\Services::get('ConfigService')->getConfig('config/router.json') );
		
		// Exemple d'appel à une action
		// echo \App\Bundles::call('ExempleBundle:DemoController:Exemple1Action');
			// - Reste à gérer les exceptions
	
	} catch (Exception $e) {
		
		echo '<h1>Exception</h1>';
		echo $e->getMessage();
		
	}
	