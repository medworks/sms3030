<?php
	include_once("./config.php");
	include_once("./classes/functions.php");
  	include_once("./classes/messages.php");
  	include_once("./classes/session.php");	
  	include_once("./classes/security.php");
  	include_once("./classes/database.php");	
	
	$db = Database::GetDatabase(); 
	$rows = $db->SelectAll("clients","*");
$chtml=<<<cd
<section class="clients section mainSection scrollAnchor lightSection" id="clients">
  <div class="sectionWrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12 sectionTitle">
          <h2 class="sectionHeader">
            مشتریان ما
            <span class="generalBorder"></span>
          </h2><!-- end of sectionHeader -->
        </div><!-- end of section title -->        
      </div><!-- end of row -->
      <div class="row">
        <div class="clientsCarousel owl-carousel clientsGallary">
cd;
for($i = 0; $i < Count($rows); $i++)
{	
$chtml.=<<<cd
          <div class="col-md-2 col-sm-4 item client singleClientsWrapper">
            <a class="singleClient" href="#" title="client">
			  <img src="./manager/img.php?did={$rows[$i]["id"]}&type=client" alt="{$rows[$i]['subject']}" title="{$rows[$i]['subject']}" />              
            </a><!-- end of single client -->
          </div><!-- end of single client wrapper -->
cd;
}
 $chtml.=<<<cd
          <!-- end of single client wrapper -->
        </div><!-- end of clients gallary -->
      </div><!-- end of row -->
    </div>
  </div>
</section>
<!-- end clients section -->
cd;

echo $chtml;
?>