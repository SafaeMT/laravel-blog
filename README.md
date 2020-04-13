# Projet Laravel-Blog
## Auteures : Safae TOUATI et Ilhame SEYAH ROUANE

## Prérequis :

-   Composer
-   Laravel Framework 6.14.0

## Installation:
1.  Clone le projet à partir de GitHub
2. Installer Composer et Laravel
3. ...

## Etat du Projet :
Le TP2 a été finalisé et 3 fonctionalités développée.

### Fonctionalités rendues TP2:


## Fonctionalités finalisées :

### Le TP2
- création de modèles et utilisation d'Eloquent, creation de controleurs, de vue et de routes, cration de  création de tables sur phpLiteAdmin
- Base de données : création de tables et gestion de la base de données via phpLiteAdmin (mot de passe : admin)
- Page d'accueil : affichage des 3 derniers articles sous forme de liste
- Les titres des articles sont rendus cliquables et renvoie vers la pages single article 
    et l'url affichée est l'url /Articles  /nom_de_l'article
    Affiche le tite de l'article, son auteur et le contenenu de l'article
- Page Articles : création d'une liste détaillée des articles :
    Affichage de titre, de la catégorie et du contenu des articles.
    Chaque titre est cliquable et renvoie vers la page Single.blade.php qui permet d'afficher l'intégralité de l'article 
    et l'url /Articles/nom_de_l'article
 - La page contact : création d'un formulaire de contact qui permet l'envoie d'un commentaire vers la base de données.
    Les erreurs de champs vide et contraintes de saisies sont gérées et des messages sont affichés.
 - la page de confirmation d'envoie du message est affiché à l'issue de l'envoie
 
### CRUD
...

### Identification avec Socialite
...

### Gestion des commentaires - basique**
-   Réalisation d'un formulaire sous les articles
-   Possibilité de soumettre le commentaire via le bouton "Envoyer commentaire"
-   Les commentaires sont enregistré dans la base de donnée
-   Les commentaires sont affichés dans une liste de commentaires en dessous des articles
___________________________________________________________________________________________________________________________
### Tentatives de fonctionalités non-finalisées:

**Gestion des commentaires avec Ajax :***
-   Tentative de réalisation de la gestion des commentaires via Ajax mais la nécessité d'être complètement à l'aise avec Vue.js et npm ne nous ont pas permis de finaliser la fonctionnalité dans le temps imparti - Avorté

**Gestion de l'authentification avec Laravel Voyager:**
-   après l'installation de Laravel Voyager et la réalisation du code permettant d'accéder à la page login administration a été réalisé mais le projet à complètement crashé et impossible de s'authentifier en temps qu'administrateur via admin@admin.com et password. - Avorté
