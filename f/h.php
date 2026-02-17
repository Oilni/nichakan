<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ณิชกานต์ พิมพา (ออย)</title>
</head>

<body>
<h1>ณิชกานต์ พิมพา (ออย)</h1>

<form method="post" action="">
รหัสนิสิต <input type="number" name="a" autofocus required>
<button type="submit" name="Submit">OK</button>
</form>
<hr>

<?php
if (isset($_POST['Submit'])) {
    $id = $_POST['a'];
    echo $id ;
    $y = substr($id,0,2);   
    echo"<img src'http://202.28.32.21/picture/{$y}/{$id}.jpg' width='400'>"; 
}
?>

</body>
</html>