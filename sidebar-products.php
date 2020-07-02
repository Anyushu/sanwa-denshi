<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<aside>

<div class="sidebar">
<h3 class="sidebar-ttl">製品一覧</h3>
<ul>
<?php
$args = [
    'posts_per_page' => 15,
    'post_type' => 'products',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
}
?>
<li><a class="" href="<?php echo $p; ?>">
<?php echo $t; ?>
</a></li>
<?php endforeach; wp_reset_postdata(); ?>
</ul>
</div>

<div class="home__network__menu sidebar">
<a class="bg-sidebar" href="<?php echo $home; ?>/company/">
<h3>企業情報<span>Company</span></h3>
<img src="<?php echo $wp_url; ?>/dist/images/icon_arrow_white.png" alt="矢印">
</a>
<a class="bg-sidebar" href="<?php echo $home; ?>#home-service">
<h3>事業内容<span>Service</span></h3>
<img src="<?php echo $wp_url; ?>/dist/images/icon_arrow_white.png" alt="矢印">
</a>
<a class="bg-sidebar" href="<?php echo $home; ?>#Strong">
<h3>当社の強み<span>Strong</span></h3>
<img src="<?php echo $wp_url; ?>/dist/images/icon_arrow_white.png" alt="矢印">
</a>
<a class="bg-sidebar" href="<?php echo $home; ?>/technology/">
<h3>技術・設計<span>Technology</span></h3>
<img src="<?php echo $wp_url; ?>/dist/images/icon_arrow_white.png" alt="矢印">
</a>
<a class="bg-sidebar" href="<?php echo $home; ?>/network/">
<h3>拠点体制<span>Network</span></h3>
<img src="<?php echo $wp_url; ?>/dist/images/icon_arrow_white.png" alt="矢印">
</a>
</div>

</aside>
