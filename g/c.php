<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ณิชกานต์ พิมพา (ออย) - Pop Supermarket</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
    <style>
        body { background-color: #f8f9fa; padding: 20px; }
        .table-container { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .product-img { border-radius: 5px; object-fit: cover; }
    </style>
</head>

<body>
<div class="container-fluid">
    <div class="table-container">
        <h2 class="mb-4 text-primary">ระบบจัดการข้อมูล Pop Supermarket</h2>
        <h5 class="text-muted mb-4">ผู้จัดทำ: ณิชกานต์ พิมพา (ออย)</h5>

        <table id="myTable" class="table table-striped table-hover" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>Order ID</th>
                    <th>สินค้า</th>
                    <th>ประเภทสินค้า</th>
                    <th>วันที่</th>
                    <th>ประเทศ</th>
                    <th class="text-end">จำนวนเงิน</th>
                    <th class="text-center">รูปภาพ</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include_once("connectdb.php");
                $sql = "SELECT * FROM `popsupermarket`";
                $rs = mysqli_query($conn, $sql);
                $total = 0;
                
                while ($data = mysqli_fetch_array($rs)){
                    $total += $data['p_amount'];
            ?>
                <tr>
                    <td><?php echo $data['p_order_id'];?></td>
                    <td><strong><?php echo $data['p_product_name'];?></strong></td>
                    <td><span class="badge bg-info text-dark"><?php echo $data['p_category'];?></span></td>
                    <td><?php echo date('d/m/Y', strtotime($data['p_date']));?></td>
                    <td><?php echo $data['p_country'];?></td>
                    <td align="right"><?php echo number_format($data['p_amount'], 0);?></td>
                    <td align="center">
                        <img src="<?php echo $data['p_product_name'];?>.jpg" 
                             alt="product" class="product-img" width="50" height="50"
                    </td>
                </tr>
            <?php } ?>
            </tbody>
            <tfoot class="table-light">
                <tr>
                    <th colspan="5" class="text-end">ยอดรวมทั้งสิ้น:</th>
                    <th class="text-end text-danger h5"><?php echo number_format($total, 0);?></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/th.json" // เมนูภาษาไทย
            },
            "pageLength": 10,
            "order": [[ 0, "desc" ]] // เรียงจาก Order ID ล่าสุด
        });
    });
</script>
</body>
</html>