<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <style>
        .size {
            width: 715px;
            margin: auto;
        }

        .center {
            padding: 70px 0;
        }

        .backgroud {
            height: 100vh;
        }

        .colo r {
            background: linear-gradient(#141e30, #243b55);
        }

        .border {
            border: #fff;
        }
    </style>
</head>

<body>
    <div class="backgroud color">
        <div class="container center" id="main">
            <div class="card size border border-primary">
                <div class="row">
                    <div class="col-7">
                        <form class="p-3">
                            <p class="h3 m-3">Đăng nhập</p>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tên tài khoản</label>
                                <input type="text" class="form-control" name="userName" aria-describedby="emailHelp" placeholder="Nhập tên tài khoản">

                            </div>
                            <div class="mb-5">
                                <label for="exampleInputPassword1" class="form-label">Nhập mật khẩu</label>
                                <input type="password" class="form-control" name="password" placeholder=".............................">
                            </div>
                            <button name="login" class="btn btn-primary col-12 mb-3 color" Đăng nhập</button>
                        </form>
                    </div>
                    <div class="col-5 bg-primary rounded-end color border">

                        <p class="h4 mt-4 text-light">Quyền lợi với thành viên</p>
                        <p class="h6 text-light m-3">Vận chuyển siêu tốc</p>
                        <p class="h6 text-light m-3">Sản phẩm đa dạng</p>
                        <p class="h6 text-light m-3">Đổi trả dễ dàng</p>
                        <p class="h6 text-light m-3">Tích điểm đổi quà</p>
                        <p class="h6 text-light m-3">Được giảm giá cho lần mua tiếp theo lên đến 10%</p>
                        <a class="btn btn-primary border border-white mb-5 m-lg-3 color" href="../index.php?action=dangki" id="register" role="button">Đăng ký</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>