<?php 

    if(isset($_POST['btn-price'])) {
        $price = $_POST['price'];
        $Msg = chk_price($price);
    }


    function chk_price($price) {
        if ($price < 0 ) {
            return $Msg = "กรอกตัวเลขไม่ถูกต้อง";
        }else {
            return $Msg = "กรอกตัวเลขถูกต้อง";
        }
    }

?>
<form method="post">
    <p>เช็คการป้อนราคาสินค้า</p>
    <input type="text" name="price">
    <input type="submit" name="btn-price" value="submit">
</form>
<?php if(isset($Msg)) { ?>
    <p><?php echo $Msg ?></p>
<?php } ?>