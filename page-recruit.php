<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<section class="mv__sub recruit lower">
<div class="container">
<div class="mv__sub__inner">
<h2 class="mv__sub__inner-ttl">Recruit</h2>
<p>採用情報</p>
</div>

<div class="lower__menu">
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
}
?>
<div class="lower__menu__inner">
<a class="lower__menu__inner-item" href="#id01">当社が大切にしていること</a>
<a class="lower__menu__inner-item" href="#id02">ギャラリー</a>
<a class="lower__menu__inner-item" href="#id03">社員インタビュー</a>
<a class="lower__menu__inner-item" href="#id04">社員交流</a>
<a class="lower__menu__inner-item" href="#id05">募集要項</a>
</div>
</div>
</div>
</section>

<section id="" class="sec message">
<div class="container">
<h2 class="ttl-h2 text-center">
<span class="ttl-h2-en small">Message</span>
<span class="ttl-h2-jp">メッセージ</span>
</h2>
<div class="text-center">
<p>みなさん、こんにちは！
<br>当社は、プリント配線板を作っている会社です。
<br>さて、プリント配線坂とは…ご存知でしょうか?</p>
<p>身の回りには、様々な電気、電子機器類が有り、それらは生活の一部としてなくてはならないものです。
<br>その中には、必ずプリント配線板という基板と呼ばれるものが組み込まれており、
<br>製品が機能するために必要な重要部品の1つなのです。</p>
<p>身近にある、スマートフォン、カーナビゲーション、パソコンから無線、
<br>ETCや車載機器、医療用機器等、いろいろな場面で使用されています。</p>
<p>自分達が作ったものが、生活の一部として身近に使われているなんて、
<br>これこそ、社会貢献が実感できると思いませんか？</p>
<p class="mb-0">ぜひ、当社の仲間の一員となり、一緒にものづくりをしてみませんか？</p>
</div>

<img src="<?php echo $wp_url; ?>/dist/images/message_1.png" alt="写真">
<img src="<?php echo $wp_url; ?>/dist/images/message_2.png" alt="写真">
<img src="<?php echo $wp_url; ?>/dist/images/message_3.png" alt="写真">
<img src="<?php echo $wp_url; ?>/dist/images/message_4.png" alt="写真">
<img src="<?php echo $wp_url; ?>/dist/images/message_5.png" alt="写真">

</div>
</section>

<hr class="hr-gray">


<section id="id01" class="sec technology__board bg-light mt-0">
<div class="container">
<h2 class="ttl-h2 text-center">
<span class="ttl-h2-en small">Policy</span>
<span class="ttl-h2-jp">当社が大切にしていること</span>
</h2>

<div class="post__main">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">インターンシップ</h2>
<p>次世代育成支援の一環として、学生を就業体験で受け入れました。
<br>各生産工程を順番にまわることで、「ものづくり」会社というものを体感して頂いています。</p>
</div>
<div class="col-md-4 text-md-right text-center">
<img src="<?php echo $wp_url; ?>/dist/images/policy_1.png" alt="インターンシップ">
</div>
</div>
</div>

<div class="post__main">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">新入社員入社式</h2>
<p>今年も各部署に新しい仲間が加わりました。
<br>どのジャンルにおいてもみんな最初は初心者。新入社員を皆が応援しています。</p>
</div>
<div class="col-md-4 text-md-right text-center">
<img src="<?php echo $wp_url; ?>/dist/images/policy_2.png" alt="インターンシップ">
</div>
</div>
</div>

<div class="post__main">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">S’PIRIT(スピリット)運動発表大会</h2>
<p>S’PIRIT運動(QC活動)発表会を定期的に行っています。
<br>楽しい雰囲気の中で、各チームの改善活動成果発表を聞いたりしています。</p>
</div>
<div class="col-md-4 text-md-right text-center">
<img src="<?php echo $wp_url; ?>/dist/images/policy_3.png" alt="インターンシップ">
</div>
</div>
</div>

<div class="post__main">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">セールス・管理スタッフ研修会</h2>
<p>日頃顔を合わせることの少ない、国内各地のセールス・管理スタッフが工場に集結します。工場では、普段見ることのできない工程も、見学することができます。</p>
</div>
<div class="col-md-4 text-md-right text-center">
<img src="<?php echo $wp_url; ?>/dist/images/policy_4.png" alt="インターンシップ">
</div>
</div>
</div>

<div class="post__main">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">地域活動</h2>
<p>地域社会の一員として、近隣のごみ収集や本社バス停前の花壇の植栽、動物園の団体サポーター(生物多様性保全)など、身近なところから貢献できる活動をしています。</p>
</div>
<div class="col-md-4 text-md-right text-center">
<img src="<?php echo $wp_url; ?>/dist/images/policy_5.png" alt="インターンシップ">
</div>
</div>
</div>

