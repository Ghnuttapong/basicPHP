<?php 

    /* $student_name = array('nuttapong', 'john', 'ribby', 'deedo', 'santa');
    $student_age = array(19, 18, 17, 16, 14);

    for($i = 0; $i < count($student_name); $i++) {
        echo "ชื่อ  ".$student_name[$i]." "."อายุ".$student_age[$i]."<br>";
    }
    echo join(" ", $student_name);
    echo "<br>";
    echo join(" ", $student_age); */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <center>
        <h1>array</h1>
        <hr>
        <?php 

            $color = array('green', 'yellow', 'red', 'blue', 'black', 'pink');

            $number = array(200, 300, 400, 500, 060, 100);

            for($i = 0; $i < count($color); $i++) {
                echo $color[$i]."  ค่าสี = ".$number[$i]."<br><br>";
            }

            $colors = array('red'=>'200', 'green'=>'300', 'blue'=>'game');
            foreach ($colors as $key => $value) {
                echo $key." as ".$value."<br>";
            }


        ?>
    </center>
    
</body>
</html>