<!-- Link for connecting to database and other PHP query -->
<?php include 'server.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Phonebook</title>
	<!-- Head Links in a separate file -->
	<?php include 'template/header.php';?>
	<style>
		table tr{
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<div class="grid">
	<!-- Navigation Bar in a separate file -->
	<?php include 'template/navbar.php'; ?>
		<center>
	<div class="main mt-3">
		<div class="border border-dark w-75 h-100 bg-danger rounded">
			<h2 class="text-black mt-3 mb-3">Updating the information of <strong class="text-light"><?php echo $row['firstname'].'&nbsp'.$row['lastname']; ?>.</strong></h2>

			<!-- form for editing the data -->
			<form class="p-4 bg-light" method="post" action="home.php?username=<?php echo $row['username']; ?>" enctype="multipart/form-data">
		  		<div class="row" style="padding-bottom: 50px;">
		  			<div style="margin-left: 80px;">
							<div class="col mb-2" style="border:1px solid; border-radius: 5px; padding: 5px">
				   				<?php echo "<img width='240' height='240' style='border:1px;' src='images/".$row['image']."'>";?>
			  				</div>
					  		<textarea type="text" name="bio" cols="35" rows="4" style="border-radius: 5px;" required><?php echo $row['bio'];?></textarea>
						</div>
					<input type="hidden" name="size" value="1000000">
					<table style="margin-left:50px; width:50%; height:370px;">
						<tr>
							<td>Firstname :</td>
							<td><input type="text" name="firstname" value="<?php echo $row['firstname'] ?>" class="form-control" placeholder="First Name"></td>
						</tr>
						<tr>
							<td>Lastname :</td>
							<td><input type="text" name="lastname" value="<?php echo $row['lastname'] ?>"class="form-control" placeholder="Last Name" required></td>
						</tr>
						<tr>
							<td>Phone number :</td>
							<td><input type="Number" name="number" value="<?php echo $row['number'] ?>" class="form-control" placeholder="PhoneNumber" required></td>
						</tr>
						<tr>
							<td>Address :</td>
							<td><input type="text" name="address" value="<?php echo $row['address'] ?>" class="form-control" placeholder="Address" required></td>
						</tr>
						<tr>
							<td>City :</td>
							<td><input type="text" name="city" value="<?php echo $row['city'] ?>" class="form-control" placeholder="Municipality/City" required></td>
						</tr>
						<tr>
							<td>Zip Code :</td>
							<td><input type="Number" name="zip" value="<?php echo $row['zip'] ?>" class="form-control" placeholder="ZipCode" required></td>
						</tr>
						<tr>
							<td>Age :</td>
							<td><input type="Number" name="age" value="<?php echo $row['age'] ?>" class="form-control" placeholder="ZipCode" required></td>
						</tr>
						<tr>
							<td>Change Photo :</td>
							<td><input type="file" name="image"></td>
						</tr>

					</table>
						</div>
						<div style="float:right; margin-top: -30px;">
							<div class="row">
			  					<input type="hidden" name="id" value="<?php echo $row['id'];?>">
			  					<a href="home.php?username=<?php echo $row['username']; ?>" class="btn btn-info btn-danger mr-2">Back</a>
			  					<button class="btn btn-success d-flex " name="update" type="submit">Update</button>
		  					</div>
		  				</div>
			</form>
  		</div>
  		</div>
		</center>

	<!-- Footer Link -->
	<?php include 'template/footer.php'; ?>
</div>
</body>
</html>