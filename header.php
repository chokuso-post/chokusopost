<!DOCTYPE html>
<html lang="ja">
<head>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript">

  $(document).ready(function(){
    $("#menu-btn").on('click', function(){
          $("#menu").animate({
              "right" : 0
          }, 300)
      });
    $("#close-btn").on('click', function(){
        $("#menu").animate({
            "right" : "-200px"
        })
    });
    var w = $(window).width();
    var h = $(window).height();

    $("#top-image").css({
      "height" : h
    });

  });



  </script>

  <meta charset="utf-8">
    <!-- ビューポートの設定 -->
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>直想便　「想い」を届けるポストカード。</title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

  <?php //wp_deregister_script('jquery'); ?>
<!-- WordPressのjQueryを読み込ませない -->
  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"> </script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/nav.js"> </script>
    
<meta property="og:title" content="直想便 「想い」をまっ直ぐに。">
<meta property="og:url" content="chokusopost.com">
<meta property="og:image" content src="images/logo.png">
<meta property="og:site_name" content="直想便 フォトグラファー派遣">
<meta property="og:description" content="HOME| 直想便は「孫 ✕ 祖父母」
にフォーカスしたフォトグラファー派遣サービスです。ただ撮るだけではなく、想い、想われ、想い合う時間を提供します。">
    
<link rel="apple-touch-icon" href="images/logo.png">
    <meta name="description" content=" 直想便は「孫 ✕ 祖父母」
にフォーカスしたフォトグラファー派遣サービスです。ただ撮るだけではなく、想い、想われ、想い合う時間を提供します。">
    <link rel="shortcut icon" href="images/favicon.ico">
    <?php wp_head(); ?>
</head>
<body>
<div class="overflow">
 <!-- ヘッダー -->
  <header>
    <div class="container">
      <div class="row">
        <div id="header-left">
          <a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/images/chokuso-logo-transparent.png" alt="logo" style="width: 55px; margin: 7px;"></a>
        </div>
        <div id="header-right" style="padding: 5px;">
          <img id="menu-btn" style="width: 60px;" src="<?php echo get_template_directory_uri(); ?>/images/menu.png" alt="">
        </div>
      </div>
    </div>
    

    <div id="menu">
    <div class="container">
      <!-- 右の隠れメニューを閉じるボタン -->
      <div class="row">
        <div class="col-md-offset-1 col-md-10" style="text-align: center; margin-top: 15px; padding: 3px;">
          <p style="color: black; font-size: 20px;" class="roman" id="close-btn">✕ Close</p>
        </div>
        <div class="col-md-offset-1 col-md-10" style="text-align: center; margin-top: 15px; padding: 3px; border: 3px solid black; border-radius: 10px;">
          <p class="roman yellow">Application</p>
          <p style="font-size: 20px;" id="close-btn"><a href="" title="" style="color: black;">撮影お申込み</a></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12" style="text-align: center;">
          <div style="border-bottom: 1px black solid; margin: 15px 0;">
            <p class="roman yellow">Top</p>
            <a href="" title="" style="font-size: 15px;"><p>トップ</p></a>
          </div>
          <div style="border-bottom: 1px black solid; margin: 15px 0;">
            <p class="roman yellow">Services</p>
            <a href="" title="" style="font-size: 15px;"><p>サービス</p></a>
          </div>
          <div style="border-bottom: 1px black solid; margin: 15px 0;">
            <p class="roman yellow">Flow ＆ Price</p>
            <a href="" title="" style="font-size: 15px;"><p>撮影の流れ・料金</p></a>
          </div>
          <div style="border-bottom: 1px black solid; margin: 15px 0;">
            <p class="roman yellow">Gallery</p>
            <a href="" title="" style="font-size: 15px;"><p>ギャラリー</p></a>
          </div>
          <div style="border-bottom: 1px black solid; margin: 15px 0;">
            <p class="roman yellow">Photographers</p>
            <a href="" title="" style="font-size: 15px;"><p>フォトグラファー</p></a>
          </div>
          <div style="border-bottom: 1px black solid; margin: 15px 0;">
            <p class="roman yellow">Chokusoposts</p>
            <a href="" title="" style="font-size: 15px;"><p>直想ポスト</p></a>
          </div>

        </div>
      </div>
    </div>

    </div>
  </header>

<!-- ヘッダー終わり -->
