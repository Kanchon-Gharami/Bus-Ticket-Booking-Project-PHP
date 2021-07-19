<?php 

	include('function.php');

	$BUS_NO = $_POST["BUS_NO"];

	$sql = "
		DELETE FROM 
			`reservation`
		WHERE 
			`reservation`.`BUS_NO` = $BUS_NO
			";

	$result = $conn->query($sql);


	if ($conn->query($sql) === TRUE) {
	  // echo "Record updated successfully";
	  header('Location: reservationlist.php');
	} 
	else {
	  echo "Error updating record: " . $conn->error;
	}



?>


