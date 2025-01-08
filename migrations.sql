CREATE TABLE primeira_aplicacao.users (
	email varchar(100) NOT NULL,
	password varchar(100) NULL,
	CONSTRAINT users_pk PRIMARY KEY (email)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;
