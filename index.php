<?php include 'header.php';?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css">
<style>
   /**********************
   slick slider
   ***********************/
   .slick-dots {
   text-align: center;
   margin: 0 0 10px 0;
   padding: 15px;
   }
   .slick-dots li {
   display: inline-block;
   margin-left: 4px;
   margin-right: 4px;
   }
   .slick-dots li.slick-active button {
   border: 1px solid #1b405b !important;
   }
   .slick-dots li button {
   font: 0/0 a;
   text-shadow: none;
   color: transparent;
   background-color: #486b99;
   border: none;
   width: 6px;
   height: 12px;
   border-radius: 50%;
   }
   /* Custom Arrow */
   .prev-button-home {
   color: #999;
   position: absolute;
   top: 40%;
   left: -25px;
   font-size: 1.5em;
   background-image: url(img/arrow_2.png);
   width: 27px;
   height: 18px;
   border: none;
   background-color: transparent;
   outline: none !important;
   }
   .prev-button-home :hover {
   cursor: pointer;
   color: black;
   }
   .next-button-home {
   color: #999;
   position: absolute;
   top: 40%;
   font-size: 1.5em;
   background-image: url(img/arrow_1.png);
   right: -25px;
   width: 28px;
   height: 18px;
   border: none;
   background-color: transparent;
   outline: none !important;
   }
   .next-button-home :hover {
   cursor: pointer;
   color: black;
   }
</style>
<section class="main-slider">
   <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
   <!-- Indicators -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
   </ol>
   <!-- Carousel items -->
   <div class="carousel-inner">
      <!-- Slide 1 : Active -->
      <div class="item active">
         <img src="img/Banner.jpg" alt="">
         <div class="carousel-caption">
            <p class="bannerTxt">People Inspired<br> Spaces</p>
         </div>
         <!-- /.carousel-caption -->
      </div>
      <!-- /Slide1 -->
      <!-- Slide 2 : Active -->
      <div class="item">
         <img src="img/Banner-7.jpg" alt="">
         <div class="carousel-caption">
            <!--<p class="bannerTxt">People Inspired<br> Spaces</p>-->
         </div>
         <!-- /.carousel-caption -->
      </div>
      <!-- /Slide2 -->
      <!-- Slide 3 : Active -->
      <div class="item">
         <img src="img/Banner-5.jpg" alt="">
         <div class="carousel-caption">
            <!--<p class="bannerTxt">People Inspired<br> Spaces</p>-->
         </div>
         <!-- /.carousel-caption -->
      </div>
      <!-- /Slide3 -->
      <!-- Slide 4 : Active -->
      <div class="item">
         <img src="img/Banner-6.jpg" alt="">
         <div class="carousel-caption">
            <!--<p class="bannerTxt">People Inspired<br> Spaces</p>-->
         </div>
         <!-- /.carousel-caption -->
      </div>
      <!-- /Slide4 -->
      <!-- Slide 5 -->
      <div class="item">
         <img src="img/Banner-1.jpg" alt="">
         <div class="carousel-caption">
            <p class="bannerTxt">More Inspired<br> Spaces</p>
         </div>
         <!-- /.carousel-caption -->
      </div>
      <!-- /Slide5 -->
      <!-- Slide 6 -->
      <div class="item">
         <img src="img/Banner-2.jpg" alt="">
         <div class="carousel-caption">
            <p class="bannerTxt">Adding Value<br> through Life<br> - Enhancing Elements</p>
         </div>
         <!-- /.carousel-caption -->
      </div>
      <!-- /Slide6 -->
      <!-- Slide 7 -->
      <div class="item">
         <img src="img/Banner-3.jpg" alt="">
         <div class="carousel-caption">
            <p class="bannerTxt">Delivering More Than<br> A Home</p>
         </div>
         <!-- /.carousel-caption -->
      </div>
      <!-- /Slide7 -->
      <!-- Slide 8 -->
      <div class="item">
         <img src="img/Banner-4.jpg" alt="">
         <div class="carousel-caption">
            <p class="bannerTxt">Spaces that Enrich<br>  and Transform</p>
         </div>
         <!-- /.carousel-caption -->
      </div>
      <!-- /Slide8 -->
      <!-- Controls -->
      <div class="control-box">
         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
         <span class="control-icon prev fa fa-chevron-left" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
         <span class="control-icon next fa fa-chevron-right" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
         <div class="clearfix"></div>
      </div>
      <!-- /.control-box -->
      <div class="clearfix"></div>
   </div>
   <!-- /#myCarousel -->
