<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS -->

    <link rel="stylesheet" href="home/css/base.css">
    <link rel="stylesheet" href="home/css/slide.css">



    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="home/js/slide.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/png" href="home/img/logo-nhan-dien MTAC - 20.05.2022.png" />
    <title>Môi Trường Á Châu - Đồng hành cùng khách hàng</title>

</head>

<body>
    <div class="container-content">
        <!-- SUBNAV -->
        <nav style="position: relative; z-index: 2; height: 35px;" class="subnav navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid" style="background-color: #f8f9fa;">
                <div id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tài khoản
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Cá nhân</a></li>
                                <li><a class="dropdown-item" href="#">Khách</a></li>

                            </ul>
                        </li>

                    </ul>

                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Công cụ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hỗ trợ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên hệ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ngôn ngữ
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Tiếng Việt</a></li>
                                <li><a class="dropdown-item" href="#">Tiếng Anh</a></li>

                            </ul>
                        </li>

                    </ul>
                    <!-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Search</button>
          </form> -->
                </div>
            </div>
        </nav>
        <!-- MAIN NAV -->
        <nav style="position: relative; z-index: 1;">
            <div class="navbar">
                <i class='bx bx-menu'></i>


                <div class="nav-links">
                    <div class="sidebar-logo">
                        <span class="logo-name"></span>
                        <i class='bx bx-x'></i>
                    </div>
                    <ul class="links">
                        <li><a href="#">TRANG CHỦ</a></li>
                        <li>
                            <a href="#">DỰ ÁN</a>
                            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                            <ul class="htmlCss-sub-menu sub-menu">
                                <li><a href="#">Trường học xanh</a></li>
                                <li><a href="#">Xây dựng nông thôn mới</a></li>
                                <li><a href="#">Phân loại rác tại nguồn</a></li>
                                <li><a href="#">Thu hồi pin thải</a></li>
                                <li><a href="#">Xem thêm</a></li>
                                <li class="more">
                                    <span><a href="#">Địa điểm</a>
                                        <i class='bx bxs-chevron-right arrow more-arrow'></i>
                                    </span>
                                    <ul class="more-sub-menu sub-menu">
                                        <li><a href="#">Thừa Thiên Huế</a></li>
                                        <li><a href="#">Đồng Nai</a></li>
                                        <li><a href="#">Tiền Giang</a></li>
                                        <li><a href="#">Bình Dương</a></li>
                                        <li><a href="#">Long An</a></li>
                                        <li><a href="#">TP. Hồ Chí Minh</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">GIẢI PHÁP</a>
                            <i class='bx bxs-chevron-down js-arrow arrow '></i>
                            <ul class="js-sub-menu sub-menu">
                                <li><a href="#">Thu gom vỏ hộp giấy tái chế</a></li>
                                <li><a href="#">"Nhựa giá trị thấp" </a></li>
                                <li><a href="#">Khu công nghiệp</a></li>
                                <li><a href="#">Thu hồi pin thải</a></li>
                                <li><a href="#">Xem thêm</a></li>
                            </ul>
                        </li>
                        <li><a href="#">TIN TỨC</a></li>
                        <li><a href="#">THƯ VIỆN</a></li>

                    </ul>

                </div>

                <div class="btn-login">
                    ĐĂNG NHẬP
                </div>
            </div>
        </nav>
        {{-- CONTENT --}}
        @yield('content')
        <div class="footer">
            <div class="footer bg-light pt-4 mt-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Customer Support</h5>
                            <p>Hotline: 1900 54 54 50 (909 VND/min) - (+84)362851122 (Whatsapp, Viber)</p>
                            <h6>Our regional customer & partner services center in Vietnam:</h6>
                            <p>Northern Services Center: 033 8351122</p>
                            <p>Central Services Center: 0902 450585</p>
                            <p>HCMC – Eastern Services Center: 033 8351122</p>
                            <p>Southern Services Center: 0902 912586</p>
                            <p>Email: info@moitruongachau.com</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Visit us</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Development Strategy</a></li>
                                <li><a href="#">Core Values</a></li>
                                <li><a href="#">Company Milestones</a></li>
                                <li><a href="#">Company Profile</a></li>
                                <li><a href="#">Operations</a></li>
                                <li><a href="#">Scraps</a></li>
                                <li><a href="#">Wastes</a></li>
                                <li><a href="#">Recycling</a></li>
                                <li><a href="#">Consulting</a></li>
                                <li><a href="#">Wastewater Treatment</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h5>Follow Us</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Zalo Officials</a></li>
                                <li><a href="#">YouTube</a></li>
                                <li><a href="#">LinkedIn</a></li>
                                <li><a href="#">MTAC+ (iOS)</a></li>
                                <li><a href="#">MTAC+ (Android)</a></li>
                            </ul>
                            <h6>Visitors</h6>
                            <p>Online : 172</p>
                            <p>Visitors : 2877131</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="home/js/nav.js"></script>
</body>



</html>
