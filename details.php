<?php include 'inc/header.php'; ?>
<?php 
	if (!isset($_GET['proid']) || $_GET['proid'] == NULL) {
		echo "<script>window.location = '404.php';</script>";
	}
	else{
		$id = $_GET['proid'];
	}
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
		$quantity = $_POST['quantity'];
		$addCart = $ct->addToCart($quantity, $id);
	}
?>
<?php 
	$cmrId = Session::get("cmrId");
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['compare'])) {
    $productId = $_POST['productId'];
    $insertCompare = $pd->inseertCompareData($productId, $cmrId);
}
?>
<?php 
	$cmrId = Session::get("cmrId");
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['wlist'])) {
		$productId = $_POST['productId'];
		$saveWlist = $pd->saveWlistData($productId, $cmrId);
	}
?>
 <div class="main">
    <div class="content">
    	<div class="section group">
				<div class="cont-desc span_1_of_2">
					<?php
						$getPd = $pd->getSingleProduct($id);
						if ($getPd) {
							while ($result = $getPd->fetch_assoc()) {
					?>			
					<div class="grid images_3_of_2">
						<img src="admin/<?php echo $result['image']; ?>" alt="" />
					</div>
					<div class="desc span_3_of_2">
						<h2><?php echo $result['productName']; ?></h2>
						<?php echo $fm->textShorten($result['body'], 200); ?>
						<div class="price">
							<p>Price: <span>$<?php echo $result['price']; ?></span></p>
							<p>Category: <span><?php echo $result['catname']; ?></span></p>
							<p>Brand:<span><?php echo $result['brandName']; ?></span></p>
						</div>
						<div class="add-cart">
							<form action="#" method="post">
								<input type="number" class="buyfield" name="quantity" value="1"/>
								<input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
							</form>
						</div>
							<span style ="color:red; font-size:18px;">
								<?php 
									if (isset($addCart)) {
										echo $addCart;
									}
								?>
							</span>
							<?php 
								$login = Session::get("cuslogin");
								if ($login == true) {
									?>
							<div class="add-cart">
								<?php
									if (isset($insertCompare)) {
										echo $insertCompare;
									}
								?>
								<?php 
									if (isset($saveWlist)) {
										echo $saveWlist;
									}
								?>
								<form action="#" method="post">
									<input type="hidden" class="buyfield" name="productId" value="<?php echo $result['productId'] ?>"/>
									<input type="submit" class="buysubmit" name="compare" value="Add to Compare"/>
									<input type="submit" class="buysubmit" name="wlist" value="Save to List"/>
								</form>
							</div>
							<?php } ?>
						</div>
					<div class="product-desc">
						<h2>Product Details</h2>
						<?php echo $result['body']; ?>
					</div>
					<?php } } ?>
				</div>
				<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
					<ul>
						<?php 
							$getCat = $cat->getAllCat();
							if ($getCat) {
while ($result = $getCat->fetch_assoc()) {
    ?>
				      <li><a href="productbycat.php?catId=<?php echo $result['catid']; ?>"><?php echo $result['catname'] ?></a></li>
					  <?php
} } ?>
    				</ul>
 				</div>
 		</div>
 	</div>

 <?php include 'inc/footer.php'; ?>