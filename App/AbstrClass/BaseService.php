<?php
	
	/*
	 *	BaseService
	 *	- Samuel Ernst
	 *	- Classe de base dont hérite un service
	 */
	
	namespace App\AbstrClass;
	
	abstract class BaseService
	{
		/*
		 *	params null
		 *	return string
		 *	- Retourne le nom du bundle
		 */
		abstract public function getName();
		
		/*
		 *	params null
		 *	return string
		 *	- Retourne la description du bundle
		 */
		abstract public function getDescription();
	}