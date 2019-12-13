<?php
include 'connect.php';
include 'includes/head.php';
include 'includes/nav.php';
?>
<div class="" style="margin-top:10vh;margin-bottom:5vh;">
	<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="static/7.jpg" class="d-block w-100" alt="..." height="530">
	    </div>
	    <div class="carousel-item">
	      <img src="static/1.jpg" class="d-block w-100" alt="..." height="530">
	    </div>
	    <div class="carousel-item">
	      <img src="static/22.jpg" class="d-block w-100" alt="..." height="530">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<br>

	<center><img src="static/banner1.png"></center>
	<a href="signup.html">
		<center><img src="static/banner2.png" alt="Go to SignUp!"></center>
	</a>


	<!--New Arrivals-->
	<?php
	$sql = "select * from prodcat order by updated desc limit 2";
	$result = $conn->query($sql);
	$row=$result->fetch_assoc();
	?>
	<center><p><h2>New Arrivals!!</h2></p></center>
	<div class="card-deck mt-5">
		<div class="card">
			<form class="" action="view/product/index.php" method="post">
				<input type="text" name="pcat" value="<?php echo $row['catname']?>" hidden>
		    <img src="<?php echo $row['cimg']?>" class="card-img-top" alt="" height="300">
		    <div class="card-body">
			    <center>
						<p class="card-text">
							<input type="submit" class="btn btn-link" value="<?php echo $row['catname']?>">
						</p>
					</center>
		    </div>
			</form>
	  </div>
		<?php $row=$result->fetch_assoc(); ?>
		<div class="card">
			<form class="" action="view/product/index.php" method="post">
				<input type="text" name="pcat" value="<?php echo $row['catname']?>" hidden>
		    <img src="<?php echo $row['cimg']?>" class="card-img-top" alt="" height="300">
		    <div class="card-body">
			    <center>
						<p class="card-text">
							<input type="submit" class="btn btn-link" value="<?php echo $row['catname']?>">
						</p>
					</center>
		    </div>
			</form>
	  </div>
	</div>
</div>
	<center><p><h2>Our Products!!</h2></p></center>
<div class="container" style="margin-bottom:10vh;">
	<div class="row">
		<?php
		$sql = "select * from prodcat";
		$result = $conn->query($sql);
		if($result->num_rows>0){
			while ($row=$result->fetch_assoc()) {
		?>
		<div class="col-lg-4 col-md-6 col-sm-12 mt-5">
			<div class="card">
				<form class="" action="view/product/index.php" method="post">
					<input type="text" name="pcat" value="<?php echo $row['catname']?>" hidden>
					<img src="<?php echo $row['cimg']?>" class="card-img-top" alt="" height="250">
					<div class="card-body">
						<center>
							<p class="card-text">
								<input type="submit" class="btn btn-link" value="<?php echo $row['catname']?>">
							</p>
						</center>
					</div>
				</form>
			</div>
		</div>
		<?php
			}
		}
		?>
	</div>
</div>


<!--Products-->
<?php include 'includes/foot.php'; ?>
