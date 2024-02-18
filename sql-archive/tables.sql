-- Creates tables
CREATE TABLE `user` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` varchar(50) NOT NULL UNIQUE,
    `password` varchar(255) NOT NULL,
    `user_type` varchar(255) NOT NULL DEFAULT 'EMPLOYEE', -- EMPLOYEE or ADMIN
    `email` varchar(255) UNIQUE
);

CREATE TABLE `vehicle` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `brand` varchar(50) NOT NULL,
    `model` varchar(100) NOT NULL,
    `entry_year` year NOT NULL,
    `mileage` int NOT NULL,
    `price` int NOT NULL,
    `imagePath` varchar(255) NOT NULL -- image-name.extension
);

CREATE TABLE `quote_request` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `first_name` varchar(50) NOT NULL,
    `last_name` varchar(50) NOT NULL,
    `email` varchar(255) NOT NULL,
    `phone` varchar(10) NOT NULL,
    `message` varchar(3000) NOT NULL,
    `id_vehicle` int DEFAULT NULL, -- If quote request is about a vehicle
    FOREIGN KEY (`id_vehicle`) REFERENCES `vehicle` (`id`)
);

CREATE TABLE `customer_review` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `full_name` varchar(100) NOT NULL,
    `review` varchar(3000) NOT NULL,
    `rating` int NOT NULL CHECK(`rating` BETWEEN 0 AND 5), -- Rating from 0 to 5
    `approved` TINYINT(1) NOT NULL DEFAULT 0 -- Boolean : 0 non approved, 1 approved
);

CREATE TABLE `service` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(100) NOT NULL,
    `description` varchar(500) NOT NULL,
    `price` decimal(10,2) NOT NULL
);

CREATE TABLE `schedule` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `day` varchar(15) NOT NULL,
    `schedule` varchar(30) NOT NULL
);