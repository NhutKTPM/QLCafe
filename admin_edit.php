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
        
    <?php
    require 'connect.php';
    $thucuong = $_GET['mathucuong'];
    $sql = "SELECT * FROM dsthucuong where mathucuong='$thucuong' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) :
        $dsthucuong = $result->fetch_all(MYSQLI_ASSOC);
        
        $thucuong  = $dsthucuong[0];
    ?>
    



    
    <div class="container">

        <div class="card">
            <H1>form edit thuc uong</H1>

            <form action ="admin_edit_action.php" method= "post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mã Thức Uống: </label>
                    <input type="text" class="form-control" id="mathucuong" name="mathucuong"value="<?= $thucuong['mathucuong'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Hình Ảnh: </label>
                    <input type="text" class="form-control" id="" value="<?= $thucuong['hinhanh'] ?>">
                    <img src="<?= $thucuong['hinhanh'] ?>" alt=""hinhanh>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tên: </label>
                    <input type="text" class="form-control" id="ten" name="ten" value="<?= $thucuong['ten'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mô Tả: </label>
                    <input type="text" class="form-control" id="mota" name="mota" value="<?= $thucuong['mota'] ?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Giá:</label>
                    <input type="number" class="form-control" id="gia" name="gia" value="<?= $thucuong['gia'] ?>">
                </div>

                <button type="submit" class="btn btn-primary">Sửa</button>
            </form>
        </div>
    </div>
    <?php
    endif;
    ?>
</body>