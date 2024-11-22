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

    <?php include 'navbar.php'; ?>

    <div class="container">

        <div class="card">
            <h1>DANH SÁCH THỨC UỐNG</h1>
            <?php foreach ($dsthucuong as $thucuong): ?>
                <div class="card">
                    <div><?= $thucuong['hinhanh'] ?></div>
                    <div><?= $thucuong['ten'] ?></div>
                    <div><?= $thucuong['mota'] ?></div>
                    <div><?= $thucuong['gia'] ?></div>
                    <button>Mua</button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


</body>

</html>