</section>
<!-- /.main-slider -->
<!-- Banner end Hrere -->
<!---Counter-->
<div class="below-banner-section">
   <div class="content-div" id="">
      <div class="numbers-div border-ryt">
         <div class="number-content">
            <h1>50+</h1>
         </div>
         <div class="number-content">
            <p>YEARS<br>OF TRUST</p>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="numbers-div border-ryt">
         <div class="number-content">
            <h1>15+</h1>
         </div>
         <div class="number-content">
            <p>GLOBAL<br>AWARDS</p>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="numbers-div border-ryt">
         <div class="number-content">
            <h1>7500+</h1>
         </div>
         <div class="number-content">
            <p class="marg-left">HAPPY<br>FAMILIES</p>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="numbers-div">
         <div class="number-content">
            <h1>150+</h1>
         </div>
         <div class="number-content">
            <p>ACRES OF <br>DEVELOPMENT</p>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
   </div>
</div>
<!--Delivered Projects-->
<div class="deliver_main">
   <div class="container_main bg-3 text-center wow fadeIn" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">
      <div class="main_title_deliver">
         <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
         <div class="liveHead" data-aos="fade-down" data-aos-duration="3000">OUR LIVING SPACES</div>
         <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">About JP Infra</h1>
         <div class="liveHead2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
            <p>A company that has always believed in following a contemporary and comprehensive approach, JP Infra has grown and continues to grow at a rapid pace. JP Infra promises its residents international standards of living with state-of-the-art amenities to provide the ultimate living experience.</p>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="row about_us">
         <div class="col-del1  text-right" data-aos="fade-up" data-aos-duration="3000">
            <img class="o8_img img-responsive" src="img/06.png" alt="Image">
            <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimagedeliver"></div>
            <div class="liveHead1" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">Delivered Projects</div>
            <div class="clearfix"></div>
         </div>
         <div class="col-del2 text-left">
            <div id="myCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="item active">
                     <img class="liveSlideImg" src="img/JP-Decks.jpg" alt="Los Angeles">
                     <div class="btmDiv">
                        <span class="horLine1"></span>
                        <div class="btmPname">JP DECKS</div>
                        <div class="btmMore"> Know More -</div>
                        <div class="clearfix"></div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div class="item">
                     <img class="liveSlideImg" src="img/Celeste.jpg" alt="Chicago">
                     <div class="btmDiv">
                        <span class="horLine1"></span>
                        <div class="btmPname">CELESTE</div>
                        <div class="btmMore"> Know More -</div>
                        <div class="clearfix"></div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div class="item">
                     <img class="liveSlideImg" src="img/North-Atria.jpg" alt="New York">
                     <div class="btmDiv">
                        <span class="horLine1"></span>
                        <div class="btmPname">NORTH-ATRIA</div>
                        <div class="btmMore"> Know More -</div>
                        <div class="clearfix"></div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div class="item">
                     <img class="liveSlideImg" src="img/North-Estella.jpg" alt="New York">
                     <div class="btmDiv">
                        <span class="horLine1"></span>
                        <div class="btmPname">NORTH-ESTELLA</div>
                        <div class="btmMore"> Know More -</div>
                        <div class="clearfix"></div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <ol class="carousel-indicators indi1">
                  <li data-target="#myCarousel1" data-slide-to="0" class="active">
                     <div class="dot"></div>
                  </li>
                  <li data-target="#myCarousel1" data-slide-to="1">
                     <div class="dot"></div>
                  </li>
                  <li data-target="#myCarousel1" data-slide-to="2">
                     <div class="dot"></div>
                  </li>
                  <li data-target="#myCarousel1" data-slide-to="3">
                     <div class="dot"></div>
                  </li>
               </ol>
               <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
   </div>
   <div class="clearfix"></div>
