<?php
/*
Template Name: about-us
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/about-us.css">

<div class="container" style="background-color: #ffefff; width: 100%;">
  <div class="row" style="margin-top: 50px;">
    <div class="col-md-offset-2 col-md-8 col-sm-12" style="padding: 10px;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-top.jpg" style="width: 100%;">
      <h1><span class="special-font">About Us</span><br>運営</h1>
      <p>直想便は10代20代の非常に若いメンバーと、リタイア後のベテランメンバーが協力して運営しています。<br>若者にも、おじいちゃんおばあちゃんにも愛されるサービスを目指し、日々挑戦を続けています。</p>
    </div>
    <div class="col-md-offset-2 col-md-8 col-sm-12" style="padding: 10px;">
      <h1><span class="special-font">Chokusopost Members</span><br>メンバー</h1>
      <div class="member col-md-3 col-sm-10 col-sm-offset-1" style="padding: 10px;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/imajin.jpg" alt="imajin" class="profile-picture" style="max-width: 100%;">
        <h3 class="member-name"><span class="alphabet">CEO</span><br>河邉 今人</h3>
        <p>いまじんです。</p>
      </div>
      <div class="member col-md-3 col-xs-10 col-xs-offset-1" style="padding: 10px;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/isogami.jpg" alt="tatsuki" class="profile-picture">
        <h3 class="member-name">CTO<br>磯上 樹</h3>
        <p>直想便最高技術責任者のタツキです。使いやすいサービスを作れるよう頑張ります！</p>
      </div>
      <div class="member col-md-3 col-sm-10 col-sm-offset-1" style="padding: 10px;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/imajin.jpg" alt="motthi" class="profile-picture">
        <h3 class="member-name">Sales Manager <br>寺本 菜花</h3>
        <p>もってぃです。</p>
      </div>
      <div class="member col-md-3 col-sm-10 col-sm-offset-1" style="padding: 10px;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/imajin.jpg" alt="okasan" class="profile-picture">
        <h3 class="member-name">GM <br>岡田 俊樹</h3>
      </div>
      <div class="member col-md-3 col-sm-10 col-sm-offset-1" style="padding: 10px;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/imajin.jpg" alt="onusan" class="profile-picture">
        <h3 class="member-name">CMO <br>小貫 将太</h3>
      </div>
      <div class="member col-md-3 col-sm-10 col-sm-offset-1" style="padding: 10px;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/imajin.jpg" alt="imajin" class="profile-picture">
        <h3 class="member-name">CFO <br>Sayuri Murooka</h3>
      </div>
    </div>
  </div>
  <div class="overview row">
    <div class="col-md-offset-2 col-md-8">
      
    </div>
  </div>
</div>

<?php get_footer(); ?>