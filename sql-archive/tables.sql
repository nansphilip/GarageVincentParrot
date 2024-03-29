-- Creates tables
CREATE TABLE `user` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` varchar(50) NOT NULL UNIQUE,
    `password` varchar(255) NOT NULL,
    `user_type` ENUM('ADMIN', 'EMPLOYEE') NOT NULL DEFAULT 'EMPLOYEE',
    `email` varchar(255) UNIQUE
);

CREATE TABLE `vehicle` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `brand` varchar(50) NOT NULL,
    `model` varchar(100) NOT NULL,
    `entry_year` year NOT NULL,
    `mileage` int NOT NULL,
    `price` int NOT NULL,
    `imagePath` varchar(255) NOT NULL -- image_name.webp
);

CREATE TABLE `customer_review` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `full_name` varchar(100) NOT NULL,
    `review` varchar(3000) NOT NULL,
    `rating` int NOT NULL CHECK(`rating` BETWEEN 0 AND 5),
    `approved` ENUM('APPROVED', 'PENDING', 'DENIED') NOT NULL DEFAULT 'PENDING'
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