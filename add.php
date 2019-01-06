<!-- Link for connecting to database and other PHP query -->
<?php include_once 'server.php';?>

<style>
	input[id="validationCustom02"]{
		margin-bottom: -20px
	}
</style>

<!-- Modal for Adding data -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-fluid"  role="document">
		<div class="modal-content" style="width:120%; margin-right: 20%;">
	  		<div class="modal-header" style="background-color:#F44336;">
				<h4 class="modal-title text-light" id="exampleModalCenterTitle" ><strong>Add Contacts</strong></h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	  		</div>
	  	<div class="modal-body">
			<div class="container-fluid">
				<form method="post" id="modal-form" action="home.php?username=<?php echo $_SESSION['username'];?>" enctype="multipart/form-data" class="needs-validation">
					<div style="float: left; display: inline-block;">
						<div style="border: 1px solid; padding: 10px; margin-bottom: 5px;">
							<img class="border" src="images/contact.png"/>
						</div>
						<textarea type="text" name="bio" cols="28" rows="4" id="validationCustom01" placeholder="Write something about yourself..." required></textarea>
					</div>
					<div class="" style=" display: inline-block;">
		  				<input type="hidden" name="size" class="form-control-sm" value="1000000">
		  				<table class="text-left" style="float: right; height: 300px;">
		  					<tr>
		  						<td colspan="2" style="text-align: center"><h4>Fill the Form</h4></td>
		  					</tr>
		  					<tr style="">
		  						<td>Firstname:</td>
		  						<td style="margin-bottom: 20px;"><input type="text" name="firstname" id="validationCustom02" placeholder="First name" required></td>
		  					</tr>
		  					<tr>
		  						<td>Lastname:</td>
		  						<td><input type="text" name="lastname" id="validationCustom02" placeholder="Last name" required></td>
		  					</tr>
		  					<tr>
		  						<td>Phone Number:</td>
		  						<td><input type="number" class="" name="number" id="validationCustom02" placeholder="Phone number" required></td>
		  					</tr>
		  					<tr>
		  						<td>Address:</td>
		  						<td><input type="text" class="" name="address" id="validationCustom02" placeholder="Address" required></td>
		  					</tr>
		  					<tr>
		  						<td>City:</td>
		  						<td><input type="text" class="" name="city" id="validationCustom02" placeholder="City" required></td>
		  					</tr>
		  					<tr>
		  						<td>Zip Code:</td>
		  						<td><input type="number" class="" name="zip" id="validationCustom02" placeholder="Zipcode" required></td>
		  					</tr>
		  					<tr>
		  						<td>Age:</td>
		  						<td><input type="number" class="" name="age" id="validationCustom02" placeholder="Age" required></td>
		  					</tr>
		  					<tr>
		  						<td colspan="2"><input type="file" name="image" class="form-control-sm" required></td>
		  					</tr>
		  				</table>
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

