# Base_MVC

Base de projet MVC, PHP5 avec routeur

Moteur de Template : Smarty

## Création d'un Controller

Le nommage de chaque Controller doit etre "xxxController.php"

## Création d'une route

Dans le fichier Routes.php

2 méthode sont disponible GET et POST
Le "#" sépare le nom du Controller et la fonction

Exemple :

    - $router->get("Home#index");
