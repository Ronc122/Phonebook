<?php include_once 'server.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fonebook</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "icon" type = "image/png" sizes = "180x180" href = "download.png">
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	
</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-dark">
			<a class="navbar-brand" style="color:white; font-size:45px;"><b>Fonebook</b></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent" >
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link text-white" name="list" href="contact_list.php">Contacts</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link text-white" href="index.php" name="list" >Add Contacts</a>
					</li>
					  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php echo $_SESSION['username']; isset($_SESSION['username']);?>
					</a>
					<div class="dropdown-menu" style="background-color:#DFAEAC;" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" style="background-color:#DFAEAC;" href="index.php?logout='1'">Log out</a>
					</div></li>
				</ul>

				<form class="form-inline my-2 my-lg-0" method="post" action="search.php">
					<input class="form-control mr-sm-2" name="search" type="text" placeholder="Search Names" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
		<section class="jumbotron jumbotron-fluid h-100">
			<center><div class="container2 border border-dark w-75 h-100" style="background-color:#90B285;text-align: center;">
				<img src="contact.png" height="90" width="110" >
				<h2>You are updating a profile.</h2>
				<form class="p-4 border border-dark bg-light rounded" method="post" action="">
				<div class="form-row">
				<div class="col-md-4 mb-3">
					<label for="validationDefault01">First Name</label>
					<input type="text" name="firstname" value="<?php echo $row['firstname'] ?>" class="form-control" placeholder="First Name">
				</div>
				<div class="col-md-4 mb-3">
					<label for="validationDefault02">Last Name</label>
					<input type="text" name="lastname" value="<?php echo $row['lastname'] ?>"class="form-control" id="validationDefault02" placeholder="Last Name" required>
				</div>
				<div class="col-md-4 mb-3">
					<label for="validationDefault">Email Address</label>
					<div class="input-group">
					<input type="email" name="email" value="<?php echo $row['email'] ?>"class="form-control" id="validationDefault03" placeholder="Email Address" required>
				</div>
				</div>
				<div class="form-row">
				<div class="col-md-4 mb-3">
					<label for="validationDefault01">Phone Number</label>
					<input type="Number" name="phonenumber" value="<?php echo $row['phonenumber'] ?>" class="form-control" id="validationDefault01" placeholder="PhoneNumber" required>
				</div>
				<div class="col-md-4 mb-3">
					<label for="validationDefault02">Address</label>
					<input type="text" name="address" value="<?php echo $row['address'] ?>" class="form-control" id="validationDefault02" placeholder="Address" required>
				</div>
				<div class="col-md-4 mb-3">
					<label for="validationDefault03">Municipality/City</label>
					<div class="input-group">
					<input type="text" name="muni_city" value="<?php echo $row['muni_city'] ?>" class="form-control" id="validationDefault01" placeholder="Municipality/City" required>
				</div>
				</div>
				<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="validationDefault01">Province</label>
					<input type="text" name="province" value="<?php echo $row['province'] ?>" class="form-control"  id="validationDefault01" placeholder="Province" required>
				</div>
				<div class="col-md-3 mb-3">
					<label for="validationDefault02">State</label>
					<input type="text" name="state" value="<?php echo $row['state'] ?>" class="form-control"  id="validationDefault02" placeholder="State" required>
				</div>
				<div class="col-md-3 mb-3">
					<label for="validationDefault03">ZipCode</label>
					<div class="input-group">
					<input type="Number" name="zip" value="<?php echo $row['zip'] ?>" class="form-control"  id="validationDefault01" placeholder="ZipCode" required>
				</div>
				</div>
				
				<div class="form-row" >
					<div class="form-check" style="margin-right:10px;margin-left:10px;">
						<input class="form-check-input" value="<?php echo $row['sex'] ?>" type="radio" name="sex" id="gridRadios1" value="Male" checked>
						<label class="form-check-label" for="gridRadios1">Male</label>
				</div>
					<div class="form-check" style="margin-right:15px;">
						<input class="form-check-input" value="<?php echo $row['sex'] ?>"type="radio" name="sex" id="gridRadios2" value="Female">
						<label class="form-check-label" for="gridRadios2">Female</label>
					</div>
				</div>
							<button class="btn btn-success d-flex " name="edit_contacts" type="submit">Update</button>
			</div>
		</form></center>

		</section>
		<div class="container-fluid bg-dark text-white" style="height:auto; margin-top:-35px">
		<div class="d-flex bd-highlight mb-3">
		<div class="mr-auto p-2 bd-highlight"><h3>Powered by Linux</h3></div>
		<div class="p-2 bd-highlight"><h5>Facebook</h5></div>
		<div class="p-2 bd-highlight"><h5>Twitter</h5></div>
		</div>
		</div>
		</body>
</html>
