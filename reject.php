<?php
	require_once("database.php");
	if(!$con) {
	die('Could not connect: ' . mysqli_error());
	}

	if (isset($_GET['Reject'])) {
		# code...
		$reject = "Rejected";
		$Id = $_GET['Reject'];
		$sql = "UPDATE hostel SET status='Rejected' WHERE hostelId=$Id";

		$result = mysqli_query($con,$sql);
		if (!$result) {
			# code...
			echo "Failed to update";
		}else{
			header("location:AdminHomepage.php");
		}
		
		mysqli_close($con);
	}
	if (isset($_GET['Approve'])) {
		# code...
		//$reject = "Rejected";
		$Id = $_GET['Approve'];
		$sql = "UPDATE hostel SET status='Approved' WHERE hostelId=$Id";

		$result = mysqli_query($con,$sql);
		if (!$result) {
			# code...
			echo "Failed to update";
		}else{
			header("location:AdminHomepage.php");
		}
		
		mysqli_close($con);
	}

  ?>
