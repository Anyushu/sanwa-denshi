<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post();

$t = get_the_title();
$p = get_the_permalink();
$cats = get_the_category()[0];
$cat_name = $cats->name;
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/dist/images/noimg.png';
}
?>

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

<div class="row justify-content-between">
<div class="col-md-8 mb-md-0 mb-5">

<article class="post">
<h2 class="product-ttl post-ttl mb-md-5 mb-4"><?php echo $t; ?></h2>
<figure class="my-3">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</figure>
<div class="post__main">
<?php the_content(); ?>
</div>
<div class="mt-5">
<a class="btn btn-dark" href="<?php echo $home; ?>/products/">一覧に戻る</a>
</div>
</article>
</div>

<div class="col-md-3">
<?php get_sidebar('products'); ?>
</div>
</div>
</div>
</section>
<?php get_footer();
