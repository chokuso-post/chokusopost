<?php get_header(); ?>



<div id="index-top" style="margin-top: 60px; text-align: center;" class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8 col-sm-12">
      <?php 
      echo do_shortcode("[metaslider id=138]"); 
      ?>
    </div>
  </div>
  
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12" style="text-align: center; margin: 30px 0;">
        <h1 id="typed-letter">
          <a href="" class="typewrite" data-period="2000" data-type='[ "好きな言葉は？", "将来の夢は？", "一番の後悔は？", "人生の教訓は？" ]'>
            <span class="wrap"></span>
          </a>
        </h1>
    </div>
  </div>
  <div class="row" style="background-color: #f6f7f9; padding: 20px 0; text-align: center;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/tatsuki-chama.jpg" class="top-images no">
    <div class="col-md-12 top-content" style="text-align: center;">
      <h1>孫 ✕ 祖父母</h1>
      <p>直想便は「孫 ✕ 祖父母」にフォーカスしたフォトグラファー派遣サービスです。<br>ただ撮るだけではなく、想い、想われ、想い合う時間を提供します。</p>
      <div class="center">
        <a href="?page_id=4" class="btn btn-default margin-top">ご利用方法</a>
      </div>
    </div>
  </div>
  <div class="row" style="background-color: white; padding: 20px 0; text-align: center;">
    <div class="col-md-12 top-content" style="text-align: center;">
      <h1>撮る。</h1>
      <p>直想便は、厳格な審査をもとに採用したフォトグラファーのみを派遣します。自分では撮れない素敵な写真を残しましょう！</p>
    </div>
    <div class="center">
      <a href="#" class="btn btn-default">フォトグラファー</a>
    </div>
  </div>
  <div class="row" style="background-color: #f6f7f9; padding: 20px 0; text-align: center;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/motti-chama.jpg" class="top-images no">
    <div class="col-md-12 top-content" style="text-align: center;">
      <h1>聴く。</h1>
      <p>あなたは自分のおじいちゃんやおばあちゃんの好きな言葉を知っていますか？<br>直想便のフォトグラファーの役目はただ写真を撮るだけではありません。<br>むしろあなたとあなたのおじいちゃんやおばあちゃんの間に入り、普段は聴くことのない「想い」のやり取りを促すことにこそ彼らの役目があります。</p>
    </div>
    <div class="center">
        <a href="?page_id=4" class="btn btn-default margin-top">フォトグラファー日記</a>
    </div>
  </div>
</div>

<!-- 新着ニュースの部分 -->

<div class="row">
  <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 top-content">
    <article>
      <section>
        <h2 class="section-title">お知らせ</h2>
        <ul class="news-list">
  <?php query_posts("cat=3 & showposts=3"); ?>
        <?php
        if(have_posts()):
          while(have_posts()):
            the_post();
        ?>
          <li>
            <span class="date"><?php the_time('Y.n.j'); ?></span>
            <span class="label-info"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>
          <?php
            endwhile;
          endif;
          ?>
        </ul>
        <div class="center">
          <a href="#" class="btn btn-default">過去のお知らせ</a>
        </div>
      </section>
    </article>
  </div>
</div>

<div class="row" style="background-color: #f6f7f9">
  <div class="col-md-offset-3 col-md-6 col-sm-12" style="text-align: center; padding: 30px 10px;">
    <iframe width="100%" height="315" src="https://www.youtube.com/embed/qkXlqMLglkg" frameborder="0" allowfullscreen></iframe>
  </div>
</div>

<?php get_footer(); ?>