</div>
<!--Sustainability-->
<section class="sustainability">
   <div class="home-boundries">
      <div class="container_main">
         <div class="sus_main">
            <div class="home-boundries-img">
               <img src="img/Pushing-Boundries.png">
            </div>
            <div class="home-boundries-txt">
               <div class="line-homepage">
                  <img src="img/Gray-Head-line.png" class="northimage">
               </div>
               <div class="boundries-liveHead2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                  <h5 class="left_para">building responsibly</h5>
               </div>
               <div class="bg-3 text-center wow fadeIn boundaries-h1" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">
                  <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">pushing boundaries</h1>
                  <div class="boundries-liveHead2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                     <p>A company that has always believed in following a contemporary and comprehensive approach, JP Infra has grown and continues to grow at a rapid pace</p>
                  </div>
               </div>
               <div class="btn_more_pro">
                  <p>KNOW MORE</p>
                  <img src="img/arrow1.png" class="arrow_button_css" alt="arrow">
                  <div class="clearfix"></div>
               </div>
               <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
   </div>
</section>
<!-- JP North code  starts Hrere -->
<section class="banner-north">
   <h1 class="banner-title" data-aos="zoom-in-down" data-aos-duration="2000">JP North - A Lifestyle</h1>
   <P class="banner-subtitle1" data-aos="zoom-in-down" data-aos-duration="2000">TRANSFORMING MIRA ROAD</P>
   <p class="banner-subtitle" data-aos="zoom-in-down" data-aos-duration="2000">A breathtaking mélange of architecture & nature, JP North aims to provide a wholesome and elegant lifestyle. Be it quality education or a trendy cafe to unwind at, JP North has got all your needs covered at Mira Road. Designed for excellence, JP North’s extensive list of amenities and attention to details is what makes it the dream home to live in.
   </p>
   <button class="btn"><span class="arrow"></span> KNOW MORE</button>
   <img class="skiing" src="" alt="">
