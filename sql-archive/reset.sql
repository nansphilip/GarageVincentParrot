-- Afficher la liste des utilisateurs
SELECT User, Host FROM mysql.user;

-- Supprimer un utilisateur
-- DROP USER 'garage-vincent-parrot-user'@'localhost';

-- Afficher les privilèges d'un utilisateur
SHOW GRANTS FOR 'garage-vincent-parrot-user'@'localhost';

-- Supprimer tous les privilèges d'un utilisateur
-- REVOKE ALL PRIVILEGES, GRANT OPTION FROM 'garage-vincent-parrot-user'@'localhost';

-- Assurer la mise à jour des privilèges après leur suppression
FLUSH PRIVILEGES;

-- Supprimer la base de donnée
-- DROP DATABASE `garage-vincent-parrot-db`;
