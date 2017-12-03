

CREATE USER 'tautvydas10'@'localhost' IDENTIFIED BY 'tratata';  // tratata - spaltazodis

 GRANT ALL PRIVILEGES ON * . * TO 'tautvydas10'@'localhost' WITH GRANT OPTION;

// AUTO_INCREMENT - automatiskai dides nuo 1 - iki ...kai desime duomenis
// PRIMARY KEY - raktinis stulpelis, !!! jame reiksmes negali kartotis

CREATE TABLE IF NOT EXISTS doctors (
     id INT(6) AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(30) ,
     lname VARCHAR(30)
     );

INSERT INTO doctors VALUES('', 'Tim', 'Logan');
INSERT INTO doctors VALUES('', 'Paul', 'Leo');
INSERT INTO doctors VALUES('', 'Ona', 'Onute');
INSERT INTO doctors VALUES('', 'Lita', 'Onota');
INSERT INTO doctors VALUES('', 'Koris', 'Pita');



UPDATE doctors
       SET name = 'Joe', lname = 'Riko'
       WHERE  id = 8;
UPDATE doctors
       SET name = 'Jooooo', lname = 'Rikoooo'
       WHERE   id = 4;
       // !!!!



CREATE TABLE IF NOT EXISTS patients (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(25) ,
    lname VARCHAR(25),
    doctor_id INT(6)
    );

    INSERT INTO patients VALUES('', 'Markas', 'John', 2);
    INSERT INTO patients VALUES('', 'Tom', 'Karlos', 2);
    INSERT INTO patients VALUES('', 'Aris', 'Tido', 1);
    INSERT INTO patients VALUES('', 'Tom', 'Karlos', 3);
    INSERT INTO patients VALUES('', 'Co', 'John', 1);
    INSERT INTO patients VALUES('', 'Tom', 'Nano', 5);
    INSERT INTO patients VALUES('', 'Jili', 'Jato', 4);

    UPDATE patients SET id = 3  WHERE  id = 4;
    UPDATE patients SET id = 4  WHERE  id = 5;
    UPDATE patients SET id = 5  WHERE  id = 6;
    UPDATE patients SET id = 6  WHERE  id = 7;
    UPDATE patients SET id = 7  WHERE  id = 8;
