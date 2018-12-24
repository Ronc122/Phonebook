<?php include_once'server.php';?>


<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center" style="background-color:#F44336;">
        <h2 class="modal-title w-100 font-weight-bold text-light">Sign up here!</h2>  
      </div>
      <form class="mt-4" method="post" action="signup.php">
        <div class="modal-body mx-3">
          <?php include('error.php');?>
          <div class="md-form mt-2 mb-3">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">@</div>
              </div>
              <label for="validationServer01"></label>
              <input type="text" name="username" class="form-control" id="validationServer01" placeholder="Username" required>
            </div>
          </div>

          <div class="md-form mb-3">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><img src="package/build/svg/mail.svg"/></div>
              </div>
              <label for="validationDefault01"></label>
              <input type="email" name="email" class="form-control" id="validationDefault01" placeholder="Enter Email"required>
            </div>
          </div>

          <div class="md-form mb-3">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><img src="package/build/svg/key.svg"/></div>
              </div>
              <label for="validationDefault01"></label>
              <input type="password" name="password" id="validationDefault01"  class="form-control" placeholder="Enter Password">
          </div>
        </div>

        <div class="md-form mb-4">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><img src="package/build/svg/shield.svg"/></div>
            </div>
            <label for="validationDefault01"></label>
            <input type="password" name="password1" id="validationDefault01" id="validationDefault01" class="form-control validate" placeholder="Confirm Password">
          </div>
        </div>
      </form>

      <div class="text-center mt-4">
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">&times&nbspCancel</button>
          <button class="btn btn-danger" name="register" type="submit">Register&nbsp<img src="package/build/svg/arrow-right.svg"/></button>
        </div>
      </div>
    </div>
  </div>
</div>