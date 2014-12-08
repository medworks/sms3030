<?php
	include_once("./config.php");
	include_once("./classes/functions.php");
  	
$ClientsCount = GetSettingValue('ClientsCount',0);
	
$mnu=<<<cd
  <!-- Header -->
  <header class="header headerStyle1" id="header">
    <div class="sticky scrollHeaderWrapper">
      <div class="container">
        <div class="row">
          <div class="logoWrapper">
              <a class="clearfix" href="javascript:void();" title="sms3030" style="latinfont">
                <img src="./images/logo.png" alt="sms3030">
              </a>
          </div><!-- end of logoWrapper -->
          <nav class="mainMenu mainNav" id="mainNav">
            <ul class="navTabs">
              <li>
                <a href="./" class="index">صفحه اصلی</a>
              </li>
              <li>
                <a href="aboutus.html">درباره ما</a>
              </li>
              <li>
                <a href="news.html" class="news">اخبار</a>
              </li>
              <li>
                <a href="javascript:void(0);" class="plan">سامانه پیامک</a>
                <ul class="dropDown sub-menu">
                  <li>
                    <a href="http://sms.sms3030.ir">ورود به سامانه</a>
                  </li>
                  <li>
                    <a href="http://panel.sms3030.ir/?section=main::new_user&tab=true">ثبت نام پنل</a>
                  </li>
                  <li>
                    <a href="plans.html">تعرفه پیامک</a>
                  </li>
                  <li>
                    <a href="lines.html">تعرفه خطوط</a>
                  </li>
                  <li>
                    <a href="lineorder.html">ثبت نام خط</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:void(0);" class="reseller">نمایندگی</a>
                <ul class="dropDown sub-menu">
                   <li>
                    <a href="reseller.html">شرایط نمایندگی</a>
                  </li>
                  <li>
                    <a href="single-reseller.html">پلن نمایندگی</a>
                  </li>
                  <li>
                    <a href="order.html">ثبت نام</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="bank.html">شماره حساب</a>
              </li>
              <li>
                <a href="contactus.html">تماس با ما</a>
              </li>
              <li>
                <a href="javascript:void(0);" style="font-size:18px;margin-right:60px">تعداد استفاده کنندگان از پنل : <B>{$ClientsCount}</B></a>
              </li>
          </nav><!-- end of main nav -->
          <a href="#" class="generalLink bordered" id="responsiveMainNavToggler"><i class="fa fa-bars"></i></a>
          <div class="clearfix"></div><!-- end of clearfix -->
          <div class="responsiveMainNav"></div><!-- end of responsive main nav -->   
        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of sticky -->
  </header><!-- end of header -->
cd;
  
  echo $mnu;
  ?>