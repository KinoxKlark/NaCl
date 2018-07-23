# NaCl

NaCl est une application mobile proposant à ses utilisateurs de s’entrainer a identifier et nommer diverses composés chimique inorganiques.

Ce projet a été réalisé en 2015 dans le cadre d’un travail interdisciplinaire pratique (TIP) pour un groupe de 3 élève en maturité technique. Il s’agissait de planifier un projet, le réaliser et en faire un rapport.

Nous mettons en open source notre travail en espérant que cela puisse être utile.

## Version 1.1

Il s'agit de la version rendue en 2015. L'application a été réalisée comme un site web pouvant être ouvert sur téléphone. Une application faisant office de navigateur était alors fournie avec le projet et téléchargeable depuis le store Androïde. Nous avions alors utilisé un service gratuit qui s'autorisait d'ajouter des publicités par-dessus notre contenu. En raison de pollution publicitaire nous avons choisi de retirer cette application pour ne laisser que la solution web.

L'application peut être trouvée ici : [http://nacl.samuel-ernst.com/](http://nacl.samuel-ernst.com/)

## Futur

Aucune version 2.0 n'est actuellement en chantier, nous avons cependant de nombreuses idées d'amélioration et d'optimisations qui nous mènerons peut être un jour a reprendre le projet. L'une des priorités serait d'utiliser nos nouvelles connaissances pour rendre le toute plus stable et faire du site web une WebApp utilisant les dernières technologies du web. Une remise en forme de la base de données serait aussi à envisager.

## Infos sur le code (A completer...)

Voici divers infos sur le projet et le dev :

### Gestion des Services

Les services sont listés dans *config/services.json*

On peu appeler un service via : **\App\Services::get('ConfigService')**

### Bundles

On peu appeler une action via : **\App\Bundles::call('ExempleBundle:DemoController:Exemple1Action')**
