<?php include('header.php'); ?>

<?php include('function.php'); ?>


<div style="height: 40px;"></div>
<h2 class="text-center">Admin Corner</h2>
<p class="text-center">Watch and add Bus shudules</p>
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
							<th scope="col">Fair Number</th>
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
										</tr>
									";

								}
							}
							else {
								echo "0 results";
							}
							$conn->close();
						?>

					</tbody>
				</table>
				<button class="btn btn-info float-right my-4" data-toggle="modal" data-target="#bus_entry_modal">
					Add Bus entry
				</button>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="bus_entry_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="busentry.php" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<label>BUS NO</label>
						<input type="text" name="BUS_NO" class="form-control" placeholder="Enter bus no">
					</div>
					<div class="form-group">
						<label>SOURCE</label>
						<input type="text" name="SOURCE" class="form-control" placeholder="Enter Source">
					</div>
					<div class="form-group">
						<label>DESTINATION</label>
						<input type="text" name="DESTINATION" class="form-control" placeholder="Enter DESTINATION">
					</div>
					<div class="form-group">
						<label>COUCH_TYPE</label>
						<input type="text" name="COUCH_TYPE" class="form-control" placeholder="Enter COUCH_TYPE">
					</div>
					<div class="form-group">
						<label>FAIR NUMBER</label>
						<input type="text" name="FAIR_NUMBER" class="form-control" placeholder="Enter FAIR_NUMBERo">
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save entry</button>
				</div>
			</form>
		</div>
	</div>
</div>


<div class="container-fluid my-5">
	<div class="row m-0">
		<a href="index.php" class="btn btn-info mx-auto">Back to home</a>
	</div>
</div>



<?php include('footer.php'); ?>