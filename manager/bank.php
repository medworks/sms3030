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
	
	if ($_POST["mark"]=="savebank")
	{
		$fields = array("`name`","`owner`","`accno`","`cardno`","`shebano`");		
		$values = array("'{$_POST[edtname]}'","'{$_POST[edtfamily]}'",
						"'{$_POST[edtaccno]}'","'{$_POST[edtcardno]}'",
						"'{$_POST[edtsheba]}'");	
		if (!$db->InsertQuery('bankinfo',$fields,$values)) 
		{			
			header('location:bank.php?act=new&msg=2');			
		} 	
		else 
		{  										
			header('location:bank.php?act=new&msg=1');
		}  	
			//echo $db->cmd;
	}
	else
	if ($_POST["mark"]=="editbank")
	{			    
		$values = array("`name`"=>"'{$_POST[edtname]}'","`owner`"=>"'{$_POST[edtfamily]}'",
						"`accno`"=>"'{$_POST[edtaccno]}'","`cardno`"=>"'{$_POST[edtcardno]}'",
						"`shebano`"=>"'{$_POST[edtsheba]}'");
        $db->UpdateQuery("bankinfo",$values,array("id='{$_GET[bid]}'"));		
		header('location:bank.php?act=new&msg=1');
	}	
	if ($_GET['act']=="new")
	{
		$insertoredit = "
			<button type='submit' class='btn btn-default'>ثبت</button>
			<input type='hidden' name='mark' value='savebank' /> ";
	}
	if ($_GET['act']=="edit")
	{
	    $row=$db->Select("bankinfo","*","id='{$_GET["bid"]}'",NULL);		
		$insertoredit = "
			<button type='submit' class='btn btn-default'>ویرایش</button>
			<input type='hidden' name='mark' value='editbank' /> ";
	}

$bhtml=<<<cd
<section id="min-wrapper">
        <div id="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--Top header start-->
                        <h3 class="ls-top-header">اطلاعات حساب بانکی</h3>
                        <!--Top header end -->
                        <!--Top breadcrumb start -->
                        <ol class="breadcrumb">
                            <li><a href="admin.php"><i class="fa fa-home"></i></a></li>
                            <li class="active">اطلاعات حساب</li>
                        </ol>
                        <!--Top breadcrumb start -->
                    </div>
                </div>
                <!-- Main Content Element  Start-->
                <form id="frmbank" name="frmbank" action="" method="post" class="form-inline ls_form" role="form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">نام بانک</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtname" name="edtname" type="text" class="form-control" value="{$row['name']}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">نام و نام خانوادگی دارنده حساب</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtfamily" name="edtfamily" type="text" class="form-control" value="{$row['owner']}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">شماره حساب</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtaccno" name="edtaccno" type="text" class="form-control" value="{$row['accno']}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">شماره کارت</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtcardno" name="edtcardno" type="text" class="form-control" value="{$row['cardno']}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">شماره شبا</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtsheba" name="edtsheba" type="text" class="form-control" value="{$row['shebano']}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">ثبت اطلاعات</h3>
                                </div>
                                <div class="panel-body">               
                                    {$insertoredit}
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Main Content Element  End-->
            </div>
        </div>
    </section>

cd;
    include_once("./inc/header.php");
    echo $bhtml;
    include_once("./inc/footer.php");
?>