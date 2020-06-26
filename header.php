<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- ここにGAトラッキングタグ -->
<?php endif; ?>
</head>
<body>
<header class="header">
  <h1><a href="<?php echo $home; ?>"><img src="<?php echo $wp_url; ?>/dist/images/logo.png" alt="<?php bloginfo('name'); ?>"></a></h1>
  <nav class="header__nav">
    <ul>
      <li class="header__nav-item"><a href="<?php echo $home; ?>/">ホーム</a></li>
      <li class="header__nav-item"><a href="<?php echo $home; ?>/company/">企業情報</a></li>
      <li class="header__nav-item"><a href="<?php echo $home; ?>/service/">事業内容</a></li>
      <li class="header__nav-item"><a href="<?php echo $home; ?>/technology/">技術・設計</a></li>
      <li class="header__nav-item"><a href="<?php echo $home; ?>/products/">製品情報</a></li>
      <li class="header__nav-item"><a href="<?php echo $home; ?>/network/">拠点体制</a></li>
      <li class="header__nav-item"><a href="<?php echo $home; ?>/recruit/">採用情報</a></li>
      <li class="header__nav-item"><a href="<?php echo $home; ?>/news/">新着情報</a></li>
    </ul>
  </nav>
</header>
<main>