-- Allows user to connect to database
GRANT USAGE ON *.* TO 'ultra-motor-user'@'localhost';

-- Adds grants on each tables
GRANT SELECT ON `ultra-motor-db`.`user` TO 'ultra-motor-user'@'localhost';
GRANT SELECT ON `ultra-motor-db`.`vehicle` TO 'ultra-motor-user'@'localhost';
GRANT INSERT ON `ultra-motor-db`.`quote_request` TO 'ultra-motor-user'@'localhost';
GRANT SELECT, INSERT ON `ultra-motor-db`.`customer_review` TO 'ultra-motor-user'@'localhost';
GRANT SELECT, INSERT, UPDATE, DELETE ON `ultra-motor-db`.`service` TO 'ultra-motor-user'@'localhost';
GRANT SELECT, INSERT, UPDATE, DELETE ON `ultra-motor-db`.`schedule` TO 'ultra-motor-user'@'localhost';