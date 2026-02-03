<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ณิชกานต์ พิมพา (ออย)</title>
</head>


<body>
<h1>a.php</h1>

<?php
$_SESSION['name'] = "ณิชกานต์ พิมพา"."</br>";
$_SESSION['nickname'] = "ออย"."</br>";

//$name = "ณิชกานต์ พิมพา";
echo $_SESSION['name'];
echo $_SESSION['nickname'];


?>

</body>
</html>