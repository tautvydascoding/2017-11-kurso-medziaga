

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
