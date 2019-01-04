<?php 
	session_start();
	$dbserver	= 'localhost';
	$dbusername = 'root';
	$dbDatabase	= 'Phonebook';
	$error      = array();
	$invalid	= array();
	$msg 		= "";

	/* Connect to database */ 	
	$db = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbDatabase);
	/* when not connected it will show failed */
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}
	/* When user hit the logout it will go redirect to index.php page */
	if (isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');
	}

	/* Users logging in to the site  */
  	if (isset($_POST['login'])){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$password = md5($password);
		// Select Query
		$query = "SELECT * FROM account WHERE username='$username' AND password='$password'";

		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result) == 1){
			while($row = mysqli_fetch_assoc($result)){
			// log in user
			$username = $row['username'];
			$_SESSION['username'] = $username;
			header('location: home.php?username='.$username.'');// to mainpage
	  		}
		}else{
	  		array_push($invalid, "Wrong Username/Password");
		}
  	}

  	/* Registering users to the website */
 	if (isset($_POST['register'])){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email    = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$password1 = mysqli_real_escape_string($db, $_POST['password1']);
		/* Ensuring username are not yet taken from existing user */
		$query = "SELECT * FROM account WHERE username='$username'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result) == 1){
		  array_push($error, "Username already taken");
		}
		if ($password != $password1){
		  array_push($error, "The Password did not match"); 
		}
		if (count($error) == 0){
		$password = md5($password1);//encrypt password
		$sql = "INSERT INTO account (username, email, password) VALUES ('$username','$email','$password')";
		mysqli_query($db, $sql);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are successfully registered!";
		header('location: home.php?username='.$username.'');// to mainpage
		}
	}

	/* Adding contact details */
	if(isset($_POST['submit'],$_GET['username'])){
		$target   = "images/".basename($_FILES['image']['name']);
		$user     = $_GET['username'];
	  	$image    = $_FILES['image']['name'];
	  	$bio    = mysqli_real_escape_string($db, $_POST['bio']);
	  	$firstname  = mysqli_real_escape_string($db, $_POST['firstname']);
	  	$lastname   = mysqli_real_escape_string($db, $_POST['lastname']);
	  	$number   = mysqli_real_escape_string($db, $_POST['number']);
	  	$address  = mysqli_real_escape_string($db, $_POST['address']);
	  	$city     = mysqli_real_escape_string($db, $_POST['city']);
	  	$zip    = mysqli_real_escape_string($db, $_POST['zip']);
	  	$age    = mysqli_real_escape_string($db, $_POST['age']);

	  	// Query to insert data to database
	  	$sql  = "INSERT INTO users_account (username,firstname,lastname,number,address,city,zip,age,image,bio) VALUES ('$user','$firstname','$lastname','$number','$address','$city','$zip','$age','$image','$bio')";
	  	mysqli_query($db, $sql);

	  	// ensuring image is uploaded properly
	  	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			$msg = "Image successfully uploaded!";
	  	}else{
			$msg = "There was a problem uploading the image!";
	  	}
	  	//redirecting after successful adding
		header('location: home.php?username='.$user.'&added=1');
	}

	/* Query for fetching data from database in specific ID */
  	if (isset($_GET['id'])) {
		$id   =   $_GET['id'];
		$sql  =   "SELECT * FROM users_account WHERE id = '$id'";
		$result   = mysqli_query($db, $sql);
		$row  =   mysqli_fetch_array($result);
  	}

  	/* Updating existing data from database */
  	if(isset($_POST['update'])){
		$target   = "images/".basename($_FILES['image']['name']);
	  	$image    = $_FILES['image']['name'];
	  	$id       = $_POST['id'];
	  	$bio    = mysqli_real_escape_string($db, $_POST['bio']);
	  	$firstname  = mysqli_real_escape_string($db, $_POST['firstname']);
	  	$lastname   = mysqli_real_escape_string($db, $_POST['lastname']);
	  	$number   = mysqli_real_escape_string($db, $_POST['number']);
	  	$address  = mysqli_real_escape_string($db, $_POST['address']);
	  	$city     = mysqli_real_escape_string($db, $_POST['city']);
	  	$zip    = mysqli_real_escape_string($db, $_POST['zip']);
	  	$age    = mysqli_real_escape_string($db, $_POST['age']);

	  	//Getting the username of the specific ID
	  	$query  = "SELECT username FROM users_account WHERE id = '$id'";
	  	$result = mysqli_query($db, $query);
	  	if (mysqli_num_rows($result)==1){
			while ($row = mysqli_fetch_assoc($result)){
				// Condition when image is not change
		  		if (!empty($image)){
		  			$sql  = "UPDATE users_account SET firstname='$firstname',lastname='$lastname', number='$number',address='$address',city='$city',zip='$zip',age='$age',image='$image',bio='$bio' WHERE id = '$id'";
		  			mysqli_query($db, $sql);
				}else{
		  			$sql  = "UPDATE users_account SET firstname='$firstname',lastname='$lastname', number='$number',address='$address',city='$city',zip='$zip',age='$age',bio='$bio' WHERE id = '$id'";
		  			mysqli_query($db, $sql);
				}
				// ensuring image is uploaded properly
		  		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
		  			$msg = "Image successfully uploaded!";
		  		}else{
		  			$msg = "There was a problem uploading the image!";
		  		}
		  		//Redirecting after succesful updating the data
				header('location: home.php?username='.$row['username'].'&updated=1');
	  		}
  		}
	}

	  