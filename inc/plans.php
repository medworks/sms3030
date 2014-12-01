 <?php
	include_once("./config.php");
	include_once("./classes/functions.php");
  	include_once("./classes/messages.php");
  	include_once("./classes/session.php");	
  	include_once("./classes/security.php");
  	include_once("./classes/database.php");	
	include_once("./classes/login.php");
    include_once("./lib/persiandate.php"); 
	include_once("./lib/Zebra_Pagination.php"); 
	
		
	$db = Database::GetDatabase(); 
	
 $plan =<<<cd
 
 <section class="pricing section mainSection scrollAnchor lightSection style-4" id="pricing">
    <div class="sectionWrapper">
      <div class="container">
        <div class="row">
          <style>
            .pricingIcon h2{
              color: #333;
              font-family: 'arno pro', sans-serif ;
              font-size: 48px;
              font-weight: normal;
              direction: ltr;
              line-height: 98px;
            }
            .pricingIcon h2 sup{
              font-size: 35px;
              font-weight: inherit;
              font-family: inherit;
              vertical-align: middle;
            }
          </style>
cd;
	$records_per_page = 4;
	$pagination = new Zebra_Pagination();

	$pagination->navigation_position("right");

	$reccount = $db->CountAll("plans");
	$pagination->records($reccount); 
	
    $pagination->records_per_page($records_per_page);	

$rows = $db->SelectAll(
				"plans",
				"*",
				NULL,
				"pos ASC",
				($pagination->get_page() - 1) * $records_per_page,
				$records_per_page);
				
for($i = 0; $i < Count($rows); $i++)
{
$rownumber = $i+1;
$specials = explode(",",$rows[$i]["specials"]);
if ($rows[$i]["offer"])
{
	$offer = "<img src='images/ribbon.png' alt='ribbon' class='ribbon'>";
}
else
{
	$offer = "";
}
$plan.=<<<cd
          <div class="col-md-3 col-sm-6">
            <div class="pricingTable">
              <header class="pricingHeader clearfix">
				{$offer}
                <div class="pricingIcon" style="background:#ffffff center center no-repeat"><h2>{$rows[$i]["name"]}</h2></div>
                <h3 class="pricingTitle planTitle">{$rows[$i]["title"]}</h3>
              </header><!-- end pricing header -->
			  <ul class="pricingBody planBody">
cd;
if (Count($specials)>0 )
{
for($j = 0; $j < Count($specials); $j++)
{
	$specials[$j] = $db->Select("params","name","id ={$specials[$j]}");
$plan.=<<<cd
                <li>{$specials[$j][0]}</li>
cd;
}
}
$plan.=<<<cd
                <li class="clearfix">
                  <span class="pricingPerMonth rtl">80.000 ریال 
                    <a href="#" class="generalLink order">سفارش</a>
                  </span>
                </li>
              </ul>
			  <!-- end pricing body -->
            </div><!-- end of pricing table -->
          </div>
cd;
}
$plan.=<<<cd
        </div><!-- end of row-->
      </div><!-- end of container -->
    </div><!-- end of section wrapper -->
  </section>
cd;
 echo $plan;
 ?>