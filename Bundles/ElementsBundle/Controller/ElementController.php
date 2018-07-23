<?php
/**
 * Contrôleur des éléments
 *     @Par Luca Sivillica
 *
 *   Création: 04.03.2015
 *     @Version 1.0
 */
 
 
namespace Bundles\ElementsBundle\Controller;

use Bundles\ElementsBundle\Entity\Manager\ElementManager;


class ElementController
{
	/**
     * Action permettant d'afficher le tableau periodique
     *
     * @param void
     *
     * @return html
     */
    public function DefaultAction($params)
    {
		$eManager = new ElementManager();
		$elements = $eManager->getAll();
	
		return \App\Services::get('TemplateService')->render('/Bundles/ElementsBundle/Templates/tableau_periodique.tpl.html', array(
			'elements'	=>	$elements,
		));
    }
    
    
    /**
     * Action permettant d'afficher l'élément en détail
     *
     * @param array	$params		Paramètres de la route
     *
     * @return html
     */
    public function ElementAction($params)
    {
		$eManager = new ElementManager();
		$exploded_slug = explode('-', $params['slug']);
		$element = $eManager->getOne(end($exploded_slug));
		
		return \App\Services::get('TemplateService')->render('/Bundles/ElementsBundle/Templates/element.tpl.html', array(
			'element'	=>	$element,
		));
    }
    
    
}
