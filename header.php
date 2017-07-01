<!DOCTYPE html>
<html lang="ja">
<head>

  <script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>

  </script>

  <style type="text/css">
 
#header {
    min-height: 500px;
    background-color: #f3f3f3;
    color: #333;
    font: 13px/18px 'Open Sans', arial, sans-serif;
    -webkit-font-smoothing: antialiased;
}

header {
  width: 100%;
  background-color: black;
  height: 60px;
  margin-bottom: 35px;
   position: fixed;
   z-index: 999;
}

.navbar-nav>li>a {
    padding-top: 15px;
    padding-bottom: 15px;
    line-height: 20px;
}

.top-bar {
    background-color: #fff;
    margin-bottom: 0px;
    width: 100%;
    height: 50px;
    webkit-box-shadow: rgba(0, 0, 0, 0.14902) 0px 2px 4px 0px;
    -moz-box-shadow: rgba(0, 0, 0, 0.14902) 0px 2px 4px 0px;
    box-shadow: rgba(0, 0, 0, 0.14902) 0px 2px 4px 0px;
}

.menu-item {
    line-height: 20px;
    font-weight: bold;
    font-size: 15px;
}

.menu-item-flexible {
    max-width: 230px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}

.web-logo {
    font-size: 18px;
    font-weight: 200;
    line-height: 1;
    padding-left: 0px;
}

@media (max-width: 768px) {
    .web-logo {
        padding-left: 15px;
    }
}

.header-profile {
    color: #3f729b;
    font-weight: bold;
    line-height: 1;
    max-width: 100px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}

.navbar-nav>li>a.header-profile {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 30px;
}

.user-name-box {
    margin-left: 5px;
    display: none;
}

@media (min-width:768px) {
    .navbar-nav>li>a.header-profile {
        padding-right: 5px;
    }
    .web-logo {
        padding-left: 15px;
    }
}

#bs-navbar {
    background-color: #fff;
}

@media (max-width:767px) {
    .navbar-nav>li>a.header-profile {
        max-width: none;
        text-overflow: inherit;
        white-space: inherit;
        overflow: inherit;
        padding-top: 5px;
        padding-bottom: 5px;
        line-height: 25px;
    }
    .menu-item {
        font-size: 14px;
    }
    .menu-item-flexible {
        max-width: none;
        text-overflow: inherit;
        overflow: inherit;
        white-space: inherit;
    }
    .user-name-box {
        font-size: 14px;
        display: inline-block;
    }
    .navbar-nav>li {
        background-color: #eee;
    }
    #bs-navbar {
        background-color: #eee;
        font-size: 15px;
        webkit-box-shadow: rgba(0, 0, 0, 0.14902) 0px 2px 4px 0px;
        -moz-box-shadow: rgba(0, 0, 0, 0.14902) 0px 2px 4px 0px;
        box-shadow: rgba(0, 0, 0, 0.14902) 0px 2px 4px 0px;
    }
    }

    .navbar-toggle .icon-bar {
        background-color: #333333;
    }

    .navbar-toggle {
        padding-right: 0px;
    }

    @media (max-width: 768px) {
        .top-bar {
            padding-left: 0px;
        }
        .navbar-brand {}
    }

    .container>.navbar-header,
    .container-fluid>.navbar-header,
    .container>.navbar-collapse,
    .container-fluid>.navbar-collapse {
        margin-left: 0px;
        margin-right: 0px;
    }

  </style>


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
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
<header class="navbar navbar-static-top top-bar" id="top" role="banner" id="header">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand web-logo" href="index.php" style="padding: 15px; font-size: 40px;">直想便</a>
    </div>
    <nav id="bs-navbar" class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="<?php echo get_template_directory_uri(); ?>/index.php" class="menu-item">トップ</a>
        </li>
        <li>
          <a href="?page_id=4" class="menu-item">直想便とは？</a>
        </li>
        <li>
          <a href="/logout" class="menu-item">お申込み</a>
        </li>
        <li>
          <a href="/logout" class="menu-item">サービスのご利用方法</a>
        </li>
        <li>
          <a href="/logout" class="menu-item">フォトグラファー紹介</a>
        </li>
        <li>
          <a href="/logout" class="menu-item">フォトグラファー日記</a>
        </li>
        <li>
          <a href="?page_id=17" class="menu-item">運営</a>
        </li>
        <li>
          <a href="/logout" class="menu-item">採用</a>
        </li>
        <li>
          <a href="/logout" class="menu-item">コンタクト</a>
        </li>
      </ul>
    </nav>
</header>

<!-- ヘッダー終わり -->
