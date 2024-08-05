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
      
            <!-- POPUP FORM XLCT nguy hại <600kg -->
              <div class="form-popup" id="myForm">
                <div class="popup-content--quotation">
                  <span class="close" onclick="closeFormXLCHT600()">&times;</span>
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
                </div>
              </div>
            <!-- POPUP FORM XLCT nguy hại >600kg -->
            <div class="form-popup" id="xlct-600">
                    <div class="popup-content--quotation">
                      <span class="close" onclick="closeFormXLCHT_600()">&times;</span>
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
                    </div>
            </div>
            <!-- POPUP FORM XLCT NGÀNH MAY MẶC <2000 -->
            <div class="form-popup" id="ctmm2000">
                <div class="popup-content--quotation">
                  <span class="close" onclick="closeFormCTTMM2000()">&times;</span>
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
                </div>
            </div>
            <!-- POPUP FORM XLCT NGÀNH MAY MẶC <2000 -->
            <div class="form-popup" id="ctmm-2000">
                    <div class="popup-content--quotation">
                      <span class="close" onclick="closeFormCTTMM_2000()">&times;</span>
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
                    </div>
            </div>

            <!-- POPUP FORM GIẤY PHÉP MÔI TRƯỜNG -->
            <div class="form-popup" id="gpmt">
                    <div class="popup-content--quotation">
                      <span class="close" onclick="closeFormGPMT()">&times;</span>
                      <div class="col-md-5">
                        <form class="popup-form">
                            <div class="header-form" style="color:#000">
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
                    </div>
            </div>
            <!-- POPUP FORM ĐÁNH GIÁ TÁC ĐỘNG MÔI TRƯỜNG -->
            <div class="form-popup" id="dgtd">
                <div class="popup-content--quotation">
                  <span class="close" onclick="closeFormDGTD()">&times;</span>
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
                </div>
            </div>
            <!-- POPUP FORM BÁO CÁO CÔNG TÁC BẢO VỆ MÔI TRƯỜNG 2022 -->
            <div class="form-popup" id="bcctbvm2022">
                <div class="popup-content--quotation">
                  <span class="close" onclick="closeFormBCCTBVMT2022()">&times;</span>
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
                </div>
            </div>

            <!-- POPUP FORM XỬ LÝ CHẤT THẢI CỒNG KỀNH NHỎ HƠN 2000KG -->
            <div class="form-popup" id="xlctck2000">
                <div class="popup-content--quotation">
                  <span class="close" onclick="closeFormCTCK2000()">&times;</span>
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
                </div>
            </div>

             <!-- POPUP FORM XỬ LÝ CHẤT THẢI CỒNG KỀNH LỚN HƠN 2000KG -->
             <div class="form-popup" id="xlctck-2000">
                <div class="popup-content--quotation">
                  <span class="close" onclick="closeFormCTCK_2000()">&times;</span>
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
    </div>
    <script src="./home/js/test.js"></script>
@endsection