<!-- Modal -->
<div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login / Sign Up</h4>
      </div>

      <div class="modal-body">
        <ul class="nav nav-tabs">
		  <li class="active"><a href="#login"  data-toggle="tab">Login</a></li>
		  <li><a href="#signup" data-toggle="tab">Sign Up</a></li>
		</ul>
		<!-- Tab content -->
		<div class="tab-content">
			<div class="tab-pane active" id="login">
				<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
				  <div class="form-group">
				    <label for="loginInputUsername1">Username *</label>
				    <input type="text" class="form-control" id="loginInputUsername1" name="formID" placeholder="Enter username" required>
				  </div>
				  <div class="form-group">
				    <label for="loginInputPassword1">Password *</label>
				    <input type="password" class="form-control" id="loginInputPassword1" name="formpass" placeholder="Password" required>
				  </div>
				  <button type="submit" class="btn btn-default" value="Login" name="formSubmit">Login</button>
				</form>
			</div>
			<div class="tab-pane" id="signup">
				<div class="alert alert-success alert-dismissible hide" id="alertSuccess">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong>Success!</strong> You've been successfully registered on SquareOne.
				</div>
				<div class="alert alert-danger alert-dismissible hide" id="alertError">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong>Snap!</strong> There was an error registering you. Please try again.
				</div>
				<form action="./register.php" method="POST" onsubmit="return false;">
				  <div class="form-group">
				    <label for="signupInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="signupInputEmail1" name="formmail"placeholder="Enter email" required>
				  </div>
				  <div class="form-group">
				    <label for="signupInputUsername1">Username</label>
				    <input type="text" class="form-control" id="signupInputUsername1" name="formID"placeholder="Username" required>
				  </div>
				  <div class="form-group">
				    <label for="signupInputPassword1">Password</label>
				    <input type="password" class="form-control" id="signupInputPassword1" name="formpass"placeholder="Password" required>
				  </div>
				  <div class="form-group">
				    <label for="signupInputName1">Name</label>
				    <input type="text" class="form-control" id="signupInputName1" name="formname"placeholder="Name" required>
				  </div>
				  <!-- <div class="checkbox">
				    <label>
				      <input type="checkbox"> I agree to Terms & Conditions
				    </label>
				  </div> -->
				  <button type="submit" class="btn btn-default" name="formSubmit" id="formSubmit" value="Submit" onclick="signUp()">Submit</button>
				</form>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>