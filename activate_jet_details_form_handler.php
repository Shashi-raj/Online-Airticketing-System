<?php
session_start();
?>
<html>

<head>
	<title>Activate Aircraft</title>
</head>

<body>
	<?php
	if (isset($_POST['Activate'])) {
		$data_missing = array();
		if (empty($_POST['jet_id'])) {
			$data_missing[] = 'Jet ID';
		} else {
			$jet_id = trim($_POST['jet_id']);
		}

		if (empty($data_missing)) {
			require_once('Database Connection file/mysqli_connect.php');
			$query = "UPDATE jet_details SET active='Yes' WHERE jet_id='{$jet_id}'";
			$affected_rows = mysqli_query($conn, $query);
			if ($affected_rows == 1) {
				echo "Successfully Activated";
				header("location: activate_jet_details.php?msg=success");
			} else {
				echo "Submit Error";
				echo ($affected_rows);
				echo mysqli_error($conn);
				// header("location: activate_jet_details.php?msg=failed");
			}
		} else {
			echo "The following data fields were empty! <br>";
			foreach ($data_missing as $missing) {
				echo $missing . "<br>";
			}
		}
	} else {
		echo "Activate request not received";
	}
	mysqli_close($conn);
	?>
</body>

</html>