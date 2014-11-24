<?php
	include_once("config.php");
	include_once("classes/functions.php");
  	include_once("classes/security.php");
  	include_once("classes/database.php");	
    include_once("./lib/persiandate.php");
	include_once("./lib/Zebra_Pagination.php");
	
	$Tell_Number = GetSettingValue('Tell_Number',0);
	$Address = GetSettingValue('Address',0);
	$Contact_Email = GetSettingValue('Contact_Email',0);	
	$About_System = GetSettingValue('About_System',0);
	
$slide.=<<<cd
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
                <a href="javascript:void();" class="latinfont ltr" style="display:inline-block;letter-spacing:2px">+98 {$Tell_Number}</a>
              </li>
              <li class="mail">
                Email: 
                <a href="javascript:void();" class="latinfont" style="letter-spacing:2px">{$Contact_Email}</a>
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
cd;

$db = Database::GetDatabase();
		
$news = $db->SelectAll("news","*",NULL,"id DESC","0","2");	

$html.=<<<cd
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
cd;
for($i = 0; $i < Count($news); $i++)
{
$news[$i]["regdate"] = ToJalali($news["regdate"],"Y/m/d H:i");	
$html.=<<<cd
          <article class="col-md-4 post">
            <div class="postWrapper">
              <div class="postMedia">
                <ul class="postMeta clearfix">
                  <li class="postDate">
                    <div class="metaContent">
                      <i class="animated fa fa-clock-o"></i>
                      {$news[$i]["regdate"]}
                    </div>
                  </li>                  
                </ul>
                <a href="manager/img.php?did={$news[$i]['id']}&tid=1" title="post sample">
                  <img  src="manager/img.php?did={$news[$i]['id']}&tid=1"/>
                </a>
              </div>
              <div class="postContents">
                <a href="single-news{$news[$i]['id']}.html" class="postIcon">
                  <i class="animated fa fa-newspaper-o"></i>
                </a>
                <h4 class="postTitle">
                  <a href="single-news{$news[$i]['id']}.html" title="post sample">{$news[$i]["subject"]}</a>
                </h4>
                <p class="postDetails">{$news[$i]["text"]}</p>
                <a class="readMore bordered generalLink" href="single-news{$news[$i]['id']}.html" title="read more">ادامه خبر</a>
              </div>
            </div>
          </article><!-- end of post -->
cd;
}
$html.=<<<cd
        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of section wrapper -->
  </section><!-- end blog section -->
cd;

  include_once('./inc/header.php');
  echo $slide;
  include_once('./inc/menu.php');
  include_once('./inc/plans.php');
  echo $html;
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>