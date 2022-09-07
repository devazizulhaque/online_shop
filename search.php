<?php include 'inc/header.php'; ?>
<?php 
    if (!isset($_POST['search']) || $_POST['search'] == NULL) {
        echo "Field must not be empty!!!";
    }
    else{
        $search = $_POST['search'];
    }
?>

 <div class="main">
    <div class="content">
		<div class="section group">
		<?php 
			$getProduct = $pd->searchProduct($search);
			if ($getProduct) {
while ($result = $getProduct->fetch_assoc()) {
?>
			<div class="grid_1_of_4 images_1_of_4" style="margin-right: 14px; margin-left: 0px;">
					<a href="details.php?proid=<?php echo $result['productId']; ?>"><img style="height:200px;" src="admin/<?php echo $result['image']; ?>" alt="" /></a>
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