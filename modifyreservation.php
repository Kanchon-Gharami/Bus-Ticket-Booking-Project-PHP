<?php include('header.php'); ?>
<?php include('function.php'); ?>


<div style="height: 40px;"></div>
<h2 class="text-center">Modify your reservation</h2>
<p class="text-center">Please modify as you want</p>
<div style="height: 40px;"></div>


<div class="container-fluid">
	<div class="row m-0 d-flex justify-content-center">
		<div class="col-xl-5">

			<?php
				$BUS_NO = $_POST["BUS_NO"];

				$sql = "SELECT * FROM reservation NATURAL JOIN bus WHERE BUS_NO = {$BUS_NO};";
				$result = $conn->query($sql);

				if ($result && $result->num_rows) {
					while($row = $result->fetch_assoc()) {
						 $PNR_NO = $row["PNR_NO"];
						 $NO_OF_SEATS = $row["NO_OF_SEATS"];
						 $ADDRESS = $row["ADDRESS"];
						 $CONTACT_NO = $row["CONTACT_NO"];
						 // echo $DESTINATION;

			?>

			<form action="modifyreservation_confirm.php" method="POST">
				<div class="form-group">
					<label>PNR No. </label>
					<input type="text" name="PNR_NO" class="form-control" value="<?php echo $row["PNR_NO"] ?>" readonly>
				</div>
				<div class="form-group">
					<label>No of seats</label>
					<input type="text" name="NO_OF_SEATS" class="form-control" value="<?php echo $row["NO_OF_SEATS"] ?>">
				</div>
				<div class="form-group">
					<label>Address</label>
					<input type="text" name="ADDRESS" class="form-control" value="<?php echo $row["ADDRESS"] ?>">
				</div>
				<div class="form-group">
					<label>Contact No</label>
					<input type="text" name="CONTACT_NO" class="form-control" value="<?php echo $row["CONTACT_NO"] ?>">
				</div>

				<!-- hiddenly sent bus info with this form -->
				<div class="form-group" style="display: none;">
					<input type="text" name="BUS_NO" class="form-control" value="<?php echo $_POST["BUS_NO"] ?>">
				</div>
				<!-- end of hiddenly sending data -->

				<div class="row m-0 my-5">
					<a type="text" href="reservationlist.php" class="btn btn-dark mx-2">Go back</a>
					<a type="text" href="#" class="btn btn-danger mx-2">Cancle Reservation</a>
					<button type="submit" class="btn btn-success mx-2">Confirm Modification!</button>
				</div>		
			</form>


			<?php
						}
					} else {
						echo "Sorry cannot load data";
					}
			?>


		</div>
		<div class="col-xl-1"></div>
		<div class="col-xl-2">
			
			<?php
			
				$sql = "SELECT * FROM reservation NATURAL JOIN bus WHERE BUS_NO = {$BUS_NO};";
				$result = $conn->query($sql);

				if ($result && $result->num_rows) {
				  // output data of each row
				  while($row = $result->fetch_assoc()) {
				  	echo "<br>";
				  	echo "<h4>Bus info</h4>";
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


<div style="height: 200px;"></div>


<?php include('footer.php'); ?>