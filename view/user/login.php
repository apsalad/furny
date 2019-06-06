<?php
include '../../connect.php';
include '../../includes/head.php';
include '../../includes/nav.php';
?>

<div class="container" style="margin-top:20vh;margin-bottom:5vh;">
  <div class="jumbotron" style="padding-bottom:10vh;padding-left:20vh;padding-right:20vh;">
    <h2 class="text-center"><u>User Login</u></h2>
    <br>
    <div class="container" style="padding-left:20vh;padding-right:20vh;">
      <form class="" action="checkuser.php" method="post">
        <div class="form-group input-group">
        	<div class="input-group-prepend">
    		   <span class="input-group-text"><i class="fa fa-envelope"></i></span>
    		  </div>
          <input name="email" id="email" class="form-control" placeholder="Email address" type="email" autocomplete="email">
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
      		  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
      		</div>
          <input name="password" id="password" class="form-control" placeholder="Enter password" type="password" autocomplete="current-password">
        </div>

        <div class="form-group text-center">
          <input type="submit" class="btn btn-success btn-block" value="Submit">
        </div>
        <p class="text-center">
          Don't have an account yet? <a href="signup.php"> Click here</a> to create one!
        </p>
      </form>
    </div>
  </div>
</div>

<?php include '../../includes/foot.php';?>
