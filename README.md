# AFRINOVA

![Alt Text](./img/44_1x_shots_so.png)

## Description du Projet

Ce projet vise à enrichir le programme pédagogique d’une école en proposant un outil interactif sous forme de jeu éducatif. Ce site web interactif permettra aux élèves d’apprendre et de tester leurs connaissances sur le continent africain : ses pays, leurs capitales, et leurs villes importantes.

## Fonctionnalités Principales

### Pour les utilisateurs finaux :
- Affichage des pays du continent africain avec leurs informations détaillées :
  - Population.
  - Langues officielles.
  - Villes importantes, y compris les capitales.

### Pour les administrateurs/concepteurs :
- **Gestion des données des pays** :
  - Ajout d’un pays avec ses villes clés, sa population, et ses langues officielles.
  - Modification ou suppression des informations d’un pays existant.
- **Architecture et Modélisation** :
  - Création d’un diagramme de cas d’utilisation pour identifier les fonctionnalités principales.
  - Modélisation de la base de données avec un diagramme relationnel (ERD).

## Conception Technique

### Diagramme de Cas d'Utilisation
Un diagramme de cas d’utilisation permettra d’identifier les fonctionnalités principales du système, incluant la gestion des pays et des villes.

### Modélisation de la Base de Données
Un modèle relationnel (ERD) sera utilisé pour représenter :
- Les relations entre les **pays** et leurs **villes phares**.
- Les attributs clés des entités, tels que la population et les langues officielles.

## Développement Back-End

### Base de Données Relationnelle
La base de données inclut les entités suivantes :
- **Pays** :
  - `ID`
  - `Nom`
  - `Population`
  - `Langues officielles`
  - `Continent`
- **Villes** :
  - `ID`
  - `Nom`
  - `Description`
  - `Type` (capitale ou autre).

### Requêtes SQL
Les requêtes SQL nécessaires incluent :
- Ajouter un pays africain avec ses informations.
- Modifier les détails d’un pays ou d’une ville.
- Supprimer un pays et toutes ses villes associées.
- Afficher la liste des pays africains et leurs informations.

### Script PHP
Un script en PHP sera développé pour permettre :
- Les opérations CRUD (Create, Read, Update, Delete) sur les entités pays et villes.
- La connexion à la base de données pour afficher dynamiquement les informations des pays.

## Prérequis Techniques

### Technologies utilisées
- **Langage Backend** : PHP.
- **Base de Données** : MySQL.
- **Frontend (optionnel)** : HTML, CSS, JavaScript pour l’affichage des données et l’interface utilisateur.