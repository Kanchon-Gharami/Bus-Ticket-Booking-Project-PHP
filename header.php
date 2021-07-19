<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- media queary support -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<!-- animated css link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

	<!-- font awsome css link -->	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- custom css link -->
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-info">
		<a class="navbar-brand" href="index.php">BOOK TICKETS AND TRAVELS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item active mx-2">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link" href="#">About Us</a>
				</li>
				<li class="nav-item dropdown mx-2">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Travelings
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="reservations.php">Reservations</a>
						<a class="dropdown-item" href="reservationlist.php">Cancellation</a>
						<a class="dropdown-item" href="reservationlist.php">Modification</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="aprove_ticket.php">Aprove Tickets</a>
						<a class="dropdown-item" href="admin.php">Admin Corner</a>
					</div>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link" href="admin.php">Admin Panel</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>