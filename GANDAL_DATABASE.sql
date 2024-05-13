CREATE TABLE ETUDIANT(
   id_etu INT,
   nom_etu VARCHAR(50) NOT NULL,
   prenom_etu VARCHAR(50) NOT NULL,
   email_etu VARCHAR(50),
   tel_etu VARCHAR(14) NOT NULL,
   mot_de_passe VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_etu),
   UNIQUE(email_etu),
   UNIQUE(tel_etu)
);

CREATE TABLE PROFESSEUR(
   id_prof INT,
   nom_prof VARCHAR(50) NOT NULL,
   prenom_prof VARCHAR(50) NOT NULL,
   email_prof VARCHAR(50) NOT NULL,
   tel_prof VARCHAR(50) NOT NULL,
   mot_de_passe VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_prof),
   UNIQUE(email_prof),
   UNIQUE(tel_prof)
);

CREATE TABLE COURS(
   id_cours INT,
   titre_cours VARCHAR(250) NOT NULL,
   descript_cours VARCHAR(250) NOT NULL,
   cours_video VARCHAR(50) NOT NULL,
   id_prof INT,
   PRIMARY KEY(id_cours),
   UNIQUE(cours_video),
   FOREIGN KEY(id_prof) REFERENCES PROFESSEUR(id_prof)
);

CREATE TABLE suivre(
   id_etu INT,
   id_cours INT,
   PRIMARY KEY(id_etu, id_cours),
   FOREIGN KEY(id_etu) REFERENCES ETUDIANT(id_etu),
   FOREIGN KEY(id_cours) REFERENCES COURS(id_cours)
);
