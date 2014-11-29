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
            <h2 class="pageTitle">اسم پنل</h2>
          </div><!-- end of col-md-4 -->
          <div class="col-md-8">
            <ol class="breadcrumb">
              <li>
                <a href="./">صفحه اصلی</a>
              </li>
              <li class="active">اسم پنل</li>
            </ol><!-- end of breadcrumb -->
          </div><!-- end of col-md-8 -->
        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of page info -->
  </section>
  <!-- end of Page Header -->
  <section class="pricing section mainSection scrollAnchor lightSection" id="pricing">
    <div class="sectionWrapper">
      <div class="container">
        <div class="row">          
          <div class="col-md-12">
            <div class="table-responsive tableWrapper" tabindex="5000" style="overflow: hidden; outline: none;">
              <table class="rtl table table-hover table-bordered" style="transform: translate3d(0px, 0px, 0px);">
                <thead>
                  <tr>
                    <th>امکانات / سطح دسترسی</th>
                    <th>پنل پایه / B</th>
                    <th>پنل تبلیغاتی / A</th>
                    <th>پنل سازمانی / A+</th>
                    <th>پنل حرفه ای / AS</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td>ارسال پیامک به صورت تکی و گروهی</td>
                    <td><img src="./images/tik.png" alt="" width="25" height="25"/></td>
                    <td><img src="./images/cross.png" alt="" width="25" height="25"/></td>
                    <td><img src="./images/tik.png" alt="" width="25" height="25"/></td>
                    <td><img src="./images/cross.png" alt="" width="25" height="25"/></td>
                  </tr>

                  <tr>
                    <td>ارسال پیامک به صورت تکی و گروهی</td>
                    <td><img src="./images/tik.png" alt="" width="25" height="25"/></td>
                    <td><img src="./images/cross.png" alt="" width="25" height="25"/></td>
                    <td><img src="./images/tik.png" alt="" width="25" height="25"/></td>
                    <td><img src="./images/cross.png" alt="" width="25" height="25"/></td>
                  </tr>

                  <tr>
                    <td>ارسال پیامک به صورت تکی و گروهی</td>
                    <td><a href="#" class="generalLink order" style="font-size:16px">سفارش</a></td>
                    <td><a href="#" class="generalLink order" style="font-size:16px">سفارش</a></td>
                    <td><a href="#" class="generalLink order" style="font-size:16px">سفارش</a></td>
                    <td><a href="#" class="generalLink order" style="font-size:16px">سفارش</a></td>
                  </tr>

                </tbody>
              </table>
              <p class="detail" style="padding: 20px 10px; color: #cd2f2e;">1- توضیحات تکمیلی....</p>
            <div id="ascrail2002" class="nicescroll-rails" style="width: 6px; z-index: 99999999999; position: absolute; top: 0px; right: 0px; opacity: 1; cursor: default; display: none; height: 718px;"><div style="position: relative; top: 0px; float: right; width: 6px; border: 0px; border-radius: 3px; height: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box;"></div></div><div id="ascrail2002-hr" class="nicescroll-rails" style="height: 6px; z-index: 99999999999; position: absolute; left: 0px; bottom: 0px; opacity: 1; cursor: default; display: none; width: 1168px;"><div style="position: relative; top: 0px; height: 6px; border: 0px; border-radius: 3px; width: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box;"></div></div></div><!-- end of table wrapper -->

          </div><!-- end of col-md-12 -->


        </div><!-- end of row-->
      </div><!-- end of container -->
    </div><!-- end of section wrapper -->
  </section>

<?php
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>