<?php include('header.php'); ?>

<div class="container my-5">
	<div class="col-xl-6 mx-auto">
		<?php
			include('function.php');

			$BUS_NO = test_input($_POST["BUS_NO"]);
			$SOURCE = test_input($_POST["SOURCE"]);
			$DESTINATION = test_input($_POST["DESTINATION"]);
			$COUCH_TYPE = test_input($_POST["COUCH_TYPE"]);
			$FAIR_NUMBER = test_input($_POST["FAIR_NUMBER"]);


		    function test_input($data) {
		      $data = trim($data);
		      $data = stripslashes($data);
		      $data = htmlspecialchars($data);
		      return $data;
		    }

		    echo "<h2>Your Input:</h2>";
			echo "Bus no.: ";	echo $BUS_NO;
			echo "<br>";
			echo "Source: ";	echo $SOURCE;
			echo "<br>";
			echo "Destination: ";	echo $DESTINATION;
			echo "<br>";
			echo "Coach type: ";	echo $COUCH_TYPE;
			echo "<br>";
			echo "Fair number: ";	echo $FAIR_NUMBER;
			echo "<br>";
			echo "<br>";

			$sql = "INSERT INTO bus (BUS_NO, SOURCE, DESTINATION, COUCH_TYPE, FAIR_NUMBER)
			VALUES ('$BUS_NO', '$SOURCE', '$DESTINATION', '$COUCH_TYPE', '$FAIR_NUMBER')";

			if ($conn->query($sql) === TRUE) {
			  echo "New record created successfully";
			}
			else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}

		?>

	</div>

</div>



<div class="container">
	<div class="rom m-0 d-flex justify-content-center">
		<a href="admin.php" class="btn btn-info">back to page</a>
	</div>
</div>

<?php include('footer.php'); ?>
