<!DOCTYPE html>
<html lang="en">

<head>
  <!-- CSS -->
  <link rel="stylesheet" href="./home/css/base.css">
  <link rel="stylesheet" href="./home/css/style.css">

   <!-- JS -->
  <script src="https://unpkg.com/scrollreveal"></script>
    <script src="home/js/showform.js"></script>

  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" type="image/png" href="./home/img/logo-nhan-dien MTAC - 20.05.2022.png" />
  <title>Môi Trường Á Châu - Đồng hành cùng khách hàng</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <div class="container-content">
        <!-- SUBNAV -->
    <nav style="position: relative; z-index: 2; height: 35px;"
      class="subnav navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid" style="background-color: #f8f9fa;">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Tài khoản
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Cá nhân</a></li>
                <li><a class="dropdown-item" href="#">Khách</a></li>

              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Công cụ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hỗ trợ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Liên hệ</a>
            </li>


          </ul>

          <div class="combo-btn" style="display: flex; ">
            <div class="search-box">
              <i class='bx bx-search'></i>
              <div class="input-box">
                <input type="text" placeholder="Search...">
              </div>
            </div>
            <div id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-language"></i>
                  </a>
                  <ul class="dropdown-menu" style="left: -96px;" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Tiếng Việt</a></li>
                    <li><a class="dropdown-item" href="#">Tiếng Anh</a></li>

                  </ul>
                </li>

              </ul>

            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- MAIN NAV -->
    <nav style="position: relative; z-index: 1;">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fa-solid fa-bars"></i>
      </label>
      <div class="menu">
        <div class="nav-content ">
          <div class="menu-item">TRANG CHỦ</div>
          <div class="menu-item" data-target="#submenu-1">DỰ ÁN</div>
          <div class="menu-item" data-target="#submenu-2">GIẢI PHÁP</div>
          <div class="menu-item" data-target="#submenu-3">TIN TỨC</div>

        </div>
        <div class="btn-user">
          <div class="btn-login" onclick="showPopup()">ĐĂNG NHẬP</div>
          <div class="btn-login"  onclick="showRegister()">ĐĂNG KÝ</div>
        </div>

      </div>  

      </a>
      <div id="submenu-1" class="submenu-container">
        <div class="submenu-left">
          <div class="submenu-item" data-target="#submenu2-1-1">
            Địa điểm
            <div class="icon">
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
          <div class="submenu-item" data-target="#submenu2-1-2">Thu hồi pin thải
            <div class="icon">
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
        </div>
        <div class="submenu-right">
          <div id="submenu2-1-1" class="submenu2">
            <div class="submenu-item">Thừa Thiên Huế</div>
            <div class="submenu-item">Đồng Nai</div>
            <div class="submenu-item">Tiền Giang</div>
            <div class="submenu-item">Long An</div>
            <div class="submenu-item">Bình Dương</div>
            <div class="submenu-item">Hồ Chí Minh</div>
          </div>
          <div id="submenu2-1-2" class="submenu2">
            <div class="submenu-item">1.2.1</div>
            <div class="submenu-item">1.2.2</div>
            <div class="submenu-item">1.2.3</div>
          </div>
        </div>
      </div>
      <div id="submenu-2" class="submenu-container">
        <div class="submenu-left">
          <div class="submenu-item" data-target="#submenu2-2-1">
            2.1
            <div class="icon">
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
          <div class="submenu-item" data-target="#submenu2-2-2">2.2
            <div class="icon">
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
        </div>
        <div class="submenu-right">
          <div id="submenu2-2-1" class="submenu2">
            <div class="submenu-item">2.1.1</div>
            <div class="submenu-item">2.1.2</div>
            <div class="submenu-item">2.1.3</div>
          </div>
          <div id="submenu2-2-2" class="submenu2">
            <div class="submenu-item">2.2.1</div>
            <div class="submenu-item">2.2.2</div>
            <div class="submenu-item">2.2.3</div>
          </div>
        </div>
      </div>
      <div id="submenu-3" class="submenu-container">
        <div class="submenu-left">
          <div class="submenu-item" data-target="#submenu3-2-1">3.1
            <div class="icon">
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
          <div class="submenu-item" data-target="#submenu3-2-2">3.2
            <div class="icon">
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
        </div>
        <div class="submenu-right">
          <div id="submenu3-2-1" class="submenu2">
            <div class="submenu-item">3.1.1</div>
            <div class="submenu-item">3.1.2</div>
            <div class="submenu-item">3.1.3</div>
          </div>
          <div id="submenu3-2-2" class="submenu2">
            <div class="submenu-item">3.2.1</div>
            <div class="submenu-item">3.2.2</div>
            <div class="submenu-item">3.2.3</div>
          </div>
        </div>
      </div>
    </nav>
    <!-- POPUP FORM LOGIN -->
    <div id="popupForm" class="popup">
      <div class="popup-content">
        <span class="close" onclick="hidePopup()">&times;</span>
        <form class="popup-form">
          <div class="header-form">
            Đăng nhập
          </div>
          <div class="flex-column">
           
          </div>
          <div class="inputForm">
            
             
          
            <input type="text" class="input" placeholder="Số điện thoại hoặc mã số thuế" required>
          </div>

          <div class="flex-column">
          
          </div>
          <div class="inputForm">
           
            <input type="password" class="input" placeholder="Nhập mật khẩu" required>

          </div>

          <div class="flex-row">
            <div class="checked">
              <input type="checkbox" style="margin-right: 10px;">
              <label>Ghi nhớ đăng nhập </label>
            </div>
            <span class="span">Quên mật khẩu?</span>
          </div>
          <button class="button-submit">Đăng nhập</button>

          <p class="p">Chưa có tài khoản?<span style="cursor: pointer; font-size: 20px; font-weight: 500; margin-left: 5px;" class="login-link" onclick="showRegister()">Đăng ký</span></p>
          <p class=" line">Hoặc Đăng nhập với</p>

          <div class="btn-social">
            <button class="btn-google">
              <img src="home/icon/google_icon.png" alt="" srcset="">
            </button>
            <button class="btn-apple">
              <img src="home/icon/Apple_icon.png" alt="" srcset="">

            </button>
          </div>
        </form>
      </div>
    </div>
      <!-- POPUP FORM REGISTER -->
      <div id="popupFormRegister" class="popup">
        <div class="popup-content">
            <span class="close" onclick="hideRegister()">&times;</span>
            <form class="popup-form">
                <div class="header-form">Đăng ký</div>
                <div class="inputForm">
                    <input type="text" class="input" placeholder="Số điện thoại hoặc mã số thuế" required>
                </div>
                <div class="inputForm"style="margin-top: 10px;">
                    <input type="password" class="input" placeholder="Nhập mật khẩu" required>
                </div>
                <div class="inputForm" style="margin-top: 10px;">
                  <input type="password" class="input" placeholder="Nhập lại mật khẩu" required>
              </div>
                <button class="button-submit">Đăng ký</button>
                <p class="p">Đã có tài khoản? <span  style="cursor: pointer; font-size: 20px; font-weight: 500; margin-left: 5px;" class="login-link" onclick="showPopup()">Đăng nhập</span></p>
                <p class="line">Hoặc Đăng nhập với</p>
                <div class="btn-social">
                    <button class="btn-google">
                        <img src="home/icon/google_icon.png" alt="">
                    </button>
                    <button class="btn-apple">
                        <img src="home/icon/Apple_icon.png" alt="">
                    </button>
                </div>
            </form>
        </div>
    </div>
   
    <script>
      $(document).ready(function () {
        $('.submenu-container').hide();

        $('.menu-item').mouseenter(function () {
          var target = $(this).data('target');
          $(target).stop(true, true).fadeIn(200); // Hiển thị submenu-container của menu-item này
        });

        $('.menu-item').mouseleave(function () {
          var target = $(this).data('target');
          setTimeout(function () {
            if (!$(target).is(':hover')) {
              $(target).stop(true, true).fadeOut(200); // Ẩn submenu-container nếu không hover vào target
            }
          }, 200);
        });

        $('.submenu-container').mouseleave(function () {
          $(this).stop(true, true).slideDown(200); // Ẩn submenu-container khi rời chuột ra khỏi nó
          $(this).hide();
        });

        $('.submenu-left .submenu-item').mouseenter(function () {
          var target = $(this).data('target');
          $('.submenu2').not(target).stop(true, true).fadeOut(200); // Ẩn tất cả các submenu2 khác
          $(target).stop(true, true).fadeIn(200); // Hiển thị submenu2 của menu-item này
        });

        $('.submenu-left .submenu-item').mouseleave(function () {
          var target = $(this).data('target');
          setTimeout(function () {
            if (!$(target).is(':hover')) {
              $(target).stop(true, true).fadeOut(200); // Ẩn submenu2 nếu không hover vào target
            }
          }, 200);
        });

        $('.submenu2').mouseleave(function () {
          $(this).stop(true, true).fadeOut(200); // Ẩn submenu2 khi rời chuột ra khỏi nó
        });
      });

    </script>
    
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
  <script src="./home/js/slider.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>



</html>