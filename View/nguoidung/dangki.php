<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
    .size {
        width: 715px;
        margin: auto;
    }

    .color {
        background: linear-gradient(#141e30, #243b55);
    }

    .border {
        border: #fff;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="card size border border-primary">
            <div class="row">
                <div class="col-5 bg-primary rounded-start color border">
                    <p class="h4 mt-4 text-light">Quyền lợi với thành viên</p>
                    <p class="h6 text-light m-3">Vận chuyển siêu tốc</p>
                    <p class="h6 text-light m-3">Sản phẩm đa dạng</p>
                    <p class="h6 text-light m-3">Đổi trả dễ dàng</p>
                    <p class="h6 text-light m-3">Tích điểm đổi quà</p>
                    <p class="h6 text-light m-3">Được giảm giá cho lần mua tiếp theo lên đến 10%</p>
                    <a class="btn btn-primary border border-white mb-5 m-lg-3 color" href="../index.php?action=dangnhap"
                        role="button">Đăng
                        nhập</a>
                </div>
                <div class="col-7">
                    <form class="p-3" action="" method="post">
                        <p class="h3 m-3">Đăng kí</p>
                        <div class="mb-3">
                            <?php
                            if (isset($message)) {
                            ?>
                            <p><?= $message; ?></p>
                            <?php
                            }
                            ?>

                            <label for="exampleInputEmail1" class="form-label">Họ tên</label>
                            <input type="text" class="form-control" name="name" aria-describedby="emailHelp"
                                placeholder="Nhập họ tên">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                            <input type="number" class="form-control" name="sdt" aria-describedby="emailHelp"
                                placeholder="Nhập số điện thoại ">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" name="diachi" aria-describedby="emailHelp"
                                placeholder="Nhập họ tên">

                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gioitinh" id="flexRadioDefault1"
                                    value="1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    nữ
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gioitinh" id="flexRadioDefault2"
                                    checked="" value="2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    nam
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên tài khoản</label>
                            <input type="text" class="form-control" name="taikhoan" aria-describedby="emailHelp"
                                placeholder="Nhập tên tài khoản">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" name="pass"
                                placeholder=".............................">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" name="test"
                                placeholder=".............................">
                        </div>
                        <button type="submit" name="dangki" class="btn btn-primary col-12 mb-3 color" data-id="1">Đăng
                            ký</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>