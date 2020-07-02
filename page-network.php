<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<section class="mv__sub network lower">
<div class="container">
<div class="mv__sub__inner">
<h2 class="mv__sub__inner-ttl">Network</h2>
<p>拠点体制</p>
</div>

<div class="lower__menu">
<?php
if (function_exists('yoast_breadcrumb')) {
yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
}
?>
<div class="lower__menu__inner network">
<a class="lower__menu__inner-item" href="#id01">セールスネットワーク</a>
<a class="lower__menu__inner-item" href="#id02">ファクトリー</a>
<a class="lower__menu__inner-item" href="#id03">海外事業部</a>
</div>
</div>
</div>
</section>

<section id="id01" class="sec sales">
<div class="container">
<h2 class="ttl-h2 text-center">
<span class="ttl-h2-en small">Sales network</span>
<span class="ttl-h2-jp">セールスネットワーク</span>
</h2>
<p class="mb-0 text-md-center">新規のお引き合いのお客様は、最寄りの営業所宛に、お電話もしくはメール・FAXにてご連絡ください。</p>

<div class="sales__lists">
<div class="sales__lists__inner">
<h3>
<img src="<?php echo $wp_url; ?>/dist/images/pin_0.png" alt="アイコン">
<span>本部営業所</span>
</h3>
<p>〒546-0041
<br>大阪府大阪市東住吉区桑津3-28-1
<br>TEL(06)4301-1531/FAX(06)4301-1537
<br>Email:<a href="mailto:info@se-circuit.co.jp">info@se-circuit.co.jp</a></p>
</div>
</div>

<div class="sales__lists">
<div class="sales__lists__inner">
<h3>
<img src="<?php echo $wp_url; ?>/dist/images/pin_1.png" alt="アイコン">
<span>大阪営業所</span>
</h3>
<p>〒546-0041
<br>大阪府大阪市東住吉区桑津3-28-1
<br>TEL(06)4301-1531/FAX(06)4301-2331
<br>Email:<a href="mailto:osaka@se-circuit.co.jp">osaka@se-circuit.co.jp</a></p>
</div>
<div class="sales__lists__inner">
<h3>
<img src="<?php echo $wp_url; ?>/dist/images/pin_2.png" alt="アイコン">
<span>名古屋営業所</span>
</h3>
<p>〒451-0062
<br>愛知県名古屋市西区花の木2-17-13
<br>名昭ビル4F
<br>TEL(052)521-1031/FAX(052)528-0855
<br>Email:<a href="mailto:nagoya@se-circuit.co.jp">nagoya@se-circuit.co.jp</a></p>
</div>
<div class="sales__lists__inner">
<h3>
<img src="<?php echo $wp_url; ?>/dist/images/pin_3.png" alt="アイコン">
<span>兵庫営業所</span>
</h3>
<p>〒673-0016
<br>兵庫県明石市松の内2-3-9 親和ビル9F
<br>TEL(078)924-0585/FAX(078)924-0587
<br>Email:<a href="mailto:hyogo@se-circuit.co.jp">hyogo@se-circuit.co.jp</a></p>
</div>
</div>

<div class="sales__lists">
<div class="sales__lists__inner">
<h3>
<img src="<?php echo $wp_url; ?>/dist/images/pin_4.png" alt="アイコン">
<span>九州営業所</span>
</h3>
<p>〒813-0034
<br>福岡県福岡市東区多の津4-9-1 沖ビル3F
<br>TEL(092)622-9749/FAX(092)621-8574
<br>Email:<a href="mailto:kyusyu@se-circuit.co.jp">kyusyu@se-circuit.co.jp</a></p>
</div>
<div class="sales__lists__inner">
<h3>
<img src="<?php echo $wp_url; ?>/dist/images/pin_5.png" alt="アイコン">
<span>北陸営業所</span>
</h3>
<p>〒921-8163
<br>石川県金沢市横川7-84 泰成ビル2F
<br>TEL(076)245-0575/FAX(076)245-0134
<br>Email:<a href="mailto:hoku@se-circuit.co.jp">hoku@se-circuit.co.jp</a></p>
</div>
<div class="sales__lists__inner">
<h3>
<img src="<?php echo $wp_url; ?>/dist/images/pin_6.png" alt="アイコン">
<span>東海営業所</span>
</h3>
<p>〒438-0812
<br>静岡県磐田市海老塚793-1 東海工場内
<br>TEL(0538)37-3531/FAX(0538)39-2085
<br>Email:<a href="mailto:tokai@se-circuit.co.jp">tokai@se-circuit.co.jp</a></p>
</div>
</div>

