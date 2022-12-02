<html>

<head>
	<title>Contact</title>
</head>

<body>
	<?php
	if (isset($_POST['Submit'])) {
		$data_missing = array();
		if (empty($_POST['name'])) {
			$data_missing[] = 'Name';
		} else {
			$u_name = trim($_POST['name']);
		}
		if (empty($_POST['contact'])) {
			$data_missing[] = 'Contact';
		} else {
			$contact = $_POST['contact'];
		}
		if (empty($_POST['city'])) {
			$data_missing[] = 'City';
		} else {
			$city = $_POST['city'];
		}
		if (empty($_POST['email'])) {
			$data_missing[] = 'Email';
		} else {
			$email = $_POST['email'];
		}
		if (empty($_POST['subject'])) {
			$data_missing[] = 'Subject';
		} else {
			$subject = $_POST['subject'];
		}


		if (empty($data_missing)) {
			require_once('Database Connection file/mysqli_connect.php');
			$query = "INSERT INTO contact_detail (name, contact, city, email, subject) VALUES(?,?,?,?,?) ";
			$stmt = mysqli_prepare($conn, $query);
			mysqli_stmt_bind_param($stmt, "sisss", $u_name, $contact, $city, $email, $subject);
			mysqli_stmt_execute($stmt);
			$affected_rows = mysqli_stmt_affected_rows($stmt);
			mysqli_stmt_close($stmt);
			mysqli_close($conn);

			if ($affected_rows == 1) {
				echo "Submitted . <br>";;
				header("location: contact_success.php");
			} else {
				echo "Error";
			}
		} else {
			echo "The following data fields were empty<br>";
			foreach ($data_missing as $missing) {
				echo $missing . "<br>";
			}
		}
	} else {
		echo "Submit request not received";
	}
	?>
</body>

</html>