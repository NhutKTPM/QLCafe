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
    $dsorder = [
        [
            'madouong' => '2',
            'soluong' => '1',
        ],
        [
            'madouong' => '3',
            'soluong' => '2',
        ],
        [
            'madouong' => '2',
            'soluong' => '1',
        ],
        [
            'madouong' => '3',
            'soluong' => '2',
        ],
    ];
    ?>

    <?php include 'navbar.php'; ?>

    <div class="container">

        <div class="card">
            <h1>Giỏ hàng</h1>
            <table class="table table-striped">
                <th>Tên đồ uống</th>
                <th>Số lượng</th>
                <th></th>
                
                <?php foreach ($dsorder as $order): ?>
                    <tr>
                        <td>Tên đồ uống</td>
                        <td><?= $order['soluong'] ?></td>
                        <td><button>Xóa</button></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>



</body>

</html>