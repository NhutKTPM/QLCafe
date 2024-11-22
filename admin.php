<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>


    <?php include 'admin_navbar.php'; ?>

    <div class="container">

        <div class="card">
            <h1>DANH SÁCH THỨC UỐNG</h1>

            <a href="admin_add.php">Thêm</a>



            <?php
            $dsthucuong = [
                [
                    'mathucuong' => '1',
                    'hinhanh' => 'anh1',
                    'ten' => 'Cafe',
                    'mota' => 'Mo ta cafe',
                    'gia' => '20000'
                ],
                [
                    'mathucuong' => '2',
                    'hinhanh' => 'anh2',
                    'ten' => 'Tra',
                    'mota' => 'Tran',
                    'gia' => '20000'
                ],
                [
                    'mathucuong' => '1',
                    'hinhanh' => 'Chi',
                    'ten' => 'Cafe',
                    'mota' => 'Tran',
                    'gia' => '20000'
                ],
                [
                    'mathucuong' => '1',
                    'hinhanh' => 'Chi',
                    'ten' => 'Cafe',
                    'mota' => 'Tran',
                    'gia' => '20000'
                ]
            ];
            ?>



            <table class="table table-striped">
                <th>Mã thức uống</th>
                <th>Hình ảnh</th>
                <th>Tên</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th></th>


                <?php foreach ($dsthucuong as $thucuong): ?>
                    <tr>
                        <td><?= $thucuong['mathucuong'] ?></td>
                        <td><?= $thucuong['hinhanh'] ?></td>
                        <td><?= $thucuong['ten'] ?></td>
                        <td><?= $thucuong['mota'] ?></td>
                        <td><?= $thucuong['gia'] ?></td>
                        <td>
                            <a href="admin_edit.php">Sửa</a>
                            <button>Xóa</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>


        </div>
    </div>



</body>

</html>