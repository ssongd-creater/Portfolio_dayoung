<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creater Ssongd</title>
  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Google font Link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;300;400;600;700;900&display=swap"
    rel="stylesheet">
  <!-- Main Google font Link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&family=Gowun+Dodum&family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
  <!-- Full Page Plugin Link -->
  <link rel="stylesheet" href="/dy_pofol/fullpage_lib/jquery.fullpage.css">
  <!-- Main Style Code Sheet -->
  <link rel="stylesheet" href="/dy_pofol/css/style.css">
  <!-- Media Style Code Sheet -->
  <link rel="stylesheet" href="/dy_pofol/css/media.css">
</head>

<body>

  <?php include $_SERVER["DOCUMENT_ROOT"]."/dy_pofol/include/header.php";?>
  <div id="fullpage">
    <!-- Home Section Html -->
    <section class="home section" data-anchor="home">
      <div class="center">
        <div class="vertical_center">
          <div class="left_wing"><img src="/dy_pofol/img/pngwing.com.png" alt=""></div>
          <div class="main_txt">
            <div class="typing-txt">
              <ul>
                <li>Welcome to my Site</li>
                <li>Do you want to know about me?</li>
                <li>Please Scroll Down :-) </li>
              </ul>
            </div>
            <div class="typing">
              <ul>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
          <div class="right_wing"><img src="/dy_pofol/img/pngwing.com.png" alt=""></div>
        </div>
      </div>
    </section>

    <!-- Iam Section Html -->
    <section class="iam section" data-anchor="1st">
      <div class="center">
        <div class="vertical_center">
          <div class="iam_wrap">
            <div class="main2_contents">
              <div class="main_img">
                <img src="/dy_pofol/img/dayoung.jpg" alt="">
              </div>
            </div>

            <div class="card_btnwrap">
              <div class="card_wrap">
                <div class="main2_fronttxt">
                  <h2>MY PROFILE</h2>
                  <div class="detail_profile">
                    <p><i class="fa fa-asterisk"> </i> ?????? : ?????????(?????????)</p>
                    <p><i class="fa fa-asterisk"> </i> ???????????? : 1991??? 11??? 12???</p>
                    <p class="education">EDUCATION</p>
                    <p><i class="fa fa-asterisk"> </i>??????????????? ????????????????????? ??????(?????? ??? ????????? ??????)</p>
                    <p><i class="fa fa-asterisk"> </i>2021.04.22 - 2021.09.03 ?????????????????????</p>
                    <p><i class="fa fa-asterisk"> </i>????????? ????????????(UI/UX) ????????? ??????(???????????????)_?????????</p>
                    <span>
                      <h3><i class="fa fa-lightbulb-o"></i>?????????, ??????, ????????????<i class="fa fa-lightbulb-o"></i></h3>
                    </span>
                  </div>
                </div>

                <!-- main2_txt card back html -->
                <div class="main2_backtxt">
                  <div class="main2_txt">
                    <h2>MY SKILL</h2>
                    <div class="skill_wrap">
                      <ul class="left_skill">
                        <li><i class="fa fa-asterisk"> </i> <em>HTML</em></li>
                        <div class="skill_bar">
                          <div class="total_bar">
                            <div class="sub_bar html"></div>
                          </div>
                        </div>
                        <li><i class="fa fa-asterisk"> </i><em> CSS</em></li>
                        <div class="skill_bar">
                          <div class="total_bar">
                            <div class="sub_bar css"></div>
                          </div>
                        </div>
                        <li><i class="fa fa-asterisk"> </i><em> JavaScript</em></li>
                        <div class="skill_bar">
                          <div class="total_bar">
                            <div class="sub_bar javascript"></div>
                          </div>
                        </div>
                        <li><i class="fa fa-asterisk"> </i><em> Jquery</em></li>
                        <div class="skill_bar">
                          <div class="total_bar">
                            <div class="sub_bar jquery"></div>
                          </div>
                        </div>
                      </ul>
                      <ul class="right_skill">
                        <li><i class="fa fa-asterisk"> </i><em> PHP</em></li>
                        <div class="skill_bar">
                          <div class="total_bar">
                            <div class="sub_bar php"></div>
                          </div>
                        </div>
                        <li><i class="fa fa-asterisk"> </i><em> PhotoShop</em></li>
                        <div class="skill_bar">
                          <div class="total_bar">
                            <div class="sub_bar photoshop"></div>
                          </div>
                        </div>
                        <li><i class="fa fa-asterisk"> </i><em> Illustrator</em></li>
                        <div class="skill_bar">
                          <div class="total_bar">
                            <div class="sub_bar illustrator"></div>
                          </div>
                        </div>
                      </ul>
                    </div>
                    <!-- End of Skill_wrap Html -->
                    <p>* ??????, ???????????????, ?????? ?????? ??????</p>
                  </div>
                </div>
                <!-- End of Skill Html -->
              </div>
              <div class="skill_btn">
                <button class="skill_flip_btn">View My Skill</button>
              </div>
            </div>
            <!-- End of card_wrap -->


          </div>
        </div>


      </div>
    </section>

    <!-- Web Portpolio Html -->
    <section class="web section" data-anchor="2nd">
      <div class="center">
        <div class="vertical_center">
          <div class="slide slide_1">

            <div class="slide_bg">
              <div class="slide_image">
                <a href="/schedule" target="_blank"><img src="/dy_pofol/img/schedule.gif" alt=""></a>
              </div>
              <div class="slide_txt">
                <div class="txt_box">
                  <h2>Web Portfolio</h2>
                  <p>??????????????? : My Schedule</p>
                  <p>?????? ?????? : HTML / CSS / JavaScript / jQuery / PHP </p>
                  <p>??????????????? : easypiechart / lightslider</p>
                  <p>???????????? : " 1440 "</p>
                  <p class="star">????????? : <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star-half-empty"></i><i class="fa fa-star-o"></i></p>
                  <div class="slide_button">
                    <a href="/schedule" target="_blank"><button>View Site</button></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="slide  slide_2">
            <div class="slide_bg">
              <div class="slide_image">
                <a href="/reveal" target="_blank"><img src="/dy_pofol/img/reveal.gif" alt=""></a>
              </div>
              <div class="slide_txt">
                <div class="txt_box">
                  <h2>Web Portfolio</h2>
                  <p>??????????????? : Reveal</p>
                  <p>?????? ?????? : HTML / CSS / JavaScript / jQuery / PHP</p>
                  <p>??????????????? : owlcarousel / venobox / wow</p>
                  <p class="star">????????? : <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star-half-empty"></i><i class="fa fa-star-o"></i></p>
                  <div class="slide_button">
                    <a href="/reveal" target="_blank"><button>View Site</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slide  slide_3">
            <div class="slide_bg">
              <div class="slide_image">
                <a href="/renewal" target="_blank"><img src="/dy_pofol/img/lush.gif" alt=""></a>
              </div>
              <div class="slide_txt">
                <div class="txt_box">
                  <h2>Web Portfolio</h2>
                  <p>??????????????? : LUSH Renewal</p>
                  <p>?????? ?????? : HTML / CSS / JavaScript / jQuery</p>
                  <p>??????????????? : slickslider</p>
                  <p class="star">????????? : <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star-half-empty"></i></p>
                  <div class="slide_button">
                    <a href="/renewal" target="_blank"><button>View Site</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slide  slide_4">
            <div class="slide_bg">
              <div class="slide_image">
                <a href="/lbcamp" target="_blank"><img src="/dy_pofol/img/lb_camp.gif" alt=""></a>
              </div>
              <div class="slide_txt">
                <div class="txt_box">
                  <h2>Web Portfolio</h2>
                  <p>??????????????? : API / Camping App (Iphone5/SE)</p>
                  <p>?????? ?????? : HTML / CSS / jQuery</p>
                  <p>??????????????? : ????????????</p>
                  <p class="star">????????? : <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star-half-empty"></i><i class="fa fa-star-o"></i></p>
                  <div class="slide_button">
                    <a href="https://www.dabipyeung.com/APIProject/dayeung/lbcamp" target="_blank"><button>View
                        Site</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slide  slide_5">
            <div class="slide_bg">
              <div class="slide_image">
                <a href="/renewal_mammoth" target="_blank"><img src="/dy_pofol/img/mammoth.gif" alt=""></a>
              </div>
              <div class="slide_txt">
                <div class="txt_box">
                  <h2>Web Portfolio</h2>
                  <p>??????????????? : Mammoth Renewal</p>
                  <p>?????? ?????? : HTML / CSS / jQuery </p>
                  <p>??????????????? : fullpage</p>
                  <p class="star">????????? : <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star-half-empty"></i></p>
                  <div class="slide_button">
                    <a href="/renewal_mammoth" target="_blank"><button>View Site</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slide  slide_6">
            <div class="slide_bg">
              <div class="slide_image">
                <a href="/renewal_beksul" target="_blank"><img src="/dy_pofol/img/beksul.gif" alt=""></a>
              </div>
              <div class="slide_txt">
                <div class="txt_box">
                  <h2>Web Portfolio</h2>
                  <p>??????????????? : Beksul Renewal</p>
                  <p>?????? ?????? : HTML / CSS / jQuery</p>
                  <p>??????????????? : lightslider</p>
                  <p class="star">????????? : <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i></p>
                  <div class="slide_button">
                    <a href="/renewal_beksul" target="_blank"><button>View Site</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slide  slide_7">
            <div class="slide_bg">
              <div class="slide_image">
                <a href="/dy_pofol" target="_blank"><img src="/dy_pofol/img/pofol.gif" alt=""></a>
              </div>
              <div class="slide_txt">
                <div class="txt_box">
                  <h2>Web Portfolio</h2>
                  <p>??????????????? : My portfolio</p>
                  <p>?????? ?????? : HTML / CSS / JavaScript / jQuery / PHP </p>
                  <p>??????????????? : fullpage</p>
                  <p class="star">????????? : <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i></p>
                  <div class="slide_button">
                    <a href="/dy_pofol" target="_blank"><button>View Site</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- PS & AI Porfolio Html  -->
    <section class="psai section" data-anchor="3rd">
      <div class="center">
        <div class="vertical_center">
          <div class="pgnum_4wrap">
            <div class="punum_4_mainbox">
              <div class="ps_aiwrap">
                <section class="imgbox active">
                  <div class="inner"></div>
                </section>
                <section class="imgbox">
                  <div class="inner"></div>
                </section>
                <section class="imgbox">
                  <div class="inner"></div>
                </section>
                <section class="imgbox">
                  <div class="inner"></div>
                </section>
                <section class="imgbox">
                  <div class="inner"></div>
                </section>
                <section class="imgbox">
                  <div class="inner"></div>
                </section>
                <section class="imgbox">
                  <div class="inner"></div>
                </section>
                <section class="imgbox">
                  <div class="inner"></div>
                </section>
                <section class="imgbox">
                  <div class="inner"></div>
                </section>
                <section class="imgbox">
                  <div class="inner"></div>
                </section>
                <section class="imgbox">
                  <div class="inner"></div>
                </section>
                <section class="imgbox">
                  <div class="inner"></div>
                </section>
                <section class="imgbox">
                  <div class="inner"></div>
                </section>
                <section class="imgbox">
                  <div class="inner"></div>
                </section>
                <section class="imgbox">
                  <div class="inner"></div>
                </section>
                <section class="imgbox">
                  <div class="inner"></div>
                </section>
              </div>
              <!-- End of ps_aiwrap -->
              <div class="ps_aitxt">
                <div class="psai_txt">
                  <h2>My PS & AI</h2>
                  <p class="more_photo"><i class="fa fa-asterisk"> </i> ????????? ????????? ???????????? ?????? ??? ?????? ???????????? ?????? ??? ????????????.</p>
                  <p><i class="fa fa-asterisk"> </i> ????????????, ????????????, ???????????????, ????????????</p>
                  <p> - ???????????? ???????????????????????? ???????????? ???????????? ??????????????????.</p>
                  <p> - ?????? ????????? ??? ?????? ??????????????? ?????? ????????? ??????????????? :-)</p>

                  <button type="button" class="view_img">????????? ??????</button>
                </div>
              </div>
            </div>
            <!-- End of punum_4_mainbox -->
          </div>
        </div>

      </div>
      <!-- End of Center -->
    </section>
    <section class="planning section" data-anchor="4rd">
      <div class="center">
        <div class="vertical_center">
          <div class="plan_txt">
            <h2>?????? ?????? + ????????? ????????? ????????? ???????????? ???????????????.<br>
              <p>???????????? ????????? pdf??? ?????? ?????????????????? :-)</p>
            </h2>
          </div>
          <div id="wrapper">
            <div class="container">
              <ul class="accordion">
                <li class="item">
                  <h2 class="item_title">???????????? <span class="accIcon"></span></h2>
                  <img src="/dy_pofol/img/planning/planning2.png" alt="" class="item_img">
                </li>
                <li class="item">
                  <h2 class="item_title">???????????? <span class="accIcon"></span></h2>
                  <img src="/dy_pofol/img/planning/planning3.png" alt="" class="item_img">
                </li>
                <li class="item">
                  <h2 class="item_title">???????????? <span class="accIcon"></span></h2>
                  <img src="/dy_pofol/img/planning/planning6.png" alt="" class="item_img">
                </li>
                <li class="item">
                  <h2 class="item_title">?????? ????????? <span class="accIcon"></span></h2>
                  <img src="/dy_pofol/img/planning/planning9.png" alt="" class="item_img">
                </li>
                <li class="item">
                  <h2 class="item_title">????????? ????????? ?????? <span class="accIcon"></span></h2>
                  <img src="/dy_pofol/img/planning/planning11.png" alt="" class="item_img">
                </li>
                <li class="item">
                  <h2 class="item_title">SWOT ?????? <span class="accIcon"></span></h2>
                  <img src="/dy_pofol/img/planning/planning15.png" alt="" class="item_img">
                </li>
                <li class="item">
                  <h2 class="item_title">????????? ?????? <span class="accIcon"></span></h2>
                  <img src="/dy_pofol/img/planning/planning16.png" alt="" class="item_img">
                </li>
                <li class="item">
                  <h2 class="item_title">????????? ?????? <span class="accIcon"></span></h2>
                  <img src="/dy_pofol/img/planning/planning21.png" alt="" class="item_img">
                </li>
                <li class="item">
                  <h2 class="item_title">????????? ????????? <span class="accIcon"></span></h2>
                  <img src="/dy_pofol/img/planning/planning24.png" alt="" class="item_img">
                </li>
                <li class="item">
                  <h2 class="item_title">????????? ?????? <span class="accIcon"></span></h2>
                  <img src="/dy_pofol/img/planning/planning27.png" alt="" class="item_img show">
                </li>
              </ul>
            </div>
            <!-- End of Accordion -->
            <div class="plan_btn">
              <a href="/dy_pofol/img/planning/planning_ssongd.pdf" target="_blank"><button><i
                    class="fa fa-folder-open-o"></i> PDF
                  Download</button></a>
            </div>
          </div>
          <!-- End of Wrapper -->
          <div class="sub_wrapper">
            <div class="plnning_txt">
              <p>?????? ????????????<br><span>
                  <i class="fa fa-paw"></i> ????????????
                </span></p>
            </div>
            <div class="sub_imgwrap">
              <span></span>
              <p>?????? ?????? ????????? ????????? Web?????? ?????????????????? :-)</p>
              <img src="/dy_pofol/img/planning/planning2.png" alt="">
            </div>
            <div class="sub_imgwrap">
              <p><i class="fa fa-paw"></i></p>
              <img src="/dy_pofol/img/planning/planning3.png" alt="">
            </div>
            <div class="sub_imgwrap">
              <p><i class="fa fa-paw"></i></p>
              <img src="/dy_pofol/img/planning/planning6.png" alt="">
            </div>
            <div class="sub_imgwrap">
              <p><i class="fa fa-paw"></i></p>
              <img src="/dy_pofol/img/planning/planning9.png" alt="">
            </div>
            <div class="sub_imgwrap">
              <p><i class="fa fa-paw"></i></p>
              <img src="/dy_pofol/img/planning/planning11.png" alt="">
            </div>
            <div class="sub_imgwrap">
              <p><i class="fa fa-paw"></i></p>
              <img src="/dy_pofol/img/planning/planning15.png" alt="">
            </div>
            <div class="sub_imgwrap">
              <p><i class="fa fa-paw"></i></p>
              <img src="/dy_pofol/img/planning/planning16.png" alt="">
            </div>
            <div class="sub_imgwrap">
              <p><i class="fa fa-paw"></i></p>
              <img src="/dy_pofol/img/planning/planning21.png" alt="">
            </div>
            <div class="sub_imgwrap">
              <p><i class="fa fa-paw"></i></p>
              <img src="/dy_pofol/img/planning/planning24.png" alt="">
            </div>
            <div class="sub_imgwrap">
              <p><i class="fa fa-paw"></i></p>
              <img src="/dy_pofol/img/planning/planning27.png" alt="">
            </div>
          </div>

        </div>
      </div>
    </section>

    <?php include $_SERVER["DOCUMENT_ROOT"]."/dy_pofol/pages/community_form.php"; ?>
    </section>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/dy_pofol/js/submain.js"></script>
    <script src="/dy_pofol/fullpage_lib/jquery.fullpage.js"></script>
    <script src="/dy_pofol/fullpage_lib/jquery.fullpage.extensions.min.js"></script>
</body>

</html>