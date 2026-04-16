# Systeme de Gestion d' Etudiants (CRUD)

## Presentation
Ce projet est une application web developpée avec **Larvel 12** et **Bootstrap 5**. Il permet de gerer une liste d'étudiants
avec les fonctionnalités suivantes : 

- Créer ou ajouter un étudiant
- Lire ou afficher la liste des étudiants | Afficher les détails d'un étudiant
- Modifier ou mettre à jour les informations d'un étudiant
- Supprimer un étudiant avec confirmation 
(Modale Bootstrap)
 
 ## Technologies Utilisées
- Laravel 12 (PHP 8.3) : Framework PHP pour le développement web
- Bootstrap 5 & javaScript : Framework CSS pour la conception responsive et la gestion des modals
- MySQL : Système de gestion de base de données relationnelle
- Composer : Gestionnaire de dépendances pour PHP

## Installation et Configuration
1. Cloner le dépôt du projet :
```bashgit clone https://github.com/Maxime-237/Systeme-de-gestion-d-etudiant-CRUD.git
```
2. Accéder au répertoire du projet :
```bashcd Systeme-de-gestion-d-etudiant-CRUD
```
3. Installer les dépendances avec Composer :
```bashcomposer install
```
4. Copier le fichier d'environnement et le configurer :
```bashcp .env.example .env
```
5. Apres avoir configurer votre base de données dans le fichier .env, exécuter les migrations pour créer les tables nécessaires :
```bashphp artisan migrate
```
6. Démarrer le serveur de développement :
```bashphp artisan serve
```
7. Accéder à l'application via votre navigateur à l'adresse suivante :
```http://localhost:8000
```
