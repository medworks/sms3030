<?php
    include_once("../config.php");
	include_once("../classes/functions.php");
  	include_once("../classes/security.php");
  	include_once("../classes/database.php");	

	$db = Database::GetDatabase();
	$pic = NULL;	
	if (isset($_GET["type"]) and $_GET["type"]=="gall")
	{
		$pic = $db->Select("gpics","*","`gid`='{$_GET[did]}'",NULL);
	}
	else
	if (isset($_GET["type"]) and $_GET["type"]=="slide")
	{
		$pic = $db->Select("slide","*","`id`='{$_GET[did]}'",NULL);
	}	
	else
	if (isset($_GET["type"]) and $_GET["type"]=="client")
	{
		$pic = $db->Select("clients","*","`id`='{$_GET[did]}'",NULL);
	}
	else
	{
		$pic = $db->Select("pics","*","`sid`='{$_GET[did]}' AND `tid`='{$_GET[tid]}'",NULL);
	}
	//echo $db->cmd;
	header("Content-type: {$pic[itype]}");
	//echo $db->cmd;
	//echo base64_decode($pic['img']);
	echo $pic["img"];
	//echo $img;	
?>