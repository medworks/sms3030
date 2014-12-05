<?php
	include_once("./config.php");
	include_once("./classes/functions.php");
  	include_once("./classes/session.php");	
  	include_once("./classes/security.php");
  	include_once("./classes/database.php");	
	
	$db = Database::GetDatabase();	
	$agents=$db->Select("plans","*","type=2");
	$params = explode(",",$agents["specials"]);
	for($i=0;$i<count($params);$i++)
	{
		$param = $db->Select("params","name","id ={$params[$i]}");
		$params[$i] = $param[0];
	}
$rhtml=<<<cd
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
  <section class="facts section mainSection scrollAnchor graySection" id="facts">
    <div class="sectionWrapper">
      <div class="container">
        <div class="row factsContents">

          <div class="col-md-3 factsWrapper">
            <div class="fact singleFact factBox">
              <div class="factIcon factIcon3"></div>
              <h4 class="factTitle">
                <a href="single-reseller.html">{$params[0]}</a>
              </h4>
			  <!--
              <p class="factDescription">
                تعریف دامنه با نام خود برروی پنل.
              </p>
			  -->
            </div><!-- end of fact -->
            
            <div class="fact singleFact factBox">
              <div class="factIcon factIcon3"></div>
              <h4 class="factTitle">
                <a href="single-reseller.html">{$params[1]}</a>
              </h4>
               <!--
              <p class="factDescription">
                تعریف دامنه با نام خود برروی پنل.
              </p>
			  -->
            </div><!-- end of fact -->
            <div class="fact singleFact factBox">
              <div class="factIcon factIcon3"></div>
              <h4 class="factTitle">
                <a href="single-reseller.html">{$params[2]}</a>
              </h4>
               <!--
              <p class="factDescription">
                تعریف دامنه با نام خود برروی پنل.
              </p>
			  -->
            </div><!-- end of fact -->
            
          </div><!-- end of facts wrapper -->

          <div class="col-md-6 factsImg">
            <div class="imacWrapper">
              <a href="http://sms.sms3030.ir" title="پنل نمایندگی اس ام اس 3030" target="_blank">
                <img alt="imac" class="imac" src="images/i-mac.png" title="پنل نمایندگی اس ام اس 3030">
              </a>
            </div>
          </div><!-- end of fact img -->
        
          <div class="col-md-3 factsWrapper">
            <div class="fact singleFact factBox">
              <div class="factIcon factIcon3"></div>
              <h4 class="factTitle">
                <a href="single-reseller.html">{$params[3]}</a>
              </h4>
               <!--
              <p class="factDescription">
                تعریف دامنه با نام خود برروی پنل.
              </p>
			  -->
            </div><!-- end of fact -->
            
            <div class="fact singleFact factBox">
              <div class="factIcon factIcon3"></div>
              <h4 class="factTitle">
                <a href="single-reseller.html">{$params[4]}</a>
              </h4>
               <!--
              <p class="factDescription">
                تعریف دامنه با نام خود برروی پنل.
              </p>
			  -->
            </div><!-- end of fact -->
            <div class="fact singleFact factBox">
              <div class="factIcon factIcon3"></div>
              <h4 class="factTitle">
                <a href="single-reseller.html">{$params[5]}</a>
              </h4>
               <!--
              <p class="factDescription">
                تعریف دامنه با نام خود برروی پنل.
              </p>
			  -->
            </div><!-- end of fact -->
            
          </div><!-- end of facts wrapper -->
        </div><!-- end of row -->

      </div><!-- end of container -->
    </div><!-- end of section wrapper -->
  </section>
cd;

  include_once('./inc/header.php');
  include_once('./inc/pageheader.php');
  include_once('./inc/menu.php');
  echo $rhtml;
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>