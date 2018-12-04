<?php include_once 'server.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fonebook</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<link rel = "icon" type = "image/png" sizes = "180x180" href = "download.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
		@media (max-width: 860px) { 
			section .container-1{
				position: absolute;
				visibility:hidden;
			}
		}
    </style>
	
</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-dark">
			<a class="navbar-brand text-white" style="font-size:45px;" href="#"><b>Fonebook</b></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link text-white" href="" data-toggle="modal" data-target="#exampleModalCenter"><h3>Info</h3></a>
						<!-- Modal -->
						<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content border border-info">
						<div class="modal-header" style="background-color:#90B285;">
						<h5 class="modal-title" id="exampleModalCenterTitle">App Information</h5>
						</div>
						<div class="modal-body">
						<p class="lead">The intention of this application is to help the user to store information of a person.
						It normally store names, email addresses, addresses, contact numbers and other information to make this application a phonebook. If you
						are interested in this application, feel free to try and sign up. Thank you!</p>
					  </div>
					  <div class="modal-footer" style="background-color:#90B285;">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
					</div>
					</div>
					</li>
				</ul>
				<form class="form-inline" method="post" action="fonebook.php">
					<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
					<!--Displaying Validation errors here-->
					<?php include('error1.php');?></li>
					
					<div class="form-group mx-sm-3 mb-2">
						<label for="inputUsername2" class="sr-only">Username</label>
						<input type="text" name="username" class="form-control" id="inputUsername2" placeholder="Username">
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<label for="inputPassword2" class="sr-only">Password</label>
						<input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password">
					</div>
						<button type="submit" name="login" class="btn btn-outline-success mb-2">Log In</button>
					</form>
			</div>
		</nav>
		<section class="jumbotron jumbotron-fluid h-100">
			<div class="container-1">
				<h3 class="display-4">Contain Information <br>of a Person.</h3>
				<p class="lead">The application is a project that aim to create a phonebook that can save contact information of a person.</p>
			</div>
			<div class="container border border-dark" style="background-color:#90B285;">
				<center><img src="contact.png" height="90" width="110"/>
				<h2>Sign Up for Free!</h2></center>
				<!--Displaying Validation errors here-->
					<?php include('error.php');?>
				<form class="p-4 border border-dark bg-light rounded"  method="post" action="fonebook.php">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" value="<?php echo $username?>" class="form-control" id="exampleInputUsername1" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" name="email" value="<?php echo $email?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						<small id="emailHelp"  class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" name="password_1" id="exampleInputPassword1" placeholder="Enter Password">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Confirm Password</label>
						<input type="password" class="form-control" name="password_2" id="exampleInputPassword1" placeholder="Confirm Password">
					</div>
					<button type="submit" name="register" class="btn btn-outline-success">Submit</button>
				</form>
			</div>
		</section>
		<div class="container-fluid bg-dark text-white" style="height:auto; margin-top:-35px">
		<div class="d-flex bd-highlight mb-3">
		<div class="mr-auto p-2 bd-highlight"><h3>Powered by Linux</h3></div>
		<div class="p-2 bd-highlight"><h5>Facebook</h5></div>
		<div class="p-2 bd-highlight"><h5>Twitter</h5></div>
		</div>
		</div>
		<img src=''
	</body>
</html>
