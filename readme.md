# Executer Ultra Motor en local

Ce projet est réalisé dans le cadre de mes études de développement web chez Studi.

## Cloner le dépôt Github

- Télécharger le dépôt Github : [Ultra Motor](https://github.com/nansphilip/UltraMotorBento/archive/refs/heads/main.zip)
- Dé-archiver le fichier dans un dossier vide

## Configurer la basse de donnée locale

- Installer [MySQL 8.0.xx](https://dev.mysql.com/downloads/installer/) (version windows)
- Configurer le lancement du serveur au démarrage de Windows, ou démarrage manuel
- Démarrer le serveur manuellement, si vous avez choisi cette option

- Executer les commandes présentes les fichiers dans [sql-archive](https://github.com/nansphilip/UltraMotorBento/tree/main/sql-archive) pour initialiser la base donnée :
  1. `database.sql` : Créer la base de donnée et configurer les utilisateurs
  1. `tables.sql` : Créer des tables avec leurs colonnes et propriétés
  1. `inserts.sql` : Insérer du contenu (fictif) dans chaque table
  1. `grants.sql` : Configurer des droits de l'utilisateur de l'application

## Executer le serveur local

- Installer [PHP 8.3.x](https://windows.php.net/download#php-8.3) (version windows)
- Dé-commenter les extensions suivantes dans le fichier `C:/../PHP_8.3/php.ini` :
  - `extension=pdo_mysql` nécessaire à la connexion au SGBD `MySQL`
  - `extension=intl` nécessaire pour l'utilisation de la class PHP `NumberFormatter`

- Ouvrir un terminal et cibler le dossier local du projet
- Une fois le dossier ciblé, utiliser la commande `php -S localhost:8000` pour lancer le serveur
- Ouvrir l'[adresse locale (port 8000)](localhost:8000) dans votre navigateur pour voir le résultat

## Connexion

- La `page de connexion` pour le directeur et les employés n'est pas accessible depuis l'interface du site pour éviter que les utilisateurs y accèdent puisqu'il n'en n'ont pas besoin
- L'accès à la page de connexion se fait avec ce lien : [page de connexion](localhost:8000/index.php?p=login)

- Les mots de passe d'exemple sont identiques à leur identifiant :

| Identifiant | Mot de passe |
| :--- | :--- |
| admin | admin |
| director | director |
| employee1 | employee1 |
| employee2 | employee2 |
| employee3 | employee3 |
