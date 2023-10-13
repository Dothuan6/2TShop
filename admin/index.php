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

        <section class="working-panel w-100">
            <!-- <h1>Giao Diện Quản Lý</h1> -->
            <div class="container-fluid">
                <h1 class="display-4">Giao Diện Quản Lý Thuận</h1>
                <hr>
                <div class="row">
                    <!-- categories -->
                    <div class="col-md-3">
                        <div class="card bg-orange-g text-white">
                            <div class="card-body">
                                <h4 class="font-weight-light"><i class="fa-solid fa-cart-flatbed"></i> Danh Mục</h4>
                                <hr>
                                <h5><b>12345</b></h5>
                            </div>
                        </div>
                    </div>
                    <!-- brand -->
                    <div class="col-md-3">
                        <div class="card bg-green-g text-white">
                            <div class="card-body">
                                <h4 class="font-weight-light"><i class="fa-solid fa-dolly"></i> Nhan Hang</h4>
                                <hr>
                                <h5><b>12345</b></h5>
                            </div>
                        </div>
                    </div>
                    <!-- user -->
                    <div class="col-md-3">
                        <div class="card bg-golden-g text-white">
                            <div class="card-body">
                                <h4 class="font-weight-light"><i class="fa-solid fa-user"></i> Khach Hang</h4>
                                <hr>
                                <h5><b>12345</b></h5>
                            </div>
                        </div>
                    </div>
                    <!-- order -->
                    <div class="col-md-3">
                        <div class="card bg-primary-g text-white">
                            <div class="card-body">
                                <h4 class="font-weight-light"><i class="fa-solid fa-basket-shopping"></i> Don Hang</h4>
                                <hr>
                                <h5><b>12345</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table -->
                <div class="all-order  mt-4">
                    <table class="table table-bordered">
                        <h2>Don Hang Moi</h2>
                        <thead>
                            <tr class="bg-dark text-white">
                                <th scope="col">STT</th>
                                <th scope="col">Ten Don Hang</th>
                                <th scope="col">So Luong</th>
                                <th scope="col">Ngay</th>
                                <th scope="col">Trang Thai Don</th>
                                <th scope="col">Trang Thai Thanh Toan </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>3</td>
                                <td>Otto</td>
                                <td><span class="badge badge-danger">Unpaid</span></td>
                                <td><span class="badge badge-cuccess">Hoan thanh</span></td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>4</td>
                                <td>Thornton</td>
                                <td><span class="badge badge-success">paid</span></td>
                                <td><span class="badge badge-info">Dang giai quyet</span></td>

                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry the Bird</td>
                                <td>5</td>
                                <td>abc</td>
                                <td><span class="badge badge-warning">moi</span></td>
                                <td><span class="badge badge-warning">moi</span></td>


                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--  -->
                <div class="order-pagination">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>