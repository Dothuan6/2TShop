<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_panel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <style>
    .close-btn {
        cursor: pointer;
        display: none;
    }
    </style>
</head>

<body>
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="header-content">
                <!-- slider -->
                <div class="side-head">
                    <span class="text-white">Admin Panel</span> &nbsp;
                    <i class="fa-solid fa-bars menu-btn text-white"></i>
                    <i class="fa-solid fa-angle-right text-white close-btn"></i>
                </div>

                <!-- navigator -->
                <div class="header-nav">
                    <ul>
                        <li><a href=""><i class="fa-solid fa-basket-shopping"></i> Đơn Hàng</a></li>
                        <li><a href=""><i class="fa-solid fa-truck-fast"></i> Vận Chuyển</a></li>
                        <li><a href=""><i class="fa-solid fa-users-rectangle"></i> Người Dùng</a></li>
                        <li><a href=""><i class="fa-solid fa-right-from-bracket"></i> Đăng Xuất</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <section class="sidebar">
            <!-- <p>sidebar</p> -->
            <ul class="nav-bar">
                <li>
                    <a href=""><i class="fa-solid fa-gauge"></i><span class="text-link"> Quan Ly</span></a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-dolly"></i><span class="text-link"> Nhãn Hàng</span></a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-cart-flatbed"></i><span class="text-link"> Danh Mục</span> </a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-basket-shopping"></i><span class="text-link"> Sản Phẩm</span> </a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-truck-fast"></i><span class="text-link"> Vận Chuyển</span> </a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-images"></i><span class="text-link"> Hình ảnh</span> </a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-gears"></i><span class="text-link"> Cài Đặt</span> </a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-user"></i><span class="text-link"> Tài Khoản</span> </a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-right-from-bracket"></i><span class="text-link"> Đăng
                            Xuất</a></span>
                </li>
            </ul>
        </section>