@extends('layouts.client')

@section('content')
  <link rel="stylesheet" href="./home/css/quotation.css">
    <div class="body">

      <section class="timeline">
        <div class="container">
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1">
                <h4>BƯỚC 1</h4>
                <i class="fa-solid fa-bullseye"></i>
                <p>Chọn loại dịch vụ</p>
              </button>
    
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
                <h4>BƯỚC 2</h4>
                <i class="fa-solid fa-bullseye"></i>
                <p>Điền thông tin & Dự toán chi phí</p>
              </button>
    
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                <h4>BƯỚC 3</h4>
                <i class="fa-solid fa-bullseye"></i>
                <p>Gửi yêu cầu xử lý</p>
              </button>
              
             
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="experience-slide-one row h-100 align-items-center">
                  <div class="col-md-4 ">
                    <h4>XỬ LÝ CHẤT THẢI</h4>
                   
                    <div class="list-service">
                       
                          
                        <button class="button" onclick="openFormXLCHT600()">
                            <span class="text">Chất thải nguy hại nhỏ bằng 600KG/Năm</span>
                            <div class="overlay">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                              </svg>
                            </div>
                        </button>
                        <button class="button" onclick="openFormXLCHT_600()">
                            <span class="text">Chất thải nguy hại lớn hơn 600KG/Năm</span>
                            <div class="overlay">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                              </svg>
                            </div>
                        </button>
                        <button class="button" onclick="openFormCTTMM2000()">
                            <span class="text">Chất thải ngành may mặc nhỏ hơn 2000KG/Năm</span>
                            <div class="overlay">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                              </svg>
                            </div>
                        </button>
                        <button class="button"  onclick="openFormCTTMM_2000()">
                            <span class="text">Chất thải ngành may mặc lớn hơn 2000KG/Năm</span>
                            <div class="overlay">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                              </svg>
                            </div>
                        </button>
                    </div>
                    
                  
                  </div>
                  <div class="col-md-4 ">
                    <h4>HỒ SƠ MÔI TRƯỜNG</h4>
                    <div class="list-service">
                      
                        <button class="button" onclick="openFormGPMT()">
                            <span class="text" >Giấy phép môi trường</span>
                            <div class="overlay">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                              </svg>
                            </div>
                        </button>
                        <button class="button"onclick="openFormDGTD()">
                            <span class="text">Đánh giá tác động môi trường</span>
                            <div class="overlay">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                              </svg>
                            </div>
                        </button>
                        <button class="button"onclick="openFormBCCTBVMT2022()">
                            <span class="text">Báo cáo công tác bảo vệ môi trường 2022</span>
                            <div class="overlay">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                              </svg>
                            </div>
                        </button>
                       
                    </div>
                    
                  </div>
                  <div class="col-md-4 ">
                    <h4>NHÓM CỒNG KỀNH</h4>
                    <div class="list-service">
                        
                        <button class="button" onclick="openFormCTCK2000()">
                            <span class="text">Chất thải Cồng Kềnh nhỏ hơn 2000KG</span>
                            <div class="overlay">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                              </svg>
                            </div>
                        </button>
                        <button class="button" onclick="openFormCTCK_2000()">
                            <span class="text">Chất thải Cồng Kềnh lớn hơn 2000KG</span>
                            <div class="overlay">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                              </svg>
                            </div>
                        </button>
                       
                    </div>
                    
                  </div>
               
              </div>
              </div>
              <div class="carousel-item">
                <div class="experience-slide-one row h-100 align-items-center">
                  <div class="col-md-5">
                    <div class="experience-slide-img">
                      <img src="./home/img/test.jpg" alt="" class="rounded img-fluid">
                    </div>
                  
                  </div>
                  <div class="col-md-7">
                    <h3 style="color:#000">VIDEO HƯỚNG DẪN</h3>
                    <div class="experience-slide-text" style="color:#000">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi voluptatum expedita neque natus incidunt nisi quis aut dolor ipsam esse dicta amet molestiae quas, repellat est unde maiores vero quod?
                    </div>
                  </div>
              </div>
              </div>
              <div class="carousel-item">
                <div class="experience-slide-one row h-100 align-items-center">
                  <div class="col-md-5">
                    
                    <div class="experience-slide-img">
                      <img src="./home/img/test.jpg" alt="" class="rounded img-fluid">
                    </div>
                  
                  </div>
                  <div class="col-md-7">
                    <h3 style="color:#000">VIDEO HƯỚNG DẪN</h3>
                    <div class="experience-slide-text" style="color:#000">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi voluptatum expedita neque natus incidunt nisi quis aut dolor ipsam esse dicta amet molestiae quas, repellat est unde maiores vero quod?
                    </div>
                  </div>
              </div>
              </div>
           
            
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"  aria-hidden="true">
                    <i style="color: #000;" class="fa-solid fa-chevron-left"></i>
                </span>
                
              </button>
              <button class="carousel-control-next"  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                    <i style="color: #000;" class="fa-solid fa-chevron-right"></i>
                </span>
                
              </button> 
            </div>
          
          </div>
          
        </div>
      
      </section>
      

    </div>
    <script src="./home/js/test.js"></script>
@endsection