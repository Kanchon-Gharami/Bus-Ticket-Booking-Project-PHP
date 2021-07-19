<?php 
	include('function.php');

	$BUS_NO = $_POST["BUS_NO"];

	// modiufied data coming by post method
	$PNR_NO = $_POST["PNR_NO"];
	$NEW_NO_OF_SEATS = $_POST["NO_OF_SEATS"];
	$NEW_ADDRESS = $_POST["ADDRESS"];
	$NEW_CONTACT_NO = $_POST["CONTACT_NO"];

	$sql = "
		UPDATE 
			`reservation` 
		SET 
			`NO_OF_SEATS` = $NEW_NO_OF_SEATS, `CONTACT_NO` = $NEW_CONTACT_NO, `ADDRESS`= '$NEW_ADDRESS'
		WHERE 
			`reservation`.`PNR_NO` = $PNR_NO
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


