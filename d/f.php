<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ผลลัพธ์การสมัครงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .confirmation-box {
            background-color: #d4edda; /* Light green for success message */
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 25px;
            margin-bottom: 30px;
            border-radius: 8px;
            text-align: center;
        }
        .data-display {
            background-color: #f8f9fa; /* Light gray for data */
            border: 1px solid #e9ecef;
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <h1 class="text-center text-primary mb-4">TechNova Solutions</h1>
    
    <?php
    // ตรวจสอบว่ามีการส่งข้อมูลผ่าน POST มาจากฟอร์มหรือไม่
    if (isset($_POST['submit_application'])) {
        
        // 1. แสดงข้อความยืนยันการสมัครงานสำเร็จ
        echo '<div class="confirmation-box shadow-sm">';
        echo '  <h3 class="mb-3">🎉 ส่งข้อมูลการสมัครงานสำเร็จ!</h3>';
        echo '  <p class="lead">บริษัทได้รับข้อมูลการสมัครงานของท่านแล้ว และจะติดต่อกลับโดยเร็วที่สุด</p>';
        echo '</div>';
        
        // 2. ดึงและทำความสะอาดข้อมูลจาก $_POST
        $position = htmlspecialchars($_POST['position'] ?? ' - ');
        $prefix = htmlspecialchars($_POST['prefix'] ?? ' - ');
        $fullname = htmlspecialchars($_POST['fullname'] ?? ' - ');
        $dob = htmlspecialchars($_POST['dob'] ?? ' - ');
        $phone = htmlspecialchars($_POST['phone'] ?? ' - ');
        $email = htmlspecialchars($_POST['email'] ?? ' - ');
        $education = htmlspecialchars($_POST['education'] ?? ' - ');
        $skills = htmlspecialchars($_POST['skills'] ?? ' - ');
        $experience = htmlspecialchars($_POST['experience'] ?? ' - ');
        
        // จัดการไฟล์ที่อัปโหลด (CV/Resume)
        $cv_status = "<span class='text-danger'>ไม่ได้แนบไฟล์</span>";
        if (isset($_FILES['cv_file']) && $_FILES['cv_file']['error'] == UPLOAD_ERR_OK) {
            $cv_filename = htmlspecialchars(basename($_FILES['cv_file']['name']));
            $cv_size = number_format($_FILES['cv_file']['size'] / 1024, 2); 
            $cv_status = "<span class='text-success'>แนบไฟล์สำเร็จ: **{$cv_filename}** ({$cv_size} KB)</span>";
        }
        
        // 3. แสดงข้อมูลทั้งหมดของผู้สมัครในรูปแบบตาราง
        echo '<div class="data-display">';
        echo '  <h4 class="text-info mb-3">รายละเอียดข้อมูลที่ท่านส่งมา:</h4>';
        
        echo '  <table class="table table-striped table-hover">';
        echo '    <thead class="table-dark"><tr><th colspan="2">ข้อมูลใบสมัครงาน</th></tr></thead>';
        echo '    <tbody>';
        
        echo '    <tr><td style="width: 30%;"><strong>ตำแหน่งที่สมัคร</strong></td><td>' . $position . '</td></tr>';
        echo '    <tr><td><strong>ชื่อ - สกุล</strong></td><td>' . $prefix . ' ' . $fullname . '</td></tr>';
        echo '    <tr><td><strong>วัน/เดือน/ปีเกิด</strong></td><td>' . $dob . '</td></tr>';
        echo '    <tr><td><strong>เบอร์โทรศัพท์</strong></td><td>' . $phone . '</td></tr>';
        echo '    <tr><td><strong>อีเมล</strong></td><td>' . $email . '</td></tr>';
        echo '    <tr><td><strong>ระดับการศึกษา</strong></td><td>' . $education . '</td></tr>';
        echo '    <tr><td><strong>ความสามารถพิเศษ</strong></td><td>' . nl2br($skills) . '</td></tr>';
        echo '    <tr><td><strong>สรุปประสบการณ์ทำงาน</strong></td><td>' . nl2br($experience) . '</td></tr>';
        echo '    <tr><td><strong>สถานะไฟล์ CV</strong></td><td>' . $cv_status . '</td></tr>';
        
        echo '    </tbody>';
        echo '  </table>';
        echo '</div>';
        
    } else {
        // กรณีเข้าถึงไฟล์ f.php โดยตรงโดยไม่ได้ผ่านการ Submit จาก e.php
        echo '<div class="alert alert-warning text-center" role="alert">';
        echo '  ❌ **ไม่พบข้อมูลการส่งฟอร์ม** กรุณาเข้าสู่หน้า <a href="e.php" class="alert-link">แบบฟอร์มรับสมัครงาน</a> เพื่อกรอกข้อมูล';
        echo '</div>';
    }
    ?>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>