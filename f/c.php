<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ณิชกานต์ พิมพา (ออย)</title>
</head>

<body>
<h1>ณิชกานต์ พิมพา (ออย)</h1>

<form method="post" action="">
กรอกคะแนน <input type="number" name="a" autofocus required min="0" max="100">
<button type="submit" name="Submit">OK</button>
</form>
<hr>

<?php
if (isset($_POST['Submit'])) {
    $score = $_POST['a'];
    if($score >= 80) {
        $grade = "A";
    } else if ($score >= 70) {
        $grade = "B";
    } else if ($score >= 60){
        $grade = "C";
    } else if ($score >= 50) {
        $grade = "D";
    } else {
        $grade = "F";
    }
    echo"คะแนน $score ได้เกรด $grade";
}
?>

</body>
</html>