-- Create a database
CREATE DATABASE `task-manager`;

-- Select the new DATABASE
USE `task-manager`;

-- Create an user and a password
CREATE USER 'task-user'@'localhost' IDENTIFIED BY 'task-password';

-- Allow user to connect to database
GRANT USAGE ON *.* TO 'task-user'@'localhost';

-- Create a table
CREATE TABLE `users` (
    `id_user` int NOT NULL AUTO_INCREMENT,
    `firstName` varchar(100) DEFAULT NULL,
    `lastName` varchar(100) DEFAULT NULL,
    `birthday` date DEFAULT NULL,
    `email` varchar(255) NOT NULL,
    `username` varchar(50) NOT NULL,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY (`id_user`),
    UNIQUE KEY `email` (`email`),
    UNIQUE KEY `username` (`username`)
);

CREATE TABLE `tasks` (
    -- IDs
    `id_task` int NOT NULL AUTO_INCREMENT,
    `id_attached` int DEFAULT NULL,
    `task_description` varchar(2000) DEFAULT NULL,
    `task_priority` varchar(255) NOT NULL DEFAULT 'NONE',
    `task_favorite` BOOLEAN NOT NULL DEFAULT false,
    PRIMARY KEY (`id_task`),
    FOREIGN KEY (`id_attached`) REFERENCES `users` (`id_user`)
)

-- Add grants on each tables
GRANT SELECT, INSERT, UPDATE, DELETE ON `task-manager`.`users` TO 'task-user'@'localhost';
GRANT SELECT, INSERT, UPDATE, DELETE ON `task-manager`.`tasks` TO 'task-user'@'localhost';