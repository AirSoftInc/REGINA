CREATE TABLE companies(
    companie_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500),
    rfc VARCHAR(13),
    street VARCHAR(500),
    internal_number VARCHAR(5),
    external_number VARCHAR(5),
    colony VARCHAR(500),
    municipality VARCHAR (500),
    zip_code int(5),
    state VARCHAR(500),
    country VARCHAR (500),
    mail1 VARCHAR (50),
    mail2 VARCHAR (50),
    mail3 VARCHAR (50),
    status BOOLEAN
);