CREATE DATABASE cg_ospedale;

USE cg_ospedale;

CREATE TABLE pazienti(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome TEXT NOT NULL,
    cognome TEXT NOT NULL,
    cf CHAR(16) NOT NULL,
    data_nascita DATE NOT NULL,
    luogo_nascita TEXT NOT NULL,
    sesso CHAR(1) NOT NULL,
    data_ricovero DATE NOT NULL,
    reparto INT,
    diagnosi LONGTEXT NOT NULL
);

CREATE TABLE medici(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome TEXT NOT NULL,
    cognome TEXT NOT NULL,
    cf CHAR(16) NOT NULL,
    data_nascita DATE NOT NULL,
    luogo_nascita TEXT NOT NULL,
    sesso CHAR(1) NOT NULL,
    reparto INT NOT NULL,
    specializzazione TEXT NOT NULL
);

CREATE TABLE visite(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    medico INT NOT NULL,
    paziente INT NOT NULL,

    FOREIGN KEY (medico) REFERENCES medici(id),
    FOREIGN KEY (paziente) REFERENCES pazienti(id)
);

CREATE TABLE credenziali(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    medico INT NOT NULL,
    password VARCHAR(20) NOT NULL,

    FOREIGN KEY (medico) REFERENCES medici(id)
);

INSERT INTO pazienti(nome, cognome, cf, data_nascita, luogo_nascita, sesso, data_ricovero, diagnosi) VALUES ('Paziente', 'Uno', 'AAAAAAAAAAAAAAAA', '2019-01-01', 'Luogo Uno', 'M', '2019-01-01', 'Diagnosi Uno');
INSERT INTO pazienti(nome, cognome, cf, data_nascita, luogo_nascita, sesso, data_ricovero, diagnosi) VALUES ('Paziente', 'Due', 'BBBBBBBBBBBBBBBB', '2019-01-01', 'Luogo Due', 'M', '2019-01-01', 'Diagnosi Due');
INSERT INTO medici(nome, cognome, cf, data_nascita, luogo_nascita, sesso, reparto, specializzazione) VALUES ('Medico', 'Uno', 'MED001AAAAAAAAAA', '2019-01-01', 'Luogo Uno', 'M', '1', 'Specializzazione Uno');
INSERT INTO medici(nome, cognome, cf, data_nascita, luogo_nascita, sesso, reparto, specializzazione) VALUES ('Medico', 'Due', 'MED002BBBBBBBBBB', '2019-01-01', 'Luogo Due', 'M', '2', 'Specializzazione Due');
INSERT INTO credenziali(medico, password) VALUES ('1', 'prova');
