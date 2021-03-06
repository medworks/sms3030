<?php
    header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="fa" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mediateq CMS" />
    <meta name="author" content="Mediateq.ir" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <!-- Viewport metatags -->
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    <!-- iOS webapp metatags -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    
    <!-- iOS webapp icons -->
    <link rel="apple-touch-icon-precomposed" href="./images/fickle-logo-72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./images/fickle-logo-72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./images/fickle-logo-114.png" />
    
    <!-- TODO: Add a favicon -->
    <link rel="shortcut icon" href="./images/fab.ico" />
    
    <title>SMS3030||Mediateq.ir</title>
    
    <link href="./css/zebra_pagination.css" rel="stylesheet" />
    
    <!--Page loading plugin Start -->
    <link rel="stylesheet" href="./css/pace-rtl.css" />
    <script src="./js/pace.min.js"></script>
    <!--Page loading plugin End   -->

    <!-- Plugin Css Put Here -->
    <link href="./css/bootstrap-rtl.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/bootstrap-progressbar-3.1.1-rtl.css" />
    <link rel="stylesheet" href="./css/jquery-jvectormap-rtl.css" />

    <!--AmaranJS Css Start-->
    <link href="./css/jquery.amaran-rtl.css" rel="stylesheet" />
    <link href="./css/all-themes-rtl.css" rel="stylesheet" />
    <link href="./css/awesome-rtl.css" rel="stylesheet" />
    <link href="./css/default-rtl.css" rel="stylesheet" />
    <link href="./css/blur-rtl.css" rel="stylesheet" />
    <link href="./css/user-rtl.css" rel="stylesheet" />
    <link href="./css/rounded-rtl.css" rel="stylesheet" />
    <link href="./css/readmore-rtl.css" rel="stylesheet" />
    <link href="./css/metro-rtl.css" rel="stylesheet" />
    <!--AmaranJS Css End -->

    <!-- Plugin Css End -->
    <!-- Custom styles Style -->
    <link href="./css/style-rtl.css" rel="stylesheet" />
    <!-- Custom styles Style End-->

    <!-- Responsive Style For-->
    <link href="./css/responsive-rtl.css" rel="stylesheet" />
    <!-- Responsive Style For-->

    <!-- Custom styles for this template -->
    <link href="./css/fileinput-rtl.css" rel="stylesheet" />
    <link href="./css/summernote-rtl.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="./js/html5shiv.js"></script>
    <script src="./js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="./js/jquery-1.11.min.js"></script>
    
</head>
<body>
<!--Navigation Top Bar Start-->
<nav class="navigation">
    <div class="container-fluid">
        <!--Logo text start-->
        <div class="header-logo">
            <a href="javascript:void(0);" title="اس ام اس 3030">
                <h1>پنل مدیریت</h1>
            </a>
        </div>
        <!--Logo text End-->
        <div class="top-navigation">
            <!--Collapse navigation menu icon start -->
            <div class="menu-control hidden-xs">
                <a href="javascript:void(0)">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <!--Collapse navigation menu icon end -->
            <!--Top Navigation Start-->
            <ul>
                <!-- <li>
                    <a href="lock-screen.html">
                        <i class="fa fa-lock"></i>
                    </a>
                </li> -->
                <li>
                    <a href="admin.php?act=logout">
                        <i class="fa fa-power-off"></i>
                    </a>
                </li>
            </ul>
            <!--Top Navigation End-->
        </div>
    </div>
