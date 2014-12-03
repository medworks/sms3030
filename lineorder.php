<?php
    include_once("./config.php");
	include_once("./classes/functions.php");
  	include_once("./classes/messages.php");
  	include_once("./classes/session.php");	
  	include_once("./classes/security.php");
  	include_once("./classes/database.php");	
	
    			
	$db = Database::GetDatabase(); 
	
	if ($_POST["mark"]=="register")
	{
		$date = date('Y-m-d H:i:s');
		$fields = array("`name`","`company`","`email`","`username`","`password`",
						"`meli`","`shenasname`","`tell`","`mobile`","`codeposti`",
						"`address`","`regdate`");
		$values = array("'{$_POST[edtname]}'","'{$_POST[edtcompany]}'","'{$_POST[edtemail]}'",
						"'{$_POST[edtusername]}'","'{$_POST[edtpass]}'","'{$_POST[edtmeli]}'",
						"'{$_POST[edtshenas]}'","'{$_POST[edttell]}'","'{$_POST[edtmobile]}'",
						"'{$_POST[edtzipcode]}'","'{$_POST[txtaddress]}'","'{$date}'");
		if (!$db->InsertQuery('agents',$fields,$values)) 
		{			
			header('location:order.html?act=new&msg=2');			
		} 	
		else 
		{  										
			header('location:order.html?act=new&msg=1');
		}  		
	}

$order2=<<<cd
    <!-- Page Info -->
    <div class="pageInfo">
      <div class="cover"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="pageTitle">ثبت نام خط</h2>
          </div><!-- end of col-md-4 -->
          <div class="col-md-8">
            <ol class="breadcrumb">
              <li>
                <a href="./">صفحه اصلی</a>
              </li>
              <li class="active">ثبت نام خط</li>
            </ol><!-- end of breadcrumb -->
          </div><!-- end of col-md-8 -->

        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of page info -->
  </section>
  <!-- end of Page Header -->
  <section class="registerArea section mainSection scrollAnchor graySection" id="registerArea">
        <div class="sectionWrapper">
          <div class="container">

            <div class="row">
              <div class="col-md-12 sectionTitle">
                <h2 class="sectionHeader">
                  ثبت نام پنل نمایندگی اس ام اس 3030
                  <span class="generalBorder"></span>
                </h2><!-- end of sectionHeader -->
                <p>
                  لطفا فیلدهای زیر را به صورت کامل پر نموده و برای ما ارسال نمایید در اولین فرصت برای شما خط مورد نظر بر روی پنل کاربریتان قرار خواهد گرفت.
                </p>
              </div><!-- end of section title -->
              
            </div><!-- end of row -->

            <div class="row registerAreaContents">

              <div class="col-md-12 formWrapper">
                <form action="" class="registerFormArea formArea rtl formdata" method="POST">

                  <ul class="row">
                    <li class="col-md-6">
                      <input class="name validate[required]" data-prompt-position="topLeft" id="name" name="edtname" placeholder="نام و نام خانوادگی*" type="text" />
                    </li>
                    <li class="col-md-6">
                      <input class="company-name" id="company-name" name="edtcompany" placeholder="نام شرکت" type="text" />
                    </li>
                    <li class="col-md-6">
                      <input class="email validate[required,custom[email]]" id="email" data-prompt-position="topLeft" name="edtemail" placeholder="ایمیل*" type="email" />
                    </li>
                    <li class="col-md-6">
                      <input class="user validate[required]" data-prompt-position="topLeft" id="user" name="edtusername" placeholder="نام کاربری*" type="text" />
                    </li>
                    <li class="col-md-6">
                      <input class="line validate[required,custom[onlyNumberSp],maxSize[14],minSize[8]]" data-prompt-position="topLeft" id="line" name="line" placeholder="شماره خط مورد نظر*" type="text" />
                    </li>
                    <li class="col-md-6">
                      <input class="reline validate[required,equals[line]]" data-prompt-position="topLeft" id="reline" name="reline" placeholder="تکرار شماره خط مورد نظر*" type="text" />
                    </li>
                    
                    <li class="col-md-12">
                      <button class="generalBtn loginBtn" type="submit">ارسال</button>
					             <input type="hidden" name="mark" value="register" />
                    </li>
                  </ul><!-- end of row -->

                </form><!-- end of registerFormArea -->
              </div><!-- end of col-md-12 -->

            </div><!-- end of registerAreaContents -->
            
          </div><!-- end of container -->
        </div><!-- end of section wrapper -->
      </section>
cd;

  include_once('./inc/header.php');
  include_once('./inc/pageheader.php');
  include_once('./inc/menu.php');
  echo $order2;
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>