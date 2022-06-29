DROP DATABASE IF EXISTS les_argonautes;
CREATE DATABASE IF NOT EXISTS les_argonautes;

DROP TABLE IF EXISTS les_argonautes.argonaute;
CREATE TABLE IF NOT EXISTS les_argonautes.argonaute (
	id_argonaute int(2) NOT NULL AUTO_INCREMENT,
    nom_argonaute varchar(255) NOT NULL,
    PRIMARY KEY (id_argonaute)
); 

INSERT INTO les_argonautes.argonaute (id_argonaute, nom_argonaute) VALUES 
( null, "Eleftheria"),
( null, "Gennadios"),
( null, "Lysimachos");

