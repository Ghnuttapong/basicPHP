<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    
    <!-- function -->
    <?php

use FFI\CData;

function pomotion ($price) {
            if( $price <  5000 ) {
                $sale = $price * 0.3;
                return $sale;
            }
            else {
                $sale = $price * 0.5;
                return $sale;
            }
        }
    ?>
    <!-- <center>
        <p>จ่าย 3000 ได้รับส่วนลด: <?php // echo pomotion(3000); ?></p>
        <p>รวมเป็นเงินทั้งหมด <?php // echo 3000 - pomotion(3000)?></p>
        <p>จ่าย 6000 ได้รับส่วนลด: <?php  //echo pomotion(6000); ?></p>
        <p>รวมเป็นเงินทั้งหมด <?php //echo 6000 - pomotion(6000)?></p>
    </center> -->


</body>
</html>