<?php
    if (isset($_POST['submit'])) {
        include_once('dbc.php');

        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $passwd = mysqli_real_escape_string($conn, $_POST['passwd']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);


        if (empty($firstname) || empty($lastname) || empty($email) || empty($passwd) || empty($address) || empty($city) || empty($postcode)) {
                header("Location: ../registration.php?signup=empty");
        		exit();
        } else {
            if (!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)) {
                header("Location: ../registration.php?signup=invalid");
        		exit();
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../registration.php?signup=email");
            		exit();
                } else {
                    $sql = "SELECT * FROM customer WHERE email='$email'";
                    $result = mysqli_query($conn, $query);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        header("Location: ../registration.php?signup=taken");
                		exit();
                    } else {
                        $hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);

                        $sql = "INSERT INTO customer (firstname, lastname, email, passwd, address, city, postcode) VALUES ('$firstname', '$lastname', '$email', '$hashedPwd', '$address', '$city', '$postcode');";
                        if (mysqli_query($conn, $sql)) {
                            header("Location: ../connect.php");
                        } else {
                            header("Location: ../registration.php?signup=SQL");
                        }
                		exit();
                    }
                }
            }
        }

    } else {
        header("Location: ../signup.php");
		exit();
    }
