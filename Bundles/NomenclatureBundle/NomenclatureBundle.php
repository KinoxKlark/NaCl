<?php
	
	/*
	 *	NomenclatureBundle
	 *	- Samuel Ernst
	 * 	- Bundle qui gère les exercices de nomenclature
	 */
	
	namespace Bundles\NomenclatureBundle;
	
	use App\AbstrClass\BaseBundle;

	class NomenclatureBundle extends BaseBundle
	{
		public function getName()
		{
			return 'NomenclatureBundle';
		}
		
		public function getDescription()
		{
			return 'Fonctionalité Nomenclature';
		}
	}
