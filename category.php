<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="mv__sub news">
<div class="container">
<div class="mv__sub__inner">
<h2 class="mv__sub__inner-ttl">News</h2>
<p>新着情報</p>
</div>
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
}
?>
</div>
</section>

<section class="sec">
<div class="container">

<div class="row justify-content-between">
<div class="col-md-8 mb-md-0 mb-5">
<h3 class="ttl-h3"><?php echo get_category($cat)->name; ?>の記事一覧</h3>
<ul class="news__lists">
<?php if (have_posts()): while (have_posts()): the_post();
$t = get_the_title();
$p = get_the_permalink();
$cats = get_the_category();
foreach ($cats as $key => $cat) {
    if ($cat->name != 'すべて') {
        $cat_name = $cat->name;
    }
}
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/dist/images/noimg.png';
}
?>
<li>
<a href="<?php echo $p; ?>">
<figure class="news__lists-img">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</figure>
<div class="news__lists-txt">
<p class="news__lists__meta">
<span class="news__lists__meta-time"><?php the_time('Y.m.d'); ?></span>
<span class="news__lists__meta-cat"><?php echo $cat_name; ?></span>
</p>
<p class="mb-0 news__lists-ttl"><?php echo $t; ?></p>
</div>
</a>
</li>
<?php endwhile; endif; ?>
</ul>
<?php wp_pagenavi(); ?>
</div>
<div class="col-md-3">
<?php get_sidebar(); ?>
</div>
</div>
</div>
</section>
<?php get_footer();