</section>
<!-- Projects starts Hrere -->
<div id="project" class="main_section">
   <div class="container_main">
      <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
      <h4 data-aos="fade-up" data-aos-duration="3000">Future Living, Today</h4>
      <h1 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">Other Projects</h1>
      <p class="pr_cntr_p" data-aos="fade-up" data-aos-duration="3000">To us, home is not just a place but also a feeling. We believe in building homes that enhance your living space as well as your lifestyle. Nestled amongst greenery, we feel that healthy homes are happy homes.</p>
      <div class="project">
         <div class="pr_tab">
            <button type="button" class="btn btn-transprant pr_tb_ongoing btn-primary"><img src="img/arrow1.png" class="arrow_button" alt="arrow">Ongoing</button>
            <button type="button" class="btn btn-transprant pr_tb_ready_to_move"><img src="img/arrow1.png" class="arrow_button" alt="arrow">Ready To Move</button>
         </div>
         <div class="pr_cont_slider">
            <!-- Ongoing -->
            <div class="pr_showcase" id="hProngoing">
               <div id="ongoing" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                     <li data-target="#ongoing" data-slide-to="0" class="active"></li>
                     <li data-target="#ongoing" data-slide-to="1"></li>
                     <li data-target="#ongoing" data-slide-to="2"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                     <div class="item active">
                        <div class="col_pr_txt_img">
                           <div class="pr_sl_img" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                              <img class="d-block w-100" src="img/pro-northgarden.jpg" alt="Jp Infra">
                           </div>
                           <div class="pr_sl_txt" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                              <h5>2018</h5>
                              <h3>North Garden City</h3>
                              <h4 class="projects_h4">22+ ACRES IN THE HEART OF MIRA ROAD</h4>
                              <p>Harmonizing nature, luxuries and convenience across a 22+ acres area, North Garden City provides a grand lifestyle. Well-connected and equipped with the latest amenities, Mira Road’s North Garden City offers homes loved by one & all.</p>
                              <button type="button" class="btn_more_other"><img src="img/arrow1.png" class="arrow_button" alt="arrow">KNOW MORE</button>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="col_pr_txt_img">
                           <div class="pr_sl_img">
                              <img class="d-block w-100" src="img/pro-northgarden.jpg" alt="Jp Infra">
                           </div>
                           <div class="pr_sl_txt">
                              <h5>2018</h5>
                              <h3>Codename Hotcake</h3>
                              <h4 class="projects_h4">OPEN PAYMENT PLANS - YOUR HOUSE, YOUR CHOICE</h4>
                              <p>Smartly planned, with every brick crafted to perfection, Codename Hotcake is styled to fulfil every need of your dream home. Equipped with the latest technology and necessities close at hand, Codename Hotcake aspires to make the experience at Mira Road better than your dreams.</p>
                              <button type="button" class="btn_more_other"><img src="img/arrow1.png" class="arrow_button" alt="arrow">KNOW MORE</button>					
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="col_pr_txt_img">
                           <div class="pr_sl_img">
                              <img class="d-block w-100" src="img/pro-northgarden.jpg" alt="Jp Infra">
                           </div>
                           <div class="pr_sl_txt">
                              <h5>2018</h5>
                              <h3>North Garden City</h3>
                              <h4 class="projects_h4">22+ ACRES IN THE HEART OF MIRA ROAD</h4>
                              <p>Harmonizing nature, luxuries and convenience across a 22+ acres area, North Garden City provides a grand lifestyle. Well-connected and equipped with the latest amenities, Mira Road’s North Garden City offers homes loved by one & all.</p>
                              <button type="button" class="btn_more_other"><img src="img/arrow1.png" class="arrow_button" alt="arrow">KNOW MORE</button>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Featured -->
            <div class="pr_showcase" id="hPrready_to_move">
               <div id="ready_to_move" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                     <li data-target="#ready_to_move" data-slide-to="0" class="active"></li>
                     <li data-target="#ready_to_move" data-slide-to="1"></li>
                     <li data-target="#ready_to_move" data-slide-to="2"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                     <div class="item active">
                        <div class="col_pr_txt_img">
                           <div class="pr_sl_img">
                              <img class="d-block w-100" src="img/pro-northgarden.jpg" alt="Jp Infra">
                           </div>
                           <div class="pr_sl_txt" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                              <h5>2018</h5>
                              <h3>North Garden City</h3>
                              <h4 class="projects_h4">22+ ACRES IN THE HEART OF MIRA ROAD</h4>
                              <p>Harmonizing nature, luxuries and convenience across a 22+ acres area, North Garden City provides a grand lifestyle. Well-connected and equipped with the latest amenities, Mira Road’s North Garden City offers homes loved by one & all.</p>
                              <button type="button" class="btn_more_pro"><img src="img/arrow1.png" class="arrow_button" alt="arrow">KNOW MORE</button>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="col_pr_txt_img">
                           <div class="pr_sl_img">
                              <img class="d-block w-100" src="img/pro-northgarden.jpg" alt="Jp Infra">
                           </div>
                           <div class="pr_sl_txt">
                              <h5>2018</h5>
                              <h3>Codename Hotcake</h3>
                              <h4 class="projects_h4">OPEN PAYMENT PLANS - YOUR HOUSE, YOUR CHOICE</h4>
                              <p>Smartly planned, with every brick crafted to perfection, Codename Hotcake is styled to fulfil every need of your dream home. Equipped with the latest technology and necessities close at hand, Codename Hotcake aspires to make the experience at Mira Road better than your dreams.</p>
                              <button type="button" class="btn_more_pro"><img src="img/arrow1.png" class="arrow_button" alt="arrow">KNOW MORE</button>					
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="col_pr_txt_img">
                           <div class="pr_sl_img">
                              <img class="d-block w-100" src="img/pro-northgarden.jpg" alt="Jp Infra">
                           </div>
                           <div class="pr_sl_txt">
                              <h5>2018</h5>
                              <h3>North Garden City</h3>
                              <h4 class="projects_h4">22+ ACRES IN THE HEART OF MIRA ROAD</h4>
                              <p>Harmonizing nature, luxuries and convenience across a 22+ acres area, North Garden City provides a grand lifestyle. Well-connected and equipped with the latest amenities, Mira Road’s North Garden City offers homes loved by one & all.</p>
                              <button type="button" class="btn_more_pro"><img src="img/arrow1.png" class="arrow_button" alt="arrow">KNOW MORE</button>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <!-- Left and right controls -->
                  <!-- <a class="left carousel-control" href="#ready_to_move" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="right carousel-control" href="#ready_to_move" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right"></span>
                     <span class="sr-only">Next</span>
                     </a> -->
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
   </div>
   <div class="clearfix"></div>
