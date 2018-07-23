<?php
	/**
	 * Classe représentant un élément stocké en BDD
	 *     @Par Luca Sivillica
	 *
	 *   Création: 01.02.2015
	 *     @Version 1.0
	 */
	 
	 
	namespace Bundles\ElementsBundle\Entity;

	use App\AbstrClass\BaseEntity;

	class ElementEntity extends BaseEntity
	{
		/**
		 * Attributs stockés en BDD
		 *
		 * @property int		$id						Id de l'élément
		 * @property int		$numeroAtomique			Numéro atomique de l'élément
		 * @property int		$masseAtomique			Masse atomique de l'élément
		 * @property int		$etatOxydation			Etat d'oxydation de l'élément
		 * @property int		$pointFusion			Point de fusion de l'élément
		 * @property int		$pointEbullition		Point d'ébullition de l'élément
		 * @property string		$symbole				Symbole de l'élément
		 * @property string		$nom					Nom de l'élément
		 * @property int		$electroNegativite		Electronégativité de l'élément
		 * @property int		$masseVolumique			Masse volumique de l'élément
		 * @property string		$serieChimique			Série chimique de l'élément
		 * @property string		$groupePeriodeBloc		Groupe, période, bloc de l'élément
		 * @property int		$durete					Dureté de l'élément
		 * @property string		$couleur				Couleur de l'élément
		 * @property int		$nCas					N° CAS de l'élément
		 * @property int		$nEinecs				N° EINECS de l'élément
		 * @property string		$rayonAtomique			Rayon atomique l'élément
		 * @property string		$rayonCovalence			Rayon de covalence de l'élément
		 * @property string		$rayonVanDerWaals		Rayon de Van der Walls de l'élément
		 * @property string		$configElectronique		Configuration électronique de l'élément
		 * @property int		$electronsNivEnergie	Electrons par niveau d'énergie de l'élément
		 * @property string		$oxyde					Oxyde de l'élément
		 * @property string		$structureCristalline	Structure cristalline de l'élément
		 * @property string		$etatOrdinaire			Etat ordinaire de l'élément
		 * @property string		$energieFusion			Energie de fusion de l'élément
		 * @property string		$energieVaporisation	Energie de vaporisation de l'élément
		 * @property string		$temperatureCritique	Température critique de l'élément
		 * @property string		$pressionCritique		Pression critique de l'élément
		 * @property string		$volumeCritique			Volume critique de l'élément
		 * @property string		$volumeMolaire			Volume molaire de l'élément
		 * @property string		$pressionVapeur			Pression vapeur de l'élément
		 * @property string		$vitesseSon				Vitesse du son de l'élément
		 * @property string		$chaleurMassique		Chaleur massique de l'élément
		 * @property string		$conductiviteElectrique	Conductivité électrique de l'élément
		 * @property string		$conductiviteThermique	Conductivité thermique de l'élément
		 */
		protected 
			  $numeroAtomique,
			  $masseAtomique,
			  $etatOxydation,
			  $pointFusion,
			  $pointEbullition,
			  $symbole,
			  $nom,
			  $electroNegativite,
			  $masseVolumique,
			  $serieChimique,
			  $groupePeriodeBloc,
			  $durete,
			  $couleur,
			  $nCas,
			  $nEinecs,
			  $rayonAtomique,
			  $rayonCovalence,
			  $rayonVanDerWaals,
			  $configElectronique,
			  $electronsNivEnergie,
			  $oxyde,
			  $structureCristalline,
			  $etatOrdinaire,
			  $energieFusion,
			  $energieVaporisation,
			  $temperatureCritique,	
			  $pressionCritique,
			  $volumeCritique,
			  $volumeMolaire,
			  $pressionVapeur,
			  $vitesseSon,
			  $chaleurMassique,
			  $conductiviteElectrique,
			  $conductiviteThermique;
		
		
		/*
		 *	Abstract : 
		 */
		
		public function configManager()
		{
			return '\Bundles\ElementsBundle\Entity\Manager';
		}
		
		public function getName()
		{
			return 'ElementEntity';
		}
		
		public function getDescription()
		{
			return 'Elément du tableau périodique';
		}
		
		/**
		 * GETTERS
		 */
		 
		public function getNumeroAtomique()
		{
		return $this->numeroAtomique;
		}
		
		
		public function getMasseAtomique()
		{
		return $this->masseAtomique;
		}
		
		
		public function getEtatOxydation()
		{
		return $this->etatOxydation;
		}
		
		
		public function getPointFusion()
		{
		return $this->pointFusion;
		}
		
		
		public function getPointEbullition()
		{
		return $this->pointEbullition;
		}
		
		
		public function getSymbole()
		{
		return $this->symbole;
		}
		
		
		public function getNom()
		{
		return $this->nom;
		}
		
		
		public function getElectroNegativite()
		{
		return $this->electroNegativite;
		}
		
		
		public function getMasseVolumique()
		{
		return $this->masseVolumique;
		}
		
		
		public function getSerieChimique()
		{
		return $this->serieChimique;
		}
		
		
		public function getGroupePeriodeBloc()
		{
		return $this->groupePeriodeBloc;
		}
		
		
		public function getDurete()
		{
		return $this->durete;
		}
		
		
		public function getCouleur()
		{
		return $this->couleur;
		}
		
		
		public function getNCas()
		{
		return $this->nCas;
		}
		
		
		public function getNEinecs()
		{
		return $this->nEinecs;
		}
		
		
		public function getRayonAtomique()
		{
		return $this->rayonAtomique;
		}
		
		
		public function getRayonCovalence()
		{
		return $this->rayonCovalence;
		}
		
		
		public function getRayonVanDerWaals()
		{
		return $this->rayonVanDerWaals;
		}
		
		
		public function getConfigElectronique()
		{
		return $this->configElectronique;
		}
		
		
		public function getElectronsNivEnergie()
		{
		return $this->electronsNivEnergie;
		}
		
		
		public function getOxyde()
		{
		return $this->oxyde;
		}
		
		
		public function getStructureCristalline()
		{
		return $this->structureCristalline;
		}
		
		
		public function getEtatOrdinaire()
		{
		return $this->etatOrdinaire;
		}
		
		
		public function getEnergieFusion()
		{
		return $this->energieFusion;
		}
		
		
		public function getEnergieVaporisation()
		{
		return $this->energieVaporisation;
		}
		
		
		public function getTemperatureCritique()
		{
		return $this->temperatureCritique;
		}
		
		
		public function getPressionCritique()
		{
		return $this->pressionCritique;
		}
		
		
		public function getVolumeCritique()
		{
		return $this->volumeCritique;
		}
		
		
		public function getVolumeMolaire()
		{
		return $this->volumeMolaire;
		}
		
		
		public function getPressionVapeur()
		{
		return $this->pressionVapeur;
		}
		
		
		public function getVitesseSon()
		{
		return $this->vitesseSon;
		}
		
		
		public function getChaleurMassique()
		{
		return $this->chaleurMassique;
		}
		
		
		public function getConductiviteElectrique()
		{
		return $this->conductiviteElectrique;
		}
		
		
		public function getConductiviteThermique()
		{
		return $this->conductiviteThermique;
		}
		
		
		/**
		 * SETTERS
		 */
		 
		 
		public function setNumeroAtomique($numeroAtomique)
		{
		$this->numeroAtomique = $numeroAtomique;
		}
		
		
		public function setMasseAtomique($masseAtomique)
		{
		$this->masseAtomique = $masseAtomique;
		}
		
		
		public function setEtatOxydation($etatOxydation)
		{
		$this->etatOxydation = $etatOxydation;
		}
		
		
		public function setPointFusion($pointFusion)
		{
		$this->pointFusion = $pointFusion;
		}
		
		
		public function setPointEbullition($pointEbullition)
		{
		$this->pointEbullition = $pointEbullition;
		}
		
		
		public function setSymbole($symbole)
		{
		$this->symbole = $symbole;
		}
		
		
		public function setNom($nom)
		{
		$this->nom = ucfirst($nom);
		}
		
		
		public function setElectroNegativite($electroNegativite)
		{
		$this->electroNegativite = $electroNegativite;
		}
		
		
		public function setMasseVolumique($masseVolumique)
		{
		$this->masseVolumique = $masseVolumique;
		}
		
		
		public function setSerieChimique($serieChimique)
		{
		$this->serieChimique = $serieChimique;
		}
		
		
		public function setGroupePeriodeBloc($groupePeriodeBloc)
		{
		$this->groupePeriodeBloc = $groupePeriodeBloc;
		}
		
		
		public function setDurete($durete)
		{
		$this->durete = $durete;
		}
		
		
		public function setCouleur($couleur)
		{
		$this->couleur = $couleur;
		}
		
		
		public function setNCas($nCas)
		{
		$this->nCas = $nCas;
		}
		
		
		public function setNEinecs($nEinecs)
		{
		$this->nEinecs = $nEinecs;
		}
		
		
		public function setRayonAtomique($rayonAtomique)
		{
		$this->rayonAtomique = $rayonAtomique;
		}
		
		
		public function setRayonCovalence($rayonCovalence)
		{
		$this->rayonCovalence = $rayonCovalence;
		}
		
		
		public function setRayonVanDerWaals($rayonVanDerWaals)
		{
		$this->rayonVanDerWaals = $rayonVanDerWaals;
		}
		
		
		public function setConfigElectronique($configElectronique)
		{
		$this->configElectronique = $configElectronique;
		}
		
		
		public function setElectronsNivEnergie($electronsNivEnergie)
		{
		$this->electronsNivEnergie = $electronsNivEnergie;
		}
		
		
		public function setOxyde($oxyde)
		{
		$this->oxyde = $oxyde;
		}
		
		
		public function setStructureCristalline($structureCristalline)
		{
		$this->structureCristalline = $structureCristalline;
		}
		
		
		public function setEtatOrdinaire($etatOrdinaire)
		{
		$this->etatOrdinaire = $etatOrdinaire;
		}
		
		
		public function setEnergieFusion($energieFusion)
		{
		$this->energieFusion = $energieFusion;
		}
		
		
		public function setEnergieVaporisation($energieVaporisation)
		{
		$this->energieVaporisation = $energieVaporisation;
		}
		
		
		public function setTemperatureCritique($temperatureCritique)
		{
		$this->temperatureCritique = $temperatureCritique;
		}
		
		
		public function setPressionCritique($pressionCritique)
		{
		$this->pressionCritique = $pressionCritique;
		}
		
		
		public function setVolumeCritique($volumeCritique)
		{
		$this->volumeCritique = $volumeCritique;
		}
		
		
		public function setVolumeMolaire($volumeMolaire)
		{
		$this->volumeMolaire = $volumeMolaire;
		}
		
		
		public function setPressionVapeur($pressionVapeur)
		{
		$this->pressionVapeur = $pressionVapeur;
		}
		
		
		public function setVitesseSon($vitesseSon)
		{
		$this->vitesseSon = $vitesseSon;
		}
		
		
		public function setChaleurMassique($chaleurMassique)
		{
		$this->chaleurMassique = $chaleurMassique;
		}
		
		
		public function setConductiviteElectrique($conductiviteElectrique)
		{
		$this->conductiviteElectrique = $conductiviteElectrique;
		}
		
		
		public function setConductiviteThermique($conductiviteThermique)
		{
		$this->conductiviteThermique = $conductiviteThermique;
		}
		
		
	}
