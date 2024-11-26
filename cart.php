<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex-grow: 1;
        }
        .navbar {
            background-color: #2c1810 !important;
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
        .cart-item img {
            width: 100px;
            height: auto;
        }
        ul>li{
            list-style: none;
        }
        .text-white{
            text-decoration: none;
        }
    </style>
</head>
<body class="d-flex flex-column">

<?php include 'navbar.php'; ?>

<div class="container py-5 content">
    <h2 class="text-center mb-4">Giỏ Hàng</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Hình Ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Đơn Giá</th>
                    <th>Thành Tiền</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody id="cartItems">
                <tr>
                    <td colspan="6" class="text-center">Giỏ hàng hiện tại trống</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="text-end">
        <h4 id="totalPrice">Tổng cộng: 0đ</h4>
        <button class="btn btn-primary" id="checkoutButton" disabled>Thanh Toán</button>
    </div>
</div>

<?php include 'footer.php'; ?>


</body>
</html>
