# README

Ce projet de site web E-commerce de vêtements est un projet scolaire. Veuillez noter que ce projet de vêtements est entièrement fictif et créé à des fins scolaires. Il ne représente en aucune façon une entreprise réelle ni une plateforme de commerce en ligne opérationnelle. Par la même occasion, il se trouve être mon premier projet en Développement Web. 

L'intérêt pour les utilisateurs est de parcourir et d'acheter des vêtements en ligne. 

Dans cet objectif, le site est construit en utilisant HTML, CSS, JavaScript et PHP et contient une base de données en MySQL.

## Fonctionnalités

Ce site web E-commerce de vêtements offre les fonctionnalités suivantes :

- Page des nouveautés
- Affichage des articles disponibles en ligne
- Possibilité de générer une carte cadeau
- Accès au panier
- Ajout de vêtements au panier (actuellement non fonctionnel)
- Suppression de vêtements du panier
- Inscription et connexion des utilisateurs
- Accès aux réseaux sociaux (factices)
- Différents moyens de paiement acceptés par le site
- Page "À propos"
- Page de contact
- Page FAQ
- Page mentions légales

## Installation

Pour installer le site web E-commerce de vêtements, suivez les étapes suivantes :

1. Téléchargez les fichiers du site web sur votre ordinateur. Pensez à décompresser le dossier.
2. Placez les fichiers dans un dossier accessible depuis votre serveur web.
3. Placez-vous dans le dossier "sql" et connectez-vous à MySQL. Exécutez les commandes "source Fauget.sql" puis "source Fauget-data.sql".
4. Placez-vous au même endroit que le fichier "index.php".
5. Exécutez la commande : `php -S localhost:8080` et ouvrez le lien proposé. Il vous redirigera vers le site web.

## Utilisation

Pour utiliser le site web E-commerce de vêtements, suivez les étapes suivantes :

1. Parcourez les articles disponibles sur le site.
2. Ajoutez les vêtements souhaités à votre panier.
3. Validez votre panier et procédez au paiement en ligne.
4. Connectez-vous ou créez un compte.
5. Offrez des cartes cadeaux.
6. Contactez-nous.
7. Le site est entièrement responsive, alors faites-vous plaisir.

## Spécificités techniques

Quelques outils permettent de simplifier l'utilisation du site :

- Raccourcis en cliquant sur le logo pour accéder à l'accueil.
- Une flèche située en bas à droite permet de remonter au niveau du haut de la page.
- Un menu déroulant qui apparaît et disparaît de la page avec un code CSS : `translateX`. En réalité, le menu latéral sort de l'espace de la page.

Et d'autres permettant de mieux comprendre le code :

- Balises de commentaires pour savoir dans quelle partie on se situe et ce qui est traité.
- Racine "root" dans le CSS pour déterminer les couleurs et polices utilisées.
- Différents répertoires pour chaque partie (bdd, CSS, HTML, img, JS, JSON, PHP et SQL).
- Des API ont été utilisées et les icônes proviennent de [FontAwesome](https://fontawesome.com/v4/icons/) essentiellement.
- Le fichier "codeMini.html" dans le dossier HTML n'est pas présent sur le site, il permet de récupérer le code minimum pour créer une nouvelle page, il sert essentiellement de "sauvegarde".
- La classe "accessibility" permet de proposer un accès aux sourds et malentendants, l'appareil audio lira le contenu de la classe, mais elle ne sera pas affichée.

## JavaScript

Quelques scripts permettent de rendre le site plus dynamique :

- "articles_onload.js" permet d'afficher la valeur du stock de la taille demandée dès l'affichage et la désactivation des tailles avec un stock vide dès le chargement de la page.
- "articles.js" permet de gérer l'ajout d'éléments au panier, d'augmenter et réduire la quantité en commande, d'afficher le nombre d'éléments ajoutés au panier (la valeur est stockée respectivement sur la page consultée) et permet également d'afficher ou non le stock.
- "check_form.js" permet d'afficher en rouge les éléments du formulaire manquants ou non conformes.
- current_date.js permet d'afficher la date du jour sur les pages contact.html et giftCard.html.
- form_date_max.js permet de définir la date maximum, soit celle du jour, qu'un utilisateur peut renseigner pour sa date de naissance dans le formulaire
- img_size.js permet d'aggrandir les images.
- load.js ici pas activé pour votre utilisation, mais il permet d'afficher la page lorsqu'elle est complètement chargée et cela prévient d'éventuels lenteur du code.
- loading.js permet de retarder l'affichage de la page pendant un certain temps pour laisser place à un effet de chargement. Fonctionnalité uniquement présente sur index.html. Il est possible de gérer la durée dans le code css.
- random_image.js permet d'afficher une image aléatoire pour index.html et about.html.
- vanilla-tilt.js permet d'animer la carte à partir d'un code js importée du lien suivant : https://micku7zu.github.io/vanilla-tilt.js/
- Ajout d'une balise script dans head.php pour afficher la page lorsqu'elle est chargée.
- Ajout d'une balise script dans back-to-top.php pour afficher la flèche une fois que l'on est descendu sur la page.

## PHP

Dans le dossier "php", vous trouverez les fichiers suivants :

- "add_card.php" pour ajouter une carte cadeau au panier.
- "add_panier.php" pour ajouter au panier des éléments.
- "back-to-top.php" est inclus dans les fichiers et permet de revenir en haut de la page.
- connexion.php et createAccount.php pour se connecter et/ou créer un comtpe. Vous trouverez les différents identifiants en fin du fichier Fauget-data.sql dans sql, sinon utilisez celui-ci : email:user1@example.com et mot de passe : mdp
- Dans Fauget-data.php vous trouverez les commandes pour récupérer les données du fichier json et générer les commandes sql pour créer les données
- footer.php est le bas de page inclue dans les pages
- head.php est inclue dans les pages et permet d'inclure les script et style
- header.php est le haut de page inclue dans les pages
- login.php qui gère les connexions
- main.php est le menu latéral inclue dans les pages
- new_random.php permet de remplir aléatoirement la page nouveautés à partir de chaque type de produits
- payment.php permet de procéder au paiement de son panier (récupéré sur UIverse)
- varSession.inc.php contenant les variables de session dont le tableau des catégories avec les produits et leurs informations
- vider_panier.php permet de vider le panier.
- about.php, legalNotices.php, q&a.php sont des pages pour rajouter du réalisme au site
- contact.php contient le formulaire de contact de la page
- giftCard.php est uen carte animée en 3D permet de générer un bon d'achat sur le site
- index.php est la page d'accueil
- merci.php est soit affichée après une requête de formulaire, soit après la finalisation d'une commande
- new.php est une page de produits déterminées aléatoirement parmis l'ensemble des produits, ici on n'en a affiché seulement 15.
- panier.php correspond au panier
- produits.php est la page des produits dont les produits diffèrent en fonction du lien sur lequel on clique.

## Auteur

Réalisé par Alexandre Pauly

## Licence

Vous êtes libre de l'utiliser, le modifier et le distribuer.

## Contributions

Les contributions à ce projet sont les bienvenues. N'hésitez pas à ouvrir une demande d'extraction pour proposer des améliorations, des corrections de bugs ou de nouvelles fonctionnalités.

## Remarques

Veuillez noter que cette application est destinée à des fins éducatives et expérimentales ayant permis de renforcer des connaissances dans différents langages de programmation.

## Contact

Pour toute question ou demande de support, veuillez contacter [alexandre.pauly@cy-tech.fr].