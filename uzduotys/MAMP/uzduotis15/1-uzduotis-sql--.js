

// uzduotis 1: istrinti gydytoja "xxx"
// uzduotis 2: Pakeisti "Co" varda i "Karolis"
// uzduotis 3: visu pacientu, kuriu vardas prasideda "T" -  daktarus pakeisti i "4"
UPDATE patients SET doctor_id = 4 WHERE name like 'T%';
// uzduotis 4: gauti paciento "Tomas" daktaro pavarde
SELECT doctors.lname FROM doctors
        INNER JOIN   patients ON  patients.doctor_id = doctors.id
        WHERE patients.name = 'Tomas';
// arba
SELECT doctors.lname FROM doctors, patients
        WHERE patients.doctor_id = doctors.id AND patients.name = 'Tomas' ;
