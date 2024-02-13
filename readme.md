# Executer ce projet en local

## Cloner le dépôt Github

- [Lien Github](https://github.com/nansphilip/UltraMotorBento)

## Configurer la basse de donnée locale

- Installer MySQL 8.0.35
- Executer les commandes présentes les fichiers dans `sql-archive` pour initialiser la base donnée :

1. `database.sql` : Créer la base de donnée et configurer les utilisateurs
1. `tables.sql` : Créer des tables avec leurs colonnes et propriétés
1. `inserts.sql` : Insérer du contenu (fictif) dans chaque table
1. `grants.sql` : Configurer des droits de l'utilisateur de l'application

## Executer le serveur local

- Installer PHP 8.3
- Activer/Dé-commenter l'extension PDO : `extension=pdo_mysql` dans le fichier `php.ini`
- Ouvrir le dépôt avec un IDE et utiliser la commande `php -S localhost:8000` pour lancer le serveur
