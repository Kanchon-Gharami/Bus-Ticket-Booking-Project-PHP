<?php include('header.php'); ?>

<?php include('function.php'); ?>


<?php
	$PNR_NO = test_input($_POST["PNR_NO"]);
	$NO_OF_SEATS = test_input($_POST["NO_OF_SEATS"]);
	$ADDRESS = test_input($_POST["ADDRESS"]);
	$CONTACT_NO = test_input($_POST["CONTACT_NO"]);
	$STATUS = "Waiting";
	$BUS_NO = $_POST["BUS_NO"];


    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $sql = "INSERT INTO `reservation` (`PNR_NO`, `NO_OF_SEATS`, `ADDRESS`, `CONTACT_NO`, `STATUS`, `BUS_NO`) VALUES ('$PNR_NO', '$NO_OF_SEATS', '$ADDRESS', '$CONTACT_NO', '$STATUS', '$BUS_NO')";

?>




<div style="height: 40px;"></div>

<?php
	if ($conn->query($sql) === TRUE) {
?>

	<h2 class="text-center text-success">
		You have successfully completed your reservation!
	</h2>
	<p class="text-center">
		Wait till our admin confirm your ticket
	</p>

<?php
	}
	else {
?>

	<h2 class="text-center text-danger">
		Sorry There might be some problem!
	</h2>
	<p class="text-center">
		<?php echo "Error: " . $sql . "<br>" . $conn->error;?>
	</p>

<?php
	 }
?>


<div style="height: 40px;"></div>


<div class="container-fluid">
	<div class="row m-0 d-flex justify-content-center">
		<div class="col-xl-4">

			<?php
				echo "<br>";
			    echo "<h4>Your Input:</h4>";
			    echo "<hr>";
				echo "PNR no.: ";	echo $PNR_NO;
				echo "<br>";
				echo "No of Seat: ";	echo $NO_OF_SEATS;
				echo "<br>";
				echo "Address: ";	echo $ADDRESS;
				echo "<br>";
				echo "Contact No: ";	echo $CONTACT_NO;
				echo "<br>";
				echo "Status: ";	echo $STATUS;
				echo "<br>";
			?>

		</div>
		<div class="col-xl-1"></div>
		<div class="col-xl-2">

			<?php
				$BUS_NO = $_POST["BUS_NO"];
				// echo $BUS_NO;

				$sql = "SELECT BUS_NO, SOURCE, DESTINATION, COUCH_TYPE, FAIR_NUMBER FROM bus WHERE BUS_NO=$BUS_NO";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				  // output data of each row
				  while($row = $result->fetch_assoc()) {
				  	echo "<br>";
				  	echo "<h4>Bus info: </h4>";
				  	echo "<hr>";
				    echo "SOURCE: " . $row["SOURCE"];		echo "<br>";
				    echo "DESTINATION: " . $row["DESTINATION"];		echo "<br>";
				    echo "COUCH_TYPE: " . $row["COUCH_TYPE"];		echo "<br>";
				    echo "FAIR_NUMBER: " . $row["FAIR_NUMBER"];		echo "<br>";
				    echo "BUS_NO: " . $row["BUS_NO"];		echo "<br>";

				  }
				} else {
				  echo "0 results";
				}

			?>

		</div>
	</div>
</div>


<div class="container-fluid my-5">
	<div class="row m-0">
		<a href="index.php" class="btn btn-info mx-auto">Back to home</a>
	</div>
</div>


<div style="height: 150px;"></div>



<?php include('footer.php'); ?>
