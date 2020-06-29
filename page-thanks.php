<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<section class="mv__sub company">
<div class="container">
<div class="mv__sub__inner">
<h2 class="mv__sub__inner-ttl">Contact</h2>
<p>お問い合わせ</p>
</div>
</div>
</section>


<section class="sec">
<div class="container">
<p>この度は【三和電子サーキット株式会社】へお問い合わせ頂き誠にありがとうございます。
<br>内容を確認し、担当者よりご連絡致します。</p>
<div class="mt-4">
<a class="btn btn-dark" href="<?php echo $home; ?>">トップページへ戻る</a>
</div>
</div>
</section>

<?php get_footer();
