<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
</main>

<?php get_template_part('template/cta') ?>

<a class="totop" href="#">
<img src="<?php echo $wp_url; ?>/dist/images/totop.png" alt="トップへ">
</a>

<footer class="footer sec bg-wwhite">
<div class="container position-relative">
<div class="row align-items-center">
<div class="col-md-5 text-center">
<a href="<?php echo $home; ?>"><img src="<?php echo $wp_url; ?>/dist/images/foot_logo.png" alt="<?php bloginfo("name"); ?>"></a>
</div>
<div class="col-md-5 text-md-center mt-md-0 mt-3">
<p class="mb-0 small">〒546-0041　大阪市東住吉区桑津3丁目28番1号　<br class="d-md-none">TEL. 06-4301-0431</p>
</div>
</div>

<ul class="footer__links">
<li><a href="<?php echo $home; ?>/">ホーム</a></li>
<li><a href="<?php echo $home; ?>/company/">企業情報</a></li>
<li><a href="<?php echo $home; ?>#home-service">事業内容</a></li>
<li><a href="<?php echo $home; ?>/technology/">技術・設計</a></li>
<li><a href="<?php echo $home; ?>/products/">製品情報</a></li>
<li><a href="<?php echo $home; ?>/network/">拠点体制</a></li>
<li><a href="<?php echo $home; ?>/recruit/">採用情報</a></li>
<li><a href="<?php echo $home; ?>/news/">新着情報</a></li>
</ul>

<p class="socket mb-0">©Sanwa Electronic Circuit Co.,Ltd.</p>

</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>