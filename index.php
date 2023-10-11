<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    .section-product-cards .owl-carousel .owl-nav button.owl-next,
    .owl-carousel .owl-nav button.owl-prev {
        width: 50px;
        text-align: center;
        background: greenyellow;
        color: fff;
        line-height: 40px;
        position: absolute;
        outline: none;
    }

    .section-product-cards .owl-carousel .owl-nav button.owl-next {
        right: 0;
        top: 150px;
    }

    .section-product-cards .owl-carousel .owl-nav button.owl-prev {
        left: 0;
        top: 150px;
    }
    </style>
</head>

<body>
    <div class="container">


        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">2TSHOP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Danh Mục</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Trang Chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Đăng Ký/Đăng Nhập</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cart.php">Giỏ Hàng <i
                                        class="fa-solid fa-cart-shopping"></i><sub>1</sub></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="fa-regular fa-user"></i>
                                    Tài Khoản
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Tài khoản của
                                            bạn</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-regular fa-rectangle-list"></i>
                                            Đơn
                                            hàng của bạn</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-heart"></i> Danh sách
                                            yêu
                                            thích</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Nếu bạn là thành viên mới</a></li>
                                    <li class="px-5 nav-item">
                                        <a class="nav-link" href="#">Đăng Nhập</a>
                                    </li>
                                    <li class="px-5 nav-item">
                                        <a class="nav-link" href="#">Đăng Ký</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success" type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <!-- slider -->
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="images/sliders/slider,5.webp" class="d-block w-100" style="width: 70%; height:500px;"
                        alt="...">
                    <!-- slider-content -->
                    <div class="slider-content">
                        <h3>Xe Mecedes mang phong cách thời thượng</h3>
                        <a href="cart.php"><button class="btn btn-outline bg-info">Mua sắm <i
                                    class="fa-solid fa-cart-shopping"></i></button></a>
                        <a href="cart.php" class='px-4 '><button
                                class="btn btn-outline border view_more border-1 border-danger ">Xem
                                thêm
                            </button></a>


                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/sliders/slider6.webp" class="d-block w-100" style="width: 70%; height:500px;"
                        alt="...">
                    <!-- slider-content -->
                    <div class="slider-content">
                        <h3>Xe Mecedes mang phong cách thời thượng</h3>
                        <a href="cart.php"><button class="btn btn-outline bg-info">Mua sắm <i
                                    class="fa-solid fa-cart-shopping"></i></button></a>
                        <a href="cart.php" class='px-4 '><button
                                class="btn btn-outline border view_more border-1 border-danger ">Xem
                                thêm
                            </button></a>
                    </div>

                </div>
                <div class="carousel-item">
                    <img src="images/sliders/slider7.webp" class="d-block w-100" style="width: 70%; height:500px;"
                        alt="...">
                    <!-- slider-content -->
                    <div class="slider-content">
                        <h3>Xe Mecedes mang phong cách thời thượng</h3>
                        <a href="cart.php"><button class="btn btn-outline bg-info">Mua sắm <i
                                    class="fa-solid fa-cart-shopping"></i></button></a>
                        <a href="cart.php" class='px-4 '><button
                                class="btn btn-outline border view_more border-1 border-danger ">Xem
                                thêm
                            </button></a>

                    </div>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!--  -->
        <!-- product -->
        <div class="container-fluid">
            <section class="product-section">
                <div class="section-heading">
                    <h3 class="heading">last product</h3>
                </div>

                <div class="section-product-cards">
                    <div class="owl-carousel">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/sliders/slider.4.jpg" alt="product name">
                            </div>

                            <!-- product hover content -->
                            <div class="card-contents">
                                <button type="button" class="btn btn-outline cart-btn bg-warning">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                            <!-- detail -->
                            <div class="product-detail">
                                <h5 class="product-name">
                                    Mecedes
                                </h5>
                                <p class="product-price">
                                    <small class="text-danger"><s>1.000 $</s></small>
                                    <span class="text-success ms-3">50.000 $</span>
                                </p>

                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/sliders/slider.4.jpg" alt="product name">
                            </div>

                            <!-- product hover content -->
                            <div class="card-contents">
                                <button type="button" class="btn btn-outline cart-btn bg-warning">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                            <!-- detail -->
                            <div class="product-detail">
                                <h5 class="product-name">
                                    Mecedes
                                </h5>
                                <p class="product-price">
                                    <small class="text-danger"><s>1.000 $</s></small>
                                    <span class="text-success ms-3">50.000 $</span>
                                </p>

                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/sliders/slider.4.jpg" alt="product name">
                            </div>

                            <!-- product hover content -->
                            <div class="card-contents">
                                <button type="button" class="btn btn-outline cart-btn bg-warning">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                            <!-- detail -->
                            <div class="product-detail">
                                <h5 class="product-name">
                                    Mecedes
                                </h5>
                                <p class="product-price">
                                    <small class="text-danger"><s>1.000 $</s></small>
                                    <span class="text-success ms-3">50.000 $</span>
                                </p>

                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/sliders/slider.4.jpg" alt="product name">
                            </div>

                            <!-- product hover content -->
                            <div class="card-contents">
                                <button type="button" class="btn btn-outline cart-btn bg-warning">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                            <!-- detail -->
                            <div class="product-detail">
                                <h5 class="product-name">
                                    Mecedes
                                </h5>
                                <p class="product-price">
                                    <small class="text-danger"><s>1.000 $</s></small>
                                    <span class="text-success ms-3">50.000 $</span>
                                </p>

                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/sliders/slider.4.jpg" alt="product name">
                            </div>

                            <!-- product hover content -->
                            <div class="card-contents">
                                <button type="button" class="btn btn-outline cart-btn bg-warning">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                            <!-- detail -->
                            <div class="product-detail">
                                <h5 class="product-name">
                                    Mecedes
                                </h5>
                                <p class="product-price">
                                    <small class="text-danger"><s>1.000 $</s></small>
                                    <span class="text-success ms-3">50.000 $</span>
                                </p>

                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/sliders/slider.4.jpg" alt="product name">
                            </div>

                            <!-- product hover content -->
                            <div class="card-contents">
                                <button type="button" class="btn btn-outline cart-btn bg-warning">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                            <!-- detail -->
                            <div class="product-detail">
                                <h5 class="product-name">
                                    Mecedes
                                </h5>
                                <p class="product-price">
                                    <small class="text-danger"><s>1.000 $</s></small>
                                    <span class="text-success ms-3">50.000 $</span>
                                </p>

                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/sliders/slider.4.jpg" alt="product name">
                            </div>

                            <!-- product hover content -->
                            <div class="card-contents">
                                <button type="button" class="btn btn-outline cart-btn bg-warning">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                            <!-- detail -->
                            <div class="product-detail">
                                <h5 class="product-name">
                                    Mecedes
                                </h5>
                                <p class="product-price">
                                    <small class="text-danger"><s>1.000 $</s></small>
                                    <span class="text-success ms-3">50.000 $</span>
                                </p>

                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/sliders/slider.4.jpg" alt="product name">
                            </div>

                            <!-- product hover content -->
                            <div class="card-contents">
                                <button type="button" class="btn btn-outline cart-btn bg-warning">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                            <!-- detail -->
                            <div class="product-detail">
                                <h5 class="product-name">
                                    Mecedes
                                </h5>
                                <p class="product-price">
                                    <small class="text-danger"><s>1.000 $</s></small>
                                    <span class="text-success ms-3">50.000 $</span>
                                </p>

                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </div>
    </div>


    <!-- js -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>