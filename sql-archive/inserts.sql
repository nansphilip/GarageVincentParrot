-- Creates data
INSERT INTO `users` (`email`, `username`, `password`, `user_type`) VALUES
('admin@example.com', 'admin', 'hashed_admin_password', 'ADMIN');
INSERT INTO `users` (`username`, `password`, `user_type`) VALUES
('employee1', 'hashed_password1', 'EMPLOYEE'),
('employee2', 'hashed_password2', 'EMPLOYEE'),
('employee3', 'hashed_password3', 'EMPLOYEE');

INSERT INTO `vehicles` (`brand`, `model`, `entry_year`, `mileage`, `price`, `imagePath`) VALUES
('Peugeot', '208', 2018, 50000, 12000.00, 'peugeot_208.jpg'),
('Renault', 'Clio', 2019, 30000, 11000.00, 'renault_clio.jpg'),
('Citroën', 'C3', 2017, 45000, 9000.00, 'citroen_c3.jpg'),
('Ford', 'Fiesta', 2020, 20000, 13000.00, 'ford_fiesta.jpg'),
('Toyota', 'Yaris', 2018, 40000, 9500.00, 'toyota_yaris.jpg'),
('Volkswagen', 'Polo', 2019, 35000, 11500.00, 'vw_polo.jpg'),
('Fiat', '500', 2020, 10000, 14000.00, 'fiat_500.jpg'),
('Honda', 'Civic', 2018, 60000, 16000.00, 'honda_civic.jpg'),
('BMW', 'Series 3', 2019, 25000, 25000.00, 'bmw_series3.jpg'),
('Audi', 'A3', 2020, 15000, 27000.00, 'audi_a3.jpg');

INSERT INTO `quote_requests` (`first_name`, `last_name`, `email`, `phone`, `message`, `id_vehicle`) VALUES
('Jean', 'Dupont', 'jean.dupont@example.com', '0123456789', 'Je suis intéressé par la Peugeot 208. Pouvez-vous me fournir plus de détails sur son historique, son état actuel, et les options de financement disponibles ? J\'ai un budget d\'environ 12 000 € et je cherche une voiture fiable pour mes trajets quotidiens. Merci d\'avance pour vos conseils et votre assistance.', 1),
('Marie', 'Durand', 'marie.durand@example.com', '0123456790', 'Bonjour, je souhaite obtenir plus d\'informations sur l\'Audi A3 que vous avez en vente. Quel est son kilométrage ? La voiture a-t-elle déjà été impliquée dans des accidents ? Quelle est la consommation moyenne en carburant ? Je suis également intéressée par les options d\'extension de garantie et les services après-vente que vous proposez.', 10),
('Luc', 'Martin', 'luc.martin@example.com', '0123456781', 'Je souhaite faire réparer mon véhicule actuel et je voudrais avoir une estimation du coût pour des travaux de carrosserie suite à un léger accident. Le véhicule a des rayures profondes sur le côté droit et un petit enfoncement sur la porte arrière droite. Pouvez-vous également vérifier l\'état des freins et des pneus ? Je suis disponible pour amener la voiture au garage la semaine prochaine pour une évaluation plus précise.', NULL),
('Sophie', 'Leroux', 'sophie.leroux@example.com', '0123456782', 'Je cherche à vendre ma voiture actuelle et à acheter un nouveau modèle chez vous. Pourriez-vous me renseigner sur les modalités de reprise ? Je possède une Toyota Yaris de 2018, en bon état, avec environ 40 000 km au compteur. Je suis intéressée par les véhicules hybrides ou électriques que vous avez en stock, avec un budget maximal de 15 000 €.', NULL),
('Olivier', 'Petit', 'olivier.petit@example.com', '0123456783', 'Je suis à la recherche d\'une première voiture pour mon fils qui vient d\'obtenir son permis de conduire. Je souhaite une voiture sûre, fiable et économique, de préférence une citadine. Avez-vous des modèles à me conseiller ? Quelles sont les démarches pour un éventuel financement ? Nous aimerions également savoir si vous proposez des cours de perfectionnement à la conduite pour les jeunes conducteurs.', NULL);

INSERT INTO `customer_reviews` (`full_name`, `review`, `rating`, `approved`) VALUES
('Alice Moreau', 'Service impeccable et personnel très aimable. Je suis pleinement satisfaite de mon achat et je recommande vivement ce garage.', 5, 1),
('Bernard Lefebvre', 'Très satisfait des travaux de réparation effectués sur ma voiture. Les prix sont raisonnables et le service est rapide.', 4, 1),
('Claire Dubois', 'Bonne expérience d\'achat, le vendeur était très compétent et a su répondre à toutes mes questions.', 5, 1),
('Denis Mercier', 'Service client au top ! J\'ai apprécié l\'accueil et les conseils personnalisés.', 5, 0),
('Émilie Laurent', 'Les tarifs des services sont abordables et la qualité est au rendez-vous. Je suis très contente des réparations effectuées.', 4, 1),
('François Roussel', 'Intervention rapide et efficace pour le changement de mes pneus. Je repasserai sans hésiter.', 5, 1),
('Géraldine Mathieu', 'Équipe de vente très à l\'écoute, j\'ai trouvé le véhicule qui correspondait parfaitement à mes attentes.', 4, 0),
('Hervé Poirier', 'Professionnalisme et sérieux, je suis ravi des services proposés par ce garage.', 5, 1);

INSERT INTO `services` (`name`, `description`, `price`) VALUES
('Vidange', 'Changement d\'huile moteur et remplacement du filtre à huile. Contrôle des niveaux et des principaux éléments de sécurité.', 79.99),
('Freinage', 'Contrôle complet du système de freinage, remplacement des plaquettes et disques si nécessaire.', 149.99),
('Révision', 'Révision complète selon les préconisations constructeur pour garantir la longévité et la sécurité de votre véhicule.', 199.99),
('Pneumatiques', 'Contrôle, rotation et remplacement des pneus pour assurer une usure uniforme et une adhérence optimale.', 69.99),
('Climatisation', 'Entretien du système de climatisation, recharge en gaz et contrôle des filtres d\'habitacle.', 89.99),
('Diagnostic électronique', 'Analyse complète des systèmes électroniques du véhicule à l\'aide d\'un outil de diagnostic pour détecter les éventuelles anomalies.', 59.99),
('Carrosserie', 'Réparation des dégâts de carrosserie, des rayures aux réparations plus importantes suite à un accident.', 299.99),
('Échappement', 'Contrôle et remplacement du système d\'échappement pour réduire les émissions polluantes et le bruit.', 159.99),
('Batterie', 'Test de la batterie et du système de charge, remplacement de la batterie si nécessaire.', 99.99),
('Amortisseurs', 'Vérification et remplacement des amortisseurs pour améliorer le confort de conduite et la tenue de route.', 249.99),
('Pré-contrôle technique', 'Vérification des principaux points de contrôle technique pour maximiser vos chances de réussite.', 49.99),
('Lavage et detailing', 'Nettoyage complet intérieur et extérieur, polish carrosserie pour redonner éclat et brillance à votre véhicule.', 99.99);