<div class="sales__lists">
<div class="sales__lists__inner">
<h3>
<img src="<?php echo $wp_url; ?>/dist/images/pin_7.png" alt="アイコン">
<span>東京営業所</span>
</h3>
<p>〒143-0016
<br>東京都大田区大森北1-22-9 コロナ大森ビル6F
<br>TEL(03)3766-9161/FAX(03)3766-6940
<br>Email:<a href="mailto:tokyo@se-circuit.co.jp">tokyo@se-circuit.co.jp</a></p>
</div>
<div class="sales__lists__inner">
<h3>
<img src="<?php echo $wp_url; ?>/dist/images/pin_8.png" alt="アイコン">
<span>北関東営業所</span>
</h3>
<p>〒323-0022
<br>栃木県小山市駅東通り 1-22-30 TSビルⅢ 2F
<br>TEL(0285)30-7731/FAX(0285)30-7037
<br>Email:<a href="mailto:kitakan@se-circuit.co.jp">kitakan@se-circuit.co.jp</a></p>
</div>
<div class="sales__lists__inner">
<h3>
<img src="<?php echo $wp_url; ?>/dist/images/pin_9.png" alt="アイコン">
<span>厚木営業所</span>
</h3>
<p>〒243-0018
<br>神奈川県厚木市中町4-51-14 国際厚木ビル6F
<br>TEL(046)224-5273/FAX(046)224-5283
<br>Email:<a href="mailto:atsugi@se-circuit.co.jp">atsugi@se-circuit.co.jp</a></p>
</div>
</div>

</div>
</section>

<section id="id02" class="lower__sub__mv bg_03 lower__sub__mv__net">
<h2 class="ttl-h2 text-center">
<span class="ttl-h2-en small">Factory</span>
<span class="ttl-h2-jp">ファクトリー</span>
</h2>
</section>

<section class="sec pt-0">
<div class="container">

<div class="post__main net mt-0">
<div class="row justify-content-between">
<div class="col-md">
<h2 class="mt-0">美原工場</h2>
<p>〒587-0042
<br>大阪府堺市美原区木材通1丁目4番5号
<br>TEL：072-362-4331（代表） FAX：072-362-0431（専用）
<br>E-mail：<a href="mailto:info@mh.se-circuit.co.jp">info@mh.se-circuit.co.jp</a></p>
<div class="row align-items-center">
<div class="col">
<p class="mb-0 text-primary font-weight-bold">製造品目</p>
<p class="mb-0 small">高多層基板（4層～36層）
<br>ビルドアップ・ＩＶＨ基板
<br>高放熱基板</p>
</div>
<div class="col">
<img src="<?php echo $wp_url; ?>/dist/images/network2_iso1.png" alt="ロゴ">
</div>
</div>
</div>
<div class="col-md mt-md-0 mt-4 text-md-right">
<img src="<?php echo $wp_url; ?>/dist/images/net_pic_1.png" alt="美原工場">
<div class="mt-3">
<a class="btn btn-sm btn-dark" href="https://goo.gl/maps/Le8ygD2dq85hKsph6" target="_blank">Google MAPで見る</a>
</div>
</div>
</div>
</div>

<div class="post__main net">
<div class="row justify-content-between">
<div class="col-md">
<h2 class="mt-0">大阪工場</h2>
<p>〒546-0041
<br>［第1工場］大阪市東住吉区桑津1丁目7番13号
<br>［第2工場］大阪市東住吉区桑津3丁目28番1号
<br>TEL：06-6719-1171（代表） FAX：06-6719-0348（専用）
<br>E-mail：<a href="mailto:info@os.se-circuit.co.jp">info@os.se-circuit.co.jp</a></p>
<div class="row align-items-center">
<div class="col">
<p class="mb-0 text-primary font-weight-bold">製造品目</p>
<p class="mb-0 small">高密度両面基板
<br>フッ素樹脂基板
<br>多層基板
<br>小ロットフレキシブル基板</p>
</div>
<div class="col">
<img src="<?php echo $wp_url; ?>/dist/images/network2_iso2.png" alt="ロゴ">
</div>
</div>
</div>
<div class="col-md mt-md-0 mt-4 text-md-right">
<img src="<?php echo $wp_url; ?>/dist/images/net_pic_2.png" alt="大阪工場">
<div class="mt-3">
<span class="mr-2">第1工場</span><a class="btn btn-sm btn-dark" href="https://goo.gl/maps/Gfb9RfV2JK2Ab1q59" target="_blank">Google MAPで見る</a>
</div>
<div class="mt-3">
<span class="mr-2">第2工場</span><a class="btn btn-sm btn-dark" href="https://goo.gl/maps/ve3eqapniuR9aaAU9" target="_blank">Google MAPで見る</a>
</div>
</div>
</div>
</div>

