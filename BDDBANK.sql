CREATE TABLE CLIENT (
    idcli INT NOT NULL, 
    nom VARCHAR(50), 
    prenom VARCHAR (50), 
    dateNaissance VARCHAR, 
    adresse VARCHAR(100), 
    tel INT,
    PRIMARY KEY (idcli)
);

CREATE TABLE COMPTE (
    idcompte INT NOT NULL, 
    codeBanq INT, 
    codeGuichet INT, 
    cleRib INT, 
    titulaire INT, 
    solde INT, 
    devise INT, 
    dateCreation VARCHAR, 
    PRIMARY KEY (idcompte),
    FOREIGN KEY (titulaire) REFERENCES CLIENT(idcli)
)

INSERT INTO CLIENT(idcli, nom, prenom, dateNaissance, adresse, tel) 
VALUES 
(13256542, 'DUMONT', 'Ines', '1978-06-14','Paris',6666666666),
(54512112, 'DUPONT', 'Alain', '1981-08-17','Paris',2222222222),
(86431223, 'LEBOSS', 'Gilles', '1998-02-25','Marseille',1111111111),
(74556411, 'ORGAN', 'Ingrid', '1983-03-01','Lyon',8596945456);