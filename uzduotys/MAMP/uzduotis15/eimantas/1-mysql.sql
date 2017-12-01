-- CREATE USER 'eimantas'@'localhost' IDENTIFIED BY 'password';

-- GRANT ALL PRIVILEGES ON * . * TO 'eimantas'@'localhost' WITH GRANT OPTION;

CREATE TABLE doctors (
        ID int(6) AUTO_INCREMENT PRIMARY KEY,
        name varchar(25),
        lname varchar(25)
);

CREATE TABLE patients (
        id int(6) AUTO_INCREMENT PRIMARY KEY,
        doctor_id int(6),
        name varchar(25),
        lname varchar(25)
);
CREATE TABLE img (
        id int(6) AUTO_INCREMENT PRIMARY KEY,
        patients_id int(6),
        name varchar(255)
);


INSERT INTO doctors VALUES('', 'Tim', 'Logan');
INSERT INTO doctors VALUES('', 'Paul', 'Leo');
INSERT INTO doctors VALUES('', 'Ona', 'Onute');
INSERT INTO doctors VALUES('', 'Lita', 'Onota');
INSERT INTO doctors VALUES('', 'Koris', 'Pita');

INSERT INTO doctors VALUES('', 'Istrink', 'Mane');



UPDATE doctors
        SET name = 'Pakeistas', lname = 'Pakeistuolis'
        WHERE id = 7;

DELETE FROM doctors
WHERE id = 7;

INSERT INTO patients VALUES('', '2' ,'Mark', 'John');
INSERT INTO patients VALUES('', '2' ,'Tom', 'Kalos');
INSERT INTO patients VALUES('', '1' ,'Arius', 'Tido');
INSERT INTO patients VALUES('', '3' ,'Tom', 'Karlos');
INSERT INTO patients VALUES('', '1' ,'Co', 'John');
INSERT INTO patients VALUES('', '5' ,'Tom', 'Noro');
INSERT INTO patients VALUES('', '4' ,'Jili', 'Jato');


INSERT INTO img VALUES('', '3', 'foto.jpg');
INSERT INTO img VALUES('', '1', '3.jpg');
INSERT INTO img VALUES('', '1', '1.jpg');
INSERT INTO img VALUES('', '2', '3.jpg');
INSERT INTO img VALUES('', '4', '0.jpg');






//
