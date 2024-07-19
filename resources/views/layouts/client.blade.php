<!DOCTYPE html>
<html lang="en">

<head>
  <!-- CSS -->
  <link rel="stylesheet" href="./home/css/base.css">
  <link rel="stylesheet" href="./home/css/style.css">

   <!-- JS -->
  <script src="https://unpkg.com/scrollreveal"></script>

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
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
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
          <div class="btn-login">ĐĂNG KÝ</div>
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
     <!-- POPUP FORM -->
    <div id="popupForm" class="popup">
      <div class="popup-content">
        <span class="close" onclick="hidePopup()">&times;</span>
        <form class="popup-form">
          <div class="header-form">
            Đăng nhập
          </div>
          <div class="flex-column">
            <label>Số điện thoại </label>
          </div>
          <div class="inputForm">
            
              <svg class="" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 512 512" y="0" x="0" height="20" width="20" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg"><g><path class="" data-original="#000000" fill="#595959" d="M256 0c-74.439 0-135 60.561-135 135s60.561 135 135 135 135-60.561 135-135S330.439 0 256 0zM423.966 358.195C387.006 320.667 338.009 300 286 300h-60c-52.008 0-101.006 20.667-137.966 58.195C51.255 395.539 31 444.833 31 497c0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15 0-52.167-20.255-101.461-57.034-138.805z"></path></g></svg>
          
            <input type="text" class="input" placeholder="Số điện thoại hoặc mã số thuế" required>
          </div>

          <div class="flex-column">
            <label>Mật khẩu </label>
          </div>
          <div class="inputForm">
            <svg height="20" viewBox="-64 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg">
              <path
                d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0">
              </path>
              <path
                d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0">
              </path>
            </svg>
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
          <p class="p">Chưa có tài khoản? <span class="span">Đăng ký</span>

          </p>
          <p class="p line">Hoặc Đăng nhập bằng</p>

          <div class="flex-row">
            <button class="btn google" style="display: flex; align-items: ce;">
              <svg version="1.1" width="20" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path style="fill:#FBBB00;" d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
	c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
	C103.821,274.792,107.225,292.797,113.47,309.408z"></path>
                <path style="fill:#518EF8;" d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
	c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
	c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z"></path>
                <path style="fill:#28B446;" d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
	c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
	c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"></path>
                <path style="fill:#F14336;" d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
	c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
	C318.115,0,375.068,22.126,419.404,58.936z"></path>

              </svg>

              Google

            </button>
            <button class="btn apple" style="display: flex; align-items: center;">
              <svg version="1.1" height="20" width="20" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 22.773 22.773"
                style="enable-background:new 0 0 22.773 22.773;" xml:space="preserve">
                <g>
                  <g>
                    <path
                      d="M15.769,0c0.053,0,0.106,0,0.162,0c0.13,1.606-0.483,2.806-1.228,3.675c-0.731,0.863-1.732,1.7-3.351,1.573 c-0.108-1.583,0.506-2.694,1.25-3.561C13.292,0.879,14.557,0.16,15.769,0z">
                    </path>
                    <path
                      d="M20.67,16.716c0,0.016,0,0.03,0,0.045c-0.455,1.378-1.104,2.559-1.896,3.655c-0.723,0.995-1.609,2.334-3.191,2.334 c-1.367,0-2.275-0.879-3.676-0.903c-1.482-0.024-2.297,0.735-3.652,0.926c-0.155,0-0.31,0-0.462,0 c-0.995-0.144-1.798-0.932-2.383-1.642c-1.725-2.098-3.058-4.808-3.306-8.276c0-0.34,0-0.679,0-1.019 c0.105-2.482,1.311-4.5,2.914-5.478c0.846-0.52,2.009-0.963,3.304-0.765c0.555,0.086,1.122,0.276,1.619,0.464 c0.471,0.181,1.06,0.502,1.618,0.485c0.378-0.011,0.754-0.208,1.135-0.347c1.116-0.403,2.21-0.865,3.652-0.648 c1.733,0.262,2.963,1.032,3.723,2.22c-1.466,0.933-2.625,2.339-2.427,4.74C17.818,14.688,19.086,15.964,20.67,16.716z">
                    </path>
                  </g>
                </g>
              </svg>

              Apple

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
      <script>
      function showPopup() {
        document.getElementById("popupForm").style.display = "block";
        document.body.classList.add("no-scroll");
      }

      function hidePopup() {
        document.getElementById("popupForm").style.display = "none";
        document.body.classList.remove("no-scroll");
      }

      // Thêm sự kiện click cho nút đóng popup
      document.querySelector(".close").addEventListener("click", hidePopup);

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