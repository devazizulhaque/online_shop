<?php include 'inc/header.php'; ?>

<?php 
	if (!isset($_GET['pageid']) || $_GET['pageid'] == NULL) {
		echo "<script>window.location = '404.php'; </script>";
	} else {
		$id = $_GET['pageid'];
        $page = $de->getPageById($id);
	}
?>
<?php 
    if ($page) {
while ($result = $page->fetch_assoc()) {
    ?>
<div class="contentsection contemplete clear" style="display:flex;">
	<div class="maincontent clear" style="height:fit-content;">
        <div class="about">
            <h2><?php echo $result['name']; ?></h2>
            <?php echo $result['body']; ?>
        </div>
	</div>
</div>
<?php } } else {
    echo "<script>window.location = '404.php'; </script>";
} ?>

<?php include 'inc/footer.php'; ?>