</nav>
<!--Navigation Top Bar End-->
<section id="main-container">
    <!--Left navigation section start-->
    <section id="left-navigation">
        <!--Left navigation user details start-->
        <div class="user-image">
            <img src="../images/logo.png" alt="SMS3030" style="width:100px!important">
            <!-- <div class="user-online-status">
                <span class="user-status is-online"></span>
            </div> -->
        </div>
        <ul class="social-icon">
            <li><a href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="javascript:void(0)" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="javascript:void(0)" title="Rss"><i class="fa fa-rss"></i></a></li>
        </ul>
        <!--Left navigation user details end-->
        <!--Phone Navigation Menu icon start-->
        <div class="phone-nav-box visible-xs">
            <a class="phone-logo" href="./" title="اس ام اس 3030">
                <h1>اس ام اس 3030</h1>
            </a>
            <a class="phone-nav-control" href="javascript:void(0)">
                <span class="fa fa-bars"></span>
            </a>
            <div class="clearfix"></div>
        </div>
        <!--Phone Navigation Menu icon start-->
       <!--Left navigation start-->
        <ul class="mainNav">
           <!-- <li>
                <a href="admin.php">
                    <i class="fa fa-dashboard"></i>
                    <span>داشبورد</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-envelope-o"></i>
                    <span>Email</span>
                    <span class="badge badge-red">3</span>
                </a>
                <ul>
                    <li><a href="mail.html">Inbox</a></li>
                    <li><a href="compose-mail.html">Compose Mail</a></li>
                </ul>
            </li> -->
            <li>
                <a href="numregister.php">
                    <i class="fa fa-users"></i>
                    <span>تعداد استفاده کنندگان</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-navicon"></i>
                    <span>تعریف خطوط</span>
                </a>
                <ul>
                    <li><a href="addnum.php?act=new">تعریف ارقام</a></li>
                    <li><a href="addline.php?act=new">تعریف خطوط</a></li>
                    <li><a href="linedetail.php?act=new">توضیحات</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-pencil"></i>
                    <span>تعریف پلن ها</span>
                </a>
                <ul>
                    <li><a href="addparam.php?act=new">تعریف پارامترها</a></li>
                    <li><a href="addplan.php?act=new">تعریف پلن</a></li>
                    <li><a href="editplan.php?act=edit">ویرایش پلن ها</a></li>
                    <li><a href="plandetail.php">توضیحات</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-camera"></i>
                    <span>اسلاید شو</span>
                </a>
                <ul>
                    <li><a href="addslide.php?act=new">ثبت عکس</a></li>
                    <li><a href="editslide.php?act=edit">ویرایش عکسها</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bullhorn"></i>
                    <span>اخبار</span>
                    <!-- <span class="badge badge-red">New</span> -->
                </a>
                <ul>
                    <li><a href="addnews.php?act=new">ثبت خبر</a></li>
                    <li><a href="editnews.php?act=edit">ویرایش خبر</a></li>
                </ul>
            </li>
            <!-- <li>
                <a href="#">
                    <i class="fa fa-image"></i>
                    <span>گالری تصاویر</span>
                </a>
                <ul>
                    <li><a href="gallerygroup.php?act=new">دسته بندی تصاویر</a></li>
                    <li><a href="addgallery.php?act=new">تعریف گالری</a></li>
                    <li><a href="editgallery.php?act=new">ویرایش گالری</a></li>
                </ul>
            </li> --> 
            <li>
                <a href="#">
                    <i class="fa fa-briefcase"></i>
                    <span>اطلاعت حساب</span>
                </a>
                <ul>
                    <li><a href="bank.php?act=new">ثبت اطلاعات بانک</a></li>
                    <li><a href="editbank.php?act=edit">ویرایش اطلاعات</a></li>
                </ul>
            </li>
            <!-- <li>
                <a href="sendnews.php">
                    <i class="fa fa-send-o"></i>
                    <span>ارسال خبر به اعضاء</span>
                </a>
            </li>
            <li>
                <a href="exammgr.php?act=new">
                    <i class="fa fa-file-o"></i>
                    <span>آزمون های روانشناختی</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-file-picture-o"></i>
                    <span>کلاسها و دوره ها</span>
                </a>
                <ul>
                    <li><a href="javascript:void(0);">تعریف کلاس</a></li>
                    <li><a href="javascript:void(0);">ویرایش کلاسها</a></li>
                    <li><a href="javascript:void(0);">ثبت نام کنندگان</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-coffee"></i>
                    <span>همایش ها</span>
                </a>
                <ul>
                    <li><a href="javascript:void(0);">تعریف همایش</a></li>
                    <li><a href="javascript:void(0);">ویرایش همایش ها</a></li>
                    <li><a href="javascript:void(0);">ثبت نام کنندگان</a></li>
                </ul>
            </li> -->
            <li class="reseller">
                <a href="#">
                    <i class="fa fa-pencil-square-o"></i>
                    <span>پلن نمایندگی</span>
                    <!-- <span class="badge badge-red">0</span> -->
                </a>
                <ul>
                    <li><a href="regreseller.php?act=new">ثبت نام کنندگان</a></li>
                    <li><a href="confirmed.php">تایید شده ها</a></li>
                </ul>
            </li>
            <li class="lines">
                <a href="#">
                    <i class="fa fa-table"></i>
                    <span>سفارش خطوط</span>
                    <!-- <span class="badge badge-red">0</span> -->
                </a>
                <ul>
                    <li><a href="lineordered.php?act=new">ثبت نام کنندگان</a></li>
                    <li><a href="lineconfirmed.php">تایید شده ها</a></li>
                </ul>
            </li>
             <li>
                <a href="#">
                    <i class="fa fa-navicon"></i>
                    <span>تعریف مشتری</span>
                </a>
                <ul>
                    <li><a href="addclient.php?act=new">ثبت مشتری</a></li>
                    <li><a href="editclient.php?act=edit">ویرایش مشتری</a></li>                    
                </ul>
            </li>
            <li> 
                <a href="#">
                    <i class="fa fa-gear"></i>
                    <span>تنظیمات</span>
                </a>
                <ul>
                    <li><a href="settinginfo.php">اطلاعات سایت</a></li>
                    <li><a href="contactinfo.php">تماس با ما</a></li>
                    <li><a href="aboutinfo.php">درباره ما</a></li>
                </ul>
            </li>
        </ul>
        <!--Left navigation end-->
    </section>
    <!--Left navigation section end-->