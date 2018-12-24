<?php 
	session_start();
	$dbserver	= 'localhost';
	$dbusername = 'root';
	$dbpassword	= '';
	$dbDatabase	= 'Phonebook';
	$error      = array();
	$invalid	= array();
	$msg 		= "";

	//connect to database	
	$db = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbDatabase);
	if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
  if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: index.php');
    
  }

  if (isset($_POST['login'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password = md5($password);
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
 if (isset($_POST['register'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email    = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password1 = mysqli_real_escape_string($db, $_POST['password1']);
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

      $sql  = "INSERT INTO users_account (username,firstname,lastname,number,address,city,zip,age,image,bio) VALUES ('$user', 
      '$firstname','$lastname','$number','$address','$city','$zip','$age','$image','$bio')";
      mysqli_query($db, $sql);

      if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $msg = "Image successfully uploaded!";
      }else{
        $msg = "There was a problem uploading the image!";
      }

      header('location: home.php?username='.$user.'&added=1');
    } 
  if (isset($_GET['id'])) {
    $id   =   $_GET['id'];
    $sql  =   "SELECT * FROM users_account WHERE id = '$id'";
    $result   = mysqli_query($db, $sql);
    $row  =   mysqli_fetch_array($result);
  }

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

      $query  = "SELECT username FROM users_account WHERE id = '$id'";
      $result = mysqli_query($db, $query);
      if (mysqli_num_rows($result)==1){
        while ($row = mysqli_fetch_assoc($result)){
          if (!empty($image)){
          $sql  = "UPDATE users_account SET firstname='$firstname',lastname='$lastname', number='$number',address='$address',city='$city',zip='$zip',age='$age',image='$image',bio='$bio' WHERE id = '$id'";
          mysqli_query($db, $sql);
        }else{
          $sql  = "UPDATE users_account SET firstname='$firstname',lastname='$lastname', number='$number',address='$address',city='$city',zip='$zip',age='$age',bio='$bio' WHERE id = '$id'";
          mysqli_query($db, $sql);
        }
          if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
          $msg = "Image successfully uploaded!";
          }else{
          $msg = "There was a problem uploading the image!";
          }
        header('location: home.php?username='.$row['username'].'&updated=1');
      }
  }
}

      