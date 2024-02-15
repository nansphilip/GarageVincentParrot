-- SQLBook: Code
-- Creates data
INSERT INTO `user` (`username`, `password`, `user_type`, `email`) VALUES
('admin', 'hashed_admin_password', 'ADMIN', 'admin@example.com'),
('employee1', 'hashed_password1', 'EMPLOYEE', NULL),
('employee2', 'hashed_password2', 'EMPLOYEE', NULL),
('employee3', 'hashed_password3', 'EMPLOYEE', NULL);

INSERT INTO `vehicle` (`brand`, `model`, `entry_year`, `mileage`, `price`, `imagePath`) VALUES
('Peugeot', '208', 2018, 50000, 12000, 'peugeot_208.webp'),
('Renault', 'Clio', 2019, 30000, 11000, 'renault_clio.webp'),
('Citroën', 'C3', 2017, 45000, 9000, 'citroen_c3.webp'),
('Ford', 'Fiesta', 2020, 20000, 13000, 'ford_fiesta.webp'),
('Toyota', 'Yaris', 2018, 40000, 9500, 'toyota_yaris.webp'),
('Volkswagen', 'Polo', 2019, 35000, 11500, 'volkswagen_polo.webp'),
('Fiat', '500', 2020, 10000, 14000, 'fiat_500.webp'),
('Honda', 'Civic', 2018, 60000, 16000, 'honda_civic.webp'),
('BMW', 'Series 3', 2019, 25000, 25000, 'bmw_series3.webp'),
('Audi', 'A3', 2020, 15000, 27000, 'audi_a3.webp');

INSERT INTO `quote_request` (`first_name`, `last_name`, `email`, `phone`, `message`, `id_vehicle`) VALUES
('Jean', 'Dupont', 'jean.dupont@example.com', '0123456789', 'Je suis intéressé par la Peugeot 208. Pouvez-vous me fournir plus de détails sur son historique, son état actuel, et les options de financement disponibles ? J\'ai un budget d\'environ 12 000 € et je cherche une voiture fiable pour mes trajets quotidiens. Merci d\'avance pour vos conseils et votre assistance.', 1),
('Marie', 'Durand', 'marie.durand@example.com', '0123456790', 'Bonjour, je souhaite obtenir plus d\'informations sur l\'Audi A3 que vous avez en vente. Quel est son kilométrage ? La voiture a-t-elle déjà été impliquée dans des accidents ? Quelle est la consommation moyenne en carburant ? Je suis également intéressée par les options d\'extension de garantie et les services après-vente que vous proposez.', 10),
('Luc', 'Martin', 'luc.martin@example.com', '0123456781', 'Je souhaite faire réparer mon véhicule actuel et je voudrais avoir une estimation du coût pour des travaux de carrosserie suite à un léger accident. Le véhicule a des rayures profondes sur le côté droit et un petit enfoncement sur la porte arrière droite. Pouvez-vous également vérifier l\'état des freins et des pneus ? Je suis disponible pour amener la voiture au garage la semaine prochaine pour une évaluation plus précise.', NULL),
('Sophie', 'Leroux', 'sophie.leroux@example.com', '0123456782', 'Je cherche à vendre ma voiture actuelle et à acheter un nouveau modèle chez vous. Pourriez-vous me renseigner sur les modalités de reprise ? Je possède une Toyota Yaris de 2018, en bon état, avec environ 40 000 km au compteur. Je suis intéressée par les véhicules hybrides ou électriques que vous avez en stock, avec un budget maximal de 15 000 €.', NULL),
('Olivier', 'Petit', 'olivier.petit@example.com', '0123456783', 'Je suis à la recherche d\'une première voiture pour mon fils qui vient d\'obtenir son permis de conduire. Je souhaite une voiture sûre, fiable et économique, de préférence une citadine. Avez-vous des modèles à me conseiller ? Quelles sont les démarches pour un éventuel financement ? Nous aimerions également savoir si vous proposez des cours de perfectionnement à la conduite pour les jeunes conducteurs.', NULL);

INSERT INTO `customer_review` (`full_name`, `review`, `rating`, `approved`) VALUES
('Alice Moreau', 'Service impeccable et personnel très aimable. Je suis pleinement satisfaite de mon achat et je recommande vivement ce garage.', 5, 1),
('Bernard Lefebvre', 'Très satisfait des travaux de réparation effectués sur ma voiture. Les prix sont raisonnables et le service est rapide.', 4, 1),
('Claire Dubois', 'Bonne expérience d\'achat, le vendeur était très compétent et a su répondre à toutes mes questions.', 5, 1),
('Denis Mercier', 'Service client au top ! J\'ai apprécié l\'accueil et les conseils personnalisés.', 5, 0),
('Émilie Laurent', 'Les tarifs des services sont abordables et la qualité est au rendez-vous. Je suis très contente des réparations effectuées.', 4, 1),
('François Roussel', 'Intervention rapide et efficace pour le changement de mes pneus. Je repasserai sans hésiter.', 5, 1),
('Géraldine Mathieu', 'Équipe de vente très à l\'écoute, j\'ai trouvé le véhicule qui correspondait parfaitement à mes attentes.', 4, 0),
('Hervé Poirier', 'Professionnalisme et sérieux, je suis ravi des services proposés par ce garage.', 5, 1);

INSERT INTO `service` (`name`, `description`, `price`) VALUES
('Vidange', 'Changement d\'huile moteur et remplacement du filtre à huile. Contrôle des niveaux et des principaux éléments de sécurité.', 80),
('Freinage', 'Contrôle complet du système de freinage, remplacement des plaquettes et disques si nécessaire.', 150),
('Révision', 'Révision complète selon les préconisations constructeur pour garantir la longévité et la sécurité de votre véhicule.', 200),
('Pneumatiques', 'Contrôle, rotation et remplacement des pneus pour assurer une usure uniforme et une adhérence optimale.', 70),
('Climatisation', 'Entretien du système de climatisation, recharge en gaz et contrôle des filtres d\'habitacle.', 90),
('Diagnostic électronique', 'Analyse complète des systèmes électroniques du véhicule à l\'aide d\'un outil de diagnostic pour détecter les éventuelles anomalies.', 60),
('Carrosserie', 'Réparation des dégâts de carrosserie, des rayures aux réparations plus importantes suite à un accident.', 300),
('Échappement', 'Contrôle et remplacement du système d\'échappement pour réduire les émissions polluantes et le bruit.', 160),
('Batterie', 'Test de la batterie et du système de charge, remplacement de la batterie si nécessaire.', 100),
('Amortisseurs', 'Vérification et remplacement des amortisseurs pour améliorer le confort de conduite et la tenue de route.', 250),
('Pré-contrôle technique', 'Vérification des principaux points de contrôle technique pour maximiser vos chances de réussite.', 50),
('Lavage et detailing', 'Nettoyage complet intérieur et extérieur, polish carrosserie pour redonner éclat et brillance à votre véhicule.', 100);

INSERT INTO `schedule` (`day`, `schedule`) VALUES
('Lundi', '8:00-17:00'),
('Mardi', '8:00-17:00'),
('Mercredi', '8:00-17:00'),
('Jeudi', '8:00-17:00'),
('Vendredi', '8:00-17:00'),
('Samedi', '9:00-12:00'),
('Dimanche', 'Fermé');