<div class="post__main net">
<div class="row justify-content-between">
<div class="col-md">
<h2 class="mt-0">東海工場</h2>
<p>〒438-0812
<br>静岡県磐田市海老塚793-1
<br>TEL：0538-37-3531（代表）FAX：0538-37-1552（専用）
<br>E-mail：<a href="mailto:info@tk.se-circuit.co.jp">info@tk.se-circuit.co.jp</a></p>
<div class="row align-items-center">
<div class="col">
<p class="mb-0 text-primary font-weight-bold">製造品目</p>
<p class="mb-0 small">高密度両面基板
<br>超薄板高密度基板
<br>デバイス・特殊基板
<br>多層基板</p>
</div>
<div class="col">
<img src="<?php echo $wp_url; ?>/dist/images/network2_iso3.png" alt="ロゴ">
</div>
</div>
</div>
<div class="col-md mt-md-0 mt-4 text-md-right">
<img src="<?php echo $wp_url; ?>/dist/images/net_pic_3.png" alt="大阪工場">
<div class="mt-3">
<a class="btn btn-sm btn-dark" href="https://goo.gl/maps/RSosb5bw4VvMEEJC9" target="_blank">Google MAPで見る</a>
</div>
</div>
</div>
</div>

<div class="post__main net">
<div class="row justify-content-between">
<div class="col-md">
<h2 class="mt-0">ST工場</h2>
<p>〒546-0041
<br>大阪市東住吉区桑津1丁目10番25号
<br>TEL：06-6713-3255（代表）FAX：06-6714-4373（専用）
<br>E-mail：<a href="mailto:info@st.se-circuit.co.jp">info@st.se-circuit.co.jp</a></p>
<div class="row align-items-center">
<div class="col">
<p class="mb-0 text-primary font-weight-bold">製造品目</p>
<p class="mb-0 small">高密度片面基板
<br>金属ベース基板</p>
</div>
<div class="col">
<img src="<?php echo $wp_url; ?>/dist/images/network2_iso4.png" alt="ロゴ">
</div>
</div>
</div>
<div class="col-md mt-md-0 mt-4 text-md-right">
<img src="<?php echo $wp_url; ?>/dist/images/net_pic_4.png" alt="大阪工場">
<div class="mt-3">
<a class="btn btn-sm btn-dark" href="https://goo.gl/maps/FybZ2xgnpxA89E4B6" target="_blank">Google MAPで見る</a>
</div>
</div>
</div>
</div>

<div class="post__main net">
<div class="row justify-content-between">
<div class="col-md">
<h2 class="mt-0">営業本部 設計部</h2>
<p>〒546-0041
大阪市東住吉区桑津3丁目28番1号
TEL：06-6105-0931（直通）FAX：06-4301-1431（専用）</p>
<div class="row align-items-center">
<div class="col">
<p class="mb-0 text-primary font-weight-bold">品目</p>
<p class="mb-0 small">基板設計
<br>SP・PI解析
<br>試作実装</p>
</div>
<div class="col"></div>
</div>
</div>
<div class="col-md mt-md-0 mt-4 text-md-right"></div>
</div>
</div>

</div>
</section>

<section id="id03" class="lower__sub__mv bg_04 lower__sub__mv__net">
<h2 class="ttl-h2 text-center">
<span class="ttl-h2-en small">Global</span>
<span class="ttl-h2-jp">海外事業部</span>
</h2>
</section>

<section class="sec pt-0">
<div class="container">
<h3 class="text-center font-weight-bold h4 mb-md-5 mb-4">基板メーカーのプロが海外調達をお手伝いします。</h3>
<p class="text-center">品質保証・納期管理を徹底し、お客様の海外調達を円滑にサポートします。</p>
<div class="text-center post__main net">
<img src="<?php echo $wp_url; ?>/dist/images/net_graph.png" alt="">
</div>

