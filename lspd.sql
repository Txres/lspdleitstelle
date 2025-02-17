CREATE DATABASE lspd_db;

USE lspd_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50) NOT NULL
);

-- Beispiel Benutzer hinzufügen
INSERT INTO users (username, password, role) VALUES ('admin', 'password123', 'Admin');
INSERT INTO users (username, password, role) VALUES ('officer1', 'officerpass', 'Officer');
