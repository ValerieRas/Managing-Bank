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
    titulaire VARCHAR(30),
    idcli INT, 
    solde INT, 
    devise VARCHAR(30), 
    dateCreation VARCHAR(50), 
    PRIMARY KEY (idcompte),
    FOREIGN KEY (idcli) REFERENCES CLIENT(idcli)
)

INSERT INTO CLIENT(idcli, nom, prenom, dateNaissance, adresse, tel) 
VALUES 
(13256542, 'DUMONT', 'Ines', '1978-06-14','Paris',6666666666),
(54512112, 'DUPONT', 'Alain', '1981-08-17','Paris',2222222222),
(86431223, 'LEBOSS', 'Gilles', '1998-02-25','Marseille',1111111111),
(74556411, 'ORGAN', 'Ingrid', '1983-03-01','Lyon',8596945456);


INSERT INTO compte(idcompte, codebanq, codeGuichet, cleRib, titulaire, idcli, solde, devise, dateCreation)
VALUES 
(526489351,85632,77456,88,"DUMONT Ines",13256542,9588,"€","15-01-2009"),
(986542635,85632,77456,41,"DUPONT Alain",54512112,2785,"€","06-08-2012"),
(152356448,85632,25664,96,"LEBOSS Gilles",86431223,17300,"€","19-04-2020"),
(794521664,85632,25664,14,"ORGAN Ingrid",74556411,5874,"€","03-11-2017");