-- Afficher la liste des utilisateurs
SELECT User, Host FROM mysql.user;

-- Supprimer un utilisateur
DROP USER 'ultra-motor-user'@'localhost';

-- Supprimer la base de donnée
DROP DATABASE `ultra-motor-db`;
