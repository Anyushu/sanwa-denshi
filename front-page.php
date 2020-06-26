<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="l-Hero">
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
<div class="scroll Hero__scroll">
<div class="scroll__text">
<span>scroll down</span>
</div>
<div class="scroll__line">
<div class="scroll__line-inner"></div>
</div>
</div>
</div>
</div>

<div class="mv__news container">
<?php
$args = [
    'posts_per_page' => 1,
    'category' => 'news',
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

<section class="sec">
<div class="container">
<div class="row align-items-center">
<div class="col-md-4">
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

<div class="department-list">
<ul>
<li class="show">
<div class="department-list-item">
<h4>営業部<span>SALES</span></h4>
<p>お客様を訪問してニーズを丁寧にヒアリングし、ご期待以上の製品をご提案。<br>
訪問時にはメンテナンスにも対応できるよう、<br class="br-pc">工事やエンジニア出身のスタッフを多く配置しています。
</p>
</div>
<button name="btn-1" class="department-list-nav"><span>営業部</span><div class="department-list-btn"></div></button>
</li>
<li>
<div class="department-list-item">
<h4>設計部<span>DESIGN</span></h4>
<p>お客様のニーズに合った製品の設計、設備設計を担当。<br>図面を作成し、施工管理までを行います。
</p>
</div>
<button name="btn-2" class="department-list-nav"><span>設計部</span><div class="department-list-btn"></div></button>
</li>
<li>
<div class="department-list-item">
<h4>設備工事部<span>EQUIPMENT WORK</span></h4>
<p>設計部が作成した図面に基づき、<br class="br-pc">安全・正確・美しい仕上がりを目指して設備工事を行います。
</p>
</div>
<button name="btn-3" class="department-list-nav"><span>設備工事部</span><div class="department-list-btn"></div></button>
</li>
<li>
<div class="department-list-item">
<h4>製造部<span>PRODUCTION</span></h4>
<p>自社工場にて、自社商品や特注品、特許取得製品の製作を行います。<br>最新鋭機器を導入し、他にはない高品質なものづくりを目指しています。
</p>
</div>
<button name="btn-4" class="department-list-nav"><span>製造部</span><div class="department-list-btn"></div></button>
</li>
<li>
<div class="department-list-item">
<h4>メンテナンス部<span>MAINTENANCE</span></h4>
<p>きめ細かなアフターフォローができるよう、メンテナンス専門部門を設置。<br>定期点検はもちろん、<br class="br-pc">24時間365日すぐに対応できる体制を整えています。</p>
</div>
<button name="btn-5" class="department-list-nav"><span>メンテナンス部</span><div class="department-list-btn"></div></button>
</li>
<li>
<div class="department-list-item">
<h4>総務・経理部<span>GENERAL AFFAIRS / ACCOUNTING</span></h4>
<p>お客様の頭を悩ませている問題を解決し、ご希望を実現させるために、新しい弊社オリジナル製品の開発・実験をする部署です。<br>特許申請手続などの業務も行っています。
</p>
</div>
<button name="btn-6" class="department-list-nav"><span>総務<span>・</span>経理部</span><div class="department-list-btn"></div></button>
</li>
</ul>
<div class="department-bg-area">
<div class="department-bg show"></div>
<div class="department-bg"></div>
<div class="department-bg"></div>
<div class="department-bg"></div>
<div class="department-bg"></div>
<div class="department-bg"></div>
</div>
</div>

<?php get_footer();