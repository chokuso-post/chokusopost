<?php
/*
Template Name: postindex
*/
?>

<?php get_header(); ?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="title">注目ポスト</h2>
    </div>
    <!-- 注目ポストゾーン -->
    <?php query_posts('cat=8 & showposts=3'); ?>
               <?php
                if(have_posts()):
                  while(have_posts()):
                    the_post();
    ?>
      <div class="col-md-4 featured-post"> 
        <?php the_post_thumbnail( array('class' => 'gallery-photo') ); ?>
        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
        <p></p>
      </div>
    <?php
      endwhile;
      endif;
    ?>
  </div>
  <div class="row">
  <!-- これを一列に4つ、二列表示するようにPHPを調整する。 -->
  <!-- 新着直想便のポートフォリオ的なの -->
<div class="container">
  <div class="row">
    
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="title">新着<br class="no">ポストカードギャラリー</h2>
              </div>
              <?php query_posts('cat=6 & showposts=8'); ?>
               <?php
                if(have_posts()):
                  while(have_posts()):
                    the_post();
                ?>
                  <div class="col-md-3 col-sm-4 col-xs-6"><?php the_post_thumbnail( array('class' => 'gallery-photo') ); ?></div>

                <?php
                endwhile;
                endif;
                ?>

            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="center">
                  <a href="#" class="btn btn-default">ポストカードをもっと見る</a>
                </div>
              </div>
            </div>
        </div>
        
        
  </div>
</div>
  </div>
  <div class="row">
  <!-- 特集ページの宣伝スペース -->
    <div class="col-md-7">
      
    </div>
    <!-- 運営ニュース -->
    <div class="col-md-5">
      
    </div>
  </div>
  <div class="row">
  <!-- カメラマン紹介 ラブグラフみたいにスライドでできるといいな -->
    <div class="col-md-12">
      
    </div>
    <!-- カメラマン一覧ボタン -->
    <div class="col-md-12">
      
    </div>
  </div>
</div>



 
    <div class="clear"></div>
    
    <?php get_footer(); ?>