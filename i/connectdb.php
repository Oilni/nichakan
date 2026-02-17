<?php
        $host = "localhost";
        $user = "root";
<<<<<<< HEAD
        $pwd = "915800";
=======
        $pwd = "";
>>>>>>> e007984 (update)
        $db = "4070db";
        $conn = mysqli_connect($host,$user,$pwd,$db) or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
        mysqli_query($conn,"SET NAMES utf8");
?>