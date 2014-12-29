<?php
  include_once("config.php");
  include_once("classes/functions.php");
  include_once("classes/security.php");
  include_once("classes/database.php");   
  //include_once("lib/jdatetime.class.php");
  include_once("./lib/persiandate.php");
  include_once("./lib/Zebra_Pagination.php");
  //require_once dirname(__FILE__) . 'lib/jdatetime.class.php';
  
  $db = Database::GetDatabase();
  
  //date_default_timezone_set('Asia/Tehran');
  
  //$mydate = new jDateTime(true, true, 'Asia/Tehran');
  
  $Tell_Number = GetSettingValue('Tell_Number',0);
  $Address = GetSettingValue('Address',0);
  $Contact_Email = GetSettingValue('Contact_Email',0);  
  $About_System = GetSettingValue('About_System',0);
  $facebook = GetSettingValue('FaceBook_Add',0);
  $twitter = GetSettingValue('Twitter_Add',0);
  $rss = GetSettingValue('Rss_Add',0);
  $slides = $db->SelectAll("slide","*",NULL,"id ASC");
  $datetime = ToJalali(date('Y-M-d H:i:s'),'l، d F Y');

$slide.=<<<cd
<body id="top" class="style-6 body-boxed-2">
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
<style>
  a.ads{
    position:absolute;
    z-index: 999999;
    top:1360px;
    left:20px;
  }
</style>  
<!--Banner-->
<a class="ads" href="javascript:void(0);">
  <img src="./images/sms3030.gif" border=0 width="120" height="240">
</a>
<!--Banner-->
<div class="allWrapper"> 

  <!-- Slider -->
  <section class="slider section mainSection scrollAnchor darkSection" id="slider">
    <div class="topMenu navBar">
      <div class="container">
        <div class="row">
          <!-- <div class="topContact col-md-6 col-sm-12" style="float:left">
            <ul>
              <li class="tele">
                Tel: 
                <a href="javascript:void();" class="latinfont ltr" style="display:inline-block;letter-spacing:2px"> {$Tell_Number}</a>
              </li>
              <li class="mail">
                Email: 
                <a href="javascript:void();" class="latinfont" style="letter-spacing:2px">{$Contact_Email}</a>
              </li>
            </ul>
          </div> end of top contacts -->
          <ul class="topSocial socialNav col-md-6 col-sm-12">
            <li class="facebook"><a href="{$facebook}" target="_blank"><i class="animated fa fa-facebook"></i></a></li>
            <li class="twitter"><a href="{$twitter}" target="_blank"><i class="animated fa fa-twitter"></i></a></li>
            <li class="rss"><a href="{$rss}" target="_blank"><i class="animated fa fa-rss"></i></a></li>
            <li><a href="http://sms.sms3030.ir" target="_blank" style="padding: 0px 10px;text-align: center;line-height: normal;display: inline;font-size:19px;">ورود آزمایشی به سامانه</a></li>
            <li><a href="http://panel.sms3030.ir" target="_blank" style="padding: 0px 10px;text-align: center;line-height: normal;display: inline;font-size:19px;">ورود به سامانه</a></li>
            <li><a href="javascript:void(0);" style="padding: 0px 10px;text-align: center;line-height: normal;display: inline;font-size:19px;background-color:#cd2f2e">{$datetime}</a></li>
          </ul><!-- end of top social -->
        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of top menu -->
    <div id="mainSlider" class="mainSlider homeSlider_4  owl-carousel sliderStyle1">
cd;
for($i = 0; $i < Count($slides); $i++)
{
$slide.=<<<cd
      <div id="slide1" class="item slide">
        <div class="cover"></div>
    <!-- end of cover -->
    <img src="manager/img.php?did={$slides[$i]['id']}&type=slide" title="{$slides[$i]['subject']}" alt="{$slides[$i]['subject']}" />         
        <div class="captions">
          <h2 class="animated">{$slides[$i]['subject']}</h2>
          <p class="animated">
      {$slides[$i]['text']}
          </p>
        </div>
    <!-- end of captions -->
      </div>
    <!-- end of slide -->
cd;
}
$slide.=<<<cd
    </div><!-- end of main slider -->
  </section>
  <!-- end of slider -->
cd;

    
$news = $db->SelectAll("news","*",NULL,"id DESC","0","3");  

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
 // $dt=date("y-m-d",$news[$i]["regdate"]);
 // $tt=date("H:i:s",$news[$i]["regdate"]);
 // list($year,$month,$day) = explode("-", $dt);
 // list($hour,$min,$sec) = explode(":", $tt);
 // $td = Date("Y-m-d H:i:s",mktime($hour, $min, $sec, $month, $day, $year));
$news[$i]["regdate"] = ToJalali($news[$i]["regdate"]," l d F  Y");  
//$news[$i]["regdate"] = jdate(" l d F  Y",$news["regdate"],NULL,"Asia/Tehran");
//$news[$i]["regdate"]=$mydate->date("l j F Y H:i",$td);  
$news[$i]["text"] =(mb_strlen($news[$i]["text"])>120)?mb_substr($news[$i]["text"],0,120,"UTF-8")."...":$news[$i]["text"];
$pic = $db->Select("pics","*","`sid`='{$news[$i][id]}' AND `tid`='1'");
$img = base64_encode($pic['img']);
$src = 'data: '.$pic['itype'].';base64,'.$img;
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
                <a href="single-news{$news[$i]['id']}.html" title="post sample">
                 
    <!--
    <img  src="manager/img.php?did={$news[$i]['id']}&tid=1&type=other" 
          alt="{$news[$i]['subject']}" title="{$news[$i]['subject']}"/>
    -->
    
          <img src="{$src}" />
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
 // ob_start();
  include_once('./inc/header.php');
  echo $slide;
  include_once('./inc/menu.php');
  include_once('./inc/plans.php');
  // echo $html;
 // $page_content = ob_get_contents();
 // ob_end_clean(); 
 // echo $page_content;
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>