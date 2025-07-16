CREATE DATABASE IF NOT EXISTS pdo_emprunts;
USE pdo_emprunts;

CREATE TABLE emprunts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  materiel VARCHAR(100) NOT NULL,
  nom_employe VARCHAR(100) NOT NULL,
  date_emprunt DATE NOT NULL,
  commentaire TEXT,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO emprunts (materiel, nom_employe, date_emprunt, commentaire) VALUES
('Ordinateur portable', 'Alice Martin', '2025-07-01', 'Urgent pour réunion client'),
('Clé USB 32Go', 'Bob Dupont', '2025-07-05', NULL),
('Projecteur', 'Claire Denis', '2025-07-07', 'Utilisé pour présentation projet');
