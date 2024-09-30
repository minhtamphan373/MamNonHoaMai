<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SCSS -->
    <link rel="stylesheet" href="../MamNonHoaMai/css/style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Header</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="#">
            <img src="./img/Logo tách nền.png" alt="Avatar Logo" class="rounded-pill">
        </a>
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item heading">
                        <a class="nav-link" href="#">trang chủ</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle heading" href="#" role="button" data-bs-toggle="dropdown">tin
                            tức - sự kiện</a>
                        <ul class="dropdown-menu title">
                            <li><a class="dropdown-item" href="#">Tin tức</a></li>
                            <li><a class="dropdown-item" href="#">Sự kiện</a></li>
                            <li><a class="dropdown-item" href="#">Văn bản</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle heading" href="#" role="button"
                            data-bs-toggle="dropdown">chương trình học</a>
                        <ul class="dropdown-menu title">
                            <li><a class="dropdown-item" href="#">Chương trình mầm non</a></li>
                            <li><a class="dropdown-item" href="#">Chương trình năng khiếu</a></li>
                            <li><a class="dropdown-item" href="#">Giáo dục kỹ năng</a></li>
                        </ul>
                    </li>
                    <li class="nav-item heading">
                        <a class="nav-link" href="#">tuyển sinh</a>
                    </li>
                    <li class="nav-item heading">
                        <a class="nav-link" href="contact.php">liên hệ</a>
                    </li>
                </ul>
            </div>

            <a href="login.php">
                <button type="button" class="btnlogin">ĐĂNG NHẬP</button>
            </a>
        </div>
    </nav>

</body>

</html>