<!-- Query for showing data from database -->
<?php  
	if(isset($_POST["id"])){  
		$output = '';  

		$db = mysqli_connect("ec2-23-21-86-22.compute-1.amazonaws.com", "wiylemuttjvvls", "818bc577477f87ddb348548bf02da71b2353e3e6fa97d7f60ca6b74936caa3a2", "d8p7drrfl270pk");  

	  	$query = "SELECT * FROM users_account WHERE id = '".$_POST["id"]."'";  
	  	$result = mysqli_query($db, $query);  

	  	while($row = mysqli_fetch_array($result)){
			echo "<div class='modal-header btn-danger'>";
			echo "<h1>".$row["firstname"].'&nbsp'.$row['lastname']."</h1>";
			echo "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>";
			echo "</div>";
			echo "<div class='d-inline-flex  mt-2'>";
			echo "<img width='140' height='140' style='border:1px; border-radius:20px' src='images/".$row['image']."'>";
			echo "<h3 style='margin-left:20px;'>".$row['bio']."</h3>";
			echo "</div>";
			$output .= '  
	  			<div class="table-responsive">  
		   		<table class="table table-borderless"';   
		   	$output .= '
				<tr>  
					 <td width="50%"><label>Phone Number</label></td>  
					 <td width="70%"><strong>'.$row["number"].'</strong></td>  
				</tr>   
				<tr>  
					 <td width="30%"><label>Address</label></td>  
					 <td width="70%"><strong>'.$row["address"].'</strong></td>  
				</tr>  
				<tr>  
					 <td width="30%"><label>City</label></td>  
					 <td width="70%"><strong>'.$row["city"].'</strong></td>  
				</tr>  
				<tr>  
					 <td width="30%"><label>Zip Code</label></td>  
					 <td width="70%"><strong>'.$row["zip"].'</strong></td>  
				</tr>  
				<tr>  
					 <td width="30%"><label>Age</label></td>  
					 <td width="70%"><strong>'.$row["age"].' Yrs.Old</strong></td>  
				</tr>  
		   ';  
	  }  
	  $output .= '  
		   </table>  
	  		</div>  
	  ';
	  echo $output;  
 	}  
?>
 