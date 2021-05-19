Use cegepjon_2030636;


## Création des contraintes de clé Primaire 

ALTER TABLE TblAeroport			ADD PRIMARY KEY (codeAeroport);
ALTER TABLE TblVol			ADD PRIMARY KEY (noVol); 
ALTER TABLE TblTypeAppareil 		ADD PRIMARY KEY (codeTypeAppareil);
ALTER TABLE TblCompagnieAerienne	ADD PRIMARY KEY (codeCie);
ALTER TABLE TblClasseBillet		ADD PRIMARY KEY (codeClasse) ;
ALTER TABLE TblClient			CHANGE noClient noClient integer AUTO_INCREMENT PRIMARY KEY;
ALTER TABLE TblBillet			CHANGE noBillet noBillet integer AUTO_INCREMENT PRIMARY KEY;
ALTER TABLE TblReservation 		CHANGE noReservation noReservation integer AUTO_INCREMENT PRIMARY KEY;
ALTER TABLE TblPays 			ADD PRIMARY KEY (codePays) ;
ALTER TABLE TblVille			ADD PRIMARY KEY (codeVille);
ALTER TABLE TblClient 			ALTER escompte SET DEFAULT 0.00;

## Création des contraintes de clé étrangère

ALTER TABLE TblAeroport 			ADD FOREIGN KEY (codeVille) REFERENCES TblVille (codeVille);
ALTER TABLE TblVol				ADD FOREIGN KEY (aeroportDepart) REFERENCES TblAeroport (codeAeroport);
ALTER TABLE TblVol				ADD FOREIGN KEY (aeroportArrivee) REFERENCES TblAeroport (codeAeroport);
ALTER TABLE TblVol				ADD FOREIGN KEY (codeTypeAppareil) REFERENCES TblCompagnieAerienne (codeCie);
ALTER TABLE TblVol				ADD FOREIGN KEY (codeCie) REFERENCES TblCompagnieAerienne (codeCie);
ALTER TABLE TblBillet				ADD FOREIGN KEY (noVol) REFERENCES TblClasseBillet (codeClasse);
ALTER TABLE TblBillet				ADD FOREIGN KEY (codeClasse) REFERENCES TblReservation (noReservation);
ALTER TABLE TblBillet				ADD FOREIGN KEY (noReservation) REFERENCES TblReservation (noReservation);
ALTER TABLE TblReservation			ADD FOREIGN KEY (noClient) REFERENCES TblClient (noClient);
ALTER TABLE TblVille				ADD FOREIGN KEY (codePays) REFERENCES TblPays (codePays);
	
	
## Création des contraintes de modification de la valeur de départ
## des clés auto-incrémentées

ALTER TABLE TblClient AUTO_INCREMENT = 1000;
ALTER TABLE TblBillet AUTO_INCREMENT = 1900;
ALTER TABLE TblReservation AUTO_INCREMENT = 500;

## Création des contraintes Check

ALTER TABLE TblReservation ADD CHECK (statutReservation = 'EN ATTENTE' OR statutReservation = 'CONFIRMEE' OR statutReservation = 'ANNULEE');
ALTER TABLE TblReservation ADD CHECK (modePaiement = 'MASTERCARD' OR modePaiement = 'VISA' OR modePaiement = 'DEBIT' OR modePaiement =  'AMERICN EXPRESS');
ALTER TABLE TblReservation ADD CHECK (statutPaiement = 'NON PAYE' OR statutPaiement = 'PAYE');