</div>
<!-- Projects end Hrere -->
<!-- glimpse jp desktop start -->
<div class="glimpse-main desktop">
   <div class="lable_line">
      <img src="img/Gray-Head-line.png" class="northimage">
   </div>
   <div class="liveHead2 glimpse-head" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
      <p>At our visual best</p>
   </div>
   <div class="glimpse-h1 container_aks bg-3 text-center wow fadeIn" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">
      <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">a glimpse of jp infra</h1>
   </div>
   <!-- slider desktop start -->
   <div class="glimpse-slider desktop">
      <div class="glimpse-col">
         <div class="glimpse-col-inner">
            <img src="img/Media-1.jpg">
         </div>
         <div class="glimpse-col-inner">
            <img src="img/Media-2.jpg">
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="glimpse-col">
         <div class="glimpse-col-middle">
            <img src="img/Media-Big.jpg">
         </div>
      </div>
      <div class="glimpse-col">
         <div class="glimpse-col-inner">
            <img src="img/Media-3.jpg">
         </div>
         <div class="glimpse-col-inner">
            <img src="img/Media-4.jpg">
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
   </div>
   <!-- slider desktop end -->
   <div class="clearfix"></div>
</div>
<!-- glimpse jp desktop ends -->
<!-- glimpse jp mobile start -->
<div class="glimpse-main mobile">
   <div class="lable_line">
      <img src="img/Gray-Head-line.png" class="northimage">
   </div>
   <div class="liveHead2 glimpse-head" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
      <p>At our visual best</p>
   </div>
   <div class="glimpse-h1 container_aks bg-3 text-center wow fadeIn" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">
      <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">a glimpse of jp infra</h1>
   </div>
   <!-- slider mobile start -->
   <div class="glimpse-slider responsivehomeproj">
      <div class="glimpse-col">
         <div class="glimpse-col-inner">
            <img src="img/Media-1.jpg">
         </div>
      </div>
      <div class="glimpse-col">
         <div class="glimpse-col-inner">
            <img src="img/Media-2.jpg">
         </div>
      </div>
      <div class="glimpse-col">
         <div class="glimpse-col-inner">
            <img src="img/Media-5.jpg">
         </div>
      </div>
      <div class="glimpse-col">
         <div class="glimpse-col-inner">
            <img src="img/Media-3.jpg">
         </div>
      </div>
      <div class="glimpse-col">
         <div class="glimpse-col-inner">
            <img src="img/Media-4.jpg">
         </div>
      </div>
   </div>
   <!-- slider mobile ends -->
