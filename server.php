<?php 
	session_start();
	$dbserver	= 'localhost';
	$dbusername = 'root';
	$dbpassword	= '';
	$dbDatabase	= 'Fonebook';
	$error		= array();
	$error1		= array();
	$search_error = array();
	//connect to database	
	$db = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbDatabase);
	if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
	//if register button is clicked
	if (isset($_POST['register'])){
		$username 	= mysqli_real_escape_string($db, $_POST['username']);
		$email 		= mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
	
		//ensure the form is filled
		if (empty($username)){
			array_push($error, "Username is required");
		}
		if (empty($email)){
			array_push($error, "Email is required");
		}
		if (empty($password_1)){
			array_push($error, "Password is required");
		}
		if ($password_1 != $password_2){
			array_push($error, "The Password did not match");	
		}
		//if no errors inputed by the user
		if (count($error) == 0){
			$password = md5($password_1);//encrypt password
			$sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are successfully registered!";
			header('location: index.php');// to mainpage
		}
	}
	//log in user 
	if (isset($_POST['login'])){
		$username 	= mysqli_real_escape_string($db, $_POST['username']);
		$password	= mysqli_real_escape_string($db, $_POST['password']);
	
		//ensure the form is filled
		if (empty($username)){
			array_push($error1, "Username is required");
		}
		if (empty($password)){
			array_push($error1, "Password is required");
		}
		if (count($error1) == 0){
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1){
				// log in user
				$_SESSION['username'] = $username;
				header('location: index.php');// to mainpage
			}else{
				array_push($error1, "Wrong Username/Password");
			}
		}
	}
	//logout
	if (isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: fonebook.php');
		
	}
	//adding contacts to database
	if (isset($_POST['add_contacts'])){
		$firstname		= mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname		= mysqli_real_escape_string($db, $_POST['lastname']);
		$email			= mysqli_real_escape_string($db, $_POST['email']);
		$phonenumber	= mysqli_real_escape_string($db, $_POST['phonenumber']);
		$address		= mysqli_real_escape_string($db, $_POST['address']);
		$muni_city		= mysqli_real_escape_string($db, $_POST['muni_city']);
		$province		= mysqli_real_escape_string($db, $_POST['province']);
		$state			= mysqli_real_escape_string($db, $_POST['state']);
		$zip			= mysqli_real_escape_string($db, $_POST['zip']);
		$sex			= mysqli_real_escape_string($db, $_POST['sex']);
		if (count($error) == 0){
			$sql = "INSERT INTO contacts (firstname, lastname, email, phonenumber, address, muni_city, province, state, zip, sex) VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$address', '$muni_city', '$province', '$state', '$zip', '$sex')";
			mysqli_query($db, $sql);
		}
	}
	//updating selected contacts
	if (isset($_POST['edit_contacts'])){				
		$id				= $_GET['id'];
		$firstname		= mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname		= mysqli_real_escape_string($db, $_POST['lastname']);
		$email			= mysqli_real_escape_string($db, $_POST['email']);
		$phonenumber	= mysqli_real_escape_string($db, $_POST['phonenumber']);
		$address		= mysqli_real_escape_string($db, $_POST['address']);
		$muni_city		= mysqli_real_escape_string($db, $_POST['muni_city']);
		$province		= mysqli_real_escape_string($db, $_POST['province']);
		$state			= mysqli_real_escape_string($db, $_POST['state']);
		$zip			= mysqli_real_escape_string($db, $_POST['zip']);
		$sex			= mysqli_real_escape_string($db, $_POST['sex']);
		$sql = "UPDATE contacts SET firstname='$firstname', lastname='$lastname', email='$email', phonenumber='$phonenumber', address='$address', muni_city='$muni_city', province='$province', state='$state', zip='$zip', sex='$sex' WHERE id='$id' LIMIT 1";
			mysqli_query($db, $sql);
			header('location: index.php');
	}
	//delete selected id
	if (isset($_GET['delete'])){
		$sql = "DELETE FROM contacts WHERE id = '".$_GET['delete']."' LIMIT 1";
		mysqli_query($db, $sql);
	}
	//getting data from database to edit
	if (isset($_GET['id'])) {
		
		$id = $_GET['id'];
		$sql = "SELECT * FROM contacts WHERE id = '$id'";
		$result = mysqli_query($db, $sql);
		$row = mysqli_fetch_array($result);
	}