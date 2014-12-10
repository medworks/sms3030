<?php
	include_once("./config.php");
	include_once("./classes/functions.php");
  	include_once("./classes/messages.php");
  	include_once("./classes/session.php");	
  	include_once("./classes/security.php");
  	include_once("./classes/database.php");	
	include_once("./classes/login.php");
    include_once("./lib/persiandate.php");
	
	$db = Database::GetDatabase();
	$row = $db->Select("plans","*","type = 2","pos ASC");
	$PlanDescribe = GetSettingValue('PlanDescribe',0);
	
$reseller=<<<cd
    <!-- Page Info -->
    <div class="pageInfo">
      <div class="cover"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="pageTitle">نمایندگی</h2>
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
                    <th>پنل نمایندگی / مدیر</th>
                  </tr>
                </thead>

                <tbody>
cd;

	$params = explode(",",$row["params"]);
for($i = 0; $i < count($params); $i++)
{	
	$params[$i] = $db->Select("params","name","id ={$params[$i]}");
$reseller.=<<<cd
                  <tr>
                    <td>{$params[$i][0]}</td>
                    <td><img src="./images/tik.png" alt="" width="25" height="25"/></td>
                  </tr>
cd;
}
$reseller.=<<<cd
                  <tr>
                    <td>سفارش / قیمت (ریال)</td>
                    <td><a href="order.html" class="generalLink order" style="font-size:18px"><price>{$row["price"]}</price></a></td>
                  </tr>

                </tbody>
              </table>
              <p class="detail" style="padding: 20px 10px; color: #cd2f2e;">{$PlanDescribe}</p>
            <div id="ascrail2002" class="nicescroll-rails" style="width: 6px; z-index: 99999999999; position: absolute; top: 0px; right: 0px; opacity: 1; cursor: default; display: none; height: 718px;"><div style="position: relative; top: 0px; float: right; width: 6px; border: 0px; border-radius: 3px; height: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box;"></div></div><div id="ascrail2002-hr" class="nicescroll-rails" style="height: 6px; z-index: 99999999999; position: absolute; left: 0px; bottom: 0px; opacity: 1; cursor: default; display: none; width: 1168px;"><div style="position: relative; top: 0px; height: 6px; border: 0px; border-radius: 3px; width: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box;"></div></div></div><!-- end of table wrapper -->

          </div><!-- end of col-md-12 -->


        </div><!-- end of row-->
      </div><!-- end of container -->
    </div><!-- end of section wrapper -->
  </section>
cd;
  include_once('./inc/header.php');
  include_once('./inc/pageheader.php');
  include_once('./inc/menu.php');
  echo $reseller;
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>