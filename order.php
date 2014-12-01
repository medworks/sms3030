<?php
  include_once('./inc/header.php');
?>

<body id="top" class="page body-boxed-2">
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
  <!-- Page Header -->
  <section class="pageHeader section mainSection scrollAnchor darkSection" id="pageHeader">
    <div class="topMenu navBar">
      <div class="container">
        <div class="row">
          <ul class="topSocial socialNav col-md-6 col-sm-12">
            <li class="facebook"><a href="#"><i class="animated fa fa-facebook"></i></a></li>
            <li class="twitter"><a href="#"><i class="animated fa fa-twitter"></i></a></li>
            <li class="rss"><a href="#"><i class="animated fa fa-rss"></i></a></li>
          </ul><!-- end of top social -->
          <div class="topContact col-md-6 col-sm-12">
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
        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of top menu -->
    <!-- Header -->
    <?php
      include_once('./inc/menu.php')
    ?>
    <!-- end of header -->
    <!-- Page Info -->
    <div class="pageInfo">
      <div class="cover"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="pageTitle">نمایندگی اس ام اس 3030</h2>
          </div><!-- end of col-md-4 -->
          <div class="col-md-8">
            <ol class="breadcrumb">
              <li>
                <a href="./">صفحه اصلی</a>
              </li>
              <li class="active">نمایندگی</li>
            </ol><!-- end of breadcrumb -->
          </div><!-- end of col-md-8 -->

        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of page info -->
  </section>
  <!-- end of Page Header -->
  <section class="registerArea section mainSection scrollAnchor graySection" id="registerArea">
        <div class="sectionWrapper">
          <div class="container">

            <div class="row">
              <div class="col-md-12 sectionTitle">
                <h2 class="sectionHeader">
                  ثبت نام پنل نمایندگی اس ام اس 3030
                  <span class="generalBorder"></span>
                </h2><!-- end of sectionHeader -->
                <p>
                  لطفا فیلدهای زیر را به صورت کامل پر نموده و برای ما ارسال نمایید در اولین فرصت برای شما حساب کاربری ایجاد و ارسال می گردد.
                </p>
              </div><!-- end of section title -->
              
            </div><!-- end of row -->

            <div class="row registerAreaContents">

              <div class="col-md-12 formWrapper">
                <form class="registerFormArea formArea rtl formdata" method="POST">

                  <ul class="row">
                    <li class="col-md-6">
                      <input class="name validate[required,minSize[4],maxSize[50]]" data-prompt-position="topLeft" id="name" name="name" placeholder="نام و نام خانوادگی*" type="text" />
                    </li>
                    <li class="col-md-6">
                      <input class="company-name" id="company-name" name="company-name" placeholder="نام شرکت" type="text" />
                    </li>
                    <li class="col-md-6">
                      <input class="email validate[required,custom[email]]" id="email" data-prompt-position="topLeft" name="email" placeholder="ایمیل*" type="email" />
                    </li>
                    <li class="col-md-6">
                      <input class="user validate[required,minSize[4],maxSize[50]]" data-prompt-position="topLeft" id="user" name="user" placeholder="نام کاربری مورد نظر*" type="text" />
                    </li>
                    <li class="col-md-6">
                      <input class="pass validate[required,minSize[5],maxSize[32]]" data-prompt-position="topLeft" id="pass" name="pass" placeholder="رمز عبور*" type="password"
                       />
                     </li>
                    <li class="col-md-6">
                      <input class="repass validate[required,equals[pass]]" data-prompt-position="topLeft" id="repass" name="repass" placeholder="تکرار رمز عبور*" type="password" />
                    </li>
                    <li class="col-md-6">
                      <input class="codemeli validate[required,custom[onlyNumberSp],maxSize[10],minSize[10]]" data-prompt-position="topLeft" id="codemeli" name="codemeli" placeholder="کدملی*" type="text" />
                    </li>
                    <li class="col-md-6">
                      <input class="idnum validate[required,custom[onlyNumberSp],maxSize[10],minSize[1]]" data-prompt-position="topLeft" id="idnum" name="idnum" placeholder="شماره شناسنامه*" type="text" />
                    </li>
                    <li class="col-md-6">
                      <input class="tel validate[required,custom[onlyNumberSp],maxSize[10],minSize[10]]" data-prompt-position="topLeft" id="tel" name="tel" placeholder="شماره ثابت*" type="text" />
                    </li>
                    <li class="col-md-6">
                      <input class="mobile validate[required,custom[onlyNumberSp],maxSize[10],minSize[10]]" data-prompt-position="topLeft" id="mobile" name="mobile" placeholder="شماره همراه*" type="text" />
                    </li>
                    <li class="col-md-6">
                      <input class="zipcod" id="zipcod" name="zipcod" placeholder="کد پستی" type="text" />
                    </li>
                    <li class="col-md-6">
                      <input class="address validate[required,minSize[30],maxSize[500]]" data-prompt-position="topLeft" id="address" name="address" placeholder="آدرس*" type="text" />
                    </li>
                    <li class="col-md-12" style="color:#fff;font-size:18px;margin-bottom:10px">
                      <input class="rule validate[required]" data-prompt-position="topLeft:-450" id="rule" name="rule" type="checkbox" />
                      قوانین پلیس سامانه را می پذیرم. برای مشاهده <a id="rule" href="#" title="مشاهده قوانین" style="font-family:inherit;color:#ff6b6b">اینجا</a> کلیک نمایید.
                    </li>
                    <li class="col-md-12">
                      <button class="generalBtn loginBtn" type="submit">ارسال</button>
                    </li>
                  </ul><!-- end of row -->

                </form><!-- end of registerFormArea -->
              </div><!-- end of col-md-12 -->

            </div><!-- end of registerAreaContents -->
            
          </div><!-- end of container -->
        </div><!-- end of section wrapper -->
      </section>
 

<?php
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>