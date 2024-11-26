<?php
$products = [
    [
        'id' => 1,
        'hinhanh' => 'anh1.jpg',
        'ten' => 'Cafe',
        'mota' => 'Cafe đen ngon',
        'gia' => 20000
    ],
    [
        'id' => 2,
        'hinhanh' => 'anh2.jpg',
        'ten' => 'Trà Sữa',
        'mota' => 'Trà sữa thơm ngon',
        'gia' => 25000
    ],
    [
        'id' => 3,
        'hinhanh' => 'anh3.jpg',
        'ten' => 'Chocolate Đá',
        'mota' => 'Socola đá mát lạnh',
        'gia' => 35000
    ],
    [
        'id' => 4,
        'hinhanh' => 'anh4.jpg',
        'ten' => 'Smoothie Dâu',
        'mota' => 'Smoothie dâu tươi',
        'gia' => 40000
    ],
    [
        'id' => 5,
        'hinhanh' => 'anh5.jpg',
        'ten' => 'Nước Cam',
        'mota' => 'Nước cam ép tươi',
        'gia' => 15000
    ],
    [
        'id' => 6,
        'hinhanh' => 'anh6.jpg',
        'ten' => 'Matcha',
        'mota' => 'Matcha thơm ngon',
        'gia' => 45000
    ]
];

$productsPerPage = 6;
$totalProducts = count($products);
$totalPages = ceil($totalProducts / $productsPerPage);

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max(1, min($page, $totalPages));

$offset = ($page - 1) * $productsPerPage;
$productsToShow = array_slice($products, $offset, $productsPerPage);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $newProduct = [
            'id' => count($products) + 1,
            'hinhanh' => $_POST['hinhanh'],
            'ten' => $_POST['ten'],
            'mota' => $_POST['mota'],
            'gia' => $_POST['gia']
        ];
        array_push($products, $newProduct);
    }
    if (isset($_POST['edit'])) {
        foreach ($products as &$product) {
            if ($product['id'] == $_POST['id']) {
                $product['ten'] = $_POST['ten'];
                $product['mota'] = $_POST['mota'];
                $product['gia'] = $_POST['gia'];
                break;
            }
        }
    }
    if (isset($_POST['delete'])) {
        foreach ($products as $key => $product) {
            if ($product['id'] == $_POST['id']) {
                unset($products[$key]);
                break;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .navbar {
            background-color: #2c1810 !important;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .footer {
            background-color: #2c1810;
            color: white;
        }
        .social-icon {
            width: 35px;
            height: 35px;
            line-height: 35px;
            text-align: center;
            border-radius: 50%;
            background-color: white;
            color: #2c1810;
            margin-right: 10px;
        }
        ul>li{
            list-style: none;
        }
        .text-white{
            text-decoration: none;
        }
    </style>
</head>
<body>

<?php include 'navbar_ad.php'; ?>

<div class="container py-5">
    <h2 class="text-center mb-4">Danh Sách Sản Phẩm</h2>
    <div class="text-end">
        <button class="btn btn-primary" id="showFormBtn">Thêm Sản Phẩm</button>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
        <?php foreach($productsToShow as $thucuong): ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?= $thucuong['hinhanh'] ?>" class="card-img-top" alt="<?= $thucuong['ten'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $thucuong['ten'] ?></h5>
                        <p class="card-text"><?= $thucuong['mota'] ?></p>
                        <p class="card-text"><strong><?= number_format($thucuong['gia'], 0, ',', '.') ?>đ</strong></p>
                        <a href="edit_product.php?id=<?= $thucuong['id'] ?>" class="btn btn-warning mt-2">Sửa</a>
                        <form method="POST" action="" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $thucuong['id'] ?>">
                            <button type="submit" name="delete" class="btn btn-danger mt-2">Xóa</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="d-flex justify-content-end mt-4">
        <nav>
            <ul class="pagination">
                <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                    <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>

                <li class="page-item <?= $page >= $totalPages ? 'disabled' : '' ?>">
                    <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div class="container mt-5" id="addProductForm" style="display: none;">
    <h2 class="text-center mb-4">Thêm Mới Sản Phẩm</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="hinhanh" class="form-label">Hình ảnh</label>
            <input type="text" class="form-control" id="hinhanh" name="hinhanh" required>
        </div>
        <div class="mb-3">
            <label for="ten" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="ten" name="ten" required>
        </div>
        <div class="mb-3">
            <label for="mota" class="form-label">Mô tả</label>
            <textarea class="form-control" id="mota" name="mota" required></textarea>
        </div>
        <div class="mb-3">
            <label for="gia" class="form-label">Giá</label>
            <input type="number" class="form-control" id="gia" name="gia" required>
        </div>
        <button type="submit" name="add" class="btn btn-success">Thêm sản phẩm</button>
    </form>
</div>

<script>t
    document.getElementById('showFormBtn').addEventListener('click', function() {
        document.getElementById('addProductForm').style.display = 'block';
    });
</script>

<?php include 'footer.php'; ?>
</body>
</html>
