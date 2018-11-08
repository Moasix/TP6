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

CREATE TABLE users (
	 id INTEGER PRIMARY KEY,
	 email TEXT UNIQUE,
	 password TEXT,
	 type INT,
	 nom TEXT,
	 prenom TEXT
);
