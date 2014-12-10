<?php
  
  include_once("config.php");
  include_once("classes/functions.php");
  
  $FaceBook_Add = GetSettingValue('FaceBook_Add',0);  
  $Twitter_Add = GetSettingValue('Twitter_Add',0);  
  $Rss_Add = GetSettingValue('Rss_Add',0);  

$footer= <<<cd
<!-- Footer -->
  <footer class="footer" id="footer">   
    <!-- Bottom Footer -->
    <div class="bottomFooter">
      <div class="container">
        <div class="row">

          <div class="col-md-6 copyrights" style="float:left;text-align:left">
            <p class="latinfont">
              All Rights Reserved © SMS 3030  |  Template By 
              <a href="http://www.mediateq.ir" target="_blank">Mediateq.ir</a>
            </p>
          </div><!-- end of copyrights -->

          <div class="col-md-6 footerSocial">
            <div class="footerSocialWrapper">

              <ul class="bottomSocial socialNav">
                <li class="facebook"><a href="{$FaceBook_Add}"><i class="animated fa fa-facebook"></i></a></li>
                <li class="twitter"><a href="{$Twitter_Add}"><i class="animated fa fa-twitter"></i></a></li>
                <li class="rss"><a href="{$Rss_Add}"><i class="animated fa fa-rss"></i></a></li>
              </ul><!-- end of bottom social -->

              <!-- <ul class="paymentsNav">
                <li class="visa">
                  <a href="#" title="visa"><img alt="visa card" src="images/visa.png" title="visa card"></a>
                </li>
                <li class="master">
                  <a href="#" title="master card"><img alt="master card" src="images/master-card.png" title="master card"></a>
                </li>
                <li class="americanExpress">
                  <a href="#" title="american express"><img alt="american express" src="images/american-express.png" title="american express"></a>
                </li>
                <li class="paypal">
                  <a href="#" title="paypal"><img alt="paypal" src="images/paypal.png" title="paypal"></a>
                </li>
              </ul> end of payments nav -->
            </div><!-- end of footer social wrapper -->
          </div><!-- end of footer social -->
          <!-- Begin WebGozar.com Counter code 
              <script type="text/javascript" language="javascript" src="http://www.webgozar.ir/c.aspx?Code=3409390&amp;t=counter" ></script>
              <noscript><a href="http://www.webgozar.com/counter/stats.aspx?code=3409390" target="_blank">&#1570;&#1605;&#1575;&#1585;</a></noscript>
          End WebGozar.com Counter code -->
        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of bottom footer -->
    
  </footer><!-- end of footer -->
  
  
</div><!-- end of all wrapper -->

  
<!-- JavaScript Files ================================================== -->
<script src="./js/compiler.js" type="text/javascript"></script>
<script src="./js/scripts.js" type="text/javascript"></script>

<!-- BootStrap JavaScript ================================================== -->
<script src="./js/bootstrap.js" type="text/javascript"></script>  
<script type="text/javascript" src="./js/zebra_pagination.js"></script>

<script type="text/javascript" src="./js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="./js/jquery.validationEngine-fa.js"></script>

<script type="text/javascript" src="./js/jquery.fancybox.pack.js"></script>
  
</body>
</html>
cd;

echo $footer;
?>