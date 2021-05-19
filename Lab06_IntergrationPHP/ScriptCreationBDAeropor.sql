## création des tables

USE cegepjon_2030636;

## Création de la Table tblAeroport ....;

CREATE TABLE TblAeroport
(
		codeAeroport			char(3)			NOT NULL,
		nomAeroport			varchar(50)		NOT NULL,
		noTelAeroport			varchar(14)		NULL,
		heureGmt			smallint(6)		NULL,
		codeVille 			char (3)		NOT NULL
);

## Création de la Table tblVol ....;

CREATE TABLE TblVol
(

		noVol				char(5)			NOT NULL,
		aeroportDepart			char(3)			NOT NULL,
		aeroportArrivee			char(3)			NOT NULL,
		heureDepart			time(6)			NOT NULL,
		heureArrivée			time(6)			NOT NULL,
		distanceToKm			smallint(6)		NOT NULL,
		dureeTotalePreuve		tinyint(4)		NOT NULL,
		codeTypeAppareil		varchar(15)		NOT NULL,
		codeCie 			char(2)			NOT NULL
);

## Création de la Table tblTypeAppareil...;

CREATE TABLE TblTypeAppareil
(

		codeTypeAppareil		varchar(15)		NOT NULL,
		descTypeAppareil		varchar(20)		NOT NULL,
		vitesseCroisiere		smallint(6)		NOT NULL,
		autonomieVol			smallint(6)		NOT NULL,
		nbSieges			smallint(6)		NOT NULL
);

## Création de la Table tblCompagnieAerienne...;

CREATE TABLE TblCompagnieAerienne
(
		codeCie					char(2)			NOT NULL,
		nomCie 					varchar(50)		NOT NULL
);

## Création de la Table TblClasseBillet...;

CREATE TABLE TblClasseBillet
(
		codeClasse 				char(2)			NOT NULL,
		nomClasse				varchar(20)		NOT NULL
);

## Création de la Table TblClient...;

CREATE TABLE TblClient
(
		noClient				integer			NOT NULL,
		nomClient				varchar(25)		NOT NULL,
		prenomClient				varchar(25)		NOT NULL,
		noTelClient				varchar(14)		NOT NULL,
		adresseClient				varchar(50)		NOT NULL,
		escompte				decimal(2,2)		NOT NULL
);

## Création de la Table TblBillet...;

CREATE TABLE TblBillet
(

		noBillet				integer			NOT NULL,	
		noVol					char(5)			NOT NULL,
		dateVol					date			NOT NULL,
		noSiege					varchar(4)		NOT NULL,
		codeClasse				char(2)			NOT NULL,
		prixBillet				decimal(6,2)		NOT NULL,
		typeRepas				varchar(30)		NOT NULL,
		noReservation				integer(11)		NOT NULL
);

## Création de la Table TblReservation...;

CREATE TABLE TblReservation
(
		noReservation			integer			NOT NULL,
		dateReservation			date			NOT NULL,
		statutReservation		varchar(15)		NOT NULL,
		modePaiement			varchar(20)		NOT NULL,
		statutPaiement			varchar(9)		NOT NULL,
		noClient			integer(11)		NOT NULL
);

## Création de la Table TblPays...;

CREATE TABLE TblPays
(

		codePays				char(2)			NOT NULL,
		nomPays					varchar(50)		NOT NULL
);

## Création de la Table TblVille...;

CREATE TABLE TblVille
(	
		codeVille				char(3)			NOT NULL,
		nomVille				varchar(50)		NOT NULL,
		codePays				char(2)			NOT NULL
);

## Création de la Table Usager...;

CREATE TABLE TblUsager
(
		nomUsager				varchar(25)		NOT NULL,
		pwdUsager				char(8)			NOT NULL,
		prenomUtilisateur			varchar(20)		NOT NULL,
		nomUtilisateur				varchar(25)		NOT NULL,
		dateCreation				date			NOT NULL
)

## Création des tables est terminé
		
		
		
		