<?php
/**
 * Classe gérant les éléments stockés en BDD
 *     @Par Luca Sivillica
 *
 *   Création: 04.03.2015
 *     @Version 1.0
 */
 
 
namespace Bundles\ElementsBundle\Entity\Manager;

use App\AbstrClass\BaseManager;
use Bundles\ElementsBundle\Entity\ElementEntity;

class ElementManager extends BaseManager
{
   
    /**
     * Méthode permettant de récuperer un élement détaillé
     *
     * @param int	$id	Id de l'élement stocké en BDD
     *
     * @return objet Element
     */
    public function getOne($numeroAtomique)
    {
		$req = $this->db->query('SELECT * FROM elements WHERE numeroAtomique = ' . $numeroAtomique . ' GROUP BY numeroAtomique, id');
		
		$element = $req->fetch();
					
		$req->closeCursor();
		
		return new ElementEntity($element);
    }
    
    
    /**
     * Méthode permettant de récuperer tout les élements du tableau périodique
     *
     * @param void
     *
     * @return array contenant tout les elements sous forme d'objet Element
     */
    public function getAll()
    {
		$elements = array();
		
		$req = $this->db->query('SELECT * FROM elements GROUP BY numeroAtomique, id');
		
		while($element = $req->fetch())
		{
			$elements[] = new ElementEntity($element);
		}
		
		$req->closeCursor();
		
		return $elements;
    }
    
    
    /*
    *	params null
    *	return string
    *	- Retourne le nom du manager
    */
    public function getName()
    {
		return 'ElementManager';
    }
    
    
    /*
    *	params null
    *	return string
    *	- Retourne la description du manager
    */
    public function getDescription()
    {
		return 'Manager gérant les élements du tableau périodique';
    }
}
