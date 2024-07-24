@extends('layouts.client')
@section('content')
      <div class="body">
        <div class="row"  style="margin-top: 10px;" >
            <div class="title">TIN TỨC </div>
        </div>
        <div class="row">
            <div class="col-md-2" style="height: 100%;">
                <!-- FIRST SIDE -->
                <div id="nav-bar">
                   
                    <div id="nav-header">
                     
                     
                      <hr/>
                    </div>
                    <div id="nav-content">
                      <div class="nav-button" onclick="setActive(this)"><span>TIN MÔI TRƯỜNG</span></div>
                      <div class="nav-button" onclick="setActive(this)"><span>TIN ĐỊA PHƯƠNG</span></div>
                      <div class="nav-button" onclick="setActive(this)"><span>CHÍNH SÁCH PHÁP LUẬT</span></div>
                      <div class="nav-button" onclick="setActive(this)"><span>QUẢN LÝ MÔI TRƯỜNG</span></div>
                      <div class="nav-button" onclick="setActive(this)"><span>CÔNG NGHỆ MÔI TRƯỜNG</span></div>
                      <div class="nav-button" onclick="setActive(this)"><span>PHÁT TRIỂN BỀN VỮNG</span></div>
                      <div class="nav-button" onclick="setActive(this)"><span>TIN CÔNG TY</span></div>
                      <div class="nav-button" onclick="setActive(this)"><span>TIN THẾ GIỚI</span></div>
                      <div class="nav-button"><span>HỎI - ĐÁP</span></div>
                      <div id="nav-content-highlight"></div>
                    </div>
                  
                </div>
                <script>
                  document.addEventListener('DOMContentLoaded', function() {
                      let buttons = document.querySelectorAll('.nav-button');
                      
                      buttons.forEach(function(button, index) {
                          button.addEventListener('click', function() {
                              // Loại bỏ lớp active từ tất cả các nút
                              buttons.forEach(function(btn) {
                                  btn.classList.remove('active');
                              });
                              
                              // Thêm lớp active vào nút được nhấp
                              button.classList.add('active');
                  
                              // Cập nhật vị trí của nav-content-highlight
                              let navHighlight = document.getElementById('nav-content-highlight');
                              navHighlight.style.top = `${index * 54 + 16}px`;
                          });
                      });
                  });
                  </script>
                <div class="row"  style="margin-top: 10px;" >
                    <div class="title-second">CÔNG CỤ </div>
                </div>
                <!-- SECOND SIDE -->
                <div id="nav-bar--second">
                    
                    <div id="nav-content--second" >
                      <div class="nav-button--second"style="border-top-left-radius: 10px;">
                        <img class="img-second" src="home/icon/hoso.png" width="30px" height="30px" alt="" srcset="">
                        <span>HỒ SƠ</span>
                    </div>
                    <div class="nav-button--second">
                        <img class="img-second" style="margin: 0 15px;" src="home/icon/hopdong.png" width="20px" height="20px" alt="" srcset="">
                        <span>HỢP ĐỒNG</span>
                    </div>
                    <div class="nav-button--second">
                        <img class="img-second" src="home/icon/thanhtoan.png" width="30px" height="30px" alt="" srcset="">
                        <span>THANH TOÁN</span>
                    </div>
                    <div class="nav-button--second">
                        <img class="img-second" src="home/icon/thugom.png" width="30px" height="30px" alt="" srcset="">
                        <span>THU GOM</span>
                    </div>
                    <div class="nav-button--second" style="border-bottom-left-radius: 10px;">
                        <img class="img-second" src="home/icon/taiche.png" width="30px" height="30px" alt="" srcset="">
                        <span>TÁI CHẾ</span>
                    </div>
                    </div>
                  
                </div>
            </div>    
            <div class="col-md-6">
                <a href="" class="blog-container">
                  
                  <div class="card-higlight">
                      <div class="thumbnail-blog"><img class="left" src="https://cdn2.hubspot.net/hubfs/322787/Mychefcom/images/BLOG/Header-Blog/photo-culinaire-pexels.jpg" /></div>
                      <div class="right">
                          <h1 style="  display: -webkit-box;
                          -webkit-box-orient: vertical;
                          overflow: hidden;
                          text-overflow: ellipsis;
                          -webkit-line-clamp: 4; 
                          color: #333;
                          ">Why you Need More Magnesium in Your Daily Diet</h1>
                          <div class="author">
                              <h2 style="	font-size : 15px; margin: auto;">Igor MARTY</h2>
                          </div>
                          <div class="separator"></div>
                          <p>Magnesium is one of the six essential macro-minerals that is required by the body for energy production and synthesis of protein and enzymes. It contributes to the development of bones and most importantly it is responsible for synthesis of your
                              DNA and RNA. A new report that has appeared in theBritish Journal of Cancer, gives you another reason to add more magnesium to your diet...</p>
                      </div>
                      <h5 style="position: relative;
                      top: 220px; right: 280px;
                      font-size: 150px;
                      background: -webkit-linear-gradient(#eee, #333);
                      -webkit-background-clip: text;
                      -webkit-text-fill-color: transparent;">12</h5>
                      <h6 style="position: relative;
                      top: 200px; right: 280px;
                      font-size: 40px;
                      background: -webkit-linear-gradient(#eee, #333);
                      -webkit-background-clip: text;
                      -webkit-text-fill-color: transparent;">JANUARY</h6>
                    
                  </div>
                   </a>

                <a href="#" class="blog-container">
                    <div class="blog-card spring-fever">
                        <div class="title-content">
                          <h3><a class="blog-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                        
                        </div>
                        <div class="card-info">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nostrum saepe nisi earum adipisci voluptatem velit incidunt? Esse veritatis error repellendus dignissimos maxime, iure optio provident animi? Labore, iste ea? 
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore architecto nisi atque rem quaerat labore distinctio dolor consequatur quia sit quas modi, quasi possimus libero. Odio, maiores. Veniam, tempore alias!
                        </div>
                        <div class="utility-info">
                          <ul class="utility-list">
                            <li><span class="licon icon-like"></span><a href="#">2</a></li>
                            <li><span class="licon icon-com"></span><a href="#">12</a></li>
                            <li><span class="licon icon-dat"></span>03 jun 2017</li>
                            <li><span class="licon icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                          </ul>
                        </div>
                        <a href="#" class="gradient-overlay"></a>
                        <div class="color-overlay"></div>
                    </div>
                </a>
                <a href="#" class="blog-container">
                  <div class="blog-card spring-fever">
                      <div class="title-content">
                        <h3><a class="blog-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                      
                      </div>
                      <div class="card-info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nostrum saepe nisi earum adipisci voluptatem velit incidunt? Esse veritatis error repellendus dignissimos maxime, iure optio provident animi? Labore, iste ea? 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore architecto nisi atque rem quaerat labore distinctio dolor consequatur quia sit quas modi, quasi possimus libero. Odio, maiores. Veniam, tempore alias!
                      </div>
                      <div class="utility-info">
                        <ul class="utility-list">
                          <li><span class="licon icon-like"></span><a href="#">2</a></li>
                          <li><span class="licon icon-com"></span><a href="#">12</a></li>
                          <li><span class="licon icon-dat"></span>03 jun 2017</li>
                          <li><span class="licon icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                        </ul>
                      </div>
                      <a href="#" class="gradient-overlay"></a>
                      <div class="color-overlay"></div>
                  </div>
              </a>
              
              <a href="#" class="blog-container">
                <div class="blog-card spring-fever">
                    <div class="title-content">
                      <h3><a class="blog-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                    
                    </div>
                    <div class="card-info">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nostrum saepe nisi earum adipisci voluptatem velit incidunt? Esse veritatis error repellendus dignissimos maxime, iure optio provident animi? Labore, iste ea? 
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore architecto nisi atque rem quaerat labore distinctio dolor consequatur quia sit quas modi, quasi possimus libero. Odio, maiores. Veniam, tempore alias!
                    </div>
                    <div class="utility-info">
                      <ul class="utility-list">
                        <li><span class="licon icon-like"></span><a href="#">2</a></li>
                        <li><span class="licon icon-com"></span><a href="#">12</a></li>
                        <li><span class="licon icon-dat"></span>03 jun 2017</li>
                        <li><span class="licon icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                      </ul>
                    </div>
                    <a href="#" class="gradient-overlay"></a>
                    <div class="color-overlay"></div>
                </div>
            </a>
            <a href="#" class="blog-container">
              <div class="blog-card spring-fever">
                  <div class="title-content">
                    <h3><a class="blog-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                  
                  </div>
                  <div class="card-info">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nostrum saepe nisi earum adipisci voluptatem velit incidunt? Esse veritatis error repellendus dignissimos maxime, iure optio provident animi? Labore, iste ea? 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore architecto nisi atque rem quaerat labore distinctio dolor consequatur quia sit quas modi, quasi possimus libero. Odio, maiores. Veniam, tempore alias!
                  </div>
                  <div class="utility-info">
                    <ul class="utility-list">
                      <li><span class="licon icon-like"></span><a href="#">2</a></li>
                      <li><span class="licon icon-com"></span><a href="#">12</a></li>
                      <li><span class="licon icon-dat"></span>03 jun 2017</li>
                      <li><span class="licon icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                    </ul>
                  </div>
                  <a href="#" class="gradient-overlay"></a>
                  <div class="color-overlay"></div>
              </div>
          </a>
          
            </div>
            <div class="col-md-4">
              <div class="list-blog">
                <a href="#" class="list-item">
                    <div class="list-box">
                      <img class="list-img" src="https://via.placeholder.com/150x100" alt="">
                    </div>
                    <div class="list-content">
                        <div class="date">
                            27 July 2024
                          </div>
                      <h5>Tiêu đề bài viết</h5>
                      <div class="list-des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, veritatis! Fugit iure harum vel ducimus corporis a totam maxime recusandae quo numquam! Ea nulla veritatis adipisci dignissimos beatae consequatur modi!</div>
                    
                    </div>
                </a>
                <a href="#" class="list-item">
                    <div class="list-box">
                      <img class="list-img" src="https://via.placeholder.com/150x100" alt="">
                    </div>
                    <div class="list-content">
                        <div class="date">
                            27 July 2024
                          </div>
                      <h5>Tiêu đề bài viết</h5>
                      <div class="list-des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, veritatis! Fugit iure harum vel ducimus corporis a totam maxime recusandae quo numquam! Ea nulla veritatis adipisci dignissimos beatae consequatur modi!</div>
                    
                    </div>
                </a>
                <a href="#" class="list-item">
                    <div class="list-box">
                      <img class="list-img" src="https://via.placeholder.com/150x100" alt="">
                    </div>
                    <div class="list-content">
                        <div class="date">
                            27 July 2024
                          </div>
                      <h5>Tiêu đề bài viết</h5>
                      <div class="list-des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, veritatis! Fugit iure harum vel ducimus corporis a totam maxime recusandae quo numquam! Ea nulla veritatis adipisci dignissimos beatae consequatur modi!</div>
                    
                    </div>
                </a> 
                <a href="#" class="list-item">
                    <div class="list-box">
                      <img class="list-img" src="https://via.placeholder.com/150x100" alt="">
                    </div>
                    <div class="list-content">
                        <div class="date">
                            27 July 2024
                          </div>
                      <h5>Tiêu đề bài viết</h5>
                      <div class="list-des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, veritatis! Fugit iure harum vel ducimus corporis a totam maxime recusandae quo numquam! Ea nulla veritatis adipisci dignissimos beatae consequatur modi!</div>
                    
                    </div>
                </a>  
              </div>
              <div class="header-video">Video</div>
              <div class="side-blog">
               
                <a href="#" class="video-item">
                    <div class="video-box" >
                        <video style="border-radius: 10px;" width="500" height="240" autoplay>
                            <source src="home/video/rdfl.mp4" type="video/mp4">
                            
                          Your browser does not support the video tag.
                          </video>
                    </div>
                    <div class="video-title">
                      <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cupiditate fuga officia reprehenderit repellendus facere ab veniam iusto, quod tempora sapiente distinctio dolorum cum rem, corporis facilis quo iure aliquid!</h5>
                    
                      
                    </div>
                  </a>
                <div class="sublayout-content">
                    <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>  <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>  <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
  
                </div>
  
              </div>
              <div class="row" >
                <div class="title-right" >TAG </div>
                <div class="box-tag">
                  <button class="button">
                    Môi trường
                  </button>
                  <button class="button">
                    Môi trường
                  </button>
                  <button class="button">
                    Môi trường
                  </button>
                </div>
            </div>
            </div>
        </div>
        
    </div>
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
   
    <div class="body">
        <div class="row"  style="margin-top: 10px;" >
            <div class="title">TIN TỨC </div>
        </div>
        <div class="row">
            <div class="col-md-2" style="height: 100%;">
                <!-- FIRST SIDE -->
                <div id="nav-bar">
                   
                    <div id="nav-header">
                     
                     
                      <hr/>
                    </div>
                    <div id="nav-content">
                      <div class="nav-button" onclick="setActive(this)"><span>TIN MÔI TRƯỜNG</span></div>
                      <div class="nav-button" onclick="setActive(this)"><span>TIN ĐỊA PHƯƠNG</span></div>
                      <div class="nav-button" onclick="setActive(this)"><span>CHÍNH SÁCH PHÁP LUẬT</span></div>
                      <div class="nav-button" onclick="setActive(this)"><span>QUẢN LÝ MÔI TRƯỜNG</span></div>
                      <div class="nav-button" onclick="setActive(this)"><span>CÔNG NGHỆ MÔI TRƯỜNG</span></div>
                      <div class="nav-button" onclick="setActive(this)"><span>PHÁT TRIỂN BỀN VỮNG</span></div>
                      <div class="nav-button" onclick="setActive(this)"><span>TIN CÔNG TY</span></div>
                      <div class="nav-button" onclick="setActive(this)"><span>TIN THẾ GIỚI</span></div>
                      <div class="nav-button"><span>HỎI - ĐÁP</span></div>
                      <div id="nav-content-highlight"></div>
                    </div>
                  
                </div>
                <script>
                  document.addEventListener('DOMContentLoaded', function() {
                      let buttons = document.querySelectorAll('.nav-button');
                      
                      buttons.forEach(function(button, index) {
                          button.addEventListener('click', function() {
                              // Loại bỏ lớp active từ tất cả các nút
                              buttons.forEach(function(btn) {
                                  btn.classList.remove('active');
                              });
                              
                              // Thêm lớp active vào nút được nhấp
                              button.classList.add('active');
                  
                              // Cập nhật vị trí của nav-content-highlight
                              let navHighlight = document.getElementById('nav-content-highlight');
                              navHighlight.style.top = `${index * 54 + 16}px`;
                          });
                      });
                  });
                  </script>
                <div class="row"  style="margin-top: 10px;" >
                    <div class="title-second">CÔNG CỤ </div>
                </div>
                <!-- SECOND SIDE -->
                <div id="nav-bar--second">
                    
                    <div id="nav-content--second" >
                      <div class="nav-button--second"style="border-top-left-radius: 10px;">
                        <img class="img-second" src="home/icon/hoso.png" width="30px" height="30px" alt="" srcset="">
                        <span>HỒ SƠ</span>
                    </div>
                    <div class="nav-button--second">
                        <img class="img-second" style="margin: 0 15px;" src="home/icon/hopdong.png" width="20px" height="20px" alt="" srcset="">
                        <span>HỢP ĐỒNG</span>
                    </div>
                    <div class="nav-button--second">
                        <img class="img-second" src="home/icon/thanhtoan.png" width="30px" height="30px" alt="" srcset="">
                        <span>THANH TOÁN</span>
                    </div>
                    <div class="nav-button--second">
                        <img class="img-second" src="home/icon/thugom.png" width="30px" height="30px" alt="" srcset="">
                        <span>THU GOM</span>
                    </div>
                    <div class="nav-button--second" style="border-bottom-left-radius: 10px;">
                        <img class="img-second" src="home/icon/taiche.png" width="30px" height="30px" alt="" srcset="">
                        <span>TÁI CHẾ</span>
                    </div>
                    </div>
                  
                </div>
            </div>    
            <div class="col-md-6">
                <a href="" class="blog-container">
                  
                  <div class="card-higlight">
                      <div class="thumbnail-blog"><img class="left" src="https://cdn2.hubspot.net/hubfs/322787/Mychefcom/images/BLOG/Header-Blog/photo-culinaire-pexels.jpg" /></div>
                      <div class="right">
                          <h1 style="  display: -webkit-box;
                          -webkit-box-orient: vertical;
                          overflow: hidden;
                          text-overflow: ellipsis;
                          -webkit-line-clamp: 4; 
                          color: #333;
                          ">Why you Need More Magnesium in Your Daily Diet</h1>
                          <div class="author">
                              <h2 style="	font-size : 15px; margin: auto;">Igor MARTY</h2>
                          </div>
                          <div class="separator"></div>
                          <p>Magnesium is one of the six essential macro-minerals that is required by the body for energy production and synthesis of protein and enzymes. It contributes to the development of bones and most importantly it is responsible for synthesis of your
                              DNA and RNA. A new report that has appeared in theBritish Journal of Cancer, gives you another reason to add more magnesium to your diet...</p>
                      </div>
                      <h5 style="position: relative;
                      top: 220px; right: 280px;
                      font-size: 150px;
                      background: -webkit-linear-gradient(#eee, #333);
                      -webkit-background-clip: text;
                      -webkit-text-fill-color: transparent;">12</h5>
                      <h6 style="position: relative;
                      top: 200px; right: 280px;
                      font-size: 40px;
                      background: -webkit-linear-gradient(#eee, #333);
                      -webkit-background-clip: text;
                      -webkit-text-fill-color: transparent;">JANUARY</h6>
                    
                  </div>
                   </a>

                <a href="#" class="blog-container">
                    <div class="blog-card spring-fever">
                        <div class="title-content">
                          <h3><a class="blog-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                        
                        </div>
                        <div class="card-info">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nostrum saepe nisi earum adipisci voluptatem velit incidunt? Esse veritatis error repellendus dignissimos maxime, iure optio provident animi? Labore, iste ea? 
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore architecto nisi atque rem quaerat labore distinctio dolor consequatur quia sit quas modi, quasi possimus libero. Odio, maiores. Veniam, tempore alias!
                        </div>
                        <div class="utility-info">
                          <ul class="utility-list">
                            <li><span class="licon icon-like"></span><a href="#">2</a></li>
                            <li><span class="licon icon-com"></span><a href="#">12</a></li>
                            <li><span class="licon icon-dat"></span>03 jun 2017</li>
                            <li><span class="licon icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                          </ul>
                        </div>
                        <a href="#" class="gradient-overlay"></a>
                        <div class="color-overlay"></div>
                    </div>
                </a>
                <a href="#" class="blog-container">
                  <div class="blog-card spring-fever">
                      <div class="title-content">
                        <h3><a class="blog-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                      
                      </div>
                      <div class="card-info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nostrum saepe nisi earum adipisci voluptatem velit incidunt? Esse veritatis error repellendus dignissimos maxime, iure optio provident animi? Labore, iste ea? 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore architecto nisi atque rem quaerat labore distinctio dolor consequatur quia sit quas modi, quasi possimus libero. Odio, maiores. Veniam, tempore alias!
                      </div>
                      <div class="utility-info">
                        <ul class="utility-list">
                          <li><span class="licon icon-like"></span><a href="#">2</a></li>
                          <li><span class="licon icon-com"></span><a href="#">12</a></li>
                          <li><span class="licon icon-dat"></span>03 jun 2017</li>
                          <li><span class="licon icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                        </ul>
                      </div>
                      <a href="#" class="gradient-overlay"></a>
                      <div class="color-overlay"></div>
                  </div>
              </a>
              
              <a href="#" class="blog-container">
                <div class="blog-card spring-fever">
                    <div class="title-content">
                      <h3><a class="blog-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                    
                    </div>
                    <div class="card-info">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nostrum saepe nisi earum adipisci voluptatem velit incidunt? Esse veritatis error repellendus dignissimos maxime, iure optio provident animi? Labore, iste ea? 
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore architecto nisi atque rem quaerat labore distinctio dolor consequatur quia sit quas modi, quasi possimus libero. Odio, maiores. Veniam, tempore alias!
                    </div>
                    <div class="utility-info">
                      <ul class="utility-list">
                        <li><span class="licon icon-like"></span><a href="#">2</a></li>
                        <li><span class="licon icon-com"></span><a href="#">12</a></li>
                        <li><span class="licon icon-dat"></span>03 jun 2017</li>
                        <li><span class="licon icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                      </ul>
                    </div>
                    <a href="#" class="gradient-overlay"></a>
                    <div class="color-overlay"></div>
                </div>
            </a>
            <a href="#" class="blog-container">
              <div class="blog-card spring-fever">
                  <div class="title-content">
                    <h3><a class="blog-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                  
                  </div>
                  <div class="card-info">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nostrum saepe nisi earum adipisci voluptatem velit incidunt? Esse veritatis error repellendus dignissimos maxime, iure optio provident animi? Labore, iste ea? 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore architecto nisi atque rem quaerat labore distinctio dolor consequatur quia sit quas modi, quasi possimus libero. Odio, maiores. Veniam, tempore alias!
                  </div>
                  <div class="utility-info">
                    <ul class="utility-list">
                      <li><span class="licon icon-like"></span><a href="#">2</a></li>
                      <li><span class="licon icon-com"></span><a href="#">12</a></li>
                      <li><span class="licon icon-dat"></span>03 jun 2017</li>
                      <li><span class="licon icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                    </ul>
                  </div>
                  <a href="#" class="gradient-overlay"></a>
                  <div class="color-overlay"></div>
              </div>
          </a>
          
            </div>
            <div class="col-md-4">
              <div class="list-blog">
                <a href="#" class="list-item">
                    <div class="list-box">
                      <img class="list-img" src="https://via.placeholder.com/150x100" alt="">
                    </div>
                    <div class="list-content">
                        <div class="date">
                            27 July 2024
                          </div>
                      <h5>Tiêu đề bài viết</h5>
                      <div class="list-des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, veritatis! Fugit iure harum vel ducimus corporis a totam maxime recusandae quo numquam! Ea nulla veritatis adipisci dignissimos beatae consequatur modi!</div>
                    
                    </div>
                </a>
                <a href="#" class="list-item">
                    <div class="list-box">
                      <img class="list-img" src="https://via.placeholder.com/150x100" alt="">
                    </div>
                    <div class="list-content">
                        <div class="date">
                            27 July 2024
                          </div>
                      <h5>Tiêu đề bài viết</h5>
                      <div class="list-des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, veritatis! Fugit iure harum vel ducimus corporis a totam maxime recusandae quo numquam! Ea nulla veritatis adipisci dignissimos beatae consequatur modi!</div>
                    
                    </div>
                </a>
                <a href="#" class="list-item">
                    <div class="list-box">
                      <img class="list-img" src="https://via.placeholder.com/150x100" alt="">
                    </div>
                    <div class="list-content">
                        <div class="date">
                            27 July 2024
                          </div>
                      <h5>Tiêu đề bài viết</h5>
                      <div class="list-des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, veritatis! Fugit iure harum vel ducimus corporis a totam maxime recusandae quo numquam! Ea nulla veritatis adipisci dignissimos beatae consequatur modi!</div>
                    
                    </div>
                </a> 
                <a href="#" class="list-item">
                    <div class="list-box">
                      <img class="list-img" src="https://via.placeholder.com/150x100" alt="">
                    </div>
                    <div class="list-content">
                        <div class="date">
                            27 July 2024
                          </div>
                      <h5>Tiêu đề bài viết</h5>
                      <div class="list-des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, veritatis! Fugit iure harum vel ducimus corporis a totam maxime recusandae quo numquam! Ea nulla veritatis adipisci dignissimos beatae consequatur modi!</div>
                    
                    </div>
                </a>  
              </div>
              <div class="header-video">Video</div>
              <div class="side-blog">
               
                <a href="#" class="video-item">
                    <div class="video-box" >
                        <video style="border-radius: 10px;" width="500" height="240" autoplay>
                            <source src="home/video/rdfl.mp4" type="video/mp4">
                            
                          Your browser does not support the video tag.
                          </video>
                    </div>
                    <div class="video-title">
                      <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cupiditate fuga officia reprehenderit repellendus facere ab veniam iusto, quod tempora sapiente distinctio dolorum cum rem, corporis facilis quo iure aliquid!</h5>
                    
                      
                    </div>
                  </a>
                <div class="sublayout-content">
                    <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>  <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>  <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
                      <a href="#" class="content-item">
                        <div class="img-box">
                            <div class="video-box" >
                                <video style="border-radius: 10px;" width="150" height="100" >
                                    <source src="home/video/rdfl.mp4" type="video/mp4">
                                    
                                  Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                        <div class="detail-content">
                            <div class="date">
                                27 July 2024
                              </div>
                          <div class="video-des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo quidem laudantium laborum cum qui sit hic quos quo, sed earum ad corrupti a dicta non fugiat repellendus vel dolore. Omnis?   </div>
                        
                          
                        </div>
                      </a>
  
                </div>
  
              </div>
              <div class="row" >
                <div class="title-right" >TAG </div>
                <div class="box-tag">
                  <button class="button">
                    Môi trường
                  </button>
                  <button class="button">
                    Môi trường
                  </button>
                  <button class="button">
                    Môi trường
                  </button>
                </div>
            </div>
            </div>
        </div>
        
    </div>
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

@endsection