-- Creates data
INSERT INTO `user` (`username`, `password`, `user_type`, `email`) VALUES
('admin', '$2y$10$v.fJ0zb3pJxcWlGd3aFAruyhImYpPyrFkWo1E11V.xqVkIRpGJdnm', 'ADMIN', 'admin@example.com'),
('employee1', '$2y$10$n6U79FbwZTfN/HxVEd6NTeDoc/8AIzjFIIj762KeiA1oe4sw4ZS4a', 'employee1@example.com', NULL),
('employee2', '$2y$10$QYMQC8AxAXA3be0HWQBkOeKT/WmnSXv206IJSvIAaIkpktLl14Roe', 'employee2@example.com', NULL),
('employee3', '$2y$10$9URsetdNuysedS2zCJqJjO9GpE4EkiaTo7VZ0IFHa46Owu8wkPF9.', 'employee3@example.com', NULL);

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
('Audi', 'A3', 2020, 15000, 27000, 'audi_a3.webp'),
('Peugeot', '308', 2019, 70000, 13000, 'peugeot_308.webp'),
('Peugeot', '308', 2020, 30000, 20000, 'peugeot_308-2.webp'),
('Renault', 'Megane', 2018, 70000, 12000, 'renault_megane.webp'),
('Renault', 'Megane', 2020, 25000, 19000, 'renault_megane-2.webp'),
('Citroën', 'C4', 2018, 35000, 10000, 'citroen_c4.webp'),
('Citroën', 'C4', 2020, 27000, 12000, 'citroen_c4-2.webp'),
('Ford', 'Focus', 2021, 15000, 14000, 'ford_focus.webp'),
('Ford', 'Focus', 2024, 10000, 20000, 'ford_focus-2.webp'),
('Toyota', 'Corolla', 2019, 30000, 10000, 'toyota_corolla.webp'),
('Toyota', 'Corolla', 2021, 20000, 13000, 'toyota_corolla-2.webp'),
('Volkswagen', 'Golf', 2020, 20000, 12500, 'volkswagen_golf.webp'),
('Volkswagen', 'Golf', 2021, 19000, 14000, 'volkswagen_golf-2.webp'),
('Fiat', 'Panda', 2021, 15000, 11000, 'fiat_panda.webp'),
('Fiat', 'Panda', 2023, 5000, 15000, 'fiat_panda-2.webp'),
('Honda', 'Accord', 2019, 55000, 17000, 'honda_accord.webp'),
('Honda', 'Accord', 2015, 70000, 12000, 'honda_accord-2.webp'),
('BMW', 'Series 1', 2024, 5000, 35000, 'bmw_series1.webp'),
('BMW', 'Series 1', 2020, 80000, 23000, 'bmw_series1-2.webp'),
('Audi', 'A1', 2021, 10000, 25000, 'audi_a1.webp'),
('Audi', 'A1', 2017, 90000, 35000, 'audi_a1-2.webp');

INSERT INTO `quote_request` (`first_name`, `last_name`, `email`, `phone`, `message`, `id_vehicle`) VALUES
('Jean', 'Dupont', 'jean.dupont@example.com', '0123456789', 'Je suis intéressé par la Peugeot 208. Pouvez-vous me fournir plus de détails sur son historique, son état actuel, et les options de financement disponibles ? J\'ai un budget d\'environ 12 000 € et je cherche une voiture fiable pour mes trajets quotidiens. Merci d\'avance pour vos conseils et votre assistance.', 1),
('Marie', 'Durand', 'marie.durand@example.com', '0123456790', 'Bonjour, je souhaite obtenir plus d\'informations sur l\'Audi A3 que vous avez en vente. Quel est son kilométrage ? La voiture a-t-elle déjà été impliquée dans des accidents ? Quelle est la consommation moyenne en carburant ? Je suis également intéressée par les options d\'extension de garantie et les services après-vente que vous proposez.', 10),
('Luc', 'Martin', 'luc.martin@example.com', '0123456781', 'Je souhaite faire réparer mon véhicule actuel et je voudrais avoir une estimation du coût pour des travaux de carrosserie suite à un léger accident. Le véhicule a des rayures profondes sur le côté droit et un petit enfoncement sur la porte arrière droite. Pouvez-vous également vérifier l\'état des freins et des pneus ? Je suis disponible pour amener la voiture au garage la semaine prochaine pour une évaluation plus précise.', NULL),
('Sophie', 'Leroux', 'sophie.leroux@example.com', '0123456782', 'Je cherche à vendre ma voiture actuelle et à acheter un nouveau modèle chez vous. Pourriez-vous me renseigner sur les modalités de reprise ? Je possède une Toyota Yaris de 2018, en bon état, avec environ 40 000 km au compteur. Je suis intéressée par les véhicules hybrides ou électriques que vous avez en stock, avec un budget maximal de 15 000 €.', NULL),
('Olivier', 'Petit', 'olivier.petit@example.com', '0123456783', 'Je suis à la recherche d\'une première voiture pour mon fils qui vient d\'obtenir son permis de conduire. Je souhaite une voiture sûre, fiable et économique, de préférence une citadine. Avez-vous des modèles à me conseiller ? Quelles sont les démarches pour un éventuel financement ? Nous aimerions également savoir si vous proposez des cours de perfectionnement à la conduite pour les jeunes conducteurs.', NULL);

