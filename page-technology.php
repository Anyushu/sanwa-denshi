<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<section class="mv__sub technology lower">
<div class="container">
<div class="mv__sub__inner">
<h2 class="mv__sub__inner-ttl">Technology</h2>
<p>技術・設計</p>
</div>
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
}
?>
<div class="technology__menu">
<a href="#id01">先進の技術「多層基板」</a>
<a href="#id02">先進の技術「デバイス基板」</a>
<a href="#id03">CAD設計・試作実装</a>
</div>
</div>
</section>

<section id="id01" class="sec technology__board">
<div class="container">
<h2 class="ttl-h2 text-left">
<span class="ttl-h2-en small">Multilayer board</span>
<span class="ttl-h2-jp">先進の技術「多層基板」</span>
</h2>

<div class="post__main">
<h2 class="mt-0">銅インレイ基板(銅コイン)</h2>
<p>多様化する電子部品の中には動作時の発熱量が非常に大きいものがあります。
<br>このような電子部品の熱を効率よく放熱するため、銅コインを埋め込んだ基板をご提供いたします。</p>
<div class="row mt-4">
<div class="col-md-4 col text-center">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_1.png" alt="銅インレイ基板">
</div>
<div class="col-md-4 col text-center">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_2.png" alt="銅インレイ基板">
</div>
</div>
</div>

<div class="post__main">
<h2 class="mt-0">狭ピッチレジスト形成基板</h2>
<p>パッド間にソルダーレジストを形成することは、はんだブリッジなどの不具合防止に有効です。
<br>しかし、パッドのピッチが狭小化すればするほど、その間にソルダーレジストを形成することが困難になります。このような狭ピッチパッド間にソルダーレジストを形成した基板をご提供いたします。</p>
<div class="row mt-4">
<div class="col-md-4 col text-center">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_none.png" alt="狭ピッチレジスト形成基板">
</div>
<div class="col-md-4 col text-center">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_none.png" alt="狭ピッチレジスト形成基板">
</div>
</div>
</div>

<div class="post__main">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">バックドリル基板</h2>
<p>バックドリル加工により不要なスルーホールスタブを取り除くことで、信号の乱れ解消や、減衰量の低減を図ることが可能です。この事より、より優れた高速伝送基板を提供いたします。</p>
</div>
<div class="col-md-4 text-md-right text-center">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_3.png" alt="狭ピッチレジスト形成基板">
</div>
</div>
</div>

<div class="post__main">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">ハイブリッド多層基板</h2>
<p>異種材料を組み合わせた多層基板の製造が可能です。この事より、仕様用途に最適且つコストメリットのある多層基板を提供いたします。特に高周波用途として有効です。</p>
</div>
<div class="col-md-4 text-md-right text-center">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_4.png" alt="ハイブリッド多層基板">
</div>
</div>
</div>

<div class="post__main">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">金属キャビティ―基板</h2>
<p>多様化する電子部品の中には動作時の発熱量が非常に大きいものがあります。
<br>このような電子部品の熱を効率よく放熱するため、銅コインを埋め込んだ基板をご提供いたします。</p>
</div>
<div class="col-md-4 text-md-right text-center">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_5.png" alt="金属キャビティ―基板">
</div>
</div>
</div>

<div class="post__main">
<h2 class="mt-0">高位置精度基板(LDI)</h2>
<p>基板表裏の回路の位置精度についての要求が増加しています。
<br>ダイレクトイメージ露光機を利用することで、位置精度の高い基板をご提供いたします。</p>
<div class="row justify-content-between mt-4">
<div class="col-md-3 text-center mt-md-0 mt-4">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_none.png" alt="表面写真(コネクタ部)">
<p class="mb-0 font-weight-bold small text-md-left mt-2">表面写真(コネクタ部)</p>
</div>
<div class="col-md-3 text-center mt-md-0 mt-4">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_none.png" alt="断面写真(コネクタ部)">
<p class="mb-0 font-weight-bold small text-md-left mt-2">断面写真(コネクタ部)</p>
</div>
<div class="col-md-3 text-center mt-md-0 mt-4">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_none.png" alt="表面写真(フィルムコンタクト)">
<p class="mb-0 font-weight-bold small text-md-left mt-2">表面写真(フィルムコンタクト)</p>
</div>
</div>
</div>

<div class="post__main">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">極小径VIA高多層基板</h2>
<p>板厚が厚い高多層基板においても極小径の導通ＶＩＡ形成が可能です。
<br>この事より、配線密集度の高い最先端の高多層基板を提供いたします。</p>
</div>
<div class="col-md-4 text-md-right text-center">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_6.png" alt="ハイブリッド多層基板">
</div>
</div>
</div>

</div>
</section>

<section id="id02" class="lower__sub__mv bg_01">
<div class="container">
<h2 class="ttl-h2 text-left">
<span class="ttl-h2-en small">Multilayer board</span>
<span class="ttl-h2-jp">先進の技術「多層基板」</span>
</h2>
</div>
</section>

<section class="sec technology__board mt-0">
<div class="container">

<div class="post__main mt-0">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">機能段差基板</h2>
<p>プリント基板の銅配線の一部に凹凸をつけることで、部品で使用されるデバイス用途の基板において、高さの調節や構造による機能を付与することができます。</p>
</div>
<div class="col-md-4 text-md-right text-center">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_7.png" alt="機能段差基板">
</div>
</div>
</div>

<div class="post__main">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">薄板曲げ基板</h2>
<p>薄板曲げ基板は、板厚0.1mmt以下の薄板ガラスエポキシ基板(FR-4)を用いることで、数回の折り曲げや、組み立て時などの曲げのみで使用されているフレキシブル基板の代替となる基板です。</p>
</div>
<div class="col-md-4 text-md-right text-center">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_8.png" alt="薄板曲げ基板">
</div>
</div>
</div>

