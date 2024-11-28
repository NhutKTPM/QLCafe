<?php
include 'connect.php';

// $sql = "SELECT * FROM dsthucuong";
// $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

        ul>li {
            list-style: none;
        }

        .text-white {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <?php include 'navbar.php'; ?>


    <div class="container">

        <div class="card">
            <div class="card-body">
            <h2>Đăng nhập</h2>
            <form method="POST" action="login_action.php">
                <label for="">Tên đăng nhập</label>
                <input type="text" name="tentk" id="tentk">
                <label for="">Mật khẩu</label>
                <input type="text" name="matkhau" id="matkhau">
                <input type="submit" value="Đăng nhập">
            </form>
            </div>
        </div>

    </div>


    <?php include 'footer.php' ?>
</body>

</html>