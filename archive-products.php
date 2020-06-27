<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="mv__sub products">
<div class="container">
<div class="mv__sub__inner">
<h2 class="mv__sub__inner-ttl">Products</h2>
<p>製品情報</p>
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
<div class="products__list mt-0">
<?php if (have_posts()): while (have_posts()): the_post();
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
}
?>
<a class="products__list__inner text-body d-block" href="<?php echo $p; ?>">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
<p class="font-weight-bold text-center mb-0"><?php echo $t; ?></p>
</a>
<?php endwhile; endif; ?>
</div>
<?php wp_pagenavi(); ?>
</div>
</section>

<?php get_footer();
