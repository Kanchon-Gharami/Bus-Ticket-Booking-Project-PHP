<?php include('header.php'); ?>
<?php include('function.php'); ?>

<div style="height: 40px;"></div>
<h2 class="text-center">Your Reservation List</h2>
<p class="text-center">Watch your reservation list and check their status</p>
<div style="height: 40px;"></div>

<div class="container-fluid">
	<div class="row m-0 d-flex justify-content-center">
		<div class="col-xl-8">
			<h5>List of Buses: </h5>
			<div class="table-responsive-xl">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">PNR No</th>
							<th scope="col">Seat No</th>
							<th scope="col">Address</th>
							<th scope="col">Contact No</th>
							<th scope="col">Status</th>
							<th scope="col">Bus No.</th>
							<th scope="col">Modify</th>
							<th scope="col">Cancle</th>
						</tr>
					</thead>
					<tbody>

						<?php
							$sql = "SELECT PNR_NO, NO_OF_SEATS, ADDRESS, CONTACT_NO, STATUS, BUS_NO  FROM reservation";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									echo "
										<tr>
											<th>" . $row["PNR_NO"]. "</th>
											<td>" . $row["NO_OF_SEATS"]. "</td>
											<td>" . $row["ADDRESS"]. "</td>
											<td>" . $row["CONTACT_NO"]. "</td>
											<td>" . $row["STATUS"]. "</td>
											<td>" . $row["BUS_NO"]. "</td>

										";
									?>

											<td>
												<form action="modifyreservation.php" method="POST">
													<input name="BUS_NO" value="<?php echo $row["BUS_NO"] ?>" style="display: none;">
													<button type="submit" class="btn btn-warning">Modify!</button>
												</form>
											</td>

											<td>
												<form action="delete_reservation.php" method="POST">
													<input name="BUS_NO" value="<?php echo $row["BUS_NO"] ?>" style="display: none;">
													<button type="submit" class="btn btn-danger">Cancle!</button>
												</form>
											</td>
										</tr>

									<?php

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
