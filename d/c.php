<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ณิชกานต์ พิมพา(ออย) - ฟอร์มสมัครสมาชิก -- Gemini</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    .color-display {
        width: 30px;
        height: 30px;
        border: 1px solid #ccc;
        display: inline-block;
        vertical-align: middle;
        margin-left: 10px;
    }
</style>
</head>

<body>
<div class="container mt-5">
    <div class="card shadow-lg p-3">
        <h1 class="card-title text-center text-primary mb-4">ฟอร์มสมัครสมาชิก - ณิชกานต์ พิมพา(ออย) - Gemini</h1>
        
        <form method="post" action="" class="needs-validation" novalidate>

            <div class="mb-3">
                <label for="fullname" class="form-label">ชื่อ - สกุล <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
                <div class="invalid-feedback">กรุณากรอกชื่อ - สกุล</div>
            </div>
            
            <div class="mb-3">
                <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                <input type="tel" class="form-control" id="phone" name="phone" required pattern="[0-9]{10}">
                <div class="form-text">รูปแบบ: 08XXXXXXXX</div>
                <div class="invalid-feedback">กรุณากรอกเบอร์โทรให้ถูกต้อง (ตัวเลข 10 หลัก)</div>
            </div>
            
            <div class="mb-3">
                <label for="height" class="form-label">ความสูง <span class="text-danger">*</span></label>
                <div class="input-group">
                    <input type="number" class="form-control" id="height" name="height" step="5" min="100" max="250" required>
                    <span class="input-group-text">ซม.</span>
                </div>
                <div class="invalid-feedback">กรุณาระบุความสูง (100-250 ซม.)</div>
            </div>
            
            <div class="mb-3">
                <label for="color" class="form-label">สีที่ชอบ <span class="text-danger">*</span></label><br>
                <input type="color" class="form-control form-control-color" id="color" name="color" value="#007bff" title="เลือกสี" required>
            </div>
            
            <div class="mb-4">
                <label for="major" class="form-label">สาขาวิชา <span class="text-danger">*</span></label>
                <select class="form-select" id="major" name="major" required>
                    <option selected disabled value="">เลือกสาขาวิชา...</option>
                    <option value="การบัญชี">การบัญชี</option>
                    <option value="การจัดการ">การจัดการ</option>
                    <option value="การตลาด">การตลาด</option>
                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                </select>
                <div class="invalid-feedback">กรุณาเลือกสาขาวิชา</div>
            </div>
            
            <div class