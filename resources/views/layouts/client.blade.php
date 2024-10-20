<!DOCTYPE html>
<html lang="en">

<head>
  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('/home/css/base.css') }}">
  <link rel="stylesheet" href="{{ asset('/home/css/style.css') }}">

 


   <!-- JS -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="{{asset('home/js/showform.js')}}"></script>

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
    <nav style="position: relative; z-index: 16; height: 35px;"
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
    <nav style="position: relative; z-index: 15;">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fa-solid fa-bars"></i>
      </label>
      <div class="menu">
        <div class="nav-content ">
          <a href="http://127.0.0.1:8000/" class="menu-item">TRANG CHỦ</a>
          <a href="http://127.0.0.1:8000/duan" class="menu-item" data-target="#submenu-1">DỰ ÁN</a>
          <a href="http://127.0.0.1:8000/tintuc" class="menu-item" data-target="#submenu-3">TIN TỨC</a>
          <a href="http://127.0.0.1:8000/bao-gia" class="menu-item" data-target="#submenu-4">BÁO GIÁ</a>
          <a href="http://127.0.0.1:8000/thu-vien" class="menu-item" data-target="#submenu-5">THƯ VIỆN</a>

          {{-- <div class="menu-item" data-target="#submenu-2">THƯ VIỆN</div> --}}

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
          <a href="http://127.0.0.1:8000/duan/phan-loai" class="submenu-item" data-target="#submenu2-1-2">Thu hồi pin thải
            <div class="icon">
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </a>
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
      <div id="submenu-4" class="submenu-container">
        <div class="submenu-left">
          <div class="submenu-item" data-target="#submenu4-2-1">Xử lý chất thải
            <div class="icon">
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
          <div class="submenu-item" data-target="#submenu4-2-2">Hồ sơ môi trường
            <div class="icon">
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
          <div class="submenu-item" data-target="#submenu4-2-2">Nhóm cồng kềnh
            <div class="icon">
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
        </div>
        <div class="submenu-right">
          <div id="submenu4-2-1" class="submenu2">
            <div class="submenu-item" onclick="openFormXLCHT600()">Xử lý chất thải nguy hại nhỏ bằng 600KG/Năm</div>
            <div class="submenu-item" onclick="openFormXLCHT_600()">Xử lý chất thải nguy hại lớn bằng 600KG/Năm</div>
            <div class="submenu-item" onclick="openFormCTTMM2000()">Xử lý Chất thải ngành may mặc nhỏ hơn 2000KG</div>
            <div class="submenu-item" onclick="openFormCTTMM_2000()">Xử lý Chất thải ngành may mặc lớn hơn 2000KG</div>
          </div>
          <div id="submenu4-2-2" class="submenu2">
            <div class="submenu-item" onclick="openFormGPMT()">Giấy phép môi trường</div>
            <div class="submenu-item" onclick="openFormDGTD()">Đánh giá tác động môi trường</div>
            <div class="submenu-item" onclick="openFormBCCTBVMT2022()">Báo cáo công tác bảo vệ môi trường 2022</div>
          </div>
           <div id="submenu4-2-3" class="submenu2">
            <div class="submenu-item" onclick="openFormCTCK2000()">Xử lý chất thải Cồng Kềnh nhỏ hơn 2000KG</div>
            <div class="submenu-item" onclick="openFormCTCK_2000()">Xử lý chất thải Cồng Kềnh lớn hơn 2000KG</div>
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
            <!-- POPUP FORM XLCT nguy hại <600kg -->
              <div class="form-popup" id="myForm">
                <div class="popup-content--quotation">
                  <span class="close" onclick="closeFormXLCHT600()">&times;</span>
                    <div class="row">
                        <div class="col-md-5">
                          <form class="popup-form">
                            <div class="header-form" style="color:#000">
                              Xử lý chất thải nguy hại nhỏ bằng 600KG/Năm
                            </div>
                            <div class="flex-column">
                              <label style="color:#000" for="dia-diem">Địa điểm phát sinh chất thải *</label>
                            </div>
                            <div class="inputForm">
                              <input type="text" id="dia-diem" class="input" placeholder="Địa điểm phát sinh chất thải" required onfocus="showSuggestions(this)" onblur="hideSuggestions(this)">
                              <div class="suggestions" id="dia-diem-suggestions">
                                Trường này chỉ nơi tạo ra chất thải
                              </div>
                            </div>
                            <div class="flex-column">
                              <label style="color:#000" for="so-chuyen">Số chuyến vận chuyển trong 1 năm *</label>
                            </div>
                            <div class="inputForm">
                              <input type="text" id="so-chuyen" class="input" placeholder="Nhập vào số chuyến vận chuyển trong 1 năm" required onfocus="showSuggestions(this)" onblur="hideSuggestions(this)">
                              <div class="suggestions" id="so-chuyen-suggestions">
                                Trường này chỉ số chuyến vận chuyển
                              </div>
                            </div>
                            <div class="flex-column">
                              <label style="color:#000" for="chat-thai-thong-thuong">Chất thải thông thường *</label>
                            </div>
                            <div class="inputForm">
                              <input type="text" id="chat-thai-thong-thuong" class="input" placeholder="Nhập theo khối lượng (kg)" required onfocus="showSuggestions(this)" onblur="hideSuggestions(this)">
                              <div class="suggestions" id="chat-thai-thong-thuong-suggestions">
                                Trường này chỉ khối lượng chất thải thông thường
                              </div>
                            </div>
                            <div class="flex-column">
                              <label style="color:#000" for="chat-thai-bong-den">Chất thải bóng đèn (nếu có)</label>
                            </div>
                            <div class="inputForm">
                              <input type="text" id="chat-thai-bong-den" class="input" placeholder="Nhập theo khối lượng (kg)" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)">
                              <div class="suggestions" id="chat-thai-bong-den-suggestions">
                                Trường này chỉ khối lượng chất thải bóng đèn
                              </div>
                            </div>
                            <div class="flex-column">
                              <label style="color:#000" for="chat-thai-ma-13">Chất thải mã 13 (nếu có)</label>
                            </div>
                            <div class="inputForm">
                              <input type="text" id="chat-thai-ma-13" class="input" placeholder="Nhập theo khối lượng (kg)" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)">
                              <div class="suggestions" id="chat-thai-ma-13-suggestions">
                                Chất thải từ nghành y tế và thú y (trừ chất thải sinh hoạt từ nghành này)
                                Chất thải lây nhiễm (bao gồm cả chất thải sắt nhọn)
                                Chất thải y tế
                                Dược phẩm gây độc tế bào (cytotoxic và cytostatic) thải
                              </div>
                            </div>
                            <div class="flex-column">
                              <label style="color:#000" for="chat-thai-ma-14">Chất thải mã 14 (nếu có)</label>
                            </div>
                            <div class="inputForm">
                              <input type="text" id="chat-thai-ma-14" class="input" placeholder="Nhập theo khối lượng (kg)" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)">
                              <div class="suggestions" id="chat-thai-ma-14-suggestions">
                                Chất thải từ nghành nông nghiệp
                                Bao bì hóa chất bảo vệ thực vật
                                Bao bì mềm thải (không chứa hoá chất nông nghiệp có gốc halogen hữu cơ)
                                Bao bì cứng thải (không chứa hoá chất nông nghiệp có gốc halogen hữu cơ)
                                Chất thải có dư lượng hóa chất diệt nấm
                                Chất thải có dư lượng hóa chất trừ sâu và các loại gây hại (chuột, gián, muỗi…)
                              </div>
                            </div>
                            <button class="button-submit">Tra cứu giá xử lý</button>
                          </form>
                        </div>
                        <div class="col-md-7"></div>
                    </div>
                </div>
              </div>
            <!-- POPUP FORM XLCT nguy hại >600kg -->
            <div class="form-popup" id="xlct-600">
                    <div class="popup-content--quotation">
                      <span class="close" onclick="closeFormXLCHT_600()">&times;</span>
                      <div class="row">
                        <div class="col-md-5">
                        <form class="popup-form">
                            <div class="header-form" style="color:#000">
                              Xử lý chất thải nguy hại lớn hơn 600KG/Năm
                            </div>
                            <div class="flex-column">
                             <label style="color:#000" for="">Địa điểm phát sinh chất thải *</label>
                            </div>
                            <div class="inputForm">
                              <input id="dia-diem" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Địa điểm phát sinh chất thải" required>
                              <div class="suggestions" id="dia-diem-suggestions">
                                Trường này chỉ nơi tạo ra chất thải
                              </div>
                            </div>
                  
                            <div class="flex-column">
                                <label style="color:#000" for="">Tần xuất vận chuyển *</label>
                            </div>
                            <div class="inputForm">                      
                              <input id="tan-xuat" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Mời bạn chọn tần xuất " required>                 
                              <div class="suggestions" id="tan-xuat-suggestions">
                                Trường này chỉ số lần vận chuyển khoảng bao nhiêu tháng/lần
                              </div>
                            </div>
                            <div class="flex-column">
                                <label style="color:#000" for="">Khối lượng chất thải trong 1 năm *</label>
                            </div>
                            <div class="inputForm">                      
                              <input id="khoi-luong" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Mời bạn chọn khối lượng (kg)" required>                 
                              <div class="suggestions" id="khoi-luong-suggestions">
                                Trường này chỉ khối lượng chất thải sinh ra trong 1 năm
                              </div>
                            </div>
                            <div class="flex-column">
                                <label style="color:#000" for="">Loại chất thải mà bạn phát sinh trong năm *</label>
                            </div>
                            <div class="inputForm">                      
                              <input id="loai-ct" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Chọn loại chất thải" required>          
                              <div class="suggestions" id="loai-ct-suggestions">
                                Trường này chỉ loại chất thải phát sinh trong năm
                              </div>       
                            </div>

                            <button class="button-submit">Tra cứu giá xử lý</button>
                  
                            
                          </form>
                      </div>
                      <div class="col-md-7"></div>
                      </div>
                    </div>
            </div>
            <!-- POPUP FORM XLCT NGÀNH MAY MẶC <2000 -->
            <div class="form-popup" id="ctmm2000">
                <div class="popup-content--quotation">
                  <span class="close" onclick="closeFormCTTMM2000()">&times;</span>
                  <div class="row">
                     <div class="col-md-5">
                    <form class="popup-form">
                        <div class="header-form" style="color:#000">
                          Xử lý chất ngành may mặc nhỏ hơn 200KG
                        </div>
                        <div class="flex-column">
                         <label style="color:#000" for="">Địa điểm phát sinh chất thải *</label>
                        </div>
                        <div class="inputForm">
                          <input id="dia-diem" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Địa điểm phát sinh chất thải" required>
                          <div class="suggestions" id="dia-diem-suggestions">
                            Trường này chỉ nơi tạo ra chất thải
                          </div>
                        </div>
              
                        <div class="flex-column">
                            <label style="color:#000" for="">Tần xuất vận chuyển trong 1 tháng *</label>
                        </div>
                        <div class="inputForm">                      
                          <input id="tan-xuat" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Mời bạn nhập tần xuất " required>                 
                          <div class="suggestions" id="tan-xuat-suggestions">
                            Trường này số lần vận chuyển trên tháng
                          </div>
                        </div>
                        <div class="flex-column">
                            <label style="color:#000" for="">Khối lượng chất thải chuyển giao trong 1 chuyến *</label>
                        </div>
                        <div class="inputForm">                      
                          <input id="khoi-luong" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Mời bạn nhập khối lượng (kg)" required>                 
                          <div class="suggestions" id="khoi-luong-suggestions">
                            Trường này chỉ tổng khối lượng chất thải chuyển giao trong 1 chuyến
                          </div>
                        </div>
                     

                        <button class="button-submit">Tra cứu giá xử lý</button>
              
                        
                      </form>
                  </div>
                  <div class="col-md-7"></div>
                  </div>
                </div>
            </div>
            <!-- POPUP FORM XLCT NGÀNH MAY MẶC <2000 -->
            <div class="form-popup" id="ctmm-2000">
                    <div class="popup-content--quotation">
                      <span class="close" onclick="closeFormCTTMM_2000()">&times;</span>
                      <div class="row">
                        <div class="col-md-5">
                        <form class="popup-form">
                            <div class="header-form" style="color:#000">
                              Xử lý chất ngành may mặc lớn hơn 200KG
                            </div>
                            <div class="flex-column">
                             <label style="color:#000" for="">Địa điểm phát sinh chất thải *</label>
                            </div>
                            <div class="inputForm">
                              <input id="dia-diem" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Chọn địa chỉ" required>
                              <div class="suggestions" id="dia-diem-suggestions">
                                Trường này chỉ nơi tạo ra chất thải
                              </div>  
                            </div>
                  
                            <div class="flex-column">
                                <label style="color:#000" for="">Tần xuất vận chuyển trong 1 tháng *</label>
                            </div>
                            <div class="inputForm">                      
                              <input id="tan-xuat" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Mời bạn nhập tần xuất " required>                 
                              <div class="suggestions" id="tan-xuat-suggestions">
                                Trường này số lần vận chuyển trên tháng
                              </div>
                            </div>
                            <div class="flex-column">
                                <label style="color:#000" for="">Tổng khối lượng chất thải trong 1 tháng *</label>
                            </div>
                            <div class="inputForm">                      
                              <input id="khoi-luong" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Mời bạn chọn khối lượng (kg)" required>                 
                              <div class="suggestions" id="khoi-luong-suggestions">
                                Trường này chỉ tổng khối lượng chất thải phát sinh trong 1 tháng
                              </div>
                            </div>
                         
    
                            <button class="button-submit">Tra cứu giá xử lý</button>
                  
                            
                          </form>
                      </div>
                      <div class="col-md-7"></div>
                      </div>
                    </div>
            </div>
            <!-- POPUP FORM GIẤY PHÉP MÔI TRƯỜNG -->
            <div class="form-popup" id="gpmt">
              <div class="popup-content--quotation">
                  <span class="close" onclick="closeFormGPMT()">&times;</span>
                  <div class="row">
                      <div class="col-md-5">
                          <form class="popup-form" onsubmit="handleFormSubmit(event)">
                              <div style="color:#000" class="header-form">
                                  Giấy phép môi trường
                              </div>
                              <div class="flex-column">
                                  <label style="color:#000" for="">Địa điểm phát sinh chất thải *</label>
                              </div>
                              <div class="inputForm">
                                  <input id="dia-diem" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Chọn địa chỉ" required>
                                  <div class="suggestions" id="dia-diem-suggestions">
                                      Trường này chỉ nơi tạo ra chất thải
                                  </div>
                              </div>
                              <div class="flex-column">
                                  <label style="color:#000"  for="">Cơ quan cấp hồ sơ</label>
                              </div>
                              <div class="inputForm">
                                  <input id="co-quan" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Chọn cơ quan " required>
                                  <div class="suggestions" id="co-quan-suggestions">
                                      Trường này chỉ nơi cấp giấy phép, hồ sơ
                                  </div>
                              </div>
                              <button class="button-submit">Tra cứu giá xử lý</button>
                          </form>
                      </div>
                      <div class="col-md-7 hidden" id="result-column">
                          <div class="content-01">
                              <div class="row-content">
                                  <div class="header-lable">Kết quả tra cứu: </div>
                                  <div class="text-ctn">194.990.000 đ/Giấy phép</div>
                              </div>
                              <div class="row-content">
                                  <div class="header-lable">Danh mục: </div>
                                  <div class="text-ctn">Giấy phép môi trường</div>
                              </div>
                              <div class="row-content">
                                  <div class="header-lable">Địa điểm phát sinh: </div>
                                  <div class="text-ctn">TP Hồ Chí Minh</div>
                              </div>
                              <div class="row-content">
                                  <div class="header-lable">Cơ quan cấp hồ sơ: </div>
                                  <div class="text-ctn"><strong>Sở Tài Nguyên Môi Trường</strong></div>
                              </div>
                          </div>
                          <div class="content-01">
                              <div class="header-noted" style="color: #086db5;"><strong>Kết quả thực hiện</strong></div>
                              <div class="row-content" style="margin-top: 20px;">
                                  <div class="header-lable" style="color: #000;"><strong>Sau khi đồng ý sử dụng dịch vụ:</strong></div>
                                  <div class="text-ctn">Hoàn tất hợp đồng đầy đủ 2 chữ ký giữa khách hàng và MTAC hoặc báo giá có giá trị tương đương</div>
                              </div>
                          </div>
                          <div class="content-01">
                              <div style="color:#000" class="header-noted"><strong>Ghi chú</strong></div>
                              <p style="color:#000">- Đơn giá chưa bao gồm lệ phí thẩm định Cơ quan nhà nước</p>
                              <p style="color:#000">- Đơn giá chưa bao gồm VAT 8%.</p>
                              <p style="color:#000">- Phương thức thanh toán (Thanh toán 3 lần):</p>
                              <p style="color:#000">+ Lần thứ nhất: 50% sau khi ký</p>
                              <p style="color:#000">+ Lần thứ hai: 30% sau khi nhận được bộ hồ sơ để khách hàng ký</p>
                              <p style="color:#000">+ Lần thứ ba: 20% sau khi nhận kết quả bản photo</p>
                          </div>
                          <div class="btn-continute">
                              Gửi yêu cầu xử lý
                          </div>
                      </div>
                  </div>
              </div>
            </div>

            <!-- POPUP FORM ĐÁNH GIÁ TÁC ĐỘNG MÔI TRƯỜNG -->
            <div class="form-popup" id="dgtd">
                <div class="popup-content--quotation">
                  <span class="close" onclick="closeFormDGTD()">&times;</span>
                  <div class="row">
                    <div class="col-md-5">
                    <form class="popup-form">
                        <div class="header-form" style="color:#000">
                          Đánh giá tác động môi trường
                        </div>
                        <div class="flex-column">
                         <label style="color:#000" for="">Địa điểm phát sinh chất thải *</label>
                        </div>
                        <div class="inputForm">
                          <input id="dia-diem" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Chọn địa chỉ" required>
                          <div class="suggestions" id="dia-diem-suggestions">
                            Trường này chỉ nơi tạo ra chất thải
                          </div>
                        </div>
              
                        <div class="flex-column">
                            <label style="color:#000" for="">Cơ quan cấp hồ sơ</label>
                        </div>
                        <div class="inputForm">                      
                          <input id="co-quan" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Chọn cơ quan " required>                 
                          <div class="suggestions" id="co-quan-suggestions">
                            Trường này chỉ nơi cấp giấy phép, hồ sơ
                          </div>
                        </div>
                    
                        <button class="button-submit">Tra cứu giá xử lý</button>
              
                        
                      </form>
                  </div>
                  <div class="col-md-7" ></div>
                  </div>
                </div>
            </div>
            <!-- POPUP FORM BÁO CÁO CÔNG TÁC BẢO VỆ MÔI TRƯỜNG 2022 -->
            <div class="form-popup" id="bcctbvm2022">
                <div class="popup-content--quotation">
                  <span class="close" onclick="closeFormBCCTBVMT2022()">&times;</span>
                  <div class="row">
                     <div class="col-md-5">
                    <form class="popup-form">
                        <div class="header-form" style="color:#000">
                          Báo cáo công tác bảo vệ môi trường 2022
                        </div>
                        <div class="flex-column">
                         <label style="color:#000" for="">Địa điểm phát sinh chất thải *</label>
                        </div>
                        <div class="inputForm">
                          <input id="dia-diem" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Chọn địa chỉ" required>
                          <div class="suggestions" id="dia-diem-suggestions">
                            Trường này chỉ nơi tạo ra chất thải
                          </div>
                        </div>
              
                        <div class="flex-column">
                            <label style="color:#000" for="">Hạng mục thực hiện</label>
                        </div>
                        <div class="inputForm">                      
                          <input id="hang-muc" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Chọn hạng mục" required>                 
                          <div class="suggestions" id="hang-muc-suggestions">
                            Trường này chỉ các hạng mục thực hiện (viết nộp, trọn gói...)
                          </div>
                        </div>
                    
                        <button class="button-submit">Tra cứu giá xử lý</button>
              
                        
                      </form>
                  </div>
                  <div class="col-md-7" ></div>
                  </div>
                </div>
            </div>

            <!-- POPUP FORM XỬ LÝ CHẤT THẢI CỒNG KỀNH NHỎ HƠN 2000KG -->
            <div class="form-popup" id="xlctck2000">
                <div class="popup-content--quotation">
                  <span class="close" onclick="closeFormCTCK2000()">&times;</span>
                    <div class="row">
                      <div class="col-md-5">
                    <form class="popup-form">
                        <div class="header-form" style="color:#000">
                          Xử lý chất thải Cồng Kềnh nhỏ hơn 2000KG
                        </div>
                        <div class="flex-column">
                         <label style="color:#000" for="">Địa điểm phát sinh chất thải *</label>
                        </div>
                        <div class="inputForm">
                          <input id="dia-diem" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Chọn địa chỉ" required>
                          <div class="suggestions" id="dia-diem-suggestions">
                            Trường này chỉ nơi tạo ra chất thải
                          </div>
                        </div>
              
                        <div class="flex-column">
                            <label style="color:#000" for="">Tần xuất vận chuyển trong 1 tháng *</label>
                        </div>
                        <div class="inputForm">                      
                          <input id="tan-xuat" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Tần xuất vận chuyển" required>                 
                          <div class="suggestions" id="tan-xuat-suggestions">
                            Trường này chỉ số lần vận chuyển trong 1 tháng
                          </div>
                        </div>
                        <div class="flex-column">
                            <label style="color:#000" for="">Khối lượng chất thải chuyển giao trong 1 chuyến *</label>
                        </div>
                        <div class="inputForm">                      
                          <input id="khoi-luong" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Nhập khối lượng (kg)" required>                 
                          <div class="suggestions" id="khoi-luong-suggestions">
                            Trường này chỉ tổng khối lượng chuyển giao trong 1 chuyến
                          </div>s
                        </div>
                    
                        <button class="button-submit">Tra cứu giá xử lý</button>
              
                        
                      </form>
                  </div>
                  <div class="col-md-7" ></div>
                    </div>
                </div>
            </div>

             <!-- POPUP FORM XỬ LÝ CHẤT THẢI CỒNG KỀNH LỚN HƠN 2000KG -->
             <div class="form-popup" id="xlctck-2000">
                <div class="popup-content--quotation">
                  <span class="close" onclick="closeFormCTCK_2000()">&times;</span>
                  <div class="row">
                      <div class="col-md-5">
                    <form class="popup-form">
                        <div class="header-form" style="color:#000">
                          Xử lý chất thải Cồng Kềnh lớn hơn 2000KG
                        </div>
                        <div class="flex-column">
                         <label style="color:#000" for="">Địa điểm phát sinh chất thải *</label>
                        </div>
                        <div class="inputForm">
                          <input id="dia-diem" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Chọn địa chỉ" required>
                          <div class="suggestions" id="dia-diem-suggestions">
                            Trường này chỉ nơi tạo ra chất thải
                          </div>
                        </div>
                        <div class="flex-column">
                            <label style="color:#000" for="">Tổng khối lượng chất thải trong 1 tháng *</label>
                        </div>
                        <div class="inputForm">                      
                          <input id="khoi-luong" onfocus="showSuggestions(this)" onblur="hideSuggestions(this)" type="text" class="input" placeholder="Nhập khối lượng (kg)" required>                 
                          <div class="suggestions" id="khoi-luong-suggestions">
                            Trường này chỉ khối lượng chất thải trong 1 tháng
                          </div>
                        </div>
                    
                        <button class="button-submit">Tra cứu giá xử lý</button>
              
                        
                      </form>
                  </div>
                  <div class="col-md-7" ></div>
                  </div>
                </div>
            </div>
            <script>
              function showSuggestions(input) {
              const suggestionsBox = input.nextElementSibling;
              suggestionsBox.style.display = 'block';
            }
            
            function hideSuggestions(input) {
              const suggestionsBox = input.nextElementSibling;
              setTimeout(() => {
                suggestionsBox.style.display = 'none';
              }, 200); 
            }
            
            </script> 
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
  <script src="{{ asset('./home/js/slider.js') }}"></script>
  <script src="{{ asset('./home/js/timeline.js') }}"></script>
  <script src="{{asset('./home/dflip/js/dflip.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>



</html>