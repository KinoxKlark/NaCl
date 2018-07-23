<?php
	
	namespace Bundles\WikiBundle\Entity;
	
	class PageEntity extends \App\AbstrClass\BaseEntity
	{
		/*
		 *	Attributs : 
		 */
		
		protected $title;
		protected $content;
		
		/*
		 *	Methods : 
		 */
		
		// divers méthodes ici
		
		/*
		 *	Accesseurs : 
		 */
		
		public function getTitle()
		{
			return $this->title;
		}
		public function setTitle($str)
		{
			$this->title = $str;
		}
		
		public function getContent()
		{
			return $this->content;
		}
		public function setContent($str)
		{
			$str = preg_replace_callback(
				'#\{link=([^\}]*)\}([^\{]*)\{/link\}#isU',
				function($matches)
				{
					if(!is_numeric($matches[1]))
					{
						return '<a href="#" style="color:red;">'.$matches[2].'</a>';
					}
					else
					{
						return '<a href="'.\App\Services::get('TemplateFunctionsService')->getUrlFromRoute('wiki', array('slug'=>\App\Services::get('TemplateFunctionsService')->sanitize($matches[2]).'-'.$matches[1])).'">'.$matches[2].'</a>';
					}
				},
				$str);
			$this->content = $str;
		}
		
		/*
		 *	Abstract : 
		 */
		
		public function configManager()
		{
			return '\Bundles\WikiBundle\Entity\Manager';
		}
		
		public function getName()
		{
			return 'PageEntity';
		}
		
		public function getDescription()
		{
			return 'Page du wiki';
		}
	}