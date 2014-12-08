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
	
	if (isset($_GET["act"]) and $_GET["act"]=="view")
	{
		$row = $db->Select("agents","*","id ={$_GET['aid']}");
		$regdate = ToJalali($row["regdate"]," l d F  Y ساعت H:i");
	}
	
	if ((isset($_POST["mark"]) and $_POST["mark"]=="confirm"))
	{
		$values = array("`confirm`"=>"'1'");
		$db->UpdateQuery("agents",$values,array("id='{$_GET[aid]}'"));		
		header('location:regreseller.php?act=new');
	}
$html=<<<cd
<section id="min-wrapper">
        <div id="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--Top header start-->
                        <h3 class="ls-top-header">مشاهده اطلاعات ثبت نام کنندگان</h3>
                        <!--Top header end -->
                        <!--Top breadcrumb start -->
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0);"><i class="fa fa-home"></i></a></li>
                            <li class="active">مشاهده اطلاعات</li>							
                        </ol>
                        <!--Top breadcrumb start -->
                    </div>
                </div>
                <!-- Main Content Element  Start-->
                <form id="frmagents" name="frmagents"  action="" method="post" class="form-inline ls_form" role="form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">تاریخ و زمان ثبت نام</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        {$regdate}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">نام و نام خانوادگی</h3>
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
                                    <h3 class="panel-title">نام شرکت</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtcompany" name="edtcompany" type="text" class="form-control" value="{$row['company']}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">ایمیل</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtemail" name="edtemail" type="text" class="form-control" value="{$row['email']}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">نام کاربری</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtusername" name="edtusername" type="text" class="form-control" value="{$row['username']}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">رمز عبور</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtpass" name="edtpass" type="text" class="form-control" value="{$row['password']}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">کد ملی</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtmeli" name="edtmeli" type="text" class="form-control" value="{$row['meli']}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">شماره شناسنامه</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtshenas" name="edtshenas" type="text" class="form-control" value="{$row['shenasname']}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">شماره ثابت</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edttell" name="edttell" type="text" class="form-control" value="{$row['tell']}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">شماره همراه</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtmobile" name="edtmobile" type="text" class="form-control" value="{$row['mobile']}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">کد پستی</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtzipcode" name="edtzipcode" type="text" class="form-control" value="{$row['codeposti']}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">آدرس</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="txtaddress" name="txtaddress" type="text" class="form-control" value="{$row['address']}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">تایید اطلاعات</h3>
                                </div>
                                <div class="panel-body">               
                                    <button id="submit" type="submit" class="btn btn-default">تایید</button>
                                    <input type="hidden" name="mark" value="confirm"> 
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
    echo $html;
    include_once("./inc/footer.php");
?>