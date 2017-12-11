<?mysql

CREATE TABLE patients (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(25),
  lname VARCHAR(25),
  doctor_id INT
);

INSERT INTO patients(name, lname, doctor_id) VALUES("Mark", "Johnn", 2);
INSERT INTO patients(name, lname, doctor_id) VALUES("Tom", "Karlas", 2);
INSERT INTO patients(name, lname, doctor_id) VALUES("Aris", "Tido", 1);
INSERT INTO patients(name, lname, doctor_id) VALUES("Tom", "Karlas", 3);
INSERT INTO patients(name, lname, doctor_id) VALUES("Ca", "John", 1);
INSERT INTO patients(name, lname, doctor_id) VALUES("Tom", "Nano", 5);
INSERT INTO patients(name, lname, doctor_id) VALUES("Jili", "Jato", 4);

CREATE TABLE img (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(25),
  patient_id INT
);

INSERT INTO img(name, patient_id) VALUES("foto.jpg", 3);
INSERT INTO img(name, patient_id) VALUES("3.png", 1);
INSERT INTO img(name, patient_id) VALUES("1.jpg", 1);
INSERT INTO img(name, patient_id) VALUES("3.gif", 2);
INSERT INTO img(name, patient_id) VALUES("0.jpg", 4);


-- uzduotis 1: istrinti gydytoja "Kotis"

DELETE FROM doctors WHERE name="Koris";

-- uzduotis 2: Pakeisti "Co" varda i "Karolis"
UPDATE patients SET name="Karolis" WHERE name="Ca";

-- uzduotis 3: visu pacientu, kuriu vardas prasideda "T" -  daktarus pakeisti i "4"

?>
