drop tabel inscription
CREATE TABLE inscription (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
prenom VARCHAR(30) NOT NULL,
nom VARCHAR(30) NOT NULL,
email_mobile VARCHAR(50),
reg_date TIMESTAMP,
sexe boolean
) 
alter table inscription
ADD motDePasse VARCHAR(35);
ALTER TABLE inscription
ADD UNIQUE (email_mobile); 