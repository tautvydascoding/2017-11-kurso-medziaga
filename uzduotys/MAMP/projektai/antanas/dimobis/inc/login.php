<?php
	session_start();

	if (isset($_POST['submit'])) {
		include('dbc.php');

		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$passwd = mysqli_real_escape_string($conn, $_POST['passwd']);

		if (empty($email) || empty($paswd)) {
			header("Location: ../connect.php?login=empty");
			exit();
		} else {
			$sql = "SELECT * FROM customer WHERE email='$email'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck < 1) {
				header("Location: ../connect.php?login=error");
				exit();
			} else {
				if ($row = mysqli_fetch_assoc($result)) {
					// echo $row['email'];
					$hashedPwdCheck = password_verify($passwd, $row['passwd']);
					if ($hashedPwdCheck == false) {
						header("Location: ../connect.php?login=error");
						exit();
					} elseif ($hashedPwdCheck == true) {
						$_SESSION['firstname'] = $row['firstname'];
						$_SESSION['lastname'] = $row['lastname'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['passwd'] = $row['passwd'];
						$_SESSION['address'] = $row['address'];
						$_SESSION['city'] = $row['city'];
						$_SESSION['postcode'] = $row['postcode'];
						header("Location: ../connect.php?login=success");
						exit();
					}
				}
			}
		}
	} else {
		header("Location: ../connect.php?login=error");
		exit();
	}
