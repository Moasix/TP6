CREATE TABLE jeux (
	ref INTEGER PRIMARY KEY,
	titre TEXT,
	categorie INTEGER,
	prix REAL,
	image TEXT,
	description TEXT,
	FOREIGN KEY(categorie) REFERENCES categorie(id)
);

CREATE TABLE categorie (
	id INTEGER PRIMARY KEY,
	nom TEXT
);
