<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<section class="mv__sub company lower">
<div class="container">
<div class="mv__sub__inner">
<h2 class="mv__sub__inner-ttl">Company</h2>
<p>企業情報</p>
</div>

<div class="lower__menu">
<?php
if (function_exists('yoast_breadcrumb')) {
yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
}
?>
<div class="lower__menu__inner">
<a class="lower__menu__inner-item" href="#id01">ご挨拶</a>
<a class="lower__menu__inner-item" href="#id02">会社概要</a>
<a class="lower__menu__inner-item" href="#id03">沿革</a>
<a class="lower__menu__inner-item" href="#id04">組織図</a>
<a class="lower__menu__inner-item" href="#id05">CSRなどの方針</a>
<a class="lower__menu__inner-item" href="#id06">関連会社</a>
<a class="lower__menu__inner-item" href="#id07">お問い合わせ</a>
</div>
</div>
</div>
</section>

<section id="id01" class="sec">
<div class="container">
<h2 class="ttl-h2 text-center">
<span class="ttl-h2-en small">Greeting</span>
<span class="ttl-h2-jp">ご挨拶</span>
</h2>
<p class="mb-4">当社は１９５５年に株式会社三和電器製作所として創業を開始し、基板グループ会社５社で生産・販売を展開後、２００４年に基板グループ各社を統合し三和電子サーキット株式会社として新たに事業部制で出発をいたしました。
<br>
<br>この間、取引先様のご指導、ご愛顧により半世紀以上にわたりプリント配線板専業会社として、プリント配線板の進歩と共に発展、成長させて頂いたことに感謝いたします。
<br>
<br>最近では、電子機器はもちろんのこと自動車、医療、ロボット、鉄道などあらゆる機械、装置にプリント配線板が多用され、要求性能もさらに多様化･複雑化しています。従来の電気的な役割のほかに熱力学、光学、特殊構造などの新たな役割も求められています。ものづくりにおいて新たな視点、発想がより重要な時代といえます。
<br>
<br>これらお客様の要求に応えるべく、各事業部の長年培ってきた開発技術力・生産技術力･営業力を集結し、Ｑ・Ｃ・Ｄのご要求に対しても『総合力で挑め!!』を行動指針として提案型企業として新たな挑戦を続けています。
<br>
<br>当社は、電子部品・電子機器の製造メーカー企業グループであるエス・エム・シーグループの一員としてプリント配線板事業部門を担当しています。エス・エム・シーグループは、株式会社エス・エム・シーを母体とした電子部品・電子機器の製造メーカー企業グループです。「プリント配線板事業部門」「電子部品事業部門」「電子応用機器事業部門」「リモコン/ラジコン事業部門」の製造メーカーとして各社が固有の技術力やグローバル販売網を培って個性あふれる製品を提供し続けています。
<br>
<br>グループ各社間での営業･技術交流を積極展開し、『総合力で挑め!!』を行動指針としてお客様のニーズにお応えすべく製品開発も積極的に展開しています。
<br>
<br>また、当社は地球環境や安全などの社会的責任を十分認識し、お客様への貢献と共に社会への貢献を目的とし、積極的な企業活動を進めてまいりますので今後ともご支援、ご愛顧賜りますようお願い申し上げます。</p>

<div class="text-right">
<img src="<?php echo $wp_url; ?>/dist/images/greet_name.png" alt="伊藤 和也">
</div>

