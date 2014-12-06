<?php
    include_once("./config.php");
    include_once("./classes/database.php");	
	include_once("./classes/functions.php");
	
	$db = Database::GetDatabase();
	header("Content-Type: application/xml; charset=utf-8");
    $sm = '<?xml version="1.0" encoding="UTF-8"?>
    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    
	$news = $db->SelectAll("news","*",null,"id ASC");
	
	$add ="http://www.sms3030.ir/" ;

	$sm .="
	<url>
	  <loc>http://www.sms3030.ir/</loc>
	</url>
	<url>
	  <loc>http://www.sms3030.ir/aboutus.html</loc>
	</url>
	
	<url>
	  <loc>http://www.sms3030.ir/news.html</loc>
	</url>
	<url>
	  <loc>http://www.sms3030.ir/bank.html</loc>
	</url>
	<url>
	  <loc>http://www.sms3030.ir/contactus.html</loc>
	</url>
	<url>
	  <loc>http://www.sms3030.ir/plans.html</loc>
	</url>
	<url>
	  <loc>http://www.sms3030.ir/lines.html</loc>
	</url>
	<url>
	  <loc>http://www.sms3030.ir/reseller.html</loc>
	</url>
	<url>
	  <loc>http://www.sms3030.ir/single-plan.html</loc>
	</url>
	<url>
	  <loc>http://www.sms3030.ir/single-reseller.html</loc>
	</url>
	<url>
	  <loc>http://www.sms3030.ir/order.html</loc>
	</url>
	<url>
	  <loc>http://www.sms3030.ir/lineorder.html</loc>
	</url>
";
	$date = date("Y-m-d");	

	foreach($news as $key=>$val)
	{
		//$date = date("Y-m-dTH:i:s+00:00",$val['ndate']);
		//$date = date("D, d M Y H:i:s T");
		$sm.=<<<cd
		<url>
			<loc>{$add}single-news{$val["id"]}.html</loc>
			<lastmod>{$date}</lastmod>
			<changefreq>daily</changefreq>
			<priority>0.8</priority>
        </url>    		
cd;
	}
			
    $sm.= "</urlset>";
	echo $sm;