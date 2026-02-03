<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ณิชกานต์ พิมพา (ออย)</title>
</head>

<body>
<h1>ณิชกานต์ พิมพา (ออย)</h1>

<?php
    echo"บทที่ 10 PHP เบื่องต้น <br>";
    print"วิชา Web Programming <br>";
    
    $name ="Nichakan pimpa";
    $age = 21.5 ;
    //$name = "Somsak";

    echo gettype($age);
    echo"<hr>";
    var_dump($name);
    echo"<hr>";

    echo $name ;
    echo"<hr>";
    $a = 10 ;
    $b = 5 ;
    $c = 2 ;
    $x = ($a + $b) * $c ;
    echo $x ;
?>

</body>
</html>