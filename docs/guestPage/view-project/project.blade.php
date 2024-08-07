@extends('layouts.client')
@section('content')
      <link rel="stylesheet" href="{{ asset('/home/css/project.css') }}">
      <div class="body">
      <div class="row">
        <div class="container-header">
          <img width="1900px" height="550px" src="{{ asset('./home/img/lib.png') }}" alt="hinh-anh-doi-tac">
        </div>
      </div>
      <div class="row" style="margin-top: 20px;">
        <div class="container-dropdown">
          <div class="menu-dropdown">
            <div class="item">
              <a href="#" class="link">
                <span> Địa điểm </span>
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
          <div class="menu-dropdown" style="margin-right:50px ;">
            <div class="item">
              <a href="#" class="link">
                <span> Loại dự án </span>
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
        </div>
      </div>
      <div
      class="row"
      style="
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 20px;
      "
    >
      <div class="card-project">
        <div class="col-sm-7">
          <div class="count">TP.HCM</div>
          <div class="content">
            <div class="content-header">
              [Thư viện ảnh] Tái chế học đường - Trạm 1: Rực rỡ sắc màu tái chế cùng các em học sinh Trường tiểu học Lê Văn Tám!
            </div>
            <div class="des">
              
              <br />
              Determining what level of hiker you are can be an important tool when planning future hikes. This hiking level guide will help you plan hikes according to different hike ratings set by various websites like All Trails and Modern Hiker. What type of hiker are you – novice, moderate, advanced moderate, expert, or expert backpacker? 
            </div>
            <div class="button-info">
              <a href="./blog/blog1.html">
                <div class="more-info">
                  Xem thêm
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="img-fluid" style="float: right; margin-right: 50px">
            <img
              class="img-project"
              src="https://via.placeholder.com/400x450"
              alt=""
              srcset=""
            />
          </div>
        </div>
      </div>
    </div>
    <div
      class="row"
      style="
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 20px;
      "
    >
      <div class="card-project">
        <div class="col-sm-7">
          <div class="count">TP.HCM</div>
          <div class="content">
            <div class="content-header">
              [Thư viện ảnh] Tái chế học đường - Trạm 1: Rực rỡ sắc màu tái chế cùng các em học sinh Trường tiểu học Lê Văn Tám!
            </div>
            <div class="des">
              
              <br />
              Determining what level of hiker you are can be an important tool when planning future hikes. This hiking level guide will help you plan hikes according to different hike ratings set by various websites like All Trails and Modern Hiker. What type of hiker are you – novice, moderate, advanced moderate, expert, or expert backpacker? 
            </div>
            <div class="button-info">
              <a href="./blog/blog1.html">
                <div class="more-info">
                  Xem thêm
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="img-fluid" style="float: right; margin-right: 50px">
            <img
              class="img-project"
              src="https://via.placeholder.com/400x450"
              alt=""
              srcset=""
            />
          </div>
        </div>
      </div>
    </div>
    <div
      class="row"
      style="
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 20px;
      "
    >
      <div class="card-project">
        <div class="col-sm-7">
          <div class="count">TP.HCM</div>
          <div class="content">
            <div class="content-header">
              [Thư viện ảnh] Tái chế học đường - Trạm 1: Rực rỡ sắc màu tái chế cùng các em học sinh Trường tiểu học Lê Văn Tám!
            </div>
            <div class="des">
              
              <br />
              Determining what level of hiker you are can be an important tool when planning future hikes. This hiking level guide will help you plan hikes according to different hike ratings set by various websites like All Trails and Modern Hiker. What type of hiker are you – novice, moderate, advanced moderate, expert, or expert backpacker? 
            </div>
            <div class="button-info">
              <a href="./blog/blog1.html">
                <div class="more-info">
                  Xem thêm
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="img-fluid" style="float: right; margin-right: 50px">
            <img
              class="img-project"
              src="https://via.placeholder.com/400x450"
              alt=""
              srcset=""
            />
          </div>
        </div>
      </div>
    </div>
    </div>
     <script>
    ScrollReveal({
      reset: true,
      distance: '60px',
      duration: 2500,
      delay: 400,
    });
    ScrollReveal().reveal('.img-fluid', { delay: 500, origin: 'right ' });
    ScrollReveal().reveal('.card-project', { delay: 500, origin: 'top' });

  </script>
  
@endsection