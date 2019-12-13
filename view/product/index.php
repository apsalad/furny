<?php
include '../../connect.php';
include '../../includes/head.php';
include '../../includes/nav.php';
?>
<!--Products List-->
<div class="container" style="margin-top:10vh;margin-bottom:10vh;">
	<div class="row" >
		<?php
		if(isset($_POST['pcat'])){
			$pcat = $_POST['pcat'];
		}
		//echo $pcat;
		$i=0;
		$sql = "select * from product where pcat='".$pcat."'";
		$result = $conn->query($sql);
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
		?>
		<div class="col-lg-4 col-sm-12 col-md-6 mt-5" onclick="document.getElementById('form<?php echo $i?>').submit();">
			<form id="form<?php echo $i?>" action="product.php" method="post">
				<input type="text" name="pid" value="<?php echo $row['pid']?>" hidden>
				<div class="card" style="width: 18rem;cursor:pointer">
				  <img src="<?php echo $row['pimg']?>" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $row['pname']?></h5>
				    <p class="card-text">
							<?php echo $row['pdes']?><br><br>
							Rs.<?php echo $row['pprice']?>
						</p>
				  </div>
				</div>
			</form>
		</div>
		<?php
		 		$i++;
					}
				}
		 ?>
	</div>
</div>
<?php include '../../includes/foot.php'; ?>
