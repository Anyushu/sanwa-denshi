<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="l-Hero position-relative">
<div class="Hero">
<div class="Hero__inner">
<div class="Hero__catch visible">
<h2 class="Hero__catch-main">
<span class="copy-1 oswald"><span>SUPPORT</span> THE LIFE</span>
</h2>
<div class="Hero__catch-sub">
<span>生活を支える、三和電子サーキットの基板</span>
</div>
</div>
<div class="Hero__image-left"></div>
<div class="Hero__image-right"></div>
</div>
</div>

<div class="mv__news container">
<?php
$args = [
    'posts_per_page' => 1,
    'category_name' => 'information',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
?>
<a href="<?php echo $p; ?>">
<span class="mv__news-time"><?php the_time('Y.m.d'); ?></span>
<span class="mv__news-cat">お知らせ</span>
<span class="mv__news-ttl"><?php echo $t; ?></span>
</a>
<?php endforeach; wp_reset_postdata(); ?>
</div>

</div>

<section id="home-service" class="sec mt-5">
<div class="container">
<div class="row align-items-center">
<div class="col-md-4 mb-md-0 mb-5">
<h2 class="ttl-h2 mb-0">
<span class="ttl-h2-en">Service</span>
<span class="ttl-h2-jp">事業内容</span>
</h2>
</div>
<div class="col-md-8">
<p class="mb-0">三和電子サーキットは、身近にある、スマ−トフォン、カーナビゲ−ション、パソコンから無線、ETCや車載機器、医療用機器等の生活の様々な場面で使用される電子基板を制作しています。</p>
</div>
</div>
</div>
</section>

<div class="home__service">
<div class="home__service__inner show">
<h3><span>Automobile</span>自動車</h3>
<p>先進運転支援システム（ADAS）・自動運転と進化する自動車。
<br>ドライバーの安全・快適を実現する車載機器に当社の基板が入っています。</p>
</div>
<div class="home__service__inner">
<h3><span>Smartphone</span>スマートフォン</h3>
<p>次世代高速通信”５Ｇ”に向けたスマートフォン端末及びインフラ基地局など
<br>広範囲な通信分野に当社の超高速通信を実現する基板が入っています。</p>
</div>
<div class="home__service__inner">
<h3><span>Medical</span>医療機器</h3>
<p>人命を守る医療機器・又、今後の遠隔医療（診断・治療）に向けた
<br>高い信頼性が求められる分野に当社の基板が入っています。</p>
</div>
<div class="home__service__inner">
<h3><span>Robot</span>ロボット</h3>
<p>生産工場の省人化・自動化に向けたロボット・様々なＦＡ制御機器に
<br>当社の基板が入っています。</p>
</div>
<div class="home__service__inner">
<h3><span>Computer</span>コンピューター</h3>
<p>エッジコンピュータ・テレワーク・Web会議など
<br>様々なビジネススタイルの変化に対応する機器に
<br>当社の製品が使われています。</p>
</div>
</div>

<div class="home__strong">
<div><img class="w-100" src="<?php echo $wp_url; ?>/dist/images/break_01.png" alt=""></div>
<div><img class="w-100" src="<?php echo $wp_url; ?>/dist/images/break_02.png" alt=""></div>
</div>

<section id="Strong" class="sec">
<div class="container">
<div class="row align-items-center">
<div class="col-md-8 mb-md-0 mb-5">
<h2 class="ttl-h2">
<span class="ttl-h2-en">Strong</span>
<span class="ttl-h2-jp">当社の強み</span>
</h2>
<p class="mb-0">あらゆる基板を少量から量販まで対応できます。
<br>「多層基板」「デバイス基板」「CAD設計・試作実装」など、
<br>先進的な技術を持っている当社は、次世代に向けた技術開発（5GやIOT）も進めています。
<br>三和電子サーキットの技術力で、世の中のあらゆる製品を支えます。</p>
</div>
<div class="col-md-4 text-center">
<a class="btn btn-dark" href="<?php echo $home; ?>/technology/">技術・設計について</a>
</div>
</div>
</div>
</section>

<hr class="hr-gray">

<section class="sec bg-light">
<div class="container">
<div class="row align-items-center">
<div class="col-md-4 mb-md-0 mb-5">
<h2 class="ttl-h2 mb-0">
<span class="ttl-h2-en">Products</span>
<span class="ttl-h2-jp">製品情報</span>
</h2>
</div>
<div class="col-md-8">
<p class="mb-0">三和電子サーキットが取り扱っている製品をご紹介いたします。</p>
</div>
</div>

<div class="products__list">
<?php
$args = [
    'posts_per_page' => 12,
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
<a class="products__list__inner text-body d-block" href="<?php echo $p; ?>">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
<p class="font-weight-bold text-center mb-0"><?php echo $t; ?></p>
</a>
<?php endforeach; wp_reset_postdata(); ?>
</div>

<div class="mt-5 text-center">
<a class="btn btn-dark" href="<?php echo $home; ?>/products/">製品情報</a>
</div>

</div>
</section>

<hr class="hr-gray-bottom">

<section class="bg-primary sec home__company">
<div class="container">
<div class="row align-items-center">
<div class="col-md-8 mb-md-0 mb-5">
<h2 class="ttl-h2 white">
<span class="ttl-h2-en">Company</span>
<span class="ttl-h2-jp">企業情報</span>
</h2>
<p class="mb-0 text-white">当社は1955年に株式会社三和電器製作所として創業を開始し、
<br>基板グループ会社5 社で生産・販売を展開後、2004年に基板グループ各社を統合し三和電子サーキット株式会社として新たに事業部制で出発をいたしました。
<br>この間、取引先様のご指導、ご愛顧により半世紀以上にわたり、プリント配線板専業会社として、プリント配線板の進歩と共に発展、成⻑させて頂いたことに感謝いたします。今後ともご支援、ご愛顧賜りますようお願い申し上げます。</p>
</div>
<div class="col-md-4 text-md-right">
<a class="btn btn-outline-light" href="<?php echo $home; ?>/company/">企業情報</a>
</div>
</div>

<div class="home__company__menu shadow bg-white">
<a href="<?php echo $home; ?>/company#id01">
<span><img class="home__company__menu-icon" src="<?php echo $wp_url; ?>/dist/images/icon_com_01.png" alt="アイコン"></span>
<span class="home__company__menu-ttl">ご挨拶</span>
<span class="home__company__menu-arrow"><img src="<?php echo $wp_url; ?>/dist/images/arrow_icon.png" alt="矢印"></span>
</a>
<a href="<?php echo $home; ?>/company#id02">
<span><img class="home__company__menu-icon" src="<?php echo $wp_url; ?>/dist/images/icon_com_02.png" alt="アイコン"></span>
<span class="home__company__menu-ttl">会社概要</span>
<span class="home__company__menu-arrow"><img src="<?php echo $wp_url; ?>/dist/images/arrow_icon.png" alt="矢印"></span>
</a>
<a href="<?php echo $home; ?>/company#id05">
<span><img class="home__company__menu-icon" src="<?php echo $wp_url; ?>/dist/images/icon_com_03.png" alt="アイコン"></span>
<span class="home__company__menu-ttl">CSR</span>
<span class="home__company__menu-arrow"><img src="<?php echo $wp_url; ?>/dist/images/arrow_icon.png" alt="矢印"></span>
</a>
<a href="<?php echo $home; ?>/company#id06">
<span><img class="home__company__menu-icon" src="<?php echo $wp_url; ?>/dist/images/icon_com_04.png" alt="アイコン"></span>
<span class="home__company__menu-ttl">関連会社</span>
<span class="home__company__menu-arrow"><img src="<?php echo $wp_url; ?>/dist/images/arrow_icon.png" alt="矢印"></span>
</a>
</div>

</div>
<img src="<?php echo $wp_url; ?>/dist/images/bg_logo.png" alt="ロゴ">
</section>

<section class="sec home__network">
<div class="container">
<h2 class="ttl-h2">
<span class="ttl-h2-en">Network</span>
<span class="ttl-h2-jp">拠点体制</span>
</h2>
<p>全国のお客様をサポートできるよう、<br>9ヶ所の営業拠点を配しています。</p>
<div class="mt-5">
<a class="btn btn-dark" href="<?php echo $home; ?>/network/">拠点体制へ</a>
</div>
</div>

<div class="home__network__menu">
<a href="<?php echo $home; ?>/network#id01">
<h3><span>Sales network</span>セールスネットワーク</h3>
<img src="<?php echo $wp_url; ?>/dist/images/icon_arrow_white.png" alt="矢印">
</a>
<a href="<?php echo $home; ?>/network#id02">
<h3><span>Factory</span>ファクトリー</h3>
<img src="<?php echo $wp_url; ?>/dist/images/icon_arrow_white.png" alt="矢印">
</a>
<a href="<?php echo $home; ?>/network#id03">
<h3><span>Global</span>海外事業部</h3>
<img src="<?php echo $wp_url; ?>/dist/images/icon_arrow_white.png" alt="矢印">
</a>
</div>

</section>

<section class="home__recruit sec bg-light">
<div class="container">
<div class="row align-items-center justify-content-between">
<div class="col-md-6 home__recruit-img">
<img src="<?php echo $wp_url; ?>/dist/images/recruit_img.png" alt="採用情報">
</div>
<div class="col-md-5">
<h2 class="ttl-h2">
<span class="ttl-h2-en">Recruit</span>
<span class="ttl-h2-jp">採用情報</span>
</h2>
<p>より働きやすい職場環境づくりを推進しています。
<br>当社の仲間の一員となり、一緒にものづくりをしてみませんか？ ご応募をお待ちしております。</p>

<div class="mt-5">
<a class="btn btn-dark" href="<?php echo $home; ?>/recruit/">採用情報</a>
</div>
<div class="mt-3">
<a class="btn btn-dark" href="https://job.mynavi.jp/21/pc/search/corp104468/outline.html" target="_blank">マイナビ2020</a>
</div>

</div>
</div>
</div>
</section>

<section class="sec home__news">
<div class="container">
<h2 class="ttl-h2 text-center">
<span class="ttl-h2-en">News</span>
<span class="ttl-h2-jp">新着情報</span>
</h2>
<p class="text-md-center">三和電子サーキットでは、定期的に社員交流についてや、インターンシップなどの情報を更新しています。</p>

<ul class="home__news__list">
<?php
$args = [
    'posts_per_page' => 3,
    'category' => 'information',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
?>
<li>
<a href="<?php echo $p; ?>">
<span class="home__news__list-time"><?php the_time('Y.m.d'); ?></span>
<span class="home__news__list-cat">お知らせ</span>
<span class="home__news__list-ttl"><?php echo $t; ?></span>
</a>
</li>
<?php endforeach; wp_reset_postdata(); ?>
</ul>

<div class="text-center">
<a class="btn btn-dark" href="<?php echo $home; ?>/news/">新着情報</a>
</div>

</div>
</section>

<?php get_footer();