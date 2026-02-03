<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ณิชกานต์ พิมพา (ออย)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body { background-color: #f8f9fa; }
        .container { margin-top: 30px; margin-bottom: 30px; }
        .card { border-radius: 1rem; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08); }
        .table th { background-color: #e9ecef; }
        .chart-wrapper { height: 300px; } /* กำหนดความสูงให้กราฟ */
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center mb-4 text-primary">รายงานยอดขาย: ณิชกานต์ พิมพา (ออย)</h1>

    <?php
        include_once("connectdb.php"); // ตรวจสอบว่าไฟล์นี้มีการเชื่อมต่อ DB ที่ถูกต้อง
        $sql = "SELECT p_country, SUM(p_amount) AS total FROM popsupermarket GROUP BY p_country ORDER BY total DESC";
        $rs = mysqli_query($conn, $sql);
        
        $labels = [];
        $data = [];
        $table_rows_html = ""; // ใช้เก็บ HTML ของแถวตาราง
        
        while ($row = mysqli_fetch_array($rs)){
            $labels[] = $row['p_country'];
            $data[] = $row['total'];
            
            // สร้างแถวตาราง
            $table_rows_html .= "<tr>";
            $table_rows_html .= "<td>" . htmlspecialchars($row['p_country']) . "</td>";
            $table_rows_html .= "<td class='text-end'>" . number_format($row['total'], 0) . "</td>";
            $table_rows_html .= "</tr>";
        }
    ?>

    <div class="row g-4 mb-4">
        <div class="col-lg-8">
            <div class="card p-3">
                <h5 class="card-title text-center mb-3">ยอดขายรวมรายประเทศ (Bar Chart)</h5>
                <div class="chart-wrapper">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card p-3">
                <h5 class="card-title text-center mb-3">สัดส่วนยอดขาย (Pie Chart)</h5>
                <div class="chart-wrapper">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="card p-3">
        <h5 class="card-title mb-3">รายละเอียดข้อมูลยอดขาย</h5>
        <div class="table-responsive">
            <table class="table table-striped table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ประเทศ</th>
                        <th class="text-end">ยอดขาย</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $table_rows_html ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    const chartData = {
        labels: <?= json_encode($labels) ?>,
        datasets: [{
            label: 'ยอดขายรวม',
            data: <?= json_encode($data) ?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.8)', // Red
                'rgba(54, 162, 235, 0.8)', // Blue
                'rgba(255, 206, 86, 0.8)', // Yellow
                'rgba(75, 192, 192, 0.8)', // Green
                'rgba(153, 102, 255, 0.8)',// Purple
                'rgba(255, 159, 64, 0.8)', // Orange
                'rgba(200, 200, 200, 0.8)' // Grey
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(200, 200, 200, 1)'
            ],
            borderWidth: 1
        }]
    };

    // Bar Chart
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: chartData,
        options: {
            responsive: true,
            maintainAspectRatio: false, // สำคัญสำหรับ chart-wrapper
            plugins: {
                legend: { display: false },
                title: { display: true, text: 'ยอดขายรวมรายประเทศ' } // เพิ่ม Title ใน Options ได้
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Pie Chart
    new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: chartData,
        options: {
            responsive: true,
            maintainAspectRatio: false, // สำคัญสำหรับ chart-wrapper
            plugins: {
                legend: { position: 'bottom' },
                title: { display: true, text: 'สัดส่วนยอดขายรวม' } // เพิ่ม Title ใน Options ได้
            }
        }
    });
</script>

</body>
</html>