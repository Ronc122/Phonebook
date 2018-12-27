<!-- Link for connecting to database and other PHP query -->
<?php include_once 'server.php';?>

<style>
	input[id="validationCustom02"]{
		margin-bottom: -20px;
	}
</style>

<!-- Modal for Adding data -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-fluid modal-lg" role="document">
		<div class="modal-content">
	  		<div class="modal-header" style="background-color:#F44336;">
				<h4 class="modal-title text-light" id="exampleModalCenterTitle" ><strong>Add Contacts</strong></h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	  		</div>
	  	<div class="modal-body">
			<div class="container-fluid">
				<form method="post" id="modal-form" action="home.php?username=<?php echo $_SESSION['username'];?>" enctype="multipart/form-data" class="needs-validation">
		  			<div class="row">
						<div class="col ml-auto text-center" >
			  				<div class="form-group">
			  					<img class="border" src="images/contact.png"/>
			  					<div class="col mb-3">
				  					<input type="hidden" name="size" value="1000000">
					  				<div class="form-group">
										<label for="validationCustom01"></label>
										<input type="file" name="image" id="validatedCustomFile" required>
					  				</div>
					  				<label for="validationCustom01"></label>
					  				<textarea type="text" name="bio" cols="28" rows="4" id="validationCustom01" placeholder="Write something about yourself..." required></textarea>
				  				</div>
							</div>
		  				</div>
		  			<div class="col-md-6 ml-auto">
						<div class="form-group">
			  				<label for="validationCustom01" style="float:left;"><h6><strong>Fill the form.</strong></h6></label>
			  				<input type="text" class="form-control form-control-sm"  name="firstname" id="validationCustom02" placeholder="First name" required>
		  				</div>
		  				<div class="form-group">
							<label for="validationCustom02"></label>
							<input type="text" class="form-control form-control-sm" name="lastname" id="validationCustom02" placeholder="Last name" required>
		  				</div>
						<div class="form-group">
							<label for="validationCustom02"></label>
	  						<input type="number" class="form-control form-control-sm" name="number" id="validationCustom02" placeholder="Phone number" required>
  						</div>
						<div class="form-group">
							<label for="validationCustom02"></label>
	  						<input type="text" class="form-control form-control-sm" name="address" id="validationCustom02" placeholder="Address" required>
  						</div>
						<div class="form-group">
							<label for="validationCustom02"></label>
	  						<input type="text" class="form-control form-control-sm" name="city" id="validationCustom02" placeholder="City" required>
  						</div>
						<div class="form-row align-items-center">
	  						<div class="col-sm-5 my-1">
								<label for="validationCustom02"></label>
	  							<input type="number" class="form-control form-control-sm" name="zip" id="validationCustom02" placeholder="Zipcode" required>
							</div>
							<div class="col-sm-5 my-1">
								<label for="validationCustom02"></label>
	 							<input type="number" class="form-control form-control-sm" name="age" id="validationCustom02" placeholder="Age" required>
  							</div>
						</div>
					</div>
					</div>
				</form>
			</div>
		</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-danger" data-dismiss="modal">&times&nbspCancel</button>
				<button  type="submit" name="submit" class="btn btn-danger" form="modal-form">Submit&nbsp<img src="package/build/svg/arrow-right.svg"/></button>
			</div>
		</div>
	</div>
</div>

