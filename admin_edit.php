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
    $account = [
        'username' => 'chihihi',
        'first_name' => 'Tran',
        'last_name' => 'Chi',
        'email' => 'chihihi@gmail.com',
        'status' => 'Active'
    ];
    ?>

    

    <div class="container">

        <div class="card">
            <H1>CẬP NHẬT TÀI KHOẢN</H1>

            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $account['username'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Họ</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $account['first_name'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tên:</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $account['last_name'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" value="<?= $account['email'] ?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Trạng thái:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Vui lòng chọn...</option>
                        <option value="1"
                            <?= ($account['status'] == 'Active') ? 'selected' : '' ?>>
                            Kích hoạt</option>
                        <option value="2"
                            <?= ($account['status'] == 'Disable') ? 'selected' : '' ?>>
                            Vô hiệu hóa</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
        </div>
    </div>

</body>