<!-- Query for deleting data from database -->
<?php

	if(isset($_GET['id'])){ //Getting id number on the link
		$id		= $_GET['id'];
		/* connecting to the database */


		$connect = mysqli_connect("localhost", "user", "userpassword", "Phonebook");

		$connect = mysqli_connect("localhost", "root", "", "Phonebook");
		$connect = mysqli_connect("localhost", "user", "userpassword", "Phonebook");

		$connect = mysqli_connect("localhost", "root", "", "Phonebook");
		/* Query for getting the username */
		$sql 	= "SELECT username FROM users_account WHERE id = '$id'";
		$result1 = mysqli_query($connect, $sql);

    	if (mysqli_num_rows($result1)==1) {
			while ($row = mysqli_fetch_assoc($result1)) {
				/* Query for selected id to delete */
				$query = "DELETE FROM users_account WHERE id = '$id'"; 
    			$result = mysqli_query($connect, $query);
    			/* link when the process is done */
				header("location: home.php?username=".$row['username']."&deleted=1");
			}
    	}	
	}