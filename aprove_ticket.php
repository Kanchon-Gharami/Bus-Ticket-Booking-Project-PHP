<?php include('header.php'); ?>
<?php include('function.php'); ?>

<div style="height: 40px;"></div>
<h2 class="text-center">Admin Corner</h2>
<p class="text-center">Aprove ticket for any tourist</p>
<div style="height: 40px;"></div>

<div class="container-fluid">
	<div class="row m-0 d-flex justify-content-center">
		<div class="col-xl-8">
			<h5>List of Buses: </h5>
			<div class="table-responsive-xl">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Bus No.</th>
							<th scope="col">PNR No</th>
							<th scope="col">Seat No</th>
							<th scope="col">Address</th>
							<th scope="col">Contact No</th>
							<th scope="col">Status</th>
							<th scope="col">Approve!</th>
						</tr>
					</thead>
					<tbody>

						<?php
							$sql2 = "SELECT PNR_NO, NO_OF_SEATS, ADDRESS, CONTACT_NO, STATUS, BUS_NO  FROM reservation";
							$result2 = $conn->query($sql2);

							if ($result2->num_rows > 0) {
								// output data of each row
								while($row = $result2->fetch_assoc()) {
									echo "
										<tr>
											<td>" . $row["BUS_NO"]. "</td>
											<th>" . $row["PNR_NO"]. "</th>
											<td>" . $row["NO_OF_SEATS"]. "</td>
											<td>" . $row["ADDRESS"]. "</td>
											<td>" . $row["CONTACT_NO"]. "</td>
											<td>" . $row["STATUS"]. "</td>

										";

										if ( $row["STATUS"] == "Waiting" ) {
									?>

											<td>
												<form action="approve_confirm.php" method="POST">
													<input name="BUS_NO" value="<?php echo $row["BUS_NO"] ?>" style="display: none;">
													<button type="submit" class="btn btn-success">Approve</button>
												</form>
											</td>

										</tr>
								
									<?php
										}

										else{
											?>
											<td>
												<button type="submit" class="btn btn-dark" disabled>Approved</button>
											</td>

										</tr>
								
										<?php

										}
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