<div class="post__main mt-5">
<h2>経営理念</h2>
<p>シンボルマークはエス・エム・シーグループ、三和電子サーキットの経営理念の象徴です。</p>
<div class="row justify-content-between align-items-center mt-5">
<div class="col-md-5 mb-md-0 mb-4">
<img src="<?php echo $wp_url; ?>/dist/images/philosophy.png" alt="philosophy">
</div>
<div class="col-md-7">
<p class="mb-0">当社が存在する第一義は、製品の生産・販売及びその他企業活動をとおして豊かな社会作りに貢献することにあります。
<br>その貢献に見合った適正な利潤が潤滑剤となり企業活動がさらに円滑に進むものと考えています。
<br>そして従業員が仕事をとおして豊かな心を育み、充実した生活を維持し向上することがとても大切です。
<br>さらにより良い製品を社会に供給し続けるために人･設備などの企業の大切な資本を充実させ更なる発展によりさらに大きな社会貢献を目指します。</p>
</div>
</div>
</div>

</div>
</section>

<hr class="hr-gray">

<section id="id02" class="sec bg-light">
<div class="container">
<h2 class="ttl-h2 text-center">
<span class="ttl-h2-en small">Outline</span>
<span class="ttl-h2-jp">会社概要</span>
</h2>
<div class="table-wrap">
<table class="table">
<tbody>
<tr>
<th>商号</th>
<td>三和電子サーキット株式会社 （英文名 ： Sanwa Electronic Circuit Co.,Ltd.）</td>
</tr>
<tr>
<th>設立</th>
<td>1955年7月1日（株式会社三和電器製作所設立）</td>
</tr>
<tr>
<th>資本金</th>
<td>255,000,000円（払込済資本金）</td>
</tr>
<tr>
<th>所在地</th>
<td>〒546-0041  大阪市東住吉区桑津3丁目28番1号</td>
</tr>
<tr>
<th>取引銀行</th>
<td>三菱UFJ銀行、みずほ銀行、三井住友銀行、関西みらい銀行、日本政策金融公庫、商工組合中央金庫 他</td>
</tr>
<tr>
<th>役員</th>
<td>
<table>
<tbody>
<tr><td>代表取締役社長</td>
<td class="text-nowrap">伊藤 和也</td></tr>
<tr><td>専務取締役管理本部長</td>
<td class="text-nowrap">羽生 昇</td></tr>
<tr><td>取締役営業本部長</td>
<td class="text-nowrap">長谷川 実</td></tr>
<tr><td>取締役大阪工場長、ST工場長（兼務）</td>
<td class="text-nowrap">祖地 孝</td></tr>
<tr><td>取締役海外事業部長、営業副本部長（兼務）</td>
<td class="text-nowrap">岡本 満</td></tr>
<tr><td>監査役</td>
<td class="text-nowrap">田中 廣美</td></tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>

<hr class="hr-gray-bottom">

<section id="id03" class="sec pt-0">
<div class="container">
<h2 class="ttl-h2 text-center">
<span class="ttl-h2-en small">History</span>
<span class="ttl-h2-jp">沿革</span>
</h2>

<ul class="about__history__timeline p-0">

