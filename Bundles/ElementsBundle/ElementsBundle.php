<?php
	
	/*
	 *	ElementsBundle
	 *	- Luca Sivilica
	 * 	- Bundle qui gère les éléments du tableau périodique
	 */
	
	namespace Bundles\ElementsBundle;
	
	use App\AbstrClass\BaseBundle;

	class ElementsBundle extends BaseBundle
	{
		public function getName()
		{
			return 'ElementsBundle';
		}
		
		public function getDescription()
		{
			return 'Gestion des éléments';
		}
	}
