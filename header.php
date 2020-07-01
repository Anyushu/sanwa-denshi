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
<h1><a href="<?php echo $home; ?>"><img class="header-logo" src="<?php echo $wp_url; ?>/dist/images/logo.png" alt="<?php bloginfo('name'); ?>"></a></h1>

<span id="nav-open" class="sp__menu">
<span></span>
</span>

<nav id="spnav">
<ul>
<li><a href="<?php echo $home; ?>/">ホーム</a></li>
<li><a href="<?php echo $home; ?>/company/">企業情報</a></li>
<li><a href="<?php echo $home; ?>#home-service">事業内容</a></li>
<li><a href="<?php echo $home; ?>/technology/">技術・設計</a></li>
<li><a href="<?php echo $home; ?>/products/">製品情報</a></li>
<li><a href="<?php echo $home; ?>/network/">拠点体制</a></li>
<li><a href="<?php echo $home; ?>/recruit/">採用情報</a></li>
<li><a href="<?php echo $home; ?>/news/">新着情報</a></li>
<li>
<a class="btn btn-primary w-100 mt-4" href="tel:06-4301-0431"><i class="fas fa-phone-alt mr-2"></i>06-4301-0431</a>
<span class="d-block mt-2 text-secondary small">営業時間  9時〜17時(平日)</span>
</li>
</ul>
</nav>

<nav class="header__nav">
<ul>
<li class="header__nav-item"><a href="<?php echo $home; ?>/">ホーム</a></li>
<li class="header__nav-item">
<a class="header__nav-parent" href="<?php echo $home; ?>/company/">企業情報</a>
<ul class="header__nav__mega">
<li><a href="<?php echo $home; ?>/company#id01">ご挨拶</a></li>
<li><a href="<?php echo $home; ?>/company#id02">会社概要</a></li>
<li><a href="<?php echo $home; ?>/company#id03">沿革</a></li>
<li><a href="<?php echo $home; ?>/company#id04">組織図</a></li>
<li><a href="<?php echo $home; ?>/company#id05">CSRなどの方針</a></li>
<li><a href="<?php echo $home; ?>/company#id06">関連会社</a></li>
<li><a href="<?php echo $home; ?>/company#id07">お問い合わせ</a></li>
</ul>
</li>
<li class="header__nav-item"><a href="<?php echo $home; ?>#home-service">事業内容</a></li>
<li class="header__nav-item">
<a class="header__nav-parent" href="<?php echo $home; ?>/technology/">技術・設計</a>
<ul class="header__nav__mega">
<li><a href="<?php echo $home; ?>/technology#id01">先進の技術「多層基板」</a></li>
<li><a href="<?php echo $home; ?>/technology#id02">先進の技術「多層基板」</a></li>
<li><a href="<?php echo $home; ?>/technology#id03">CAD設計・試作実装</a></li>
</ul>
</li>
<li class="header__nav-item"><a href="<?php echo $home; ?>/products/">製品情報</a></li>
<li class="header__nav-item">
<a class="header__nav-parent" href="<?php echo $home; ?>/network/">拠点体制</a>
<ul class="header__nav__mega">
<li><a href="<?php echo $home; ?>/network#id01">セールスネットワーク</a></li>
<li><a href="<?php echo $home; ?>/network#id02">ファクトリー</a></li>
<li><a href="<?php echo $home; ?>/network#id03">海外事業部</a></li>
</ul>
</li>
<li class="header__nav-item">
<a class="header__nav-parent" href="<?php echo $home; ?>/recruit/">採用情報</a>
<ul class="header__nav__mega">
<li><a href="<?php echo $home; ?>/recruit#id01">当社が大切にしていること</a></li>
<li><a href="<?php echo $home; ?>/recruit#id02">ギャラリー</a></li>
<li><a href="<?php echo $home; ?>/recruit#id03">社員インタビュー</a></li>
<li><a href="<?php echo $home; ?>/recruit#id04">社員交流</a></li>
<li><a href="<?php echo $home; ?>/recruit#id05">募集要項</a></li>
</ul>
</li>
<li class="header__nav-item"><a href="<?php echo $home; ?>/news/">新着情報</a></li>
</ul>
</nav>

</header>
<main>
