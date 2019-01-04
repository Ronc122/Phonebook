<nav class="navbar navbar-expand-lg navbar-light bg-danger">
	<img src="images/phonebook.png" width="80" height="80" class="d-inline-block align-top" alt=""/>
	<a class="navbar-brand text-light" href="index.php"><h1>Phonebook</h1></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active">
				<a class="nav-link text-light" href="home.php?username=<?php echo $_SESSION['username']; isset($_SESSION['username']);?>"><img src="package/build/svg/home.svg"/>&nbsp<strong>Home</strong> <span class="sr-only">(current)</span></a>
			</li>
		</ul>     
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <img src="images/username.png" width="20" height="20" alt="avatar" class="rounded-circle img-responsive">
					<?php echo $_SESSION['username']; isset($_SESSION['username']);?></a>
					<div class="dropdown-menu" style="background-color:#DFAEAC;" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" style="background-color:#DFAEAC;" href="home.php?logout='1'">Log out&nbsp <img src="package/build/svg/sign-out.svg"/></a>
					</div>
				</li>
			</ul>
	</div>
<<<<<<< HEAD
</nav>
=======
</nav>
>>>>>>> ed85adce22fe35bc6e7aabb586ef5d84fb0650ab
