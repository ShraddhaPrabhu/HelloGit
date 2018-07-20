<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<title></title>
</head>
<body>
<div class="jumbotron" style="background: url('f/3.png'); height: 300px; background-size: cover;" >
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<a href="" class="list-group-item active " style="background-color: #3498DB ;color: #fffffff;border-color: #3498DB">Patients</a>
				<a href="" class="list-group-item">Patient Details</a>
				<!--<a href="" class="list-group-item">Add New Patient</a> -->
				<a href="" class="list-group-item">Payment</a>
			</div>
		<hr>
			<div class="list-group">
				<a href="" class="list-group-item active " style="background-color: #3498DB ;color: #fffffff;border-color: #3498DB">Staff</a>
				<a href="" class="list-group-item">Staff Details</a>
				<a href="" class="list-group-item">Add New Staff</a>
				<a href="" class="list-group-item">Remove Staff Members</a>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color: #3498DB ;color: #fffffff">
					<h6>Book an Appointment</h6>
				</div>
				<div class="card-body">
					<form class="form-group" action="func.php" method="post">
						<label>First Name:</label>
						<input type="text" name="fname" class="form-control"><br>

						<label>Last Name:</label>
						<input type="text" name="lname" class="form-control"><br>


						<label>Email Id:</label>
						<input type="text" name="email" class="form-control"><br>


						<label>Contact:</label>
						<input type="text" name="contact" class="form-control"><br>


						<label>Doctor Appointment:</label>
						<select class="form-control" name="docapp">
							<option value="Dr. Sharma From 6pm to 8pm">Dr. Sharma From 6pm to 8pm</option>
							<option value="Dr. Shetty From 4pm to 6pm">Dr. Shetty From 4pm to 6pm</option>
						</select><br>
						
						<input type="submit" name="pat_submit" class="btn btn-primary"value="Enter Appointment">
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/dojo/1.13.0/dojo/dojo.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>