<?php
	include_once("../config.php");
	include_once("../classes/functions.php");
  	include_once("../classes/messages.php");
  	include_once("../classes/session.php");	
  	include_once("../classes/security.php");
  	include_once("../classes/database.php");	
	include_once("../classes/login.php");
    include_once("../lib/persiandate.php"); 

	$login = Login::GetLogin();
    if (!$login->IsLogged())
	{
		header("Location: ../index.php");
		die(); // solve a security bug
	}
	$db = Database::GetDatabase();	
	
	if ($_POST["mark"]=="savegroup")
	{
		$fields = array("`name`");		
		$values = array("'{$_POST[edtgroup]}'");	
		if (!$db->InsertQuery('categories',$fields,$values)) 
		{			
			header('location:categories.php?act=new&msg=2');			
		} 	
		else 
		{  										
			header('location:categories.php?act=new&msg=1');
		}  		
	}
	else
	if ($_POST["mark"]=="editgroup")
	{			    
		$values = array("`name`"=>"'{$_POST[edtgroup]}'");
        $db->UpdateQuery("categories",$values,array("id='{$_GET[gid]}'"));		
		header('location:categories.php?act=new&msg=1');
	}	
	if ($_GET['act']=="new")
	{
		$insertoredit = "
			<button type='submit' class='btn btn-default'>ثبت</button>
			<input type='hidden' name='mark' value='savegroup' /> ";
	}
	if ($_GET['act']=="edit")
	{
	    $row=$db->Select("categories","*","id='{$_GET["gid"]}'",NULL);		
		$insertoredit = "
			<button type='submit' class='btn btn-default'>ویرایش</button>
			<input type='hidden' name='mark' value='editgroup' /> ";
	}
	if ($_GET['act']=="del")
	{
		$db->Delete("categories"," id",$_GET["gid"]);		
		header('location:categories.php?act=new');	
	}	
$msgs = GetMessage($_GET['msg']);

$html=<<<cd
    <!--Page main section start-->
    <section id="min-wrapper">
        <div id="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--Top header start-->
                        <h3 class="ls-top-header">تعداد ثبت نام کنندگان</h3>
                        <!--Top header end -->
                        <!--Top breadcrumb start -->
                        <ol class="breadcrumb">
                            <li><a href="admin.php"><i class="fa fa-home"></i></a></li>
                            <li class="active">تعداد ثبت نام کنندگان</li>
                        </ol>
                        <!--Top breadcrumb start -->
                    </div>
                </div>
                <!-- Main Content Element  Start-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">تعداد ثبت نام کنندگان</h3>
                            </div>
                            <div class="panel-body">
                                <form name="frmcat" action="" method="post" class="form-inline ls_form" role="form">
                                    <div class="form-group">
                                        <input id="edtgroup" name="edtgroup" type="text" class="form-control" placeholder="اسم گروه" value="{$row['name']}"/>
                                    </div>
                                    {$insertoredit}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
    </section>
    <!--Page main section end -->
cd;
	include_once("./inc/header.php");
	echo $html;
    include_once("./inc/footer.php");
?>