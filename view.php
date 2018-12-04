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

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
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
					<input class="form-control mr-sm-2" name="search" "type="text" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
		<section class="jumbotron jumbotron-fluid text-dark" style="height: 700px;">
			<div class="container3 w-75 rounded border-dark" style="align-items:center; padding-top: 20px; margin-right: auto;margin-left: auto;">
				<?php 
					$sql	= "SELECT * FROM contacts WHERE id=". $_GET['id'];
					$result	= mysqli_query($db, $sql);
					echo "*"; 
				?>
			</div>
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
