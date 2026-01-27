<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ฟอร์มสมัครสมาชิก — ณิชกานต์ พิมพา(ออย)</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background: #f7f7f7;
    }
    .color-box {
        width: 40px;
        height: 40px;
        border-radius: 5px;
        border: 1px solid #ccc;
        display: inline-block;
        margin-left: 10px;
    }
</style>

</head>
<body>

<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">ฟอร์มสมัครสมาชิก — ณิชกานต์ พิมพา(ออย) - ChatGPT</h3>
        </div>

        <div class="card-body">

            <form method="post" action="">

                <div class="mb-3">
                    <label class="form-label">ชื่อ - สกุล *</label>
                    <input type="text" name="fullname" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">เบอร์โทร *</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">ความสูง (ซม.) *</label>
                    <input type="number" name="height" class="form-control" step="5" min="100" max="250" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">สีที่ชอบ *</label><br>
                    <input type="color" name="color" class="form-control form-control-color" value="#ff0000">
                </div>

                <div class="mb-3">
                    <label class="form-label">สาขาวิชา</label>
                    <select name="major" class="form-select">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>

                <button type="submit" name="Submit" class="btn btn-success">สมัครสมาชิก</button>
                <button type="reset" class="btn btn-secondary">ล้างข้อมูล</button>
                <button type="button" class="btn btn-info text-white" onclick="window.location='https://www.msu.ac.th';">Go to MSU</button>
                <button type="button" class="btn btn-dark" onclick="window.print();">พิมพ์</button>

            </form>

        </div>
    </div>

    <hr class="my-4">

    <div class="mt-3">
        <?php
        if (isset($_POST['Submit'])){
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $height = $_POST['height'];
            $color = $_POST['color'];
            $major = $_POST['major'];

            echo "<div class='card p-3 shadow-sm'>";
            echo "<h4 class='text-primary'>ข้อมูลที่คุณส่งมา</h4>";
            echo "ชื่อ - สกุล: <strong>$fullname</strong><br>";
            echo "เบอร์โทร: <strong>$phone</strong><br>";
            echo "ความสูง: <strong>$height ซม.</strong><br>";
            echo "สีที่ชอบ: <strong>$color</strong> <span class='color-box' style='background:$color;'></span><br>";
            echo "สาขาวิชา: <strong>$major</strong><br>";
            echo "</div>";
        }
        ?>
    </div>

</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
`
