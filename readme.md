# ECF_Garage_2023

ECF
un fichier readme.md contenant la démarche à suivre pour l’exécution en local
(Ne surtout pas oublier, si volonté d'utiliser en local, de passer par Laragon !)

## Présentation
# Projet Garage Automobile - Application Web Vitrine

Ce projet consiste à créer une application web vitrine pour le Garage V. Parrot, mettant en avant la qualité des services proposés par cette entreprise.

## Technologies utilisées

Serveur :
● Version PHP 8.2.6
● Extension PHP : PDO
● Laragon 6

Front :
● HTML 5
● CSS 3
● JavaScript
● Bootstrap 5

Back :
● PHP 8.2.6 sous PDO
● MySQL

# Déploiement/Installation détaillés.
## Installation (si volonté d'utiliser en local)

1. Clonez ce dépôt vers votre machine locale : https://github.com/huipfe/ECF_Garage.git

   ```shell
   git clone https://github.com/huipfe/ECF_Garage.git
   ```

2. Installez Laragon sur votre machine locale : https://laragon.org/download/index.html

   ```shell
   https://laragon.org/download/index.html
   ```

3. Avec Laragon, créez un nouveau projet, et importez le dossier ECF_Garage dans le dossier 'www' de Laragon.

   ```shell
   C:\laragon\www\ECF_Garage
   ```

4. Dans Laragon cochez Apache, et MySQL, et cliquez sur 'Start All'.

   ```shell
   C:\laragon\www\ECF_Garage
   ```

5. Cliquez sur web, pour afficher le site web, ou afficher via Menu/www/ECF_Garage

   ```shell
   C:\laragon\www\ECF_Garage
   ```

6. Cliquez sur Base de données, via phpmyadmin, et importez le fichier 'Database.sql' dans la base de données.
   Mot de passe : rien, Utilisateur : root

   ```shell
   ECF_Garage/src/Database/Database.sql
   ```

7. La connexion et l'alimentation de la BDD se fait par le fichier 'Db.php' dans le dossier 'src/Database'.

   ```shell
   ECF_Garage/src/Database/Db.php
   ```

8. Naviger sur le site web : http://localhost/ECF_Garage/public/main

   ```shell
   http://localhost/ECF_Garage/public/main
   ```

9. et connectez vous avec les identifiants suivants :
   
      ```shell
      Voir Fonctionnalités, çi dessous. 
      ```

## Fonctionnalités
# US1. Se connecter
'Database.sql' : contient la base de données + tables.
'Db.php' : contient l'alimentation de la base de données.

L'administrateur dispose d'un compte préalablement créé :

email : VincentParrot@gmail.com 
mot de passe : VincentParrotBG (mdp hashé)

Vous pouvez également vous connecter en tant qu'employé :

email : Employer1@gmail.com
mot de passe : Employé123 (mdp hashé)

email : Test1@protonmail.com
mot de passe : Test123Test123 (mdp hashé)


Seul l'administrateur peut générer un compte pour les employés :
Il dispose d'un tableau de bord Admin avec 3 options : créer un compte employé,
modifier les comptes employés, et modifier les horaires d'ouverture.
Son compte n'est pas supprimable. Il a un bouton horaire à la place du bouton supprimé pour son compte

Pour les employés, une fois connecté, ils accèdent à la page produit.
Ils disposent de 3 options, pour leurs véhicules : ajouter un nouveau véhicule, le modifier, 
et le supprimer. Il ne peuvent que modifier et supprimer les véhicules associées à leur comptes.
(via la clé étrangère 'users_id' dans la table 'voiture' qui est l'id liée à l'user_id dans la table 'users')
Sauf l'administrateur, qui peut modifier et supprimer tous les véhicules. L'admin à tout les droits.

Les utilisateurs se connectent en utilisant leur adresse e-mail et un mot de passe sécurisé.

Le rôle des employés et de géré leur voiture.
Le rôle de l'administrateur est de gérer les employés, les services du garage, et les horaires d'ouverture.

# US2. Présenter les services
Les services de réparation automobile proposés par le garage sont affichés sur la page 'services', et 
sont accessibles depuis la page d'accueil via un bouton.

# US4. Exposer les voitures d'occasion
Le site web présente les voitures d'occasion disponibles à la vente avec des photos, des descriptions détaillées et des informations techniques.
Chaque voiture affiche son prix, une image mise en avant, l'année de mise en circulation et le kilométrage.

# US5. Filtrer la liste des véhicules d’occasion
Un système de filtres permet aux visiteurs de rechercher des véhicules en fonction d'une fourchette de prix, d'un nombre de kilomètres parcourus ou d'une année de mise en circulation.

# US6. Permettre de contacter l'atelier
Les visiteurs peuvent contacter le garage par téléphone (infos en bas de page) ou en utilisant un formulaire de contact en ligne. (il fonctionne en local, via Laragon, par le sendMail, qui est dans le dossier Utils)

# US7. Recueillir les témoignages des clients
-
<!-- Les visiteurs peuvent laisser des témoignages composés d'un nom, d'un commentaire et d'une note.
Les témoignages sont modérés par un employé du garage et s'affichent sur la page d'accueil.
Les employés du garage peuvent ajouter ou rejeter des témoignages clients directement depuis leur espace dédié. -->
