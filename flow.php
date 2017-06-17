<?php
/*
Template Name: flow
*/
?>
<?php get_header(); ?>

<div class="container">
  <div class="row top-icons">
    <div class="col-md-4 col-xs-4 flow-top">
      <a href="#individual">
        <img src="<?php echo get_template_directory_uri(); ?>/images/person-icon.png" class="person-icon">
      </a>
    </div>
    <div class="col-md-4 col-xs-4 flow-top">
      <a href="#group" title="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/people-icon.png" class="people-icon">
      </a>
    </div>
    <div class="col-md-4 col-xs-4 flow-top">
      <a href="#company" title="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/company-icon.png" class="person-icon">
      </a>
    </div>
  </div>
    <div class="row">
      <div class="col-md-4 col-xs-4 flow-top">
        <h2>個人<br class="no">のお客様</h2>
      </div>
      <div class="col-md-4 col-xs-4  flow-top">
        <h2>団体<br class="no">のお客様</h2>
      </div>
      <div class="col-md-4 col-xs-4  flow-top">
        <h2>法人<br class="no">のお客様</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-offset-2 col-md-8 col-xs-offset-1 col-xs-10 brief-explain" style="text-align: center;">
        <h2>直想便とは？</h2>
        <p>直想便は、カメラマンの出張撮影によるあなただけのオリジナルポストカード作成サービスです。<br>
           あなたの「今」を一枚のポストカードに仕上げます。</p>
      </div>
    </div>
    <div class="row flow-individual" id="individual">
      <div class="col-md-offset-2 col-md-8" style="text-align: center; margin-top: 30px;">
        <h2>個人のお客様</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/images/person-icon.png" style="width: 100px;">
        <h3>サービス個人利用の概要</h3>
        <p>お申込後、お客様の今一番楽しい時間をお聞かせいただき、その瞬間を一枚のポストカードに仕上げます。撮影時、白紙のポストカードにメッセージをご記入ください。<br>そのカードに写真を印刷して送り先までお届けします。</p>
      </div>
    </div>
      <div class="row">
        <div class="col-md-12" style="padding: 30px 0px;">
          <h3 class="title" style="text-align: center;">個人利用の新着ポストカード</h3>
        </div>
        <?php query_posts('cat=10 & showposts=4'); ?>
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
    <div class="row" style="margin-top: 50px;">
      <h3 style="text-align: center; margin-top: 50px;">サービスご利用の流れ</h3>
    </div>
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-2 col-xs-6" style="text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/application-icon.png" style="width: 80%;" class="flow-icons">
        <h3>①お申込み</h3>
        <p>個人のお客様専用のフォームからお申し込みください。</p>
      </div>
      <div class="col-md-1 none">
        <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-icon.png" style="width: 80%; margin-top: 50px;">
      </div>
      <div class="col-md-2 col-xs-6" style="text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mail-icon.png" style="width: 80%;" class="flow-icons">
        <h3>②ご連絡</h3>
        <p>運営より連絡が届きます。撮影日時・場所・担当カメラマンを決定します。</p>
      </div>
      <div class="col-md-1 none">
        <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-icon.png" style="width: 80%; margin-top: 50px;">
      </div>
      <div class="col-md-2 col-xs-6" style="text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/yen-icon.png" style="width: 80%;" class="flow-icons">
        <h3>③お支払</h3>
        <p>運営の指示に従い、お支払をお願い致します。</p>
      </div>
      <div class="col-md-1 none">
        <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-icon.png" style="width: 80%; margin-top: 50px;">
      </div>
      <div class="col-md-2 col-xs-6" style="text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/camera-icon.png" style="width: 80%;" class="flow-icons">
        <h3>④撮影</h3>
        <p>今あなたが一番好きな瞬間を写真にしましょう。</p>
      </div>
      <div class="col-md-1 none">
        <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-icon.png" style="width: 80%; margin-top: 50px;">
      </div>
    </div>
    <div class="row">
      <div class="col-md-2 col-xs-6" style="text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/writing-icon.png" style="width: 80%;" class="flow-icons">
        <h3>⑤想いを記入</h3>
        <p>ポストカードとともにあなたの想いを届けましょう。</p>
      </div>
      <div class="col-md-1 none">
        <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-icon.png" style="width: 80%; margin-top: 50px;">
      </div>
      <div class="col-md-2 col-xs-6" style="text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/data-icon.png" style="width: 80%;" class="flow-icons">
        <h3>⑥データ共有</h3>
        <p>写真データを共有します。是非SNS等のプロフィールにご活用ください。</p>
      </div>
      <div class="col-md-1 none">
        <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-icon.png" style="width: 80%; margin-top: 50px;">
      </div>
      <div class="col-md-2 col-xs-6" style="text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mail-comp-icon.png" style="width: 80%;" class="flow-icons">
        <h3>⑦プリント</h3>
        <p>あなたの直筆の想いとともにポストカードを仕上げます。</p>
      </div>
      <div class="col-md-1 none">
        <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-icon.png" style="width: 80%; margin-top: 50px;">
      </div>
      <div class="col-md-2 col-xs-6" style="text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/post-car-icon.png" style="width: 80%;" class="flow-icons">
        <h3>⑧発送</h3>
        <p>幸せのサプライズがあの人のもとへ出発です。</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-offset-2 col-md-8" style="text-align: center; padding: 80px 0px;">
        <a class="button" href="?page_id=129"><span>お申込み<span></a>
      </div>
    </div>

