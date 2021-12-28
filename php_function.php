<?php

    echo "<------------ is numeric ---------------><br>";
    $number1 = 55.4;
    $number2 = "55";
    $number3 = "num3";
    //เช็คว่าเป็นตัวเลข
    echo "number1 =". is_numeric($number1)."<br>";
    echo "number1 =". is_numeric($number2)."<br>";
    echo "number1 =". is_numeric($number3)."<br>";

    echo "<--------------- round ------------------> <br>";
    $round1 = 55.4;
    $round2 = 55.5;
    $round3 = 55.6;
    //ปัดเศษ
    echo "round =". round($round1)."<br>";
    echo "ceil =". ceil($round2)."<br>";
    echo "floor =". floor($round3)."<br>";
    
    echo "<--------------- min - max ------------------> <br>";
    echo "min:(4,5,6,7,8) =  ". min(4,5,6,7,8)."<br>";//check max value
    echo "max:(4,5,6,7,8) =  ". max(4,5,6,7,8)."<br>";//check min value
    
    echo "<--------------- rand ------------------> <br>";
    echo "rand: ".rand(1,40)."<br>"; // สุ่มตัวเลขตั้งแต่ 1 - 40
    
    echo "<--------------- is null ------------------> <br>";
    echo "is null =".is_null($number1)."<br>";//เช็คค่าว่าเป็น null 

    echo "<--------------- number format ------------------> <br>";
    echo "num-format = ". number_format($number1, 2). "<br>";//จัดตัวเลข  2 เป็น จุดทศนิยม
    
    echo "<--------------- trim ------------------> <br>";
    echo " trim  =  ". trim(" trim ") ."<br>";// ตัดช่องว่างที่มี space bar
    echo " ltrim =  ". ltrim(" trim ")."<br>";
    echo "rtrim  =  ". rtrim(" trim ")."<br>";
    
    echo "<--------------- strto lower or upper ------------------> <br>";
    echo "string upper =  ". strtoupper("string upper")."<br>";
    echo "string lower =  ". strtolower("string lower")."<br>";
    
    echo "<--------------- substr ------------------> <br>";
    
    $text = "Nuttapong";
    $textupper = strtoupper($text);//แปลงเป็นตัวใหญ่
    $textlower = strtolower($text);//แปลงเป็นตัวเล็ก
         //ตัดตัวอักษร
    echo substr($textlower, 0,1).substr($textupper, 1)."<br>";
    
    echo "<--------------- supstr count ------------------> <br>";
    echo substr_count($text, "t")."<br>"; //นับตัวอักษรที่มีอยู่
    
    echo "<--------------- strlen ------------------> <br>";
    echo strlen($text)."<br>";// นับความยาวอักษร
    
    echo "<--------------- md5 ------------------> <br>";
    echo md5('1234')."<br>";//เข้ารหัส 32 bit 
    
    echo "<--------------- date ------------------> <br>";
    $date = date('d/F/Y'); // สร้างวันที่ 
    echo $date."<br>";
    $d = date('d');
    $m = date('F');
    $y = date('Y') + 543;
    echo "วัน $d  เดือน $m  พ.ศ.$y <br>";
    
    
?>