INSERT INTO `customer_review` (`full_name`, `review`, `rating`, `approved`) VALUES
('Xavier Moreau', 'Prix compétitifs.', 4, 1),
('Alice Moreau', 'Service impeccable et personnel très aimable. Je suis pleinement satisfaite de mon achat et je recommande vivement ce garage.', 5, 1),
('Bernard Lefebvre', 'Très satisfait des travaux de réparation effectués sur ma voiture. Les prix sont raisonnables et le service est rapide.', 4, 1),
('Claire Dubois', 'Bonne expérience d\'achat, le vendeur était très compétent et a su répondre à toutes mes questions.', 5, 1),
('Thomas Martin', 'Personnel aimable et compétent.', 4, 1),
('Sophie Dupont', 'Service rapide et efficace.', 5, 1),
('Denis Mercier', 'Service client au top ! J\'ai apprécié l\'accueil et les conseils personnalisés.', 5, 0),
('Valérie Girard', 'Les réparations effectuées sur mon véhicule ont été impeccables. Le rapport qualité-prix est excellent. Je suis entièrement satisfaite.', 5, 1),
('Émilie Laurent', 'Les tarifs des services sont abordables et la qualité est au rendez-vous. Je suis très contente des réparations effectuées.', 4, 1),
('William Moreau', 'Équipe compétente et professionnelle. J\'ai trouvé exactement ce que je cherchais grâce aux conseils avisés du vendeur. Service impeccable.', 5, 1),
('Valérie Durand', 'Réparations impeccables.', 5, 1),
('François Roussel', 'Intervention rapide et efficace pour le changement de mes pneus. Je repasserai sans hésiter.', 5, 1),
('Géraldine Mathieu', 'Équipe de vente très à l\'écoute, j\'ai trouvé le véhicule qui correspondait parfaitement à mes attentes.', 4, 0),
('William Girard', 'Service professionnel.', 5, 1),
('Hervé Poirier', 'Professionnalisme et sérieux, je suis ravi des services proposés par ce garage.', 5, 1),
('Isabelle Moreau', 'Excellente prise en charge et suivi client. Je suis extrêmement satisfaite des prestations fournies.', 5, 1),
('Jean Lefebvre', 'Satisfaction totale pour les réparations réalisées. Accueil chaleureux et prix compétitifs.', 4, 1),
('Karine Dubois', 'Agréablement surprise par la compétence du vendeur qui m\'a guidée dans mon choix. Service impeccable.', 5, 1),
('Louis Mercier', 'Accueil personnalisé et écoute attentive. Les conseils étaient pertinents et adaptés à mes besoins.', 5, 0),
('Marie Laurent', 'Prestations de qualité à des prix justes. Je recommande vivement ce garage pour leurs services.', 4, 1),
('Thomas Durand', 'Service après-vente efficace et réactif. J\'ai reçu des réponses claires à toutes mes questions. Je recommande vivement ce garage.', 4, 1),
('Nicolas Roussel', 'Service rapide pour un changement de pneus. Très satisfait de l\'intervention.', 5, 1),
('Olivia Mathieu', 'Très bon accueil et grande disponibilité de l\'équipe de vente. J\'ai trouvé la voiture idéale.', 4, 0),
('Pierre Poirier', 'Je suis impressionné par le professionnalisme de l\'équipe. Service de qualité supérieure.', 5, 1),
('Sophie Martin', 'J\'ai été agréablement surprise par la rapidité du service et la qualité de l\'accueil. Le personnel était très compétent et aimable.', 5, 1),
('Xavier Dupont', 'Je suis très content de mon expérience avec ce garage. Les prix sont compétitifs et le personnel est sympathique et serviable.', 4, 1);


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