</div>
<!-- glimpse jp mobile end -->
<!--contact us-->
<div class="contact-us">
   <div class="line"></div>
   <h5 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">WE'RE HERE TO HELP YOU</h5>
   <h1 data-aos="fade-up" data-aos-duration="3000">Contact Us</h1>
   <div class="contact-div">
      <div class="content-continer" data-aos="fade-up" data-aos-duration="3000">
         <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 contact-block">
               <div class="inner-box">
                  <span class="cLine1"></span>	
                  <h5>Address</h5>
                  <div class="icon-div">
                     <img src="img/visit-place.png" alt="contact-icon">
                  </div>
                  <h4>Visit Our Place</h4>
                  <p class="text">JP Infra Mumbai Pvt. Ltd.</p>
                  <div class="overlay">
                     <div class="top-content">
                        <h4>Visit Our Place</h4>
                        <div class="text">JP Infra Mumbai Pvt. Ltd.</div>
                     </div>
                     <div class="bottom-content">
                        <ul>
                           <li><a href="#">Phone: 022 42415678</a></li>
                           <li><a href="#">Email: sales@jpinfra.com</a></li>
                           <li><a href="#">Fax: 022 42415679</a></li>
                        </ul>
                        <!--<div class="link-btn"><a href="#" class="theme-btn">Locate Us On Map</a></div>-->
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 contact-block">
               <div class="inner-box">
                  <span class="cLine2"></span>
                  <h5>PHONE & EMAIL</h5>
                  <div class="icon-div">
                     <img src="img/Mob.png" alt="contact-icon">
                  </div>
                  <h4>Talk Now</h4>
                  <p class="text">Talk To A Real Person</p>
                  <div class="overlay">
                     <div class="top-content">
                        <h4>Talk Now</h4>
                        <div class="text">Talk To A Real Person</div>
                     </div>
                     <div class="bottom-content">
                        <ul>
                           <li><a href="#">Phone: 022 42415678</a></li>
                           <li><a href="#">Email: sales@jpinfra.com</a></li>
                           <li><a href="#">Fax: 022 42415679</a></li>
                        </ul>
                        <!--<div class="link-btn"><a href="#" class="theme-btn">Locate Us On Map</a></div>-->
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 contact-block">
               <div class="inner-box">
                  <span class="cLine3"></span>	
                  <h5>LEAVE US A MESSAGE</h5>
                  <div class="icon-div">
                     <img src="img/Message.png" alt="contact-icon">
                  </div>
                  <h4>WE'LL GET BACK TO YOU</h4>
                  <p class="text">Drop Us Your Contact Details</p>
                  <div class="overlay">
                     <div class="top-content">
                        <h4>WE'LL GET BACK TO YOU</h4>
                        <div class="text">Drop Us Your Contact Details</div>
                     </div>
                     <div class="bottom-content">
                        <ul>
                           <li><a href="#">Phone: 022 42415678</a></li>
                           <li><a href="#">Email: sales@jpinfra.com</a></li>
                           <li><a href="#">Fax: 022 42415679</a></li>
                        </ul>
                        <!--<div class="link-btn"><a href="#" class="theme-btn">Locate Us On Map</a></div>-->
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
</div>
<!---->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>
<script>
   $('.responsivehomeproj').slick({
   	dots: true,
   	arrow: true,
   	prevArrow:'<button type="button" class="prev-button-home"></button>',
          nextArrow:'<button type="button" class="next-button-home"></button>',
   	infinite: false,
   	autoplay: true,
   	speed: 300,
   	slidesToShow: 3,
   	slidesToScroll: 1,
   	responsive: [
   		{
   		breakpoint: 1024,
   		settings: {
   			slidesToShow: 3,
   			slidesToScroll: 1,
   			arrow: true,
   			prevArrow:'<button type="button" class="prev-button-home"></button>',
          		nextArrow:'<button type="button" class="next-button-home"></button>',
   			infinite: false,
   			dots: true
   		}
   		},
   		{
   		breakpoint: 600,
   		settings: {
   			slidesToShow: 1,
   			arrow: true,
   			prevArrow:'<button type="button" class="prev-button-home"></button>',
          		nextArrow:'<button type="button" class="next-button-home"></button>',
   			slidesToScroll: 1
   		}
   		},
   		{
   		breakpoint: 480,
   		settings: {
   			slidesToShow: 1,
   			arrow: true,
   			prevArrow:'<button type="button" class="prev-button-home"></button>',
         			nextArrow:'<button type="button" class="next-button-home"></button>',
   			slidesToScroll: 1
   		}
   		}
   		// You can unslick at a given breakpoint now by adding:
   		// settings: "unslick"
   		// instead of a settings object
   	]
   	});
      
</script>
<div class="clearfix"></div>
<?php include 'footer.php';?>