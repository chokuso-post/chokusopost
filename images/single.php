<?php
/*
Template Name: post
*/
?>

<?php get_header(); ?>

 <div class="top-single">
  <h1 class="blog-title-article"><?php the_title(); ?></h1>
    </div>
<div class="container">
  
<div class="row">
<div class="single-post col-lg-8-offset-2 centered col-md-10-offset-1 centered col-sm-12">
  <?php 
  if(have_posts()):
    while(have_posts()):
  the_post();
  ?>
  <article <?php post_class(); ?>>
      <section>
        <h1 class="blog-title-article"><?php the_title(); ?></h1>
        <div class="blog-wrap">
          <div class="blog-header">
            <div class="date"><?php the_time('Y年n月j日'); ?></div>
            <div class="category">カテゴリー：運営ブログ</div>
          </div>
          <div class="blog-body">
      <?php the_content(); ?>
          </div>
        </div>
      </section>
      <section class="clearfix">
        <div class="leftcol">&laquo; 新しい投稿へ</div>
        <div class="rightcol">古い投稿へ &raquo;</div>
      </section>
      <p style="text-align:center;padding:150px;border:1px solid #ddd;">[コメントフォーム設置場所]</p>
  </article>
  <?php
    endwhile;
  endif;
  ?>
</div>
</div>
</div>
 
    <div class="clear"></div>
    
<div class="border">
  <p>＜新着＞直<span class="pink">想</span>便</p>
</div>

<div class="new-pictures">


</div>

    <div class="border-bottom">
<img src="images/border3.png" class="none">
<img src="images/border2.png" class="no">
</div>
    <?php get_footer(); ?>