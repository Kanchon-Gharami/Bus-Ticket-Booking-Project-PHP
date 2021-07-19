<?php
	include('function.php');

	$BUS_NO = $_POST["BUS_NO"];

	$sql = "
		UPDATE
			`reservation`
		SET
			`STATUS` = 'Ticket Confirm'
		WHERE
			`reservation`.`BUS_NO` = $BUS_NO
			";

	$result = $conn->query($sql);

	if ($conn->query($sql) === TRUE) {
	  header('Location: aprove_ticket.php');
	}
	else {
	  echo "Error updating record: " . $conn->error;
	}

?>
