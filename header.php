<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>LP</title>
    <meta name="description" content="LP" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/resposive-sp.css?Ver=1.0" />
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/resposive-pc.css?Ver=1.0" />
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css?Ver=1.0" />
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css?Ver=1.0" />
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pad.css?Ver=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">
  </head>
  <body>

    <!-- ヘッダー -->
    <header id="header">
      <h1 class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/img/unirage_logo.png" alt="unirage-logo">
        </a>
      </h1>
      <nav class="sp">
        <ul>
          <li><a href="#service">サービス内容</a></li>
          <li><a href="#flow">ご利用の流れ</a></li>
          <li class="header-btn orenge-btn"><a href="tel:+81-03-5787-6217">📞03-5787-6217<br><span>11:00~18:00（土日を除く）</span>
          </a></li>
          <li class="header-btn navy-btn"><a href="#contact">無料相談はこちら▶︎</a></li>
        </a></li>
        </ul>
      </nav>

      <!-- HM SP -->

<div class="pc">
<input  type="checkbox" id="overlay-input" />
<label for="overlay-input" id="overlay-button"><span></span></label>
  <div id="overlay">
    <ul>
      <li><a href="#">サービスの内容</a></li>
      <li><a href="#">ご利用の流れ</a></li>
      <li class=" header-btn-sp orenge-btn"><a href="tel:+81-03-5787-6217">📞03-5787-6217<br><span>11:00~18:00（土日を除く）</span></a></li>
      <li class=" header-btn-sp navy-btn"><a href="#contact">無料相談はこちら▶︎</a></li></a></li>
    </ul>
  </div>
</div>
    </header>

<!-- HM SP -->


 

  <?php wp_enqueue_script('jquery'); ?>


  <?php wp_head(); ?>
</header>