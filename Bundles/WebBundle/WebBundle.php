<?php
	
	/*
	 *	WebBundle
	 *	- Samuel Ernst
	 * 	- Bundle qui gère la base du système web comme les pages simples
	 */
	
	namespace Bundles\WebBundle;
	
	use App\AbstrClass\BaseBundle;

	class WebBundle extends BaseBundle
	{
		public function getName()
		{
			return 'WebBundle';
		}
		
		public function getDescription()
		{
			return 'Gère la base du système web comme les pages simples';
		}
	}
