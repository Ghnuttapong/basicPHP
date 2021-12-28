<?php

    echo "<------------ is numeric ---------------><br>";
    $number1 = 55.4;
    $number2 = "55";
    $number3 = "num3";

    echo "number1 =". is_numeric($number1)."<br>";
    echo "number1 =". is_numeric($number2)."<br>";
    echo "number1 =". is_numeric($number3)."<br>";

    echo "<--------------- round ------------------> <br>";
    $round1 = 55.4;
    $round2 = 55.5;
    $round3 = 55.6;
    echo "round =". round($round1)."<br>";
    echo "ceil =". ceil($round2)."<br>";
    echo "floor =". floor($round3)."<br>";
    
    echo "<--------------- min - max ------------------> <br>";
    echo "min:(4,5,6,7,8) =  ". min(4,5,6,7,8)."<br>";
    echo "max:(4,5,6,7,8) =  ". max(4,5,6,7,8)."<br>";
    
    echo "<--------------- rand ------------------> <br>";
    echo "rand: ".rand(1,40)."<br>";
    
    echo "<--------------- is null ------------------> <br>";
    echo "is null =".is_null($number1)."<br>";

    echo "<--------------- number format ------------------> <br>";
    echo "num-format = ". number_format($number1, 2). "<br>";
    
    echo "<--------------- trim ------------------> <br>";
    echo " trim  =  ". trim(" trim ") ."<br>";
    echo " ltrim =  ". ltrim(" trim ")."<br>";
    echo "rtrim  =  ". rtrim(" trim ")."<br>";
    
    echo "<--------------- strto lower or upper ------------------> <br>";
    echo "string upper =  ". strtoupper("string upper")."<br>";
    echo "string lower =  ". strtolower("string lower")."<br>";
    
    echo "<--------------- substr ------------------> <br>";
    
    $text = "Nuttapong";
    $textupper = strtoupper($text);
    $textlower = strtolower($text);
    echo substr($textlower, 0,1).substr($textupper, 1)."<br>";
    
    echo "<--------------- supstr count ------------------> <br>";
    echo substr_count($text, "t")."<br>"; //นับตัวอักษรที่มีอยู่
    
    echo "<--------------- strlen ------------------> <br>";
    echo strlen($text)."<br>";
    
    echo "<--------------- md5 ------------------> <br>";
    echo md5('1234')."<br>";
    
    echo "<--------------- date ------------------> <br>";
    $date = date('d/F/Y');
    echo $date."<br>";
    $d = date('d');
    $m = date('F');
    $y = date('Y') + 543;
    echo "วัน $d  เดือน $m  พ.ศ.$y <br>";
    
    
?>