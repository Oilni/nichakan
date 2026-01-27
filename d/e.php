<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ฟอร์มรับสมัครงาน - TechNova Solutions</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /* Custom CSS สำหรับแบ่งส่วนของฟอร์มให้ชัดเจน */
    .form-section-title {
        background-color: #e9ecef;
        color: #0d6efd;
        padding: 10px 15px;
        margin-top: 25px;
        margin-bottom: 15px;
        border-left: 5px solid #0d6efd;
        font-weight: bold;
        border-radius: 4px;
    }
    .card {
        border-radius: 10px;
    }
</style>
</head>

<body>
<div class="container my-5">
    <div class="card shadow-lg p-4 p-md-5">
        
        <h1 class="text-center text-primary mb-3">TechNova Solutions</h1>
        <h2 class="text-center text-secondary mb-4 fs-4">ใบสมัครงานออนไลน์</h2>
        <p class="text-end text-danger small">ข้อมูลที่มีเครื่องหมาย (*) เป็นข้อมูลที่จำเป็นต้องกรอก</p>
        
        <form action="f.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>

            <div class="form-section-title">1. ข้อมูลตำแหน่งงานที่ต้องการสมัคร</div>
            <div class="mb-4">
                <label for="position" class="form-label fw-bold">ตำแหน่งที่ต้องการสมัคร <span class="text-danger">*</span></label>
                <select class="form-select" id="position" name="position" required>
                    <option selected disabled value="">--- กรุณาเลือกตำแหน่งงาน ---</option>
                    <option value="Software Developer">Software Developer (นักพัฒนาซอฟต์แวร์)</option>
                    <option value="Digital Marketing Specialist">Digital Marketing Specialist (ผู้เชี่ยวชาญการตลาดดิจิทัล)</option>
                    <option value="Human Resources Officer">Human Resources Officer (เจ้าหน้าที่ฝ่ายบุคคล)</option>
                    <option value="Project Manager">Project Manager (ผู้จัดการโครงการ)</option>
                </select>
                <div class="invalid-feedback">กรุณาเลือกตำแหน่งงานที่ต้องการสมัคร</div>
            </div>
            
            <div class="form-section-title">2. ข้อมูลส่วนตัวและการติดต่อ</div>
            <div class="row g-3 mb-3">
                <div class="col-md-3">
                    <label for="prefix" class="form-label">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                    <select class="form-select" id="prefix" name="prefix" required>
                        <option selected disabled value="">เลือก</option>
                        <option value="นาย">นาย</option>
                        <option value="นาง">นาง</option>
                        <option value="นางสาว">นางสาว</option>
                    </select>
                    <div class="invalid-feedback">กรุณาเลือกคำนำหน้าชื่อ</div>
                </div>
                <div class="col-md-9">
                    <label for="fullname" class="form-label">ชื่อ - สกุล <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="ตัวอย่าง: สมชาย ใจดี" required>
                    <div class="invalid-feedback">กรุณากรอกชื่อ - สกุล</div>
                </div>
                <div class="col-md-6">
                    <label for="dob" class="form-label">วัน/เดือน/ปีเกิด <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                    <div class="invalid-feedback">กรุณาเลือกวันเดือนปีเกิด</div>
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="ตัวอย่าง: 0812345678" required pattern="[0-9]{10}">
                    <div class="invalid-feedback">กรุณากรอกเบอร์โทรศัพท์ 10 หลัก</div>
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">อีเมล <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com" required>
                    <div class="invalid-feedback">กรุณากรอกอีเมลที่ถูกต้อง</div>
                </div>
            </div>
            
            <div class="form-section-title">3. ข้อมูลการศึกษาและความสามารถ</div>
            <div class="mb-3">
                <label for="education" class="form-label">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                <select class="form-select" id="education" name="education" required>
                    <option selected disabled value="">--- กรุณาเลือกระดับการศึกษา ---</option>
                    <option value="มัธยมศึกษาตอนปลาย">มัธยมศึกษาตอนปลาย (ม.6/ปวช.)</option>
                    <option value="อนุปริญญา/ปวส.">อนุปริญญา/ปวส.</option>
                    <option value="ปริญญาตรี">ปริญญาตรี</option>
                    <option value="ปริญญาโท">ปริญญาโท</option>
                    <option value="ปริญญาเอก">ปริญญาเอก</option>
                </select>
                <div class="invalid-feedback">กรุณาเลือกระดับการศึกษาสูงสุด</div>
            </div>
            <div class="mb-4">
                <label for="skills" class="form-label">ความสามารถพิเศษ / ทักษะที่โดดเด่น</label>
                <textarea class="form-control" id="skills" name="skills" rows="3" placeholder="ระบุทักษะทางภาษา, โปรแกรมคอมพิวเตอร์, หรือความสามารถอื่น ๆ ที่เป็นประโยชน์"></textarea>
            </div>
            
            <div class="form-section-title">4. ประสบการณ์ทำงานและเอกสารแนบ</div>
            <div class="mb-3">
                <label for="experience" class="form-label">สรุปประสบการณ์ทำงาน</label>
                <textarea class="form-control" id="experience" name="experience" rows="5" placeholder="ระบุชื่อบริษัท, ตำแหน่ง, ระยะเวลาการทำงาน, และหน้าที่ความรับผิดชอบโดยย่อ"></textarea>
            </div>
            <div class="mb-4">
                <label for="cv_file" class="form-label">อัปโหลด CV/Resume (ไฟล์ PDF เท่านั้น)</label>
                <input class="form-control" type="file" id="cv_file" name="cv_file" accept=".pdf">
                <div class="form-text">ขนาดไฟล์ไม่เกิน 5MB</div>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3">
                <button type="submit" name="submit_application" class="btn btn-success btn-lg me-md-2">✅ ยืนยันการสมัคร</button>
                <button type="reset" class="btn btn-outline-danger btn-lg">✖️ ยกเลิก/ล้างข้อมูล</button>
            </div>

        </form>
        
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    (function () {
      'use strict'
      var forms = document.querySelectorAll('.needs-validation')
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
    })()
</script>
</body>
</html>