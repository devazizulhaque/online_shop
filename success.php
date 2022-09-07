<?php include 'inc/header.php'; ?>
<?php 
    $login = Session::get("cuslogin");
    if ($login == false) {
        echo "<script>window.location = 'login.php';</script>";
    }
?>
<style>
    .psuccess{
        width: 500px;
        min-height: 200px;
        text-align: center;
        border: 1px solid #ddd;
        margin: 0 auto;
        padding: 20px;
    }
    .psuccess h2{
        border-bottom: 1px solid #ddd;
        margin-bottom: 40px;
        padding-bottom: 10px;
        color: #ff0000;
    }
    .psuccess p{
        line-height: 25px;
        padding-left: 20px;
        padding-right: 20px;
        text-align: left;
        font-size: 18px;
    }
</style>
<div class="main">
    <div class="content">
    	<div class="section group">
           <div class="psuccess">
            <h2>Success...</h2>
            <?php 
                $cmrId = Session::get("cmrId");
                $amount = $ct->payableAmount($cmrId);
                if ($amount) {
                    $sum = 0;
                    while ($result = $amount->fetch_assoc()) {
                        $price = $result['price'];
                        $sum = $sum + $price;
                    }
                }
            ?>
            <p style="color:red;">Total Payable Amount(Including VAT) : $
            <?php 
                $vat = $sum * 0.1;
                $total = $sum + $vat;
                echo $total;
            ?>
            </p>
            <p>Thanks For Purchase. Receive Your Ordere Successfully. We will contact you ASAp with delivery details. Here is your order details....<a href="orderdetails.php">Visit Here...</a></p>
           </div>
        </div>
 	</div>
</div>

 <?php include 'inc/footer.php'; ?>