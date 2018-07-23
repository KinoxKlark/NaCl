<?php
	
	/*
	 *	WikiBundle
	 *	- Samuel Ernst
	 * 	- Bundle qui gère le wiki
	 */
	
	namespace Bundles\WikiBundle;
	
	use App\AbstrClass\BaseBundle;

	class WikiBundle extends BaseBundle
	{
		public function getName()
		{
			return 'WikiBundle';
		}
		
		public function getDescription()
		{
			return 'Fonctionalité Wiki';
		}
	}
