<?php include 'inc/header.php'; ?>

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Latest from Iphone</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
		<div class="section group">
		<?php 
			$getIphone = $pd->productFromIphone();
			if ($getIphone) {
while ($result = $getIphone->fetch_assoc()) {
?>
			<div class="grid_1_of_4 images_1_of_4">
					<a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					<h2><?php echo $result['productName']; ?></h2>
					<?php echo $fm->textShorten($result['body'], 50); ?>
					<p><span class="price">$<?php echo $result['price'] ?></span></p>
					<div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
			</div>
			<?php } } ?>
		</div>
		<div class="content_bottom">
    		<div class="heading">
    		<h3>Latest from Samsung</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
		<div class="section group">
		<?php 
			$getSamsung = $pd->productFromSamsung();
			if ($getSamsung) {
while ($result = $getSamsung->fetch_assoc()) {
?>
			<div class="grid_1_of_4 images_1_of_4">
					<a href="details.php?proid=<?php echo $result['productId']; ?>"><img style="height:200px;" src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					<h2><?php echo $result['productName']; ?></h2>
					<?php echo $fm->textShorten($result['body'], 50); ?>
					<p><span class="price">$<?php echo $result['price'] ?></span></p>
					<div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
			</div>
			<?php } } ?>
		</div>
		<div class="content_bottom">
    		<div class="heading">
    		<h3>Latest from Acer</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
		<div class="section group">
		<?php 
			$getAcer = $pd->productFromAcer();
			if ($getAcer) {
while ($result = $getAcer->fetch_assoc()) {
?>
			<div class="grid_1_of_4 images_1_of_4">
					<a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					<h2><?php echo $result['productName']; ?></h2>
					<?php echo $fm->textShorten($result['body'], 50); ?>
					<p><span class="price">$<?php echo $result['price'] ?></span></p>
					<div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
			</div>
			<?php } } ?>
		</div>
		<div class="content_bottom">
    		<div class="heading">
    		<h3>Latest from Canon</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
		<div class="section group">
		<?php 
			$getCanon = $pd->productFromCanon();
			if ($getCanon) {
while ($result = $getCanon->fetch_assoc()) {
?>
			<div class="grid_1_of_4 images_1_of_4">
					<a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					<h2><?php echo $result['productName']; ?></h2>
					<?php echo $fm->textShorten($result['body'], 50); ?>
					<p><span class="price">$<?php echo $result['price'] ?></span></p>
					<div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
			</div>
			<?php } } ?>
		</div>
    </div>
 </div>

<?php include 'inc/footer.php'; ?>