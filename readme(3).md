# Application de gestion de rétrospective

La rétrospective est une des dernières étapes d'un sprint Scrum. C'est l'occasion de recueillir les retours des membres de l'équipe.
Pour faire cela, nous souhaitons mettre en place une application simple permettant aux membres d'une équipe de développement de saisir des retours, positifs/négatifs de manière anonyme en préambule préparation de la rétrospective.


## Les fonctionnalités


### Création de compte

Tout utilisateur doit d'abord créer un compte avec :
- prénom
- mail (qui servira de pseudo)
- mot de passe


### Connexion

Un utilisateur doit pouvoir se connecter avec son mail/pass pour accéder à toutes les autres fonctionnalités de l'application


### Création d'un feedback (utilisateur authentifié)

Si un utilisateur n'a pas encore saisi de feedback durant la semaine en cours, il est invité à renseigner au moins un "j'ai aimé" ET un "je n'ai pas aimé" (il peut en saisir plusieurs de chaque).

Chaque avis est émis de manière totalement anonyme : il ne faut pas que l'on puisse savoir qui a saisi quel avis, par quel moyen que ce soit.

Une fois que l'utilisateur a saisi son feedback et qu'il valide, il faut lui demander une confirmation avant l'enregistrement effectif. Les saisies étant anonymes, il ne sera pas possible de les modifier/supprimer. Il restera possible de venir en ajouter d'autres cependant.

### Afficher les feedbacks (utilisateur authentifié)

Une fois qu'un utilisateur a participé au feedback de la semaine en cours, il peut afficher la liste de tous les feedbacks saisis cette semaine.
Ils doivent apparaître sous forme de deux listes distinctes.


### Tenir un état des participations par semaine (administrateur authentifié)

Pour supporter la fonctionnalité précédente, il faut tenir un état des participations par semaine : chaque semaine débute avec aucun membre de l'équipe ayant participé, puis tout en conservant l'anonymat, il faut noter qu'une personne a participé lorsque c'est le cas.

Cette liste ne doit être consultable que par les administrateurs pour des raisons évidentes d'anonymat.


## Livrables

La réalisation du projet se fait de manière individuelle, même s'il est évidemment possible et souhaitable d'échanger.

Vous devez dans un premier temps réaliser un dossier de conception : 

- Diagramme de cas d'usage pour tous les profils identifiés, avec commentaire
- Diagramme d'activité pour un utilisateur qui souhaite saisir un feedback, avec commentaire
- MCD et/ou un MLD de votre base ainsi qu'un script de création au format SQL (base MySQL ou Postgres), avec commentaire
- Diagramme de classe basé sur le(s) modèle(s) de BDD, avec commentaire
- maquette sommaire, *a minima* des pages suivantes :
  - saisie d'un feedback
  - affichage des feedbacks

> Vous fournirez les captures d'écran commentées ainsi que les fichiers au format source (ou lien dans le cas de réalisation sur une webapp comme Figma ou Marvel avec un accès public, sans avoir à créer des comptes pour accéder aux productions)

Une application frontend et une application backend (qui peuvent n'être qu'une seule et même application si vous le souhaitez) implémentant les fonctionnalités décrites en première partie et basées sur la BDD modélisée ainsi que sur le design proposé.


> Vous fournirez le code de votre/vos application(s) dans un dépôt Git public (plateforme de votre choix : Gitlab, Bitbucket, Azure DevOps, Github, etc.)
> 
> - Chaque application de votre dépôt doit contenir un `readme.md` contenant une description sommaire de votre application, au moins deux captures d'écran ainsi que la procédure permettant de la déployer (technologies utilisées, etc.)
> - Votre code sera commenté (chaque fichier ET (pratiquement chaque) fonction auront un *docblock*)
> - Le code le plus à jour devra se trouver sur la branche `main` de votre dépôt
> - **bonus** : si vous pouvez créer un ou deux tests unitaires et expliquer comment les utiliser, vous serez exceptionnel(le)s !


