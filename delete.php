<?php
if(isset($_GET['id'])){
	$id		= $_GET['id'];
	$connect = mysqli_connect("localhost", "root", "", "Phonebook");
	$sql 	= "SELECT username FROM users_account WHERE id = '$id'";
	$result1 = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result1)==1) {
		while ($row = mysqli_fetch_assoc($result1)) {
			$query = "DELETE FROM users_account WHERE id = '$id'"; 
    		$result = mysqli_query($connect, $query);
			header("location: home.php?username=".$row['username']."&deleted=1");
		}
    }
	
}