<div class="net__merit">
<h3>このような課題を解決します。</h3>
<div class="net__merit__wrap">
<div class="net__merit__wrap__inner">
<span><img src="<?php echo $wp_url; ?>/dist/images/icon_chek.png" alt="アイコン"></span>
<p>超大型ロットではないが、<br>海外調達によりコストダウンを図りたい。</p>
</div>
<div class="net__merit__wrap__inner">
<span><img src="<?php echo $wp_url; ?>/dist/images/icon_chek.png" alt="アイコン"></span>
<p>海外メーカとの直接取引は管理が煩わしく、<br>問題が起きた時の対応に不安がある。</p>
</div>
<div class="net__merit__wrap__inner">
<span><img src="<?php echo $wp_url; ?>/dist/images/icon_chek.png" alt="アイコン"></span>
<p>海外調達品の品質トラブル時に<br>商社経由では品質面の対応力に不安がある。</p>
</div>
<div class="net__merit__wrap__inner">
<span><img src="<?php echo $wp_url; ?>/dist/images/icon_chek.png" alt="アイコン"></span>
<p>小・中ロット、特急品は<br>引き続き国内メーカで生産したい。</p>
</div>
</div>
</div>

<div class="net__merit">
<h3>三和電子サーキットの海外調達基板の特徴</h3>
<p class="text-center">三和電子サーキット(以下SEC)の品質指導の元に生産しています。</p>
<div class="net__merit__lists">
<div class="net__merit__lists__inner">
<img class="net__merit__lists__inner-check" src="<?php echo $wp_url; ?>/dist/images/icon_chek.png" alt="アイコン">
<img class="net__merit__lists__inner-icon" src="<?php echo $wp_url; ?>/dist/images/net_icon_1.png" alt="アイコン">
<h4>品質保証</h4>
<p>海外調達基板は、SECが品質保証・品質サポートしています。</p>
</div>
<div class="net__merit__lists__inner">
<img class="net__merit__lists__inner-check" src="<?php echo $wp_url; ?>/dist/images/icon_chek.png" alt="アイコン">
<img class="net__merit__lists__inner-icon" src="<?php echo $wp_url; ?>/dist/images/net_icon_2.png" alt="アイコン">
<h4>現地駐在スタッフ</h4>
<p>海外調達基板は、現地駐在のSEC社員が品質確認の上、出荷しています。</p>
</div>
<div class="net__merit__lists__inner">
<img class="net__merit__lists__inner-check" src="<?php echo $wp_url; ?>/dist/images/icon_chek.png" alt="アイコン">
<img class="net__merit__lists__inner-icon" src="<?php echo $wp_url; ?>/dist/images/net_icon_3.png" alt="アイコン">
<h4>窓口を一括</h4>
<p>海外調達基板の品質・納期・コストすべてSECが窓口として対応しています。</p>
</div>
<div class="net__merit__lists__inner">
<img class="net__merit__lists__inner-check" src="<?php echo $wp_url; ?>/dist/images/icon_chek.png" alt="アイコン">
<img class="net__merit__lists__inner-icon" src="<?php echo $wp_url; ?>/dist/images/net_icon_4.png" alt="アイコン">
<h4>鉛フリーレベラー</h4>
<p>海外調達基板では日本向け鉛フリーレベラー(錫・銀・胴)対応しています。</p>
</div>
</div>
</div>

<div class="net__merit">
<h3>海外事業部の体制</h3>
<p class="text-center">海外事業部は、営業部門、国内基板工場、海外提携基板メーカーと緻密に連携し海外調達基板のQCDを図っています。</p>
<div class="text-center mt-5">
<img src="<?php echo $wp_url; ?>/dist/images/net_illust_1.png" alt="海外事業部の体制">
</div>
<p class="mb-0 mt-5">・海外提携メーカー内にSECの検査員(三和検査室)を配置しています。
<br>・中国提携メーカー社員がSEC国内工場で品質・技術の定期研修をしています。
<br>・品質トラブルはお客様担当国内工場と海外事業部が協力して対応いたします。</p>
</div>

<div class="net__merit">
<h3>海外調達の流れ</h3>
<p class="text-center">三和電子サーキットが手配から納品までワンストップで行います。</p>
<div class="text-center mt-5">
<img src="<?php echo $wp_url; ?>/dist/images/net_flow.png" alt="海外事業部の体制">
</div>
</div>

</div>
</section>

<?php get_footer();
