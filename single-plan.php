<?php
    include_once("./config.php");
	include_once("./classes/functions.php");
  	include_once("./classes/messages.php");
  	include_once("./classes/session.php");	
  	include_once("./classes/security.php");
  	include_once("./classes/database.php");	
	
	$db = Database::GetDatabase(); 
	$plans = $db->SelectAll("plans","*","type = 1","pos ASC");
	$params = $db->SelectAll("params","*",NULL,"pos ASC");
	$PlanDescribe = GetSettingValue('PlanDescribe',0);
				
	
$splan=<<<cd
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
cd;

for($i = 0; $i < Count($plans); $i++)
{
$splan.=<<<cd
                    <th>{$plans[$i]["name"]}</th>
cd;
}
$splan.=<<<cd
                </tr>
                </thead>
                <tbody>
cd;
for($i = 0; $i < Count($params); $i++)
{
$splan.=<<<cd
                  <tr>
                    <td>{$params[$i]["name"]}</td>
cd;
for($j = 0; $j < Count($plans); $j++)
{
	$param = explode(",",$plans[$j]["params"]);
	if (in_array($params[$i]["name"],$param))
	{
		$img =" <img src='./images/tik.png' alt='' width='25' height='25' />"; 
	}
	else
	{
		$img =" <img src='./images/cross.png' alt='' width='25' height='25' />"; 
	}
$splan.=<<<cd
                    <td>{$img}</td>
cd;
}
$splan.=<<<cd
                  </tr>
cd;
}
$splan.=<<<cd
                  <tr>
                    <td>سفارش/قیمت (ریال)</td>
                    <td><a href="http://panel.sms3030.ir" class="generalLink order" style="font-size:18px">80000</a></td>
                    <td><a href="http://panel.sms3030.ir" class="generalLink order" style="font-size:18px">10000</a></td>
                    <td><a href="http://panel.sms3030.ir" class="generalLink order" style="font-size:18px">20000</a></td>
                    <td><a href="http://panel.sms3030.ir" class="generalLink order" style="font-size:18px">30000</a></td>
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
  echo $splan;
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>