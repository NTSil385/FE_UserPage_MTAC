@extends('layouts.client')
@section('content')
     <div class="body">
        <div class="row"  style="margin-top: 10px;" >
            <div class="title">TIN TỨC </div>
        </div>
        <div class="row">
            <div class="col-md-1" style="margin-top: 205px;">
              <ul class="example-2">
                <li class="icon-content">
                  <a
                    href="https://linkedin.com/"
                    aria-label="LinkedIn"
                    data-social="linkedin"
                    title="Chia sẻ lên LinkedIn"
                  >
                    <div class="filled"></div>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-linkedin"
                      viewBox="0 0 16 16"
                      xml:space="preserve"
                    >
                      <path
                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </a>
                
                </li>
                <li class="icon-content">
                  <a href="https://www.facebook.com/" aria-label="Facebook" data-social="facebook" title="Chia sẻ lên Facebook">
                    <div class="filled"></div>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="1em"
                    height="1.1em"
                    viewBox="0 0 448 512"
                    stroke-width="0"
                    fill="currentColor"
                    stroke="currentColor"
                    class="w-5"
                  >
                    <path
                      d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"
                    ></path>
                  </svg>
                  </a>
                 
                </li>
                <li class="icon-content">
                  <a
                    href="https://www.instagram.com/"
                    aria-label="Instagram"
                    data-social="instagram"
                    title="Chia sẻ lên Instagram"
                  >
                    <div class="filled"></div>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-instagram"
                      viewBox="0 0 16 16"
                      xml:space="preserve"
                    >
                      <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </a>
                  
                </li>
                <li class="icon-content">
                  <a href="https://youtube.com/" aria-label="Youtube" data-social="youtube" title="Chia sẻ lên Youtube">
                    <div class="filled"></div>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-youtube"
                      viewBox="0 0 16 16"
                      xml:space="preserve"
                    >
                      <path
                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </a>
                  
                </li>
                <li class="icon-content">
                  <a href="#" aria-label="Save" data-social="save" title="Lưu lại bài viết">
                    <div class="filled"></div>
                    <svg class="save-regular" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"></path></svg>
                  </a>
                  
                </li>
                <li class="icon-content">
                  <a href="#" aria-label="Comment" data-social="comment" title="Để lại bình luận">
                    <div class="filled"></div>
                    <svg
      stroke-linejoin="round"
      stroke-linecap="round"
      stroke="currentColor"
      stroke-width="2"
      viewBox="0 0 24 24"
      height="44"
      width="44"
      xmlns="http://www.w3.org/2000/svg"
      class="w-8 hover:scale-125 duration-200 hover:stroke-blue-500"
      fill="none"
    >
      <path fill="none" d="M0 0h24v24H0z" stroke="none"></path>
      <path d="M8 9h8"></path>
      <path d="M8 13h6"></path>
      <path
        d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"
      ></path>
    </svg>
                  </a>
                  
                </li>
              </ul>
              
            </div>
            <div class="col-md-6">
                <div class="detail-blog">
                    <div class="detail">
                        <div class="title-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus aliquam excepturi minus consequatur mollitia nobis minima dignissimos aut inventore iste, doloremque repellendus, nemo architecto officia non tempore temporibus itaque repellat.</div>
                        <div class="sub-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita placeat iusto soluta dolorem quasi ex. Rerum nam quod, ea laborum repellendus consequatur voluptas ullam. Saepe repudiandae itaque minus culpa adipisci!</div>
                        <div class="img-detail">
                          <img src="home/img/EPR_pin.png" alt="" srcset="">
                        </div>
                        <div class="content-detail">
                         <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis tempus elit, non vehicula sapien. Aenean egestas enim sapien, fringilla varius libero dictum vel. Nulla tincidunt felis ut bibendum convallis. Curabitur vitae est ex. Maecenas dapibus sagittis arcu sed vulputate. Sed luctus blandit dolor, a ornare enim ornare at. Proin eget mollis sem, id dignissim justo. Nam vitae porta tellus. Maecenas aliquet augue vel aliquet malesuada.
                          Vestibulum sodales dapibus turpis, vel tincidunt dolor ultricies scelerisque. Cras lobortis, neque at finibus euismod, massa eros tempor felis, sit amet feugiat tortor turpis id orci. Aliquam vel nunc tellus. Integer nec neque orci. Donec tincidunt vestibulum erat, in laoreet libero tempor vitae. Pellentesque cursus, metus in egestas iaculis, magna leo consectetur dolor, vel tempor lacus sapien tristique libero. Morbi eu mi eu urna consectetur fringilla.
                          Proin vitae nulla nec libero aliquam tincidunt.
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et risus id dui ullamcorper placerat in in justo. Donec aliquam turpis ante, sollicitudin egestas dui placerat ac. Quisque varius pulvinar enim id blandit. Suspendisse potenti. In iaculis volutpat luctus.
                          Pellentesque luctus, quam a posuere finibus, lorem odio venenatis lectus, at congue lorem neque ut purus. Ut ante velit, pharetra vitae interdum ac, aliquam sed lorem. Curabitur at vestibulum velit, vitae pulvinar nulla. Duis dapibus volutpat egestas. Nullam felis tellus, maximus vitae ultricies nec, pellentesque sed tortor. Phasellus nisi metus, tristique quis mattis a, dictum at lorem. Aliquam ultricies ipsum nulla, facilisis consequat lectus gravida non. Morbi a erat turpis. Duis venenatis mauris nec tempor sollicitudin. Quisque nec velit lectus.
                          Suspendisse accumsan libero in felis fringilla, in accumsan nunc tincidunt. Praesent commodo rutrum tristique. Etiam faucibus ornare dui, sed ultrices purus placerat quis. Suspendisse potenti. Nunc commodo sapien quis mauris ullamcorper, ut condimentum urna aliquet. Nunc viverra congue ipsum, nec laoreet ligula fermentum sit amet. Mauris varius odio sit amet felis lacinia, vitae hendrerit nisi posuere. Cras at lorem in mauris convallis laoreet et eu nisl. Donec vestibulum urna lectus, ac imperdiet nibh luctus sit amet. Mauris porta volutpat mi, ut rhoncus enim malesuada eu. Nulla interdum tincidunt risus sed tristique. Donec suscipit varius volutpat. Praesent iaculis mi erat, nec tincidunt lectus sagittis non. Nulla posuere suscipit ante, sit amet bibendum quam commodo egestas. Vestibulum id arcu a metus eleifend eleifend.
                      </p>
          
                      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis tempus elit, non vehicula sapien. Aenean egestas enim sapien, fringilla varius libero dictum vel. Nulla tincidunt felis ut bibendum convallis. Curabitur vitae est ex. Maecenas dapibus sagittis arcu sed vulputate. Sed luctus blandit dolor, a ornare enim ornare at. Proin eget mollis sem, id dignissim justo. Nam vitae porta tellus. Maecenas aliquet augue vel aliquet malesuada.
                          Vestibulum sodales dapibus turpis, vel tincidunt dolor ultricies scelerisque. Cras lobortis, neque at finibus euismod, massa eros tempor felis, sit amet feugiat tortor turpis id orci. Aliquam vel nunc tellus. Integer nec neque orci. Donec tincidunt vestibulum erat, in laoreet libero tempor vitae. Pellentesque cursus, metus in egestas iaculis, magna leo consectetur dolor, vel tempor lacus sapien tristique libero. Morbi eu mi eu urna consectetur fringilla.
                          Proin vitae nulla nec libero aliquam tincidunt.
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et risus id dui ullamcorper placerat in in justo. Donec aliquam turpis ante, sollicitudin egestas dui placerat ac. Quisque varius pulvinar enim id blandit. Suspendisse potenti. In iaculis volutpat luctus.
                          Pellentesque luctus, quam a posuere finibus, lorem odio venenatis lectus, at congue lorem neque ut purus. Ut ante velit, pharetra vitae interdum ac, aliquam sed lorem. Curabitur at vestibulum velit, vitae pulvinar nulla. Duis dapibus volutpat egestas. Nullam felis tellus, maximus vitae ultricies nec, pellentesque sed tortor. Phasellus nisi metus, tristique quis mattis a, dictum at lorem. Aliquam ultricies ipsum nulla, facilisis consequat lectus gravida non. Morbi a erat turpis. Duis venenatis mauris nec tempor sollicitudin. Quisque nec velit lectus.
                          Suspendisse accumsan libero in felis fringilla, in accumsan nunc tincidunt. Praesent commodo rutrum tristique. Etiam faucibus ornare dui, sed ultrices purus placerat quis. Suspendisse potenti. Nunc commodo sapien quis mauris ullamcorper, ut condimentum urna aliquet. Nunc viverra congue ipsum, nec laoreet ligula fermentum sit amet. Mauris varius odio sit amet felis lacinia, vitae hendrerit nisi posuere. Cras at lorem in mauris convallis laoreet et eu nisl. Donec vestibulum urna lectus, ac imperdiet nibh luctus sit amet. Mauris porta volutpat mi, ut rhoncus enim malesuada eu. Nulla interdum tincidunt risus sed tristique. Donec suscipit varius volutpat. Praesent iaculis mi erat, nec tincidunt lectus sagittis non. Nulla posuere suscipit ante, sit amet bibendum quam commodo egestas. Vestibulum id arcu a metus eleifend eleifend.
                      </p>
                      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis tempus elit, non vehicula sapien. Aenean egestas enim sapien, fringilla varius libero dictum vel. Nulla tincidunt felis ut bibendum convallis. Curabitur vitae est ex. Maecenas dapibus sagittis arcu sed vulputate. Sed luctus blandit dolor, a ornare enim ornare at. Proin eget mollis sem, id dignissim justo. Nam vitae porta tellus. Maecenas aliquet augue vel aliquet malesuada.
                          Vestibulum sodales dapibus turpis, vel tincidunt dolor ultricies scelerisque. Cras lobortis, neque at finibus euismod, massa eros tempor felis, sit amet feugiat tortor turpis id orci. Aliquam vel nunc tellus. Integer nec neque orci. Donec tincidunt vestibulum erat, in laoreet libero tempor vitae. Pellentesque cursus, metus in egestas iaculis, magna leo consectetur dolor, vel tempor lacus sapien tristique libero. Morbi eu mi eu urna consectetur fringilla.
                          Proin vitae nulla nec libero aliquam tincidunt.
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et risus id dui ullamcorper placerat in in justo. Donec aliquam turpis ante, sollicitudin egestas dui placerat ac. Quisque varius pulvinar enim id blandit. Suspendisse potenti. In iaculis volutpat luctus.
                          Pellentesque luctus, quam a posuere finibus, lorem odio venenatis lectus, at congue lorem neque ut purus. Ut ante velit, pharetra vitae interdum ac, aliquam sed lorem. Curabitur at vestibulum velit, vitae pulvinar nulla. Duis dapibus volutpat egestas. Nullam felis tellus, maximus vitae ultricies nec, pellentesque sed tortor. Phasellus nisi metus, tristique quis mattis a, dictum at lorem. Aliquam ultricies ipsum nulla, facilisis consequat lectus gravida non. Morbi a erat turpis. Duis venenatis mauris nec tempor sollicitudin. Quisque nec velit lectus.
                          Suspendisse accumsan libero in felis fringilla, in accumsan nunc tincidunt. Praesent commodo rutrum tristique. Etiam faucibus ornare dui, sed ultrices purus placerat quis. Suspendisse potenti. Nunc commodo sapien quis mauris ullamcorper, ut condimentum urna aliquet. Nunc viverra congue ipsum, nec laoreet ligula fermentum sit amet. Mauris varius odio sit amet felis lacinia, vitae hendrerit nisi posuere. Cras at lorem in mauris convallis laoreet et eu nisl. Donec vestibulum urna lectus, ac imperdiet nibh luctus sit amet. Mauris porta volutpat mi, ut rhoncus enim malesuada eu. Nulla interdum tincidunt risus sed tristique. Donec suscipit varius volutpat. Praesent iaculis mi erat, nec tincidunt lectus sagittis non. Nulla posuere suscipit ante, sit amet bibendum quam commodo egestas. Vestibulum id arcu a metus eleifend eleifend.
                      </p>
                        </div>
                    </div>
                    <div class="rate">
                        <div class="vote">
                            <label for="">Đánh giá:</label>
                            <div class="rating">
                                <input value="5" name="rating" id="star5" type="radio">
                                <label for="star5"></label>
                                <input value="4" name="rating" id="star4" type="radio">
                                <label for="star4"></label>
                                <input value="3" name="rating" id="star3" type="radio">
                                <label for="star3"></label>
                                <input value="2" name="rating" id="star2" type="radio">
                                <label for="star2"></label>
                                <input value="1" name="rating" id="star1" type="radio">
                                <label for="star1"></label>
                              </div>
                              
                        </div>
                        <div class="box-share">
                            <i class="fa-solid fa-share"></i>
                            <label for="" style="margin-left: 10px;">Chia sẻ</label>
    
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
            <div class="col-md-4">
              <div class="list-blog">
                <a href="#" class="list-item">
                    <div class="list-box">
                      <img class="list-img" src="https://via.placeholder.com/100x100" alt="">
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
                    <img class="list-img" src="https://via.placeholder.com/100x100" alt="">
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
                  <img class="list-img" src="https://via.placeholder.com/100x100" alt="">
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
                <img class="list-img" src="https://via.placeholder.com/100x100" alt="">
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