<?php include('header.php'); ?>

<?php include('function.php'); ?>


<div style="height: 40px;"></div>
<h2 class="text-center">Reservations Corner</h2>
<p class="text-center">Watch our bus shedule and reserve ticket</p>
<div style="height: 40px;"></div>


<div class="container-fluid">
	<div class="row m-0 d-flex justify-content-center">
		<div class="col-xl-8">
			<h5>List of Buses: </h5>
			<div class="table-responsive-xl">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Bus No</th>
							<th scope="col">Source</th>
							<th scope="col">Destination</th>
							<th scope="col">Couch Type</th>
							<th scope="col">Price</th>
							<th scope="col">Reserve?</th>
						</tr>
					</thead>
					<tbody>

						<?php
							$sql = "SELECT BUS_NO, SOURCE, DESTINATION, COUCH_TYPE, FAIR_NUMBER  FROM bus";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									echo "
										<tr>
											<th>" . $row["BUS_NO"]. "</th>
											<td>" . $row["SOURCE"]. "</td>
											<td>" . $row["DESTINATION"]. "</td>
											<td>" . $row["COUCH_TYPE"]. "</td>
											<td>" . $row["FAIR_NUMBER"]. "</td>
										";
										?>

										<td>
											<form action="reservationdetails.php" method="POST">
												<input type="text" name="BUS_NO" value="<?php echo $row["BUS_NO"] ?>" style="display: none;">
												<button type="submit" class="btn btn-success">Go!</button>
											</form>
										</td>

										<?php
								
									echo "</tr>";

								}
							}
							else {
								echo "0 results";
							}
							$conn->close();
						?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid my-5">
	<div class="row m-0">
		<a href="index.php" class="btn btn-info mx-auto">Back to home</a>
	</div>
</div>


<?php include('footer.php'); ?>