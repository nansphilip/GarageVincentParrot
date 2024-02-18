-- Creates a database
CREATE DATABASE `ultra-motor-db`;

-- Selects the new database
USE `ultra-motor-db`;

-- Afficher la liste des utilisateurs
SELECT User, Host FROM mysql.user;

-- Creates an user and a password
CREATE USER 'ultra-motor-user'@'localhost' IDENTIFIED BY 'ultra-motor-password';

-- Allows user to connect to database
GRANT USAGE ON *.* TO 'ultra-motor-user'@'localhost';
