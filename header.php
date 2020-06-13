<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- ここにGAトラッキングタグ -->
<?php endif; ?>
</head>
<body>

<!-- loading anim -->
<div id="loading" class="loading">
<div class="loading__line">
<div class="loading__line-inner"></div>
</div>
</div>
<!-- loading anim -->
<header>
</header>
<main>