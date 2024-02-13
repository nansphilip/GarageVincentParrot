-- Adds grants on each tables
GRANT SELECT ON `ultra-motor-db`.`users` TO 'ultra-motor-user'@'localhost';
GRANT SELECT ON `ultra-motor-db`.`vehicles` TO 'ultra-motor-user'@'localhost';
GRANT INSERT ON `ultra-motor-db`.`quote_requests` TO 'ultra-motor-user'@'localhost';
GRANT SELECT, INSERT ON `ultra-motor-db`.`customer_reviews` TO 'ultra-motor-user'@'localhost';
GRANT SELECT, INSERT, UPDATE, DELETE ON `ultra-motor-db`.`services` TO 'ultra-motor-user'@'localhost';
GRANT SELECT, INSERT, UPDATE, DELETE ON `ultra-motor-db`.`schedules` TO 'ultra-motor-user'@'localhost';