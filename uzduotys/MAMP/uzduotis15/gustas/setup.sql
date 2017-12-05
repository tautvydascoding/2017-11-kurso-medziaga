CREATE USER 'gustas122'@'localhost' IDENTIFIED BY 'password123';

GRANT ALL PRIVILEGES ON * . * TO 'gustas122'@'localhost' WITH GRANT OPTION;
-- GRANT ALL PRIVILEGES ON * . * TO ''@'localhost' WITH GRANT OPTION;

//AUTO_INCREMENT - automatiskai dides nuo 1 iki ...
// PRIMARY KEY  - raktinis stulpelis, jame negali kartotis

CREATE table if NOT EXISTS doctors(
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(25),
  lname VARCHAR(25)
);

INSERT INTO doctors VALUES('', 'Tim', 'Logan');
INSERT INTO doctors VALUES('', 'Paul', 'Leo');
INSERT INTO doctors VALUES('', 'Ona', 'Onute');
INSERT INTO doctors VALUES('', 'Lita', 'Onsa');
INSERT INTO doctors VALUES('', 'Garris', 'Weberis');

UPDATE doctors
SET name = 'Joe', lname = 'Boo'
where id = 8;

UPDATE doctors
SET name = 'Jo111e', lname = 'Bo1213o'
where name = 'Paul' AND id = 4;

DELETE FROM DOCTORS
WHERE name= 'Garris' and lname = 'Weberis' AND id = 12;






CREATE table if NOT EXISTS patients(
  id INT(5) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(25),
  lname VARCHAR(25),
  doctor_id INT
);

INSERT INTO patients VALUES('', 'Mark', 'Johnson', '2');
INSERT INTO patients VALUES('', 'Tom', 'Karlos', '3');
INSERT INTO patients VALUES('', 'Co', 'John', '1');
INSERT INTO patients VALUES('', 'Tom', 'Karlos', '2');
INSERT INTO patients VALUES('', 'Tom', 'Naro', '2');

INSERT INTO patients VALUES('', 'Taja', 'Toto', '7');

UPDATE patients
SET name = 'Jili', lname = 'Jato', doctor_id = '1'
where id = 6;





CREATE table if NOT EXISTS img(
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(25),
  patient_id INT
);

INSERT INTO img VALUES('', '1.jpg', '1');
INSERT INTO img VALUES('', '2.jpg', '2');
INSERT INTO img VALUES('', '3.jpg', '3');
INSERT INTO img VALUES('', '4.jpg', '4');
INSERT INTO img VALUES('', '5.jpg', '5');
INSERT INTO img VALUES('', '6.jpg', '6');



select * from doctors inner join patients on doctors.id = patients.doctor_id;






/*turetu veikti ir tokie komentarai :D */
