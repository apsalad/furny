<?php
include '../../connect.php';
include '../../includes/head.php';
include '../../includes/nav.php';
?>

<div class="container" style="margin-top:16vh;margin-bottom:5vh;">
  <div class="jumbotron" style="padding-bottom:10vh;">
    <div class="container" style="padding-left:30vh;padding-right:30vh;">
      <form class="" action="adduser.php" method="post" autocomplete="on">

        <h4 class="card-title mt-3 text-center">Create Account</h4>
      	<p class="text-center">Get started with your free account</p>

      	<div class="form-group input-group">
      		<div class="input-group-prepend">
      		   <span class="input-group-text"> <i class="fa fa-user"></i> </span>
      		</div>
          <input name="name" id="name" class="form-control" placeholder="Full name" type="text" autocomplete="name">
        </div>

        <div class="form-group input-group">
        	<div class="input-group-prepend">
    		   <span class="input-group-text"><i class="fa fa-envelope"></i></span>
    		  </div>
          <input name="email" id="email" class="form-control" placeholder="Email address" type="email" autocomplete="email">
        </div>

        <div class="form-group input-group">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    		  </div>
      		<select class="custom-select" style="max-width: 120px;">
      		    <option selected="">+91</option>
      		</select>
          <input name="phone" id="phone" class="form-control" placeholder="Phone number" type="text" autocomplete="mobile">
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
      		  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
      		</div>
          <input name="password" id="password" class="form-control" placeholder="Enter new password" type="password" autocomplete="new-password">
        </div>

        <div class="form-group input-group">
        	<div class="input-group-prepend">
    		   <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    		  </div>
          <input class="form-control" placeholder="Repeat password" type="password" autocomplete="new-password">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
        </div>

        <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>

      </form>
    </div>
  </div>
</div>

<?php include '../../includes/foot.php';?>