<div class="post__main">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">貼り合わせ3層基板</h2>
<p>デバイス用プリント基板はデバイスの小型化に伴い、製品個別の実装に合わせたプリント基板の構造が求められます。当社では、貼り合わせ構造により、ご要望に応じた特殊構造のプリント基板をご提供することが可能です。</p>
</div>
<div class="col-md-4 text-md-right text-center">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_9.png" alt="貼り合わせ3層基板">
</div>
</div>
</div>

<div class="post__main">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">シリコーン埋め込み基板</h2>
<p>LED素子を実装する基板の細かい回路間を、反射率の高いシリコーンインクで埋めることで、樹脂基材の劣化を抑え、光の反射を有効に活用できる基板の製造が可能です。また、段差プロセスにより銅箔の高さを変えることで回路上にもシリコーンインクを形成することができます。</p>
</div>
<div class="col-md-4 text-md-right text-center">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_10.png" alt="シリコーン埋め込み基板">
</div>
</div>
</div>

<div class="post__main">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">部分エッチングスルーホール基板</h2>
<p>デバイスのサブストレイト基板として使用するプリント基板では、部品実装後にスルーホールを半分に切断することで、半田付け電極として使う場合がありますが、ダイシングなどでスルーホールの銅めっきを切断するとバリの発生が避けられません。
<br>当社では、スルーホールの切断部分の銅だけをエッチング除去することで、バリ発生のない切断スルーホール基板が可能です。</p>
</div>
<div class="col-md-4 text-md-right text-center">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_11.png" alt="部分エッチングスルーホール基板">
</div>
</div>
</div>

<div class="post__main">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">貫通スルーホールフィルド基板</h2>
<p>高密度実装基板では、スルーホールを樹脂埋めすることで、実装エリアを確保してきましたが、同時に放熱対策の必要性も求められています。
<br>当社では、銅めっきによってスルーホールを埋めることで、高密度化と放熱経路の確保が可能となるスルーホールフィルド基板の製造が可能です。</p>
</div>
<div class="col-md-4 text-md-right text-center">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_12.png" alt="貫通スルーホールフィルド基板">
</div>
</div>
</div>

</div>
</section>

<section id="id03" class="lower__sub__mv bg_02">
<div class="container">
<h2 class="ttl-h2 text-left">
<span class="ttl-h2-en small">Prototype</span>
<span class="ttl-h2-jp">CAD設計・試作実装</span>
</h2>
</div>
</section>

<section class="sec technology__board mt-0">
<div class="container">
<h3 class="font-weight-bold h5 mb-4">蓄積したノウハウを活かし完成度の高い製品を提供いたします。</h3>
<p>パッド間にソルダーレジストを形成することは、はんだブリッジなどの不具合防止に有効です。
<br>しかし、パッドのピッチが狭小化すればするほど、その間にソルダーレジストを形成することが困難になります。このような狭ピッチパッド間にソルダーレジストを形成した基板をご提供いたします。</p>
<div class="text-center mt-5">
<img src="<?php echo $wp_url; ?>/dist/images/prototype.png" alt="prototype">
</div>

<div class="post__main">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">伝送線路解析</h2>
<p>信号スピードの高速化に伴い、ノイズ等の影響が無視できなくなってきました。伝送線路解析を実施することで、設計段階から対策を行う事が可能となります。 </p>
<div class="mt-3 text-center">
<img src="<?php echo $wp_url; ?>/dist/images/cad.png" alt="伝送線路解析">
</div>
</div>
<div class="col-md-4 text-md-right text-center mt-md-0 mt-4">
<img src="<?php echo $wp_url; ?>/dist/images/prototype_flow.png" alt="伝送線路解析">
</div>
</div>
</div>

<div class="post__main">
<h2 class="mt-0">EMI対策・PI解析設計</h2>
<p><span class="text-primary font-weight-bold">EMIルールチェック</span>
<br>アートワークデータから、EMIに関する項目をチェックします。
<br><br>
<span class="text-primary font-weight-bold">PI解析</span>
<br>電源、GNDプレーンの形状からインピーダンスを解析します。
<br><br>
<span class="text-primary font-weight-bold">プレーン共振解析</span>
<br>電源、GNDプレーンの形状から共振状態を解析します。</p>
</div>

<div class="post__main">
<h2 class="mt-0">プレーン共振解析</h2>
<p><span class="text-primary font-weight-bold">EMIルールチェック</span>
<br>共振している箇所を中心に、コンデンサ追加、位置変更などを検討します。</p>
<div class="row mt-4">
<div class="col-md-4 col">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_13.png" alt="プレーン共振解析">
</div>
<div class="col-md-4 col">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_14.png" alt="プレーン共振解析">
</div>
</div>
</div>

<div class="post__main">
<div class="row mt-4">
<div class="col-md-8">
<h2 class="mt-0">PI解析設計</h2>
<p>ICへ電力供給した際の影響が、プレーンの別の場所へどの程度の影響を及ぼすかを解析します。インピーダンスが高い場所のICへは正常に電力供給がされない(正常に動作しない)危険がありますので、インピーダンスを低く抑える必要があります。
<br>※右図の例では、IC-Aへ電力供給した際の影響で、IC-B周辺のインピーダンスが高くなっています。(赤で表示=インピーダンス高)</p>
</div>
<div class="col-md-4 text-md-right text-center">
<img src="<?php echo $wp_url; ?>/dist/images/technology_pic_15.png" alt="PI解析設計">
</div>
</div>
</div>

</div>
</section>

<?php get_footer();
