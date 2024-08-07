@extends('layouts.client')
@section('content')
    <link rel="stylesheet" href="{{ asset('/home/css/tintuc.css') }}">
     <div class="body">
        <div class="row"  style="margin-top: 10px;" >
            <div class="title">TIN TỨC </div>
        </div>
        <div class="row">
   
            <div class="col-md-7">
                <div class="img-detail">
                    <iframe class="hash-video" width="800px" height="600px" src="https://www.youtube.com/embed/6h2M9FCuhjY?si=nMsPwjGZ3Xcd-Sv6" title="YouTube video player" frameborder="0" allow="accelerometer;; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
               
              
            </div>
            <div class="col-md-5">
                <div class="side-video">
                    <div class="detail-blog">
                        <div class="detail">
                            <div class="title-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus aliquam excepturi minus consequatur mollitia nobis minima dignissimos aut inventore iste, doloremque repellendus, nemo architecto officia non tempore temporibus itaque repellat.</div>
                            <div class="content-detail">
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis tempus elit, non vehicula sapien. Aenean egestas enim sapien, fringilla varius libero dictum vel. Nulla tincidunt felis ut bibendum convallis. Curabitur vitae est ex. Maecenas dapibus sagittis arcu sed vulputate. Sed luctus blandit dolor, a ornare enim ornare at. Proin eget mollis sem, id dignissim justo. Nam vitae porta tellus. Maecenas aliquet augue vel aliquet malesuada.
                                 Vestibulum sodales dapibus turpis, vel tincidunt dolor ultricies scelerisque. Cras lobortis, neque at finibus euismod, massa eros tempor felis, sit amet feugiat tortor turpis id orci. Aliquam vel nunc tellus. Integer nec neque orci. Donec tincidunt vestibulum erat, in laoreet libero tempor vitae. Pellentesque cursus, metus in egestas iaculis, magna leo consectetur dolor, vel tempor lacus sapien tristique libero. Morbi eu mi eu urna consectetur fringilla.
                                 Proin vitae nulla nec libero aliquam tincidunt.
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et risus id dui ullamcorper placerat in in justo. Donec aliquam turpis ante, sollicitudin egestas dui placerat ac. Quisque varius pulvinar enim id blandit. Suspendisse potenti. In iaculis volutpat luctus.
                                 Pellentesque luctus, quam a posuere finibus, lorem odio venenatis lectus, at congue lorem neque ut purus. Ut ante velit, pharetra vitae interdum ac, aliquam sed lorem. Curabitur at vestibulum velit, vitae pulvinar nulla. Duis dapibus volutpat egestas. Nullam felis tellus, maximus vitae ultricies nec, pellentesque sed tortor. Phasellus nisi metus, tristique quis mattis a, dictum at lorem. Aliquam ultricies ipsum nulla, facilisis consequat lectus gravida non. Morbi a erat turpis. Duis venenatis mauris nec tempor sollicitudin. Quisque nec velit lectus.
                                 Suspendisse accumsan libero in felis fringilla, in accumsan nunc tincidunt. Praesent commodo rutrum tristique. Etiam faucibus ornare dui, sed ultrices purus placerat quis. Suspendisse potenti. Nunc commodo sapien quis mauris ullamcorper, ut condimentum urna aliquet. Nunc viverra congue ipsum, nec laoreet ligula fermentum sit amet. Mauris varius odio sit amet felis lacinia, vitae hendrerit nisi posuere. Cras at lorem in mauris convallis laoreet et eu nisl. Donec vestibulum urna lectus, ac imperdiet nibh luctus sit amet. Mauris porta volutpat mi, ut rhoncus enim malesuada eu. Nulla interdum tincidunt risus sed tristique. Donec suscipit varius volutpat. Praesent iaculis mi erat, nec tincidunt lectus sagittis non. Nulla posuere suscipit ante, sit amet bibendum quam commodo egestas. Vestibulum id arcu a metus eleifend eleifend.
                             </p>
                 
                           
                               </div>
                            
                            
                        </div>
                        <hr />
                      <div class="box-share">
                        <i class="fa-regular fa-copy"></i>
                        <div class="share">
                            <i class="fa-solid fa-share"></i>
                        <label for="">Chia sẻ</label>
                        </div>
                      </div>
                    </div>
                    <div class="header-comment">Bình luận</div>
                        <form action="">
                            <div class="messageBox">
                                <div class="fileUploadWrapper">
                                  <label for="file">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 337 337">
                                      <circle
                                        stroke-width="20"
                                        stroke="#6c6c6c"
                                        fill="none"
                                        r="158.5"
                                        cy="168.5"
                                        cx="168.5"
                                      ></circle>
                                      <path
                                        stroke-linecap="round"
                                        stroke-width="25"
                                        stroke="#6c6c6c"
                                        d="M167.759 79V259"
                                      ></path>
                                      <path
                                        stroke-linecap="round"
                                        stroke-width="25"
                                        stroke="#6c6c6c"
                                        d="M79 167.138H259"
                                      ></path>
                                    </svg>
                                    <span class="tooltip">Add an image</span>
                                  </label>
                                  <input type="file" id="file" name="file" />
                                </div>
                                <input required="" placeholder="Chia sẻ ý kiến của bạn" type="text" id="messageInput" />
                                <button id="sendButton">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 664 663">
                                    <path
                                      fill="none"
                                      d="M646.293 331.888L17.7538 17.6187L155.245 331.888M646.293 331.888L17.753 646.157L155.245 331.888M646.293 331.888L318.735 330.228L155.245 331.888"
                                    ></path>
                                    <path
                                      stroke-linejoin="round"
                                      stroke-linecap="round"
                                      stroke-width="33.67"
                                      stroke="#6c6c6c"
                                      d="M646.293 331.888L17.7538 17.6187L155.245 331.888M646.293 331.888L17.753 646.157L155.245 331.888M646.293 331.888L318.735 330.228L155.245 331.888"
                                    ></path>
                                  </svg>
                                </button>
                              </div>
                              
                        </form>
                        <div class="type-comment">
                            <div class="type1">Được quan tâm nhất</div>
                            <div class="type2">Gần đây</div>
                        </div>
                        <div class="box-comment">
                            <div class="comment">
                              <div class="img-box">
                                <img src="https://via.placeholder.com/80x80" alt="">
                              </div>
                              <div class="detail-content">
                                <h5>User id</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae expedita commodi numquam quidem eius! Soluta iusto assumenda accusantium! Tempore cupiditate delectus natus tempora esse fugiat sapiente sit ratione id sequi.
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt sapiente architecto neque, soluta impedit quasi illum quis inventore omnis odit dolore dolorem ipsam fugiat quibusdam blanditiis quisquam a! Facere, possimus.
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, architecto, dignissimos, veniam, doloribus nesciunt recusandae minus voluptatibus voluptates autem reprehenderit atque dolorum quam. Qui, veniam. Ea, libero quae molestias dicta placeat consequuntur?
                                </p>
                                <div class="status">
                                    <div class="box-like">
                                        <i class="fa-regular fa-thumbs-up"></i>
                                        <label for="">Thích</label>
                                    </div>
                                   <label for="">Trả lời</label>
                                </div>
                              </div>
                            </div>
                            <div class="comment">
                                <div class="img-box">
                                  <img src="https://via.placeholder.com/80x80" alt="">
                                </div>
                                <div class="detail-content">
                                  <h5>User id</h5>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae expedita commodi numquam quidem eius! Soluta iusto assumenda accusantium! Tempore cupiditate delectus natus tempora esse fugiat sapiente sit ratione id sequi.
                                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt sapiente architecto neque, soluta impedit quasi illum quis inventore omnis odit dolore dolorem ipsam fugiat quibusdam blanditiis quisquam a! Facere, possimus.
                                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, architecto, dignissimos, veniam, doloribus nesciunt recusandae minus voluptatibus voluptates autem reprehenderit atque dolorum quam. Qui, veniam. Ea, libero quae molestias dicta placeat consequuntur?
                                  </p>
                                  <div class="status">
                                      <div class="box-like">
                                          <i class="fa-regular fa-thumbs-up"></i>
                                          <label for="">Thích</label>
                                      </div>
                                     <label for="">Trả lời</label>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="btn-more">
                            Đăng nhập để xem thêm
                        </div>
                   
                   
      
                  </div>
                </div>
             
        </div>
        <hr />
        <div class="row"  style="margin: 10px 0px;" >
            <div class="title">XEM NHIỀU </div>
        </div>
        <div class="row row-content" style="margin: 0px 20px;">
            <div class="col-md-4">
                <a href="#" class="video-container">
                    <div class="video-card spring-fever">
                        <video  width="750px" height="400px" muted >
                            <source src="./assets/video/rdfl.mp4" type="video/mp4">
                            
                          Your browser does not support the video tag.
                          </video>
                        <div class="video-content">
                          <h3><a class="video-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                        
                        </div>

                        <div class="utility-info">
                          <ul class="utility-list">
                            <li><span class="livideo icon-like"></span><a href="#">2</a></li>
                            <li><span class="livideo icon-com"></span><a href="#">12</a></li>
                            <li><span class="livideo icon-dat"></span>03 jun 2017</li>
                            <li><span class="livideo icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                          </ul>
                        </div>
                        <a href="#" class="gradient-overlay"></a>
                        <div class="color-overlay"></div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="video-container">
                    <div class="video-card spring-fever">
                        <video  width="750px" height="400px" muted >
                            <source src="./assets/video/rdfl.mp4" type="video/mp4">
                            
                          Your browser does not support the video tag.
                          </video>
                        <div class="video-content">
                          <h3><a class="video-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                        
                        </div>

                        <div class="utility-info">
                          <ul class="utility-list">
                            <li><span class="livideo icon-like"></span><a href="#">2</a></li>
                            <li><span class="livideo icon-com"></span><a href="#">12</a></li>
                            <li><span class="livideo icon-dat"></span>03 jun 2017</li>
                            <li><span class="livideo icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                          </ul>
                        </div>
                        <a href="#" class="gradient-overlay"></a>
                        <div class="color-overlay"></div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="video-container">
                    <div class="video-card spring-fever">
                        <video  width="750px" height="400px" muted >
                            <source src="./assets/video/rdfl.mp4" type="video/mp4">
                            
                          Your browser does not support the video tag.
                          </video>
                        <div class="video-content">
                          <h3><a class="video-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                        
                        </div>

                        <div class="utility-info">
                          <ul class="utility-list">
                            <li><span class="livideo icon-like"></span><a href="#">2</a></li>
                            <li><span class="livideo icon-com"></span><a href="#">12</a></li>
                            <li><span class="livideo icon-dat"></span>03 jun 2017</li>
                            <li><span class="livideo icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                          </ul>
                        </div>
                        <a href="#" class="gradient-overlay"></a>
                        <div class="color-overlay"></div>
                    </div>
                </a>
            </div>
        </div>
        <hr />

        <div class="row"  style="margin: 10px 0px;" >
            <div class="title">VỀ MÔI TRƯỜNG</div>
        </div>
        <div class="row row-content" style="margin: 0px 20px;">
            <div class="col-md-4">
                <a href="#" class="video-container">
                    <div class="video-card spring-fever">
                        <video  width="750px" height="400px" muted >
                            <source src="./assets/video/rdfl.mp4" type="video/mp4">
                            
                          Your browser does not support the video tag.
                          </video>
                        <div class="video-content">
                          <h3><a class="video-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                        
                        </div>

                        <div class="utility-info">
                          <ul class="utility-list">
                            <li><span class="livideo icon-like"></span><a href="#">2</a></li>
                            <li><span class="livideo icon-com"></span><a href="#">12</a></li>
                            <li><span class="livideo icon-dat"></span>03 jun 2017</li>
                            <li><span class="livideo icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                          </ul>
                        </div>
                        <a href="#" class="gradient-overlay"></a>
                        <div class="color-overlay"></div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="video-container">
                    <div class="video-card spring-fever">
                        <video  width="750px" height="400px" muted >
                            <source src="./assets/video/rdfl.mp4" type="video/mp4">
                            
                          Your browser does not support the video tag.
                          </video>
                        <div class="video-content">
                          <h3><a class="video-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                        
                        </div>

                        <div class="utility-info">
                          <ul class="utility-list">
                            <li><span class="livideo icon-like"></span><a href="#">2</a></li>
                            <li><span class="livideo icon-com"></span><a href="#">12</a></li>
                            <li><span class="livideo icon-dat"></span>03 jun 2017</li>
                            <li><span class="livideo icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                          </ul>
                        </div>
                        <a href="#" class="gradient-overlay"></a>
                        <div class="color-overlay"></div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="video-container">
                    <div class="video-card spring-fever">
                        <video  width="750px" height="400px" muted >
                            <source src="./assets/video/rdfl.mp4" type="video/mp4">
                            
                          Your browser does not support the video tag.
                          </video>
                        <div class="video-content">
                          <h3><a class="video-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                        
                        </div>

                        <div class="utility-info">
                          <ul class="utility-list">
                            <li><span class="livideo icon-like"></span><a href="#">2</a></li>
                            <li><span class="livideo icon-com"></span><a href="#">12</a></li>
                            <li><span class="livideo icon-dat"></span>03 jun 2017</li>
                            <li><span class="livideo icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                          </ul>
                        </div>
                        <a href="#" class="gradient-overlay"></a>
                        <div class="color-overlay"></div>
                    </div>
                </a>
            </div>
        </div>
        <hr />
        <div class="row"  style="margin: 10px 0px;" >
            <div class="title">CÂU CHUYỆN CUỐI TUẦN</div>
        </div>
        <div class="row row-content" style="margin: 0px 20px;">
            <div class="col-md-4">
                <a href="#" class="video-container">
                    <div class="video-card spring-fever">
                        <video  width="750px" height="400px" muted >
                            <source src="./assets/video/rdfl.mp4" type="video/mp4">
                            
                          Your browser does not support the video tag.
                          </video>
                        <div class="video-content">
                          <h3><a class="video-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                        
                        </div>

                        <div class="utility-info">
                          <ul class="utility-list">
                            <li><span class="livideo icon-like"></span><a href="#">2</a></li>
                            <li><span class="livideo icon-com"></span><a href="#">12</a></li>
                            <li><span class="livideo icon-dat"></span>03 jun 2017</li>
                            <li><span class="livideo icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                          </ul>
                        </div>
                        <a href="#" class="gradient-overlay"></a>
                        <div class="color-overlay"></div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="video-container">
                    <div class="video-card spring-fever">
                        <video  width="750px" height="400px" muted >
                            <source src="./assets/video/rdfl.mp4" type="video/mp4">
                            
                          Your browser does not support the video tag.
                          </video>
                        <div class="video-content">
                          <h3><a class="video-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                        
                        </div>

                        <div class="utility-info">
                          <ul class="utility-list">
                            <li><span class="livideo icon-like"></span><a href="#">2</a></li>
                            <li><span class="livideo icon-com"></span><a href="#">12</a></li>
                            <li><span class="livideo icon-dat"></span>03 jun 2017</li>
                            <li><span class="livideo icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                          </ul>
                        </div>
                        <a href="#" class="gradient-overlay"></a>
                        <div class="color-overlay"></div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="video-container">
                    <div class="video-card spring-fever">
                        <video  width="750px" height="400px" muted >
                            <source src="./assets/video/rdfl.mp4" type="video/mp4">
                            
                          Your browser does not support the video tag.
                          </video>
                        <div class="video-content">
                          <h3><a class="video-title" href="#">UNICEF: NHIỀU NƯỚC GIÀU ĐANG GÂY HẠI ĐẾN MÔI TRƯỜNG SỐNG CỦA TRẺ EM TOÀN CẦU</a></h3>
                        
                        </div>

                        <div class="utility-info">
                          <ul class="utility-list">
                            <li><span class="livideo icon-like"></span><a href="#">2</a></li>
                            <li><span class="livideo icon-com"></span><a href="#">12</a></li>
                            <li><span class="livideo icon-dat"></span>03 jun 2017</li>
                            <li><span class="livideo icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                          </ul>
                        </div>
                        <a href="#" class="gradient-overlay"></a>
                        <div class="color-overlay"></div>
                    </div>
                </a>
            </div>
        </div>
        
    </div>
@endsection