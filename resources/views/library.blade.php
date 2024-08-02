@extends('layouts.client')
@section('content')
     
    <div class="body">
      <div class="row">
        <div class="container-header">
          <img width="1900px" height="550px" src="home/img/lib.png" alt="hinh-anh-doi-tac">
        </div>
      </div>
      <div class="row">
        <div class="menu-header">
          <a href="#" class="header-content">Tất cả</a>
          <a href="#" class="header-content">Hồ sơ năng lực</a>
          <a href="#" class="header-content">Hồ sơ đối tác</a>
          <a href="#" class="header-content">Tài liệu môi trường</a>
          <a href="#" class="header-content">Tài liệu hướng dẫn QLMT</a>
          <a href="http://127.0.0.1:8000/thu-vien/van-ban-quy-pham-phap-luat" class="header-content">Văn bản quy phạm pháp luật</a>
        </div>
        <select class="dropdown-menu--hidden" onchange="location = this.value;">
          <option value="#">Tất cả</option>
          <option value="#">Hồ sơ năng lực</option>
          <option value="#">Hồ sơ đối tác</option>
          <option value="#">Tài liệu môi trường</option>
          <option value="#">Tài liệu hướng dẫn QLMT</option>
          <option value="http://127.0.0.1:8000/thu-vien/van-ban-quy-pham-phap-luat">Văn bản quy phạm pháp luật</option>
        </select>
      </div>
      

      <div class="row" style="display: flex; justify-content: center;">
        <div class="tools-header">
          <form class="form">
            <button>
                <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
                    <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
            <input class="input" placeholder="Nhập từ khóa, số liệu văn bản" type="text">
            <button class="reset" type="reset">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </form>
          <div class="menu-dropdown--tools">
            <div class="item">
              <a href="#" class="link">
                <span> Lĩnh vực </span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 0a256 256 0 1 0 0 512A256 256 0 1 0 256 0zM135 241c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l87 87 87-87c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L273 345c-9.4 9.4-24.6 9.4-33.9 0L135 241z"/></svg>
              </a>
              <div class="submenu">
                <div class="submenu-item--dropdown">
                  <a href="#" class="submenu-link"> Thừa Thiên Huế </a>
                </div>
                <div class="submenu-item--dropdown">
                  <a href="#" class="submenu-link"> Đồng Nai </a>
                </div>
                <div class="submenu-item--dropdown">
                  <a href="#" class="submenu-link"> Tiền Giang </a>
                </div>
                <div class="submenu-item--dropdown">
                  <a href="#" class="submenu-link"> Long An </a>
                </div>
                <div class="submenu-item--dropdown">
                  <a href="#" class="submenu-link"> Bình Dương </a>
                </div>
                <div class="submenu-item--dropdown">
                  <a href="#" class="submenu-link"> Hồ Chí Minh </a>
                </div>
              </div>
            </div>
          </div>
          <div class="button-search">Tìm kiếm</div>
        </div>
      </div>
      <div class="row">
        <div class="card-container">
          <div class="card card-1">
            <div class="card-img">
              <img src="https://via.placeholder.com/400x450" alt="" srcset="">
            </div>
            <a href="http://127.0.0.1:8000/thu-vien/chi-tiet" class="card-link">
              <div class="card-img-hovered"></div>
            </a>
            <div class="card-info--lib">

              <h1 class="card-title--lib">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla architecto provident sit officia, hic ipsa, deleniti quia porro eaque tempore aut ut non, ducimus maxime sapiente earum nostrum sed sequi.</h1>
             
            </div>
          </div>
          
          <div class="card card-2">
            <div class="card-img">
              <img src="https://via.placeholder.com/400x450" alt="" srcset="">
            </div>
            <a href="http://127.0.0.1:8000/thu-vien/chi-tiet" class="card-link">
              <div class="card-img-hovered"></div>
            </a>
            <div class="card-info--lib">

              <h1 class="card-title--lib">Samsung laptops is exploding again</h1>
             
            </div>
          </div>
          <div class="card card-3">
            <div class="card-img">
              <img src="https://via.placeholder.com/400x450" alt="" srcset="">
            </div>
            <a href="" class="card-link">
              <div class="card-img-hovered"></div>
            </a>
            <div class="card-info--lib">

              <h1 class="card-title--lib">Apple is having big Sale for the first time</h1>
            
            </div>
          </div>
          <div class="card card-4">
            <div class="card-img">
              <img src="https://via.placeholder.com/400x450" alt="" srcset="">
            </div>
            <a href="" class="card-link">
              <div class="card-img-hovered"></div>
            </a>
            <div class="card-info--lib">
           
              <h1 class="card-title--lib">Net-Nutrality is coming to its end</h1>
            </div>
          </div>

          <div class="card card-1">
            <div class="card-img">
              <img src="https://via.placeholder.com/400x450" alt="" srcset="">
            </div>
            <a href="" class="card-link">
              <div class="card-img-hovered"></div>
            </a>
            <div class="card-info--lib">
           
              <h1 class="card-title--lib">There have been big Tesla accident at New Jersey</h1>
             
            </div>
          </div>
          
          <div class="card card-2">
            <div class="card-img">
              <img src="https://via.placeholder.com/400x450" alt="" srcset="">
            </div>
            <a href="" class="card-link">
              <div class="card-img-hovered"></div>
            </a>
            <div class="card-info--lib">
            
              <h1 class="card-title--lib">Samsung laptops is exploding again</h1>
             
            </div>
          </div>
          <div class="card card-3">
            <div class="card-img">
              <img src="https://via.placeholder.com/400x450" alt="" srcset="">
            </div>
            <a href="" class="card-link">
              <div class="card-img-hovered"></div>
            </a>
            <div class="card-info--lib">
            
              <h1 class="card-title--lib">Apple is having big Sale for the first time</h1>
            
            </div>
          </div>
          <div class="card card-4">
            <div class="card-img">
              <img src="https://via.placeholder.com/400x450" alt="" srcset="">
            </div>
            <a href="" class="card-link">
              <div class="card-img-hovered"></div>
            </a>
            <div class="card-info--lib">
             
              <h1 class="card-title--lib">Net-Nutrality is coming to its end</h1>
            </div>
          </div>

          <div class="card card-1">
            <div class="card-img">
              <img src="https://via.placeholder.com/400x450" alt="" srcset="">
            </div>
            <a href="" class="card-link">
              <div class="card-img-hovered"></div>
            </a>
            <div class="card-info--lib">
             
              <h1 class="card-title--lib">There have been big Tesla accident at New Jersey</h1>
             
            </div>
          </div>
          
          <div class="card card-2">
            <div class="card-img">
              <img src="https://via.placeholder.com/400x450" alt="" srcset="">
            </div>
            <a href="" class="card-link">
              <div class="card-img-hovered"></div>
            </a>
            <div class="card-info--lib">
             
              <h1 class="card-title--lib">Samsung laptops is exploding again</h1>
             
            </div>
          </div>
          <div class="card card-3">
            <div class="card-img">
              <img src="https://via.placeholder.com/400x450" alt="" srcset="">
            </div>
            <a href="" class="card-link">
              <div class="card-img-hovered"></div>
            </a>
            <div class="card-info--lib">
              
              <h1 class="card-title--lib">Apple is having big Sale for the first time</h1>
            
            </div>
          </div>
          <div class="card card-4">
            <div class="card-img">
              <img src="https://via.placeholder.com/400x450" alt="" srcset="">
            </div>
            <a href="" class="card-link">
              <div class="card-img-hovered"></div>
            </a>
            <div class="card-info--lib">
             
              <h1 class="card-title--lib">Net-Nutrality is coming to its end</h1>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
@endsection