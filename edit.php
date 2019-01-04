<!-- Link for connecting to database and other PHP query -->
<?php include 'server.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Phonebook</title>
	<!-- Head Links in a separate file -->
	<?php include 'template/header.php';?>
</head>
<body>
	<!-- Navigation Bar in a separate file -->
	<?php include 'template/navbar.php'; ?>

  	<section class="jumbotron">
		<center>
		<div class="border border-dark w-75 h-100 bg-danger rounded">
			<h2 class="text-black mt-3 mb-3">Updating the information of <strong class="text-light"><?php echo $row['firstname'].'&nbsp'.$row['lastname']; ?>.</strong></h2>

			<!-- form for editing the data -->
			<form class="p-4 border border-dark bg-light rounded" method="post" action="home.php?username=<?php echo $row['username']; ?>" enctype="multipart/form-data">
		  		<div class="row">
		  			<div class="col mr-auto" >
		  				<div class="form-group">
							<div class="col mb-3">
				   				<?php echo "<img width='140' height='140' style='border:1px; border-radius:20px' src='images/".$row['image']."'>";?>
					  			<input type="hidden" name="size" value="1000000">
					  			<input type="file" name="image" value="" />
			  				</div>
<<<<<<< HEAD
					  		<textarea type="text" name="bio" cols="30" rows="4" id="validationCustom01" required><?php echo $row['bio'];?></textarea>
=======
					  		<textarea type="text" name="bio" cols="30" rows="4" id="validationCustom01"><?php echo $row['bio'];?></textarea>
>>>>>>> 27f6fa4ec86309cd6a32f227a9b81338b2b9ec05
						</div>
					</div>
					<div class="col-md-6 ml-auto">
						<div class="form-row">
							<div class="col mb-3">
		  						<label for="validationDefault01">First Name</label>
		  						<input type="text" name="firstname" value="<?php echo $row['firstname'] ?>" class="form-control" placeholder="First Name">
							</div>
							<div class="col mb-3">
		  						<label for="validationDefault02">Last Name</label>
		  						<input type="text" name="lastname" value="<?php echo $row['lastname'] ?>"class="form-control" id="validationDefault02" placeholder="Last Name" required>
							</div>
	  					</div>
						<div class="form-row">
							<div class="col mb-3">
			  					<label for="validationDefault01">Phone Number</label>
			  					<input type="Number" name="number" value="<?php echo $row['number'] ?>" class="form-control" id="validationDefault01" placeholder="PhoneNumber" required>
							</div>
							<div class="col mb-3">
			  					<label for="validationDefault02">Address</label>
			  					<input type="text" name="address" value="<?php echo $row['address'] ?>" class="form-control" id="validationDefault02" placeholder="Address" required>
							</div>
						</div>
						<div class="form-row">
			   				<div class="col mb-3">
			  					<label for="validationDefault03">City</label>
			  					<div class="input-group">
			  						<input type="text" name="city" value="<?php echo $row['city'] ?>" class="form-control" id="validationDefault01" placeholder="Municipality/City" required>
								</div>
		  					</div>
							<div class="col mb-3">
			  					<label for="validationDefault03">ZipCode</label>
			  					<div class="input-group">
			  						<input type="Number" name="zip" value="<?php echo $row['zip'] ?>" class="form-control"  id="validationDefault01" placeholder="ZipCode" required>
								</div>
							</div>
							<div class="col mb-3">
			  					<label for="validationDefault03">Age</label>
			  					<div class="input-group">
			  						<input type="Number" name="age" value="<?php echo $row['age'] ?>" class="form-control"  id="validationDefault01" placeholder="ZipCode" required>
								</div>
							</div>
			
						</div>
						<div class="row" style="float: right;">
			  				<input type="hidden" name="id" value="<?php echo $row['id'];?>">
			  				<a href="home.php?username=<?php echo $row['username']; ?>" class="btn btn-info btn-danger mr-2">Back</a>
			  				<button class="btn btn-success d-flex " name="update" type="submit">Update</button>
		  				</div>
					</div>
				</div>
			</form>
  		</div>
		</center>
	</section>

	<!-- Footer Link -->
	<?php include 'template/footer.php'; ?>

</body>
</html>