<!-- ここからは団体様利用の流れ -->

    <div class="row flow-individual" id="group">
      <div class="col-md-offset-2 col-md-8" style="text-align: center; margin-top: 30px;">
        <h2>団体のお客様</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/images/people-icon.png" style="width: 100px;">
        <h3>サービス団体利用の概要</h3>
        <p>直想便では、イベント会場や部活動の活動場所など、団体のお客様向けのカメラマン派遣を行っています。派遣するカメラマン数や日時など詳しい派遣内容はお申込後、代表者のかたと話し合わせていただきます。みなさんで一緒に、「想い」を届ける機会をつくってみてはいかがでしょうか。</p>
      </div>
    </div>
      <div class="row">
        <div class="col-md-12" style="padding: 30px 0px;">
          <h3 class="title" style="text-align: center;">団体利用の新着ポストカード</h3>
        </div>
        <?php query_posts('cat=11 & showposts=4'); ?>
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
    <div class="row" style="margin-top: 50px;">
      <h3 style="text-align: center; margin-top: 50px;">サービスご利用の流れ</h3>
    </div>
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-2 col-xs-6" style="text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/application-icon.png" style="width: 80%;" class="flow-icons">
        <h3>①お申込み</h3>
        <p>団体のお客様専用のフォームからお申し込みください。</p>
      </div>
      <div class="col-md-1 none">
        <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-icon.png" style="width: 80%; margin-top: 50px;">
      </div>
      <div class="col-md-2 col-xs-6" style="text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mail-icon.png" style="width: 80%;" class="flow-icons">
        <h3>②ご連絡</h3>
        <p>運営より連絡が届きます。撮影日時・場所・担当カメラマンを決定します。</p>
      </div>
      <div class="col-md-1 none">
        <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-icon.png" style="width: 80%; margin-top: 50px;">
      </div>
      <div class="col-md-2 col-xs-6" style="text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/yen-icon.png" style="width: 80%;" class="flow-icons">
        <h3>③お支払</h3>
        <p>運営の指示に従い、派遣費用のお支払をお願い致します。ポストカード代金は当日の作成枚数に合わせて決定します。</p>
      </div>
      <div class="col-md-1 none">
        <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-icon.png" style="width: 80%; margin-top: 50px;">
      </div>
      <div class="col-md-2 col-xs-6" style="text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/camera-icon.png" style="width: 80%;" class="flow-icons">
        <h3>④撮影</h3>
        <p>イベントや部活動など、「今」のあなたを写す写真を撮りましょう。</p>
      </div>
      <div class="col-md-1 none">
        <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-icon.png" style="width: 80%; margin-top: 50px;">
      </div>
    </div>
    <div class="row">
      <div class="col-md-2 col-xs-6" style="text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/writing-icon.png" style="width: 80%;" class="flow-icons">
        <h3>⑤想いを記入</h3>
        <p>ポストカードにそれぞれの「想い」をご記入頂きます。</p>
      </div>
      <div class="col-md-1 none">
        <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-icon.png" style="width: 80%; margin-top: 50px;">
      </div>
      <div class="col-md-2 col-xs-6" style="text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/data-icon.png" style="width: 80%;" class="flow-icons">
        <h3>⑥データ共有</h3>
        <p>写真データを共有します。是非SNS等のプロフィールにご活用ください。</p>
      </div>
      <div class="col-md-1 none">
        <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-icon.png" style="width: 80%; margin-top: 50px;">
      </div>
      <div class="col-md-2 col-xs-6" style="text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mail-comp-icon.png" style="width: 80%;" class="flow-icons">
        <h3>⑦プリント</h3>
        <p>直筆の想いとともにポストカードを仕上げます。</p>
      </div>
      <div class="col-md-1 none">
        <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-icon.png" style="width: 80%; margin-top: 50px;">
      </div>
      <div class="col-md-2 col-xs-6" style="text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/post-car-icon.png" style="width: 80%;" class="flow-icons">
        <h3>⑧発送</h3>
        <p>幸せのサプライズがあの人のもとへ出発です。</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-offset-2 col-md-8" style="text-align: center; padding: 80px 0px;">
        <a class="button" href="#"><span>お申込み<span></a>
      </div>
    </div>

    <!-- ここからしたは法人のお客様向けのflow -->
    <div class="row flow-individual" id="company">
      <div class="col-md-offset-2 col-md-8" style="text-align: center; margin-top: 30px;">
        <h2>法人のお客様</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/images/company-icon.png" style="width: 100px;">
        <h3>サービス法人利用の概要</h3>
        <p>直想便は、他の法人様と連携してポストカードを利用した事業を展開します。例えば、老人ホームの職員様と連携して、入居者の方々とそのお孫さんのポストカードによるコミュニケーションを促したり、NPOや病院と連携して病気の早期予防・発見のためにポストカードと一緒にメディカルチェックカードを届けることのできる仕組みづくりに努めてまいります。</p>
        <p>詳しくはEメールにてお問い合わせください。</p>
        <a href="mailto:yanguagejapan@gmail.com"> yanguagejapan@gmail.com</a>
      </div>
    </div>
</div>

  

<?php get_footer(); ?>