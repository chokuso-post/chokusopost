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
<div class="single-post col-md-offset-1 col-md-10 centered col-sm-offset-1 col-sm-10">
  <?php 
  if(have_posts()):
    while(have_posts()):
  the_post();
  ?>
  <article <?php post_class(); ?>>
      <section>
        
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
  </article>
  <?php
    endwhile;
  endif;
  ?>
</div>
</div>
</div>
 
    <div class="clear"></div>
    
    <?php get_footer(); ?>