<?php
  include_once('./inc/header.php');
?>
<body id="top" class="style-4 body-boxed-2">
<!--[if lt IE 9]>
  <p class="browsehappy">
    You are using an
    <strong>outdated</strong>
    browser. Please
    <a href="http://browsehappy.com/">upgrade your browser</a>
    to improve your experience.
  </p>
<![endif]-->
  
<div class="loadingContainer">
  <div class="loading">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
  </div><!-- end of loading -->
</div><!-- end of loading container -->
  
  
<div class="allWrapper"> 

  <!-- Slider -->
  <section class="slider section mainSection scrollAnchor darkSection" id="slider">
    <div class="topMenu navBar">
      <div class="container">
        <div class="row">
          <div class="topContact col-md-6 col-sm-12" style="float:left">
            <ul>
              <li class="tele">
                Tel: 
                <a href="javascript:void();" class="latinfont ltr" style="display:inline-block;letter-spacing:2px">+98 51 3766 6436</a>
              </li>
              <li class="mail">
                Email: 
                <a href="javascript:void();" class="latinfont" style="letter-spacing:2px">info@sms3030.com</a>
              </li>
            </ul>
          </div><!-- end of top contacts -->
          <ul class="topSocial socialNav col-md-6 col-sm-12">
            <li class="facebook"><a href="#"><i class="animated fa fa-facebook"></i></a></li>
            <li class="twitter"><a href="#"><i class="animated fa fa-twitter"></i></a></li>
            <li class="rss"><a href="#"><i class="animated fa fa-rss"></i></a></li>
          </ul><!-- end of top social -->
        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of top menu -->
    <div id="mainSlider" class="mainSlider homeSlider_4  owl-carousel sliderStyle1">
      <div id="slide1" class="item slide">
        <div class="cover"></div><!-- end of cover -->
        <img src="./images/slider/1.jpg" title="Slide 1" alt="slide 1">
        <div class="captions">
          <h2 class="animated">عنوان اسلاید اول</h2>
          <p class="animated">
            توضیحات عکس ... توضیحات عکس ... توضیحات عکس ... توضیحات عکس ... توضیحات عکس ... </p>
        </div><!-- end of captions -->
      </div><!-- end of slide -->
      <div id="slide2" class="item slide">
        <div class="cover"></div><!-- end of cover -->
        <img src="./images/slider/2.jpg" title="Slide 2" alt="slide 2">
        <div class="captions">
          <h2 class="animated">عنوان اسلاید دوم</h2>
          <p class="animated">
            توضیحات عکس ... توضیحات عکس ... توضیحات عکس ... توضیحات عکس ... توضیحات عکس ... </p>
        </div><!-- end of captions -->
      </div><!-- end of slide -->
      <div id="slide3" class="item slide">
        <div class="cover"></div><!-- end of cover -->
        <img src="./images/slider/3.jpg" title="Slide 3" alt="slide 3">
        <div class="captions">
          <h2 class="animated">عنوان اسلاید سوم</h2>
          <p class="animated">
            توضیحات عکس ... توضیحات عکس ... توضیحات عکس ... توضیحات عکس ... توضیحات عکس ... </p>
        </div><!-- end of captions -->
      </div><!-- end of slide -->
      <div id="slide4" class="item slide">
        <div class="cover"></div><!-- end of cover -->
        <img src="./images/slider/4.jpg" title="Slide 4" alt="slide 4">
        <div class="captions">
          <h2 class="animated">عنوان اسلاید چهارم</h2>
          <p class="animated">
            توضیحات عکس ... توضیحات عکس ... توضیحات عکس ... توضیحات عکس ... توضیحات عکس ... </p>
        </div><!-- end of captions -->
      </div><!-- end of slide -->
      <div id="slide5" class="item slide">
        <div class="cover"></div><!-- end of cover -->
        <img src="./images/slider/5.jpg" title="Slide 5" alt="slide 5">
        <div class="captions">
          <h2 class="animated">عنوان اسلاید پنجم</h2>
          <p class="animated">
            توضیحات عکس ... توضیحات عکس ... توضیحات عکس ... توضیحات عکس ... توضیحات عکس ... </p>
        </div><!-- end of captions -->
      </div><!-- end of slide -->
    </div><!-- end of main slider -->
  </section>
  <!-- end of slider -->
  <!-- Header -->
    <?php
      include_once('./inc/menu.php')
    ?>
    <!-- end of header -->
  <!-- Pricing -->
  <section class="pricing section mainSection scrollAnchor lightSection" id="pricing">
    <div class="sectionWrapper">
      <div class="container">
        <div class="row">
          
          <div class="col-md-3 col-sm-6">
            <div class="pricingTable">
              <header class="pricingHeader clearfix">
                <div class="pricingIcon" style="background:#ffffff url('./images/plan-b.png') center center no-repeat"></div>
                <h3 class="pricingTitle planTitle">پنل پایه</h3>
              </header><!-- end pricing header -->
              <ul class="pricingBody planBody">
                <li>پشتیبانی 24 ساعته</li>
                <li>بانک مشاغل</li>
                <li>5 خط رایگان</li>
                <li>ارسال به وایبر</li>
                <li>شارژ آنلاین</li>
                <li>بانک منطقه ای</li>
                <li class="clearfix">
                  <span class="pricingPerMonth rtl">80.000 ریال 
                    <a href="#" class="generalLink order">سفارش</a>
                  </span>
                </li>
              </ul><!-- end pricing body -->
            </div><!-- end of pricing table -->
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="pricingTable">
              <header class="pricingHeader clearfix">
                <div class="pricingIcon" style="background:#ffffff url('./images/plan-a.png') center center no-repeat"></div>
                <h3 class="pricingTitle planTitle">پنل تبلیغاتی</h3>
              </header><!-- end pricing header -->
             <ul class="pricingBody planBody">
                <li>پشتیبانی 24 ساعته</li>
                <li>بانک مشاغل</li>
                <li>5 خط رایگان</li>
                <li>ارسال به وایبر</li>
                <li>شارژ آنلاین</li>
                <li>بانک منطقه ای</li>
                <li class="clearfix">
                  <span class="pricingPerMonth rtl">80.000 ریال 
                    <a href="#" class="generalLink order">سفارش</a>
                  </span>
                </li>
              </ul><!-- end pricing body -->
            </div><!-- end of pricing table -->
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="pricingTable">
              <header class="pricingHeader clearfix">
                <img src="images/ribbon.png" alt="ribbon" class="ribbon">
                <div class="pricingIcon" style="background:#ffffff url('./images/plan-plus.png') center center no-repeat"></div>
                <h3 class="pricingTitle planTitle">پنل سازمانی</h3>
              </header><!-- end pricing header -->
              <ul class="pricingBody planBody">
                <li>پشتیبانی 24 ساعته</li>
                <li>بانک مشاغل</li>
                <li>5 خط رایگان</li>
                <li>ارسال به وایبر</li>
                <li>شارژ آنلاین</li>
                <li>بانک منطقه ای</li>
                <li class="clearfix">
                  <span class="pricingPerMonth rtl">80.000 ریال 
                    <a href="#" class="generalLink order">سفارش</a>
                  </span>
                </li>
              </ul><!-- end pricing body -->
            </div><!-- end of pricing table -->
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="pricingTable">
              <header class="pricingHeader clearfix">
                <div class="pricingIcon" style="background:#ffffff url('./images/plan-s.png') center center no-repeat"></div>
                <h3 class="pricingTitle planTitle">پنل حرفه ای</h3>
              </header><!-- end pricing header -->
              <ul class="pricingBody planBody">
                <li>پشتیبانی 24 ساعته</li>
                <li>بانک مشاغل</li>
                <li>5 خط رایگان</li>
                <li>ارسال به وایبر</li>
                <li>شارژ آنلاین</li>
                <li>بانک منطقه ای</li>
                <li class="clearfix">
                  <span class="pricingPerMonth rtl">80.000 ریال 
                    <a href="#" class="generalLink order">سفارش</a>
                  </span>
                </li>
              </ul><!-- end pricing body -->
            </div><!-- end of pricing table -->
          </div>
        </div><!-- end of row-->
      </div><!-- end of container -->
    </div><!-- end of section wrapper -->
  </section><!-- end of pricing section -->
  <!-- Blog -->
  <section class="blog section mainSection scrollAnchor lightSection" id="blog">
    <div class="sectionWrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12 sectionTitle">
            <h2 class="sectionHeader">
              تازه ها و آخرین رویدادها
              <span class="generalBorder"></span>
            </h2><!-- end of sectionHeader -->
          </div><!-- end of section title -->
        </div><!-- end of row -->
        <div class="row">
          <div class="grid-sizer"></div><!-- end of grid sizer -->
          <article class="col-md-4 post">
            <div class="postWrapper">
              <div class="postMedia">
                <ul class="postMeta clearfix">
                  <li class="postDate">
                    <div class="metaContent">
                      <i class="animated fa fa-clock-o"></i>
                      تاریخ : 29 فرودین 1363
                    </div>
                  </li>
                  <li class="postAuthor">
                    <div class="metaContent">
                      <i class="animated fa fa-user"></i>
                      توسط :
                      <a href="#" title="author name">اَدمین</a>
                    </div>
                  </li>
                </ul>
                <a href="#" title="post sample">
                  <img alt="post sample" src="images/slider/1.jpg" title="post sample">
                </a>
              </div>
              <div class="postContents">
                <a href="#" class="postIcon">
                  <i class="animated fa fa-newspaper-o"></i>
                </a>
                <h4 class="postTitle">
                  <a href="#" title="post sample">خبر سوم</a>
                </h4>
                <p class="postDetails">توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... </p>
                <a class="readMore bordered generalLink" href="#" title="read more">ادامه خبر</a>
              </div>
            </div>
          </article><!-- end of post -->
          <article class="col-md-4 post">
            <div class="postWrapper">
              <div class="postMedia">
                <ul class="postMeta clearfix">
                  <li class="postDate">
                    <div class="metaContent">
                      <i class="animated fa fa-clock-o"></i>
                      تاریخ : 29 فرودین 1363
                    </div>
                  </li>
                  <li class="postAuthor">
                    <div class="metaContent">
                      <i class="animated fa fa-user"></i>
                      توسط :
                      <a href="#" title="author name">اَدمین</a>
                    </div>
                  </li>
                </ul>
                <a href="#" title="post sample">
                  <img alt="post sample" src="images/slider/2.jpg" title="post sample">
                </a>
              </div>
              <div class="postContents">
                <a href="#" class="postIcon">
                  <i class="animated fa fa-newspaper-o"></i>
                </a>
                <h4 class="postTitle">
                  <a href="#" title="post sample">خبر دوم</a>
                </h4>
                <p class="postDetails">توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... </p>
                <a class="readMore bordered generalLink" href="#" title="read more">ادامه خبر</a>
              </div>
            </div>
          </article><!-- end of post -->
          <article class="col-md-4 post">
            <div class="postWrapper">
              <div class="postMedia">
                <ul class="postMeta clearfix">
                  <li class="postDate">
                    <div class="metaContent">
                      <i class="animated fa fa-clock-o"></i>
                      تاریخ : 29 فرودین 1363
                    </div>
                  </li>
                  <li class="postAuthor">
                    <div class="metaContent">
                      <i class="animated fa fa-user"></i>
                      توسط :
                      <a href="#" title="author name">اَدمین</a>
                    </div>
                  </li>
                </ul>
                <a href="#" title="post sample">
                  <img alt="post sample" src="images/slider/3.jpg" title="post sample">
                </a>
              </div>
              <div class="postContents">
                <a href="#" class="postIcon">
                  <i class="animated fa fa-newspaper-o"></i>
                </a>
                <h4 class="postTitle">
                  <a href="#" title="post sample">خبر اول</a>
                </h4>
                <p class="postDetails">توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... </p>
                <a class="readMore bordered generalLink" href="#" title="read more">ادامه خبر</a>
              </div>
            </div>
          </article><!-- end of post -->
        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of section wrapper -->
  </section><!-- end blog section -->

<?php
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>