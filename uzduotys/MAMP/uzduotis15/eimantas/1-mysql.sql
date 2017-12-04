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

-- uzduotis 1: istrinti gydytoja "Kotis"
DELETE FROM doctors
WHERE id = 5;

-- uzduotis 2: Pakeisti "Co" varda i "Karolis"
UPDATE patients
    SET name = 'Karolis'
    where name = 'Co';

-- uzduotis 3: visu pacientu, kuriu vardas prasideda "T" -  daktarus pakeisti i "4"
UPDATE patients
    SET doctor_id = '4'
    where name LIKE 'T%';

-- uzduotis 4: gauti paciento "Tomas" daktaro pavard


SELECT doctors.lname FROM doctors INNER JOIN patients ON patients.doctor_id = doctors.id
WHERE patiens.name = 'Tomas';




//
