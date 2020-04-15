![Logo of the project](https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg)
# Laravel Blog &middot; [![Build Status](https://img.shields.io/travis/npm/npm/latest.svg?style=flat-square)](https://travis-ci.org/npm/npm) [![npm](https://img.shields.io/npm/v/npm.svg?style=flat-square)](https://www.npmjs.com/package/npm) [![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/your/your-project/blob/master/LICENSE)

> Auteures: Safae MLIHA TOUATI & Ilhame ROUANE

Blog basique qui utilise Laravel comme Framework, relatif au projet de l'UE "Programmation Web Côté Serveur".


- [Developing](#developing)
  - [Built With](#built-with)
  - [Prerequisites](#prerequisites)
  - [Setting up Dev](#setting-up-dev)
  - [Building](#building)
- [Configuration](#configuration)
- [Features and testing steps](#features-and-testing-steps)
  - [1- Gestion des commentaires:](#1--gestion-des-commentaires)
  - [3- Identification / Authentification qui protège l'accès à l’administration](#3--identification--authentification-qui-prot%c3%a8ge-lacc%c3%a8s-%c3%a0-ladministration)
  - [2- CRUD des articles](#2--crud-des-articles)

## Developing

### Built With
- [Laravel 6.x](https://laravel.com/docs/6.x/).
- [Laravel UI 1.x](https://github.com/laravel/ui/tree/1.x).
- [Bootstrap 4.x](https://getbootstrap.com/).

### Prerequisites
  Installer [Composer](https://getcomposer.org/) et [npm](https://nodejs.org/).

### Setting up Dev

Commencer par cloner le dépot, changer la branche vers master et installer les dépendances:
```shell
git clone https://github.com/SafaeMT/laravel-blog.git
cd laravel-blog/
git checkout master
composer install
npm install
```

Ensuite, renommer `.env.example` à `.env`, puis modifier ce dernier pour changer la configuration de la base de données comme suit:

```
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
DB_DATABASE= <absolute-path-to-the-project>laravel-blog\database\database.sqlite
# DB_USERNAME=root
# DB_PASSWORD=
```
S'assurer de remplacer `<absolute-path-to-the-project>` par le chemin absolu actuel.

Enfin, faire une migration de la base de données, compiler les assets du frontend, puis lancer le serveur après avoir généré la clé de l'application:

```shell
touch database/database.sqlite
php artisan migrate:fresh --seed
npm run dev
php artisan key:generate
php artisan serve
```

L'application est maintenant accessible depuis `http://localhost:8000` et comme bonus, phpliteadmin est intégré en visitant `http://localhost:8000/phpliteadmin.php`. Le password est `admin`.

### Building

Si des assets changent, relancer `npm run dev`. Vous pouvez utiliser `npm run watch` pour permettre à npm de mettre à jour les fichiers compilés automatiquement.

Par ailleurs, s'il y a eu des modifications au niveau des migrations, faire `php artisan migrate:fresh --seed`.

## Configuration

Vous pouvez changer le lien vers la base de données ainsi que son type en changeant les lignes concernées dans le fichier `.env`.

## Features and testing steps
> Tous les formulaires intègrent la validation des champs.

### 1- Gestion des commentaires:
1. Visiter un article disponible via les pages *Home* ou *Articles*.

2. Remplir et soumettre le formulaire au-dessous pour ajouter un commentaire.
   
### 3- Identification / Authentification qui protège l'accès à l’administration
> 2 utilisateurs fournis: `first.user@gmail.com / password1` et `second.user@gmail.com / password2`. Le deuxième user a des posts générés.
1. S'enregister ou se connecter via l'un des comptes existants.

2. La partie administration est maintenant accessible via la page *Admin*. L'utilisateur connecté n'a plus besoin de fournir ses informations (nom et email) pour soumettre un commentaire ou un message de contact.

### 2- CRUD des articles
1. Se connecter.
2. Visiter la page *Admin* qui n'affiche que les articles de l'utilisateur connecté.
3. Tester le CRUD des articles.
   - Cliquer sur le bouton "Créer un article", puis remplir et soumettre le formulaire pour créer un nouvel article.
   - Cliquer sur le bouton "Modifier", puis changer les champs souhaités et soumettre le formulaire pour modifier l'article en question.
   - Cliquer sur le bouton "Supprimer" pour supprimer l'article.
