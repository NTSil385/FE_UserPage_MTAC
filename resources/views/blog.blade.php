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

@endsection