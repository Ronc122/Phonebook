<!-- Link for connecting to database and other PHP query -->
<?php include 'server.php';?>
<?php echo "Hello Guys";?>
<!DOCTYPE html>
<html>
	<head>
		<title>Phonebook</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" type="image/png" sizes="180x180" href="images/phonebook.png"/>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<link  href="css/mystyle.css" type="text/css" rel="stylesheet"/>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>     
		<script type="text/javascript" src="css/jquery-3.3.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<!-- Internal CSS -->
		<style>
	  		body::after{
				content: "";
				background-image: url("images/background.jpg");
	  		}
		</style>
	</head>
<body>

	<section class="jumbotron">
		<div class="container text-center" style="margin-top: 50px;">
			<img src="images/phonebook.png" width="100" height="100" />
			<h1 class="p-2 text-white">Phonebook</h2>

			<?php include('error.php'); ?>
			<?php include('invalid.php'); ?>

			<div style="margin-top: 120px;">				
				<div class="button">
					<button type="button" class="btn btn-outline-light shadow-lg" data-toggle="modal" data-target="#modalRegisterForm" style="padding-left: 70px;padding-right: 70px; border-radius: 20px;">SIGN UP</button>
					<!-- Link to Signup PHP file -->
				  	<?php include('signup.php');?>
				</div>
				<div class="button">
					<button type="button" class="btn btn-light mt-3 shadow-lg" data-toggle="modal" data-target="#modalLoginAvatar" style="padding-left: 77px;padding-right: 77px; border-radius: 20px; color:red">LOGIN</button>
					<!-- Link to login PHP file -->
					<?php include('login.php');?>
				</div>
			</div>
		</div>
	</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