</div>
</section>

<hr class="hr-gray-bottom mb-0">

<section id="id02" class="sec">
<div class="container">
<h2 class="ttl-h2 text-center">
<span class="ttl-h2-en small">Gallery</span>
<span class="ttl-h2-jp">ギャラリー</span>
</h2>

<div class="gallery__list mt-0">
<?php
$gallery_arr = ['お餅つき大会(屋外)','お餅つき大会(屋内)','お花見','家族工場見学会','新入社員歓迎バーベキュー大会','ボウリング大会','マラソン大会','秋のバーベキュー大会','社員旅行','ゴルフ親睦会','野球部','慰安旅行宴会'];
foreach ($gallery_arr as $key => $value): ?>
<div class="gallery__list__inner">
<img src="<?php echo $wp_url; ?>/dist/images/gallery_<?php echo($key+1); ?>.png" alt="<?php echo $value; ?>">
<p class="font-weight-bold text-center mb-0 mt-3"><?php echo $value; ?></p>
</div>
<?php endforeach; ?>
</div>

</div>
</section>

<hr class="hr-gray">

<section id="id03" class="sec bg-light">
<div class="container">
<h2 class="ttl-h2 text-center">
<span class="ttl-h2-en small">Interview</span>
<span class="ttl-h2-jp">社員インタビュー</span>
</h2>

<div class="interview">
<?php
$interview_arr = [];
$args = [
    'posts_per_page' => 5,
    'post_type' => 'interview',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post) {
    setup_postdata($post);
    $t = get_the_title(); // 名前
    $data = get_the_content();
    $yaku = get_field('yaku', get_the_ID());
    $year = get_field('yaku_year', get_the_ID());
    $interview_arr[]= [$t, $data, $yaku ,$year];
}
?>

<div class="interview__nav">
<?php foreach ($interview_arr as $key => $value): ?>
<div class="interview__nav__inner">
<span><?php echo $value[2]; ?>｜<?php echo $value[3]; ?>入社</span>
<p class="mb-0"><?php echo $value[0]; ?></p>
</div>
<?php endforeach; ?>
</div>
<div class="interview__list">
<?php foreach ($interview_arr as $key => $value): ?>
<div class="interview__list__inner">
<h3>
<span class="interview__list__inner-yaku"><?php echo $value[2]; ?>｜<?php echo $value[3]; ?>入社</span>
<span class="interview__list__inner-name"><b><?php echo $value[0]; ?></b>さん</span>
</h3>
<div class="interview__list__inner-data">
<?php print $value[1]; ?>
</div>
</div>
<?php endforeach; ?>
</div>
</div>
</div>
</section>

<hr class="hr-gray-bottom mb-0">

<section id="id04" class="sec">
<div class="container">

<div class="row justify-content-between">
<div class="col-md-4">
<h2 class="ttl-h2">
<span class="ttl-h2-en small">Communication</span>
<span class="ttl-h2-jp">社員交流</span>
</h2>
<p class="mb-0">三和電子サーキットでは、定期的に社員交流を実施しています。
<br>その様子をブログにて発信していますので、ぜひご覧ください。</p>
</div>
<div class="col-md-7 mt-md-0 mt-5">
<ul class="news__lists">
<?php
$args = [
    'posts_per_page' => 3,
    'category_name' => 'fellowship',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
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
<?php endforeach; wp_reset_postdata(); ?>
</ul>
<div class="text-md-right mt-5">
<a class="btn btn-dark" href="<?php echo $home; ?>/fellowship/">一覧を見る</a>
</div>
</div>
</div>

</div>
</section>

<section id="id05" class="sec">
<div class="container">
<h2 class="ttl-h2 text-center">
<span class="ttl-h2-en small">Requirements</span>
<span class="ttl-h2-jp">募集要項</span>
</h2>

<div class="requirements__navs">
<div class="active" data-id="1">美原工場</div>
<div data-id="2">大阪工場</div>
<div data-id="3">東海工場</div>
<div data-id="4">ST工場</div>
<div data-id="5">営業本部</div>
</div>

<div class="requirements__content">
<div data-id="1" class="table-wrap active"><?php the_field('table_1', get_the_ID()); ?></div>
<div data-id="2" class="table-wrap"><?php the_field('table_2', get_the_ID()); ?></div>
<div data-id="3" class="table-wrap"><?php the_field('table_3', get_the_ID()); ?></div>
<div data-id="4" class="table-wrap"><?php the_field('table_4', get_the_ID()); ?></div>
<div data-id="5" class="table-wrap"><?php the_field('table_5', get_the_ID()); ?></div>
</div>

</div>
</section>

<?php get_footer();
