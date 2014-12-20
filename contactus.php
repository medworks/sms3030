<?php
	include_once("config.php");
    include_once("classes/database.php");
    include_once("classes/messages.php");
	include_once("classes/functions.php");
	include_once("lib/persiandate.php");
	include_once("classes/seo.php");
			
	$db = Database::GetDatabase();
	$seo = Seo::GetSeo();
	
	$seo->Site_Title = "تماس با ما";
	//$seo->Site_Describtion = mb_substr($About_System,0,150,"UTF-8");
  
	$msg = Message::GetMessage();
	
	$Contact_Email = GetSettingValue('Contact_Email',0);				
	$Tell_Number = GetSettingValue('Tell_Number',0);
	$Fax_Number = GetSettingValue('Fax_Number',0);
	$Address = GetSettingValue('Address',0);
	$FaceBook_Add = GetSettingValue('FaceBook_Add',0);  
    $Twitter_Add = GetSettingValue('Twitter_Add',0);  
    $Rss_Add = GetSettingValue('Rss_Add',0);  	
	$Gplus_Add = GetSettingValue('Gplus_Add',0);
	
$contact=<<<cd
<script>	
		$(document).ready(function(){
			$("#frmcontact").submit(function(){               
			    $.ajax({
				    type: "POST",
				    url: "./manager/ajaxcommand.php?contact=reg",
				    data: $("#frmcontact").serialize(),
					    success: function(msg)
						{
							$("#note-contact").ajaxComplete(function(event, request, settings){				
								$(this).hide();
								$(this).html(msg).slideDown("slow");
								$(this).html(msg);
							});
						}
			    });
				return false;
			});
		});
	</script>
	
    <div class="pageInfo">
      <div class="cover"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="pageTitle">تماس با ما</h2>
          </div><!-- end of col-md-4 -->
          <div class="col-md-8">
            <ol class="breadcrumb">
              <li>
                <a href="./">صفحه اصلی</a>
              </li>
              <li class="active">تماس با ما</li>
            </ol><!-- end of breadcrumb -->
          </div><!-- end of col-md-8 -->

        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of page info -->
  </section>
  <!-- end of Page Header -->
  <section class="contact section mainSection scrollAnchor lightSection" id="contact">
        <div class="sectionWrapper">
          <div class="container">

            <div class="row">
              <div class="col-md-12">
              	<div class="googleMap">
              		<iframe width="1170px" height="350px" src="https://mapsengine.google.com/map/u/2/embed?mid=z9FVbEWGiKoM.kv8Cd3n8uG3s&z=16"></iframe>
              	</div><!--  end of google map -->
              	<div class="address" style="margin:20px 0">
              		<p>آدرس: {$Address}</p>
              		<p>تلفن: {$Tell_Number}</p>
              		<p class="latinfont">ایمیل: {$Contact_Email}</p>
              	</div>
              </div><!-- end  of col-md-12 -->
            </div><!-- end of row -->

            <div class="row">

              <div class="col-md-8">

                <div class="department">
                   <h5 class="departHeader">با ما در تماس باشید</h5><!-- end of depart header -->

                   <div class="departBody clearfix">

                       <!-- start success message  -->

                    <div class="col-md-12 alertWrapper suucessmsg" style="display: none;">
                
                      <div class="alert alert-success" role="alert">
                        <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>

                        <div class="alertContents clearfix">
                          <i class="animated alertIcon fa fa-check"></i>
                          <span class="alertDetails">Your message has been sent successfully</span>
                        </div><!-- end of alert contents -->

                      </div><!-- end of alert -->

                    </div><!-- end of alertWrapper -->

                    <!-- end success message -->


                    <!-- start error message  -->
                    <div class="col-md-12 alertWrapper errorsmsg" style="display: none;">
                
                      <div class="alert alert-error" role="alert">
                        <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>

                        <div class="alertContents clearfix">
                          <i class="animated alertIcon fa fa-close"></i>
                          <span class="alertDetails">An error occurred please try again later</span>
                        </div><!-- end of alert contents -->

                      </div><!-- end of alert -->

                  </div><!-- end of alertWrapper -->

                  <!-- end error message -->

                      <div class="sendMessage add-send clearfix">
                        <style>
                          form.sendMessageForm input,
                          form.sendMessageForm textarea{
                            direction: rtl;
                          }
                        </style>
                        <form id="frmcontact" name="frmcontact" method="POST" action="" class="sendMessageForm clearfix">
                          <ul class="row clearfix">
                            <li class="col-md-6">
                              <input type="text" value="نام و نام خانوادگی" onblur="if(this.value=='')this.value='نام و نام خانوادگی'" onfocus="if(this.value=='نام و نام خانوادگی')this.value=''" name="name" id="name" class="name" />
                            </li>
                            <li class="col-md-6">
                              <input type="email" value="ایمیل *" onblur="if(this.value=='')this.value='ایمیل *'" onfocus="if(this.value=='ایمیل *')this.value=''" name="email" id="email" class="email" />
                            </li>
                            <li class="col-md-6">
                              <input type="text" value="تلفن" onblur="if(this.value=='')this.value='تلفن'" onfocus="if(this.value=='تلفن')this.value=''" name="phone" id="phone" class="phone" />
                            </li>
                            <li class="col-md-6">
                              <input type="text" value="موضوع" onblur="if(this.value=='')this.value='موضوع'" onfocus="if(this.value=='موضوع')this.value=''" name="subject" id="subject" class="subject" />
                            </li>
                            <li class="col-md-12">
                              <textarea name="message" id="message" class="inputBar"></textarea>
                            </li>
                          </ul>
                          <button type="submit" class="loadingbtn" data-loading-text="Sending Your Message .... ">ارسال</button>
                        </form><!-- end of send Message form -->
						<div id="note-contact" style="font-size:22px;color:#DE5328"></div>
                      </div><!-- end of send Message -->
                   </div><!-- end of widget body -->
                </div><!-- end of widget -->
              </div><!-- end of col-md-8 -->

              <aside class="col-md-4 sidebar">
                <div class="department following">
                  <h5 class="departHeader followingHeader">ما را در شبکه های زیر دنبال کنید</h5><!-- end of depart header -->
                  <div class="departBody followingbody">
                    <ul class="rrssb-buttons colorful left clearfix rrssb-1">
                      <li class="facebook" data-initwidth="16.666666666666668" style="width: 16.6666666666667%;">
                          <a href="{$FaceBook_Add}" class="popup"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li class="twitter" data-initwidth="16.666666666666668" style="width: 16.6666666666667%;">
                          <a href="{$Twitter_Add}" class="popup"><i class="fa fa-twitter"></i></a>
                      </li>
                      <li class="googleplus" data-initwidth="16.666666666666668" style="width: 16.6666666666667%;">
                          <a href="{$Gplus_Add}" class="popup"><i class="fa fa-google-plus"></i></a>
                      </li>
                      <li class="youtube" data-initwidth="16.666666666666668" style="width: 16.6666666666667%;">
                        <!-- Replace subject with your message using URL Endocding: http://meyerweb.com/eric/tools/dencoder/ -->
                        <a href="#"><i class="fa fa-youtube"></i></a>
                      </li>
                      <li class="linkedIn" data-initwidth="16.666666666666668" style="width: 16.6666666666667%;">
                          <a href="#"><i class="fa fa-linkedin"></i></a>
                      </li>
                      <li class="pinterest" data-initwidth="16.666666666666668" style="width: 16.6666666666667%;">
                          <a href="#"><i class="fa fa-pinterest"></i></a>
                      </li>
                    </ul>
                  </div><!-- end of following body -->                 
                </div><!-- end of following -->
              </aside><!-- end of sidebar -->

            </div>
          </div><!-- end of container -->
        </div><!-- end of section wrapper -->
      </section>
cd;

  include_once('./inc/header.php');
  include_once('./inc/pageheader.php');
  include_once('./inc/menu.php');
  echo $contact;
  include_once('./inc/footer.php');
?>