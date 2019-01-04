<!-- Link for connecting to database and other PHP query -->
<?php include_once'server.php';?>

<!-- Modal for Login System -->
<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
		<!--Content-->
		<div class="modal-content">
	  	<!--Header-->
			<div class="modal-header" style="margin-right: auto;margin-left: auto;">
				<div class="modal-header d-block">
		  			<img src="images/username.png" width="100" height="100" alt="avatar" class="rounded-circle img-responsive">
		   			<h4><strong>Login here!</strong></h4>
				</div>
	 		</div>
	  		<!--Body-->
	  		<form method="post" action="">
				<div class="modal-body text-center mb-1">
		  			<div class="md-form mb-3">
						<div class="input-group mt-2 mb-2">
			  				<div class="input-group-prepend">
								<div class="input-group-text">@</div>
			  				</div>
			 				<label for="validationServer01"></label>
			  				<input type="text" name="username" class="form-control" id="validationServer01" placeholder="Username" required>
						</div>
		  			</div>
		  			<div class="md-form mb-5">
						<div class="input-group mb-1">
				 			<div class="input-group-prepend">
								<div class="input-group-text">
									<img src="package/build/svg/key.svg"/>
								</div>
				  			</div>
				  			<label for="validationDefault01"></label>
				  			<input type="password" name="password" id="validationDefault01"  class="form-control" placeholder="Enter Password" required>
						</div>
			  		</div>
			  		<div class="text-center mt-4">
						<button type="button" class="btn btn-outline-danger mt-1" data-dismiss="modal">&times&nbspCancel</button>
						<button type="submit" name="login" data-dismiss="static" class="btn btn-danger mt-1">&nbspLogin&nbsp<img src="package/build/svg/sign-in.svg"/></button>
			  		</div>
				</div>
	 		</form>
		</div>
  	</div>
</div>

<!-- CSS for error -->
<style>
	.error{
  		left: 0;
  		right: 0;
  		position: absolute;
		margin-left: 100px;
		width: auto;
		margin: 0px auto;
		border: 1px solid #a94442;
		color: #a94442;
		background: #f2dede;
		border-radius: 5px;
		font-size:15px;
		padding-top: 12px;
		padding-bottom: -5px;  

	}
</style>