<li>
<p class="timeline-date">1950年1月</p>
<div class="timeline-content">
<p>大阪市生野区林寺町にて甲斐貮夫個人経営で三共電器製作所を創業する。</p>
</div>
</li>
<li>
<p class="timeline-date">1955年7月</p>
<div class="timeline-content">
<p>事業拡張に伴い、大阪市東住吉区桑津町に、法人組織に改組改称して株式会社三和電器製作所を設立する。</p>
</div>
</li>
<li>
<p class="timeline-date">1955年12月</p>
<div class="timeline-content">
<p>プリント配線板の一貫生産を開始する。</p>
</div>
</li>
<li>
<p class="timeline-date">1960年12月</p>
<div class="timeline-content">
<p>株式会社三和電器製作所が通産省電気用品製造免許工場に認可される。</p>
</div>
</li>
<li>
<p class="timeline-date">1965年12月</p>
<div class="timeline-content">
<p>プリント配線板の生産において、米国ＵＬ規格の認定工場となる。</p>
</div>
</li>
<li>
<p class="timeline-date">1968年7月</p>
<div class="timeline-content">
<p>スルーホールプリント配線板の製造に関し、米国フォトサーキット社と技術提携でCC-4法による無電解メッキ加工の導入をする。</p>
</div>
</li>
<li>
<p class="timeline-date">1969年5月</p>
<div class="timeline-content">
<p>大阪市東住吉区桑津町にて大阪電子回路製造株式会社を設立する。<br>
東京営業所を開設する。(東京都大田区）</p>
</div>
</li>
<li>
<p class="timeline-date">1969年11月</p>
<div class="timeline-content">
<p>株式会社三和電器製作所の本社工場ビルを竣工する。</p>
</div>
</li>
<li>
<p class="timeline-date">1970年6月</p>
<div class="timeline-content">
<p>株式会社三和電器製作所の第二工場を竣工する。</p>
</div>
</li>
<li>
<p class="timeline-date">1979年7月</p>
<div class="timeline-content">
<p>中国営業所を開設する。(鳥取県鳥取市）</p>
</div>
</li>
<li>
<p class="timeline-date">1981年4月</p>
<div class="timeline-content">
<p>名古屋営業所を開設する。(愛知県名古屋市）</p>
</div>
</li>
<li>
<p class="timeline-date">1983年6月</p>
<div class="timeline-content">
<p>プリント配線板SSP-2製法で米国特許を取得。翌年8月、日本特許を取得。</p>
</div>
</li>
<li>
<p class="timeline-date">1984年3月</p>
<div class="timeline-content">
<p>静岡県磐田郡豊田町に東海三和電子回路株式会社を設立する。</p>
</div>
</li>
<li>
<p class="timeline-date">1985年3月</p>
<div class="timeline-content">
<p>大阪府南河内郡にて三和ニューマルチ株式会社を設立する。</p>
</div>
</li>
<li>
<p class="timeline-date">1985年4月</p>
<div class="timeline-content">
<p>伊勢崎営業所を開設。(群馬県伊勢崎市）<br>
東海営業所を開設。（静岡県磐田郡）</p>
</div>
</li>
<li>
<p class="timeline-date">1986年2月</p>
<div class="timeline-content">
<p>九州営業所を開設する。(福岡県福岡市）</p>
</div>
</li>
<li>
<p class="timeline-date">1987年2月</p>
<div class="timeline-content">
<p>兵庫営業所を開設する。(兵庫県明石市)</p>
</div>
</li>
<li>
<p class="timeline-date">1989年5月</p>
<div class="timeline-content">
<p>北陸営業所を開設する。(石川県金沢市）</p>
</div>
</li>
<li>
<p class="timeline-date">1990年7月</p>
<div class="timeline-content">
<p>厚木営業所を開設する。(神奈川県厚木市)</p>
</div>
</li>
<li>
<p class="timeline-date">1994年5月</p>
<div class="timeline-content">
<p>三和ニューマルチ株式会社が多層プリント配線板の生産において、品質保証の国際規格 ISO9002認証を取得する。（認証機関 ： RCJ ）</p>
</div>
</li>
<li>
<p class="timeline-date">1997年5月</p>
<div class="timeline-content">
<p>北関東営業所を開設する。（栃木県宇都宮市）</p>
</div>
</li>
<li>
<p class="timeline-date">1999年8月</p>
<div class="timeline-content">
<p>東海三和電子回路株式会社がプリント配線板の設計・製造及び販売において、品質保証の国際規格 ISO9001の認証を取得する。（認証機関 ： LIA-AC ）</p>
</div>
</li>
<li>
<p class="timeline-date">2000年12月</p>
<div class="timeline-content">
<p>株式会社三和電器製作所がプリント配線板の設計・製造及び販売において、品質保証の国際規格 ISO9001の認証を取得する。（認証機関 ： BVサーティフィケーション）</p>
</div>
</li>
<li>
<p class="timeline-date">2003年5月</p>
<div class="timeline-content">
<p>北関東営業所と伊勢崎営業所を統合し、北関東営業所として移転する。（栃木県小山市）</p>
</div>
</li>
<li>
<p class="timeline-date">2004年1月</p>
<div class="timeline-content">
<p>組織機構の拡大強化を図るため、株式会社三和電器製作所・三和ニューマルチ株式会社・東海三和電子回路株式会社・大阪電子回路製造株式会社・株式会社三和電器製作所（営業本部）の基板グループ5社の経営を統合、社名を三和電子サーキット株式会社に改称して平成16年1月5日発足。</p>
</div>
</li>
<li>
<p class="timeline-date">2004年6月</p>
<div class="timeline-content">
<p>ＳＴ工場がプリント配線板の生産において、品質保証の国際規格ISO9001の認証を取得する。（認証機関 ： DNV ）</p>
</div>
</li>
<li>
<p class="timeline-date">2006年2月</p>
<div class="timeline-content">
<p>美原工場と東海工場が、ISO14001の認証を取得する。（認証機関 ： PJR）</p>
</div>
</li>
<li>
<p class="timeline-date">2007年3月</p>
<div class="timeline-content">
<p>ISO14001において、大阪工場とＳＴ工場が追加認証を受ける。(認証機関 ： PJR)</p>
</div>
</li>
<li>
<p class="timeline-date">2011年4月</p>
<div class="timeline-content">
<p>海外事業の拡大に伴い、海外部を海外事業部とする。</p>
</div>
</li>
<li>
<p class="timeline-date">2013年12月</p>
<div class="timeline-content">
<p>中国でのプリント配線板製造において中国基板製造メーカーと提携する。</p>
</div>
</li>
<li>
<p class="timeline-date">2014年6月</p>
<div class="timeline-content">
<p>日本電子回路工業会主催のＪＰＣＡショー（東京ビッグサイト）に初出展する。</p>
</div>
</li>
<li>
<p class="timeline-date">2016年3月</p>
<div class="timeline-content">
<p>上海セミコンショーに中国提携メーカーと共同出展する。</p>
</div>
</li>

</ul>

</div>
</section>

<hr class="hr-gray">

<section id="id04" class="sec bg-light">
<div class="container">
<h2 class="ttl-h2 text-center">
<span class="ttl-h2-en small">Organization</span>
<span class="ttl-h2-jp">組織図</span>
</h2>
<div class="text-center">
<img src="<?php echo $wp_url; ?>/dist/images/organization.png" alt="組織図">
</div>
</div>
</section>

<hr class="hr-gray-bottom mb-0">

<section id="id05" class="sec">
<div class="container">
<h2 class="ttl-h2 text-center">
<span class="ttl-h2-en small">CSR</span>
<span class="ttl-h2-jp">CSRなどの方針</span>
</h2>
<div class="post__main">
<div class="mb-5">
<h2>CSR</h2>
<p class="text-primary font-weight-bold">【基本方針】</p>
<p>1. 当社は、社会の一員として、安全で豊かな社会づくりに貢献するため、ＣＳＲへの取組みを推進しています。
<br>2. 企業は事業活動を通じて、社会・環境に様々な形で影響を及ぼします。よって企業の事業活動は社会の規範に照らして正しいものでなければなりません。
<br>
<br>3. 当社のＣＳＲへの取組みは、法令遵守（コンプライアンス）・環境保全の諸活動など社会的責任に係る活動を統括し、
<br>
<br>1）法令遵守（コンプライアンス）
<br>2）環境保全
<br>3）製品の安全性
<br>4）労働・安全衛生
<br>5）情報セキュリティ・個人情報保護・企業倫理
<br>6）ＢＣＭＳの構築
<br>7）反社会的勢力の排除
<br>
<br>の規範及び基準等を定めて推進します。</p>
</div>
<div class="mb-5">
<h2>品質方針</h2>
<p class="text-primary font-weight-bold">【基本理念】</p>
<p>当社が存在する第一義は、製品の生産・販売及びその他企業活動をとおして豊かな社会作りに貢献することにあります。そのために”総合力で挑め!!”を行動指針として、『品質第一』・『顧客満足』を最優先とした｢ものづくり｣を目指します。そして、より良い製品・サービス及び画期的な製品を供給するため、組織一体となって常に改革・改善に挑戦し続けます。</p>
<p class="text-primary font-weight-bold mt-4">【基本方針】</p>
<p>「品質・コスト・納期」において、顧客に満足していただける製品を供給するため、以下の事項を実践していきます。
<br>
<br>1. 品質方針を達成するため年度毎に品質目標を定め、各種会議体にてその進捗を監視します。
<br>2. 顧客要求事項・法的要求事項を順守するとともに、企業の社会的責任を果たします。
<br>3. ＩＳＯ９００１に基づく品質マネジメントシステムを構築・運用し、その有効性確認及び継続的な改善を図ります。
<br>4. 品質方針・品質目標は、その有効性を顧客満足度・内部監査結果等によりレビューを行います。
<br>5. 品質方針は社内掲示・教育訓練により周知徹底を図ると共に、ホームページにて公開します。</p>
</div>
<div class="mb-5">
<h2>環境方針</h2>
<p class="text-primary font-weight-bold">【基本理念】</p>
<p>三和電子サーキット株式会社は、「地球環境の保全」が重要課題の一つであることを認識し、プリント配線板の設計、生産活動、製品及びサービスが環境に与える影響を把握し、全従業員参加のもと、環境にやさしい企業活動を継続的に推進します。</p>
<p class="text-primary font-weight-bold mt-4">【基本方針】</p>
<p>1. 当社の設計、生産活動及び製品にかかわる環境影響のうち、環境影響を考慮した製品設計・工程設計・グリーン調達に努めます。また、資源の有効活用を図るため、製品不良の削減等を積極的に推進し、省エネ・省資源・ＣＯ２削減を図ります。
<br>2. この環境方針を達成するため、各部門毎に環境目的・目標を設定し、全従業員をあげて対策改善を推進します。
<br>3. 汚染の予防をはじめ、持続可能な資源の利用・気候変動の緩和及び気候変動への適応・生物多様性及び生態系の保護に積極的に取り組んでいきます。
<br>4. 当社に適用される環境関連法規、条例、協定及びその他の要求事項を順守します。
<br>5. ＩＳ０１４００１に基づく環境マネジメントシステムを構築・運用し、有効性確認及び継続的な改善を図ります。
<br>環境方針は社内掲示・教育訓練により周知徹底を図ると共に、ホームページにて公開します。</p>
</div>
<div class="">
<h2>事業継続方針</h2>
<p class="text-primary font-weight-bold">【事業継続方針】</p>
<p>三和電子サーキット株式会社は、様々なリスクに対する予防策の実施と対応力・復旧力の向上に取り組むことにより、いかなるインシデント発生時においても、経営理念である「社会に貢献」を実現するため、重要な業務を継続し、お客様が求めるプリント配線板の安定的な供給が行えるよう、企業としての社会的責任を果たします。</p>
<p class="text-primary font-weight-bold mt-4">【事業継続計画の確立と運用の目的】</p>
<p>1）人命の安全確保を最優先します。
<br>2）安定した製品供給ができる体制を構築し、お客様に与える影響を最小限にします。
<br>3）当社のステークホルダーからの期待や信頼に応えるように努めます。
<br>4）法令・規制要求事項を順守します。</p>
</div>
</div>
</div>
</section>

<hr class="hr-gray">

<section id="id06" class="sec bg-light">
<div class="container">
<h2 class="ttl-h2 text-center">
<span class="ttl-h2-en small">Group</span>
<span class="ttl-h2-jp">関連会社</span>
</h2>

<div class="row align-items-center mb-5 pb-5">
<div class="col-md-7 post__main">
<h2 class="mt-0">グループ統括事業部門</h2>
<p>株式会社エス・エム・シー（Sanwa Management Center）とは、グループ統括事業部門として電子通信機器および電子部品の製造販売業のグループ会社を管理する会社です。
<br>〔プリント配線板事業部門〕〔電子部品事業部門〕〔電子応用機器事業部門〕〔リモコン／ラジコン事業部門〕の４つの部門に分かれています。
<br>
<br>株式会社エス・エム・シー</p>
</div>
<div class="col-md-5 text-center mt-md-0 mt-4">
<img src="<?php echo $wp_url; ?>/dist/images/logo_icon.png" alt="ロゴ">
</div>
</div>

<div class="row mb-5 pb-5">
<div class="col-md-7 post__main">
<h2 class="mt-0">電子部品事業部門</h2>
<p>車載用アクチュエータ、ＡＶ・ＯＡ・通信機器用各種コイル及びフィルター、スイッチング電源トランス・ＤＣ－ＤＣコンバーター、各種精密小型直流モータ、省力化設備機器</p>
<div class="my-5">
<a class="btn btn-dark extra" href="https://www.tokyoparts.co.jp/" target="_blank">東京パーツ工業株式会社</a>
</div>
<p class="text-primary font-weight-bold">【海外】</p>
<p>汕頭東京電子有限公司（中国）
<br>汕頭東京電器有限公司（中国）
<br>東莞三甲電子有限公司（中国）
<br>汕頭経済特区東京元件有限公司（中国）
<br>SANWA PARTS(SINGAPOPE)PTE,Ltd（シンガポール）
<br>PT.SANWA PARTS(INDONESIA)（インドネシア）</p>
</div>
<div class="col-md-5 text-center mt-md-0 mt-4">
<img src="<?php echo $wp_url; ?>/dist/images/pic_1.png" alt="写真">
</div>
</div>

<div class="row mb-5 pb-5">
<div class="col-md-7 post__main">
<h2 class="mt-0">電子応用機器事業部門</h2>
<p>カードリーダーライター、バーコードリーダーライター、センサー応用機器、ＬＥＤ応用機器／ＥＭＳ</p>
<div class="mt-5">
<a class="btn btn-dark extra" href="http://web.sanwa-newtec.co.jp/" target="_blank">三和ニューテック株式会社</a>
</div>
</div>
<div class="col-md-5 text-center mt-md-0 mt-4">
<img src="<?php echo $wp_url; ?>/dist/images/pic_2.png" alt="写真">
</div>
</div>

<div class="row">
<div class="col-md-7 post__main">
<h2 class="mt-0">リモコン/ラジコン事業部門</h2>
<p>多機能学習リモコン、高級ラジコン機器、産業用リモコン</p>
<div class="my-5">
<a class="btn btn-dark extra" href="http://www.sanwa-denshi.co.jp/" target="_blank">三和電子機器株式会社</a>
</div>
<p class="text-primary font-weight-bold">【海外】</p>
<p>三和電子機器（香港）有限公司
<br>東莞泉源電子有限公司
<br>Advanced Technology Haiphong Inc.（ベトナム）</p>
</div>
<div class="col-md-5 text-center mt-md-0 mt-4">
<img src="<?php echo $wp_url; ?>/dist/images/pic_3.png" alt="写真">
</div>
</div>

</div>
</section>

<hr class="hr-gray-bottom mb-0">

<section id="id07" class="sec">
<div class="container">
<h2 class="ttl-h2 text-center">
<span class="ttl-h2-en small">Contact</span>
<span class="ttl-h2-jp">お問い合わせフォーム</span>
</h2>

<div class="form-wrap">
<?php echo do_shortcode('[contact-form-7 id="8" title="お問い合わせ"]'); ?>
</div>

</div>
</section>

<?php get_footer();
