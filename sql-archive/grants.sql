-- Allows user to connect to database
GRANT USAGE ON *.* TO 'garage-vincent-parrot-user'@'localhost';

-- Adds grants on each tables
GRANT SELECT, INSERT ON `garage-vincent-parrot-db`.`vehicle` TO 'garage-vincent-parrot-user'@'localhost';
GRANT SELECT, INSERT, UPDATE ON `garage-vincent-parrot-db`.`customer_review` TO 'garage-vincent-parrot-user'@'localhost';
GRANT SELECT, INSERT, UPDATE ON `garage-vincent-parrot-db`.`schedule` TO 'garage-vincent-parrot-user'@'localhost';
GRANT SELECT, INSERT, UPDATE, DELETE ON `garage-vincent-parrot-db`.`user` TO 'garage-vincent-parrot-user'@'localhost';
GRANT SELECT, INSERT, UPDATE, DELETE ON `garage-vincent-parrot-db`.`service` TO 'garage-vincent-parrot-user'@'localhost';