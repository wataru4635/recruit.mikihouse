<?php
/*
Template Name: ミキハウスを知る
*/
?>
<?php get_header(); ?>

<main>

  <section class="sub-fv">
    <div class="sub-fv__content">
      <p class="sub-fv__label">about</p>
      <h1 class="sub-fv__title">ミキハウスを知る</h1>
    </div>
    <div class="sub-fv__img-wrap">
      <picture>
        <source srcset="<?php echo IMAGEPATH; ?>/about/about-fv-sp.webp" media="(max-width: 767px)" type="image/webp"
          width="375" height="180">
        <img src="<?php echo IMAGEPATH; ?>/about/about-fv.webp" alt="社員同士が笑顔で交流する様子" class="sub-fv__img" width="1440"
          height="390">
      </picture>
    </div>
  </section>

  <div class="sub-breadcrumbs">
    <div class="sub-breadcrumbs__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
  </div>

  <div class="about-nav">
    <div class="about-nav__inner">
      <ul class="about-nav__list">
        <li class="about-nav__item">
          <a href="#concept" class="about-nav__link"><span class="about-nav__link-arrow"></span><span
              class="about-nav__link-text">ミキハウスの理念</span></a>
        </li>
        <li class="about-nav__item">
          <a href="#craftsmanship" class="about-nav__link"><span class="about-nav__link-arrow"></span><span
              class="about-nav__link-text">ものづくりのこだわり</span></a>
        </li>
        <li class="about-nav__item">
          <a href="#global-expansion" class="about-nav__link"><span class="about-nav__link-arrow"></span><span
              class="about-nav__link-text">世界16ヵ国 108店舗へ</span></a>
        </li>
        <li class="about-nav__item">
          <a href="#data-view" class="about-nav__link"><span class="about-nav__link-arrow"></span><span
              class="about-nav__link-text">データで見るミキハウス</span></a>
        </li>
        <li class="about-nav__item">
          <a href="#business" class="about-nav__link"><span class="about-nav__link-arrow"></span><span
              class="about-nav__link-text">ミキハウスの事業</span></a>
        </li>
        <li class="about-nav__item">
          <a href="#brand" class="about-nav__link"><span class="about-nav__link-arrow"></span><span
              class="about-nav__link-text">ミキハウスのブランド</span></a>
        </li>
        <li class="about-nav__item">
          <a href="#company" class="about-nav__link"><span class="about-nav__link-arrow"></span><span
              class="about-nav__link-text">会社概要</span></a>
        </li>
      </ul>
    </div>
  </div>


  <section class="concept" id="concept">
    <div class="concept__inner sub-inner">

      <div class="concept__header sub-section-header">
        <h2 class="sub-section-header__title js-text-animate">ミキハウスの理念</h2>
      </div>
      <div class="concept__main">
        <div class="concept__text-wrap js-fade-in">
          <p class="concept__subtitle">「子どもと家族の毎日を笑顔でいっぱいに」</p>
          <p class="concept__text">
            私たちミキハウスは、子どものことを第一に考えたものづくりとサービスをとおして、<br class="u-desktop">
            子どもを笑顔にし、家族を笑顔にし、<br class="u-desktop">
            妊娠・出産・子育ての毎日がハッピーになるお手伝いをしています。
          </p>
        </div>

        <div class="concept__main-img-wrap js-scaleImg">
          <img src="<?php echo IMAGEPATH; ?>/about/concept-img01.webp" alt="おもちゃの飛行機を持って空に向かって笑う子ども"
            class="concept__img concept__img--main" width="745" height="560" loading="lazy">
        </div>
      </div>
      <div class="concept__content">
        <div class="concept__images js-content-img">
          <div class="concept__content-img-wrap concept__img-wrap--sub01">
            <img src="<?php echo IMAGEPATH; ?>/about/concept-img02.webp" alt="ベッドに寝転んで笑っている赤ちゃん"
              class="concept__img concept__img--sub01" width="289" height="217" loading="lazy">
          </div>
          <div class="concept__content-img-wrap concept__img-wrap--sub02">
            <img src="<?php echo IMAGEPATH; ?>/about/concept-img03.webp" alt="笑顔で並んで立つ二人の子ども"
              class="concept__img concept__img--sub02" width="439" height="330" loading="lazy">
          </div>
          <div class="concept__content-img-wrap concept__img-wrap--sub03">
            <img src="<?php echo IMAGEPATH; ?>/about/concept-img04.webp" alt="カラフルな服を着て座っている三人の子ども"
              class="concept__img concept__img--sub03" width="367" height="276" loading="lazy">
          </div>
        </div>

        <div class="concept__message translate-clean js-fade-in --delay-2">
          <p class="concept__paragraph">
            大好きな人にかこまれて安心しているとき、<br class="u-desktop">
            大好きなことに夢中になっているとき、<br class="u-desktop">
            子どもには満ちたりた笑顔があふれます。<br>
            誰もが心からいとおしさを感じ、<br class="u-desktop">
            ずっと大切に育てていきたいきらきらとした笑顔。
          </p>
          <p class="concept__paragraph">
            それを見つめる私たち大人の心も満たされ笑顔がこぼれます。<br>私たちミキハウスが大切にしていきたい、<br
              class="translate-none">ずっと変わらない想い、<br>子どもたちと家族の毎日が笑顔でいっぱいになるように。<br
              class="translate-none">子どもたちが夢をもって成長していけるように。<br class="translate-none">赤ちゃんや子どもの笑顔で、世界が明るくなるように。</p>
          <p class="concept__paragraph">
            これからも子どものことを第一に考えた<br class="u-desktop">
            ものづくりやサービスをコアとし、<br class="u-desktop">
            妊娠・出産・子育ての毎日が、<br class="u-desktop">
            ハッピーになるご提案をしてまいります。
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="craftsmanship" id="craftsmanship">
    <div class="craftsmanship__inner sub-inner">
      <div class="craftsmanship__header sub-section-header">
        <h2 class="sub-section-header__title js-text-animate">ものづくりのこだわり</h2>
      </div>
      <p class="craftsmanship__subtitle">限られた“子ども”の時間にこそ、とにかく《良いもの》をお届けしたい</p>
      <p class="craftsmanship__description">
        子どもたちの元気で健やかな成長のために、安心安全にこだわり抜いた“本物”の商品を身につけて欲しい。<br class="u-desktop">
        そんな想いがMIKI HOUSEのものづくりの原点です。
      </p>

      <div class="craftsmanship__safety">
        <h3 class="craftsmanship__safety-title">世界各国にも通用するミキハウスの安全品質</h3>
        <p class="craftsmanship__safety-description">
          子どものことを第一に考えたものづくりで、子どもの幸せを願うママとパパのお手伝いを。
        </p>

        <div class="craftsmanship__card-list">
          <div class="craftsmanship__card craftsmanship__card--01 js-fade-up">
            <div class="craftsmanship__card-img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/about/craftsmanship-img01.webp" class="craftsmanship__card-img"
                alt="赤ちゃんを優しく包む安全性の高い素材" width="480" height="316" loading="lazy">
            </div>
            <p class="craftsmanship__card-caption">
              ミキハウスは JISを超える独自の「品質管理・縫製基準」を設け、素材試験から全数検針まで徹底管理。
            </p>
          </div>

          <div class="craftsmanship__card craftsmanship__card--02 js-fade-up --delay-2">
            <div class="craftsmanship__card-img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/about/craftsmanship-img02.webp" class="craftsmanship__card-img"
                alt="安全基準に基づいた赤ちゃん用シューズ" width="480" height="316" loading="lazy">
            </div>
            <p class="craftsmanship__card-caption">
              ミキハウスは世界12か国で店舗を展開しており、各国の品質・安全基準をクリアするため、日本で未規制の化学物質も使用しないなど独自基準を設け、どこでも安心して使えるグローバル品質を実現しています。
            </p>
          </div>
        </div>
      </div>

      <div class="craftsmanship__videos">
        <p class="craftsmanship__videos-title">ものづくりに対する姿勢と想い</p>
        <p class="craftsmanship__videos-description">
          ミキハウスの姿勢と想いを表現した、<br class="u-mobile">紹介動画です。
        </p>
        <ul class="craftsmanship__video-list">
          <li class="craftsmanship__video-item">
            <button class="youtube-thumbnail js-open-youtube" type="button"
              data-video="https://youtu.be/sUAbv67-O9Q?si=1HIabBhzxgzCMQXa" aria-controls="youtubeModal">
              <img src="<?php echo IMAGEPATH; ?>/about/craftsmanship-youtube-thumbnail01.webp"
                class="youtube-thumbnail-img" alt="はじめての肌着篇サムネイル画像" width="370" height="270" loading="lazy" />
            </button>
            <div class="craftsmanship__video-text">
              <p class="craftsmanship__video-subtitle">Craftsmanship for babies.</p>
              <p class="craftsmanship__video-title">はじめての肌着篇</p>
            </div>
          </li>

          <li class="craftsmanship__video-item">
            <button class="youtube-thumbnail js-open-youtube" type="button"
              data-video="https://youtu.be/BWpAp_k7Qj8?si=vk9eoyBC9GLt3WP7" aria-controls="youtubeModal">
              <img src="<?php echo IMAGEPATH; ?>/about/craftsmanship-youtube-thumbnail02.webp"
                class="youtube-thumbnail-img" alt="ファーストシューズ篇サムネイル画像" width="370" height="270" loading="lazy" />
            </button>
            <div class="craftsmanship__video-text">
              <p class="craftsmanship__video-subtitle">Craftsmanship for babies.</p>
              <p class="craftsmanship__video-title">ファーストシューズ篇</p>
            </div>
          </li>

          <li class="craftsmanship__video-item">
            <button class="youtube-thumbnail js-open-youtube" type="button"
              data-video="https://youtu.be/phoePqbbsZI?si=-GSnN2xPcFaEh_c9" aria-controls="youtubeModal">
              <img src="<?php echo IMAGEPATH; ?>/about/craftsmanship-youtube-thumbnail03.webp"
                class="youtube-thumbnail-img" alt="美しい刺繍篇サムネイル画像" width="370" height="270" loading="lazy" />
            </button>
            <div class="craftsmanship__video-text">
              <p class="craftsmanship__video-subtitle">Craftsmanship for babies and children</p>
              <p class="craftsmanship__video-title">美しい刺繍篇</p>
            </div>
          </li>

          <li class="craftsmanship__video-item">
            <button class="youtube-thumbnail js-open-youtube" type="button"
              data-video="https://youtu.be/GUZCSyRGUrE?si=zgXgVwuMbwQtuHdT" aria-controls="youtubeModal">
              <img src="<?php echo IMAGEPATH; ?>/about/craftsmanship-youtube-thumbnail04.webp"
                class="youtube-thumbnail-img" alt="ミキハウスのソックス篇サムネイル画像" width="370" height="270" loading="lazy" />
            </button>
            <div class="craftsmanship__video-text">
              <p class="craftsmanship__video-subtitle">Craftsmanship for babies</p>
              <p class="craftsmanship__video-title">ミキハウスのソックス篇</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- YouTubeモーダル -->
  <div id="youtubeModal" class="youtube-modal" aria-hidden="true" role="dialog" aria-modal="true">
    <div class="youtube-modal__content">
      <button class="youtube-modal__close" type="button" aria-label="閉じる">&times;</button>
      <iframe id="youtubeFrame" src="" title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
    </div>
  </div>

  <section class="global-expansion" id="global-expansion">
    <div class="global-expansion__inner sub-inner">
      <div class="global-expansion__header sub-section-header">
        <h2 class="sub-section-header__title js-text-animate sub-section-header__title--transform-none">
          世界16ヵ国108店舗へ</h2>
      </div>
      <time class="global-expansion__date" datetime="2025-03-14">2025年3月14日現在</time>

      <div class="global-expansion__content-list">
        <div class="global-expansion__content">
          <div class="global-expansion__img-wrap global-expansion__img-wrap--content01 js-scaleImg">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/about/global-expansion-img01-sp.webp" media="(max-width: 767px)"
                type="image/webp" width="345" height="180">
              <img src="<?php echo IMAGEPATH; ?>/about/global-expansion-img01.webp" alt="ミキハウスの店内に並ぶベビー服と子ども服"
                class="global-expansion__content-img global-expansion__content-img--01" width="688" height="280"
                loading="lazy">
            </picture>
          </div>
          <p class="global-expansion__text">
            ミキハウスの舞台は、日本を超え、世界に広がっています。 ロンドンのハロッズ店、パリの路面旗艦店、北京のSKP
            店、シンガポールのマリーナベイサンズ店、そして2025年春にオープンしたニューヨークのザ・プラザホテル店まで。
          </p>
        </div>

        <div class="global-expansion__content">
          <div class="global-expansion__img-wrap global-expansion__img-wrap--content02 js-scaleImg">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/about/global-expansion-img02-sp.webp" media="(max-width: 767px)"
                type="image/webp" width="345" height="180">
              <img src="<?php echo IMAGEPATH; ?>/about/global-expansion-img02.webp" alt="商業施設にあるミキハウスの店舗外観"
                class="global-expansion__content-img global-expansion__content-img--02" width="688" height="280"
                loading="lazy">
            </picture>
          </div>
          <p class="global-expansion__text">
            私たちは“子ども第一主義”のものづくりとホスピタリティを携え、地球規模で家族の笑顔を広げています。次に世界を驚かせるのは、あなたのアイデアかもしれません。
          </p>
        </div>
      </div>

      <div class="global-expansion__gallery js-gallery-img">
        <div class="global-expansion__gallery-wrap global-expansion__gallery-wrap--01">
          <picture>
            <source srcset="<?php echo IMAGEPATH; ?>/about/global-expansion-gallery01-sp.webp"
              media="(max-width: 767px)" type="image/webp" width="103.67" height="99">
            <img src="<?php echo IMAGEPATH; ?>/about/global-expansion-gallery01.webp" alt="街角にあるミキハウスの店舗外観"
              class="global-expansion__gallery-img" width="346" height="250" loading="lazy">
          </picture>
        </div>
        <div class="global-expansion__gallery-wrap global-expansion__gallery-wrap--02">
          <picture>
            <source srcset="<?php echo IMAGEPATH; ?>/about/global-expansion-gallery02-sp.webp"
              media="(max-width: 767px)" type="image/webp" width="103.67" height="99">
            <img src="<?php echo IMAGEPATH; ?>/about/global-expansion-gallery02.webp" alt="赤い絨毯が印象的なミキハウス店舗入口"
              class="global-expansion__gallery-img" width="346" height="250" loading="lazy">
          </picture>
        </div>
        <div class="global-expansion__gallery-wrap global-expansion__gallery-wrap--03">
          <picture>
            <source srcset="<?php echo IMAGEPATH; ?>/about/global-expansion-gallery03-sp.webp"
              media="(max-width: 767px)" type="image/webp" width="103.67" height="99">
            <img src="<?php echo IMAGEPATH; ?>/about/global-expansion-gallery03.webp" alt="ショーウィンドウに子どもの写真が飾られた店舗外観"
              class="global-expansion__gallery-img" width="346" height="250" loading="lazy">
          </picture>
        </div>
      </div>
    </div>
  </section>

  <section class="data-view" id="data-view">
    <div class="data-view__inner sub-inner">

      <div class="data-view__header sub-section-header">
        <h2 class="sub-section-header__title sub-section-header__title--transform-small js-text-animate">
          データで見るミキハウス</h2>
      </div>

      <ul class="data-view__list js-data-view-count-up">

        <li class="data-view__item data-view__item--01">
          <div class="data-view__icon-wrap">
            <img src="<?php echo IMAGEPATH; ?>/about/data-view-icon01.svg" alt="地球と位置マークのアイコン" class="data-view__icon"
              loading="lazy">
          </div>
          <div class="data-view__body">
            <p class="data-view__label">事業展開国</p>
            <p class="data-view__value">世界<span class="data-view__num" data-count-to="16">0</span>地域</p>
            <time class="data-view__date" datetime="2025-08">2025年8月時点</time>
          </div>
        </li>

        <li class="data-view__item data-view__item--02">
          <div class="data-view__icon-wrap">
            <img src="<?php echo IMAGEPATH; ?>/about/data-view-icon02.svg" alt="買い物バッグのアイコン" class="data-view__icon"
              loading="lazy">
          </div>
          <p class="data-view__label">店舗数</p>
          <p class="data-view__value"><span class="data-view__num" data-count-to="107">0</span>店舗</p>
          <time class="data-view__date" datetime="2025-08">2025年8月時点</time>
        </li>

        <li class="data-view__item data-view__item--03">
          <div class="data-view__icon-wrap">
            <img src="<?php echo IMAGEPATH; ?>/about/data-view-icon03.svg" alt="上昇するグラフのアイコン" class="data-view__icon"
              loading="lazy">
          </div>
          <p class="data-view__label">業績</p>
          <p class="data-view__value">
            <span class="data-view__num" data-count-to="17681">0</span>百万円
          </p>
          <time class="data-view__date" datetime="2025-02">2025年2月期</time>
        </li>

        <li class="data-view__item data-view__item--04">
          <div class="data-view__icon-wrap">
            <img src="<?php echo IMAGEPATH; ?>/about/data-view-icon04.svg" alt="握手のアイコン" class="data-view__icon"
              loading="lazy">
          </div>
          <p class="data-view__label">社員数</p>
          <p class="data-view__value"><span class="data-view__num" data-count-to="511">0</span>名</p>
          <time class="data-view__date" datetime="2025-06">2025年6月時点</time>
        </li>

        <li class="data-view__item data-view__item--05">
          <div class="data-view__icon-wrap">
            <img src="<?php echo IMAGEPATH; ?>/about/data-view-icon05.svg" alt="人のアイコン" class="data-view__icon"
              loading="lazy">
          </div>
          <p class="data-view__label">平均年齢</p>
          <p class="data-view__value"><span class="data-view__num" data-count-to="38">0</span>歳</p>
        </li>

        <li class="data-view__item data-view__item--06">
          <div class="data-view__icon-wrap">
            <img src="<?php echo IMAGEPATH; ?>/about/data-view-icon06.svg" alt="カレンダーのアイコン" class="data-view__icon"
              loading="lazy">
          </div>
          <p class="data-view__label">年間休日・休暇</p>
          <p class="data-view__value"><span class="data-view__num" data-count-to="115">0</span>日</p>
        </li>

        <li class="data-view__item data-view__item--07">
          <div class="data-view__icon-wrap">
            <img src="<?php echo IMAGEPATH; ?>/about/data-view-icon07.svg" alt="赤ちゃんを抱く人のアイコン" class="data-view__icon"
              loading="lazy">
          </div>
          <p class="data-view__label">産休・育休取得率</p>
          <p class="data-view__value"><span class="data-view__num" data-count-to="100">0</span>%</p>
        </li>

        <li class="data-view__item data-view__item--08">
          <div class="data-view__icon-wrap">
            <img src="<?php echo IMAGEPATH; ?>/about/data-view-icon08.svg" alt="飛行機のアイコン" class="data-view__icon"
              loading="lazy">
          </div>
          <p class="data-view__label">外国籍社員</p>
          <p class="data-view__value"><span class="data-view__num" data-count-to="66">0</span>名</p>
        </li>

        <li class="data-view__item data-view__item--09">
          <div class="data-view__icon-wrap">
            <img src="<?php echo IMAGEPATH; ?>/about/data-view-icon09.svg" alt="円グラフのアイコン" class="data-view__icon"
              loading="lazy">
          </div>
          <p class="data-view__label">外国籍社員比率</p>
          <p class="data-view__value">
            <span class="data-view__num" data-count-to="13">0</span>%
          </p>
        </li>
      </ul>
    </div>
  </section>

  <section class="business" id="business">
    <div class="business__inner sub-inner">
      <div class="business__header sub-section-header02">
        <h2 class="sub-section-header02__title js-text-animate">ミキハウスの事業</h2>
      </div>
      <p class="business__lead">
      ミキハウスは、創業以来「子どもと家族の笑顔」を中心に事業を広げてきました。衣服づくりを原点に、出版、教育、子育て支援へと領域を広げることで、子どもたちの成長と健やかな暮らしをサポートしています。生活のさまざまな場面に寄り添う事業を通じて、未来を担う子どもたちとそのご家族に、安心と喜びを届け続けています。
      </p>

      <ul class="business__list">

        <li class="business__item business__item--01">
          <a href="https://50th.mikihouse.co.jp/craftsmanship/print.html" class="business__link" target="_blank"
            rel="noopener noreferrer">
            <div class="business__img-wrap">
              <picture>
                <source srcset="<?php echo IMAGEPATH; ?>/about/business-img01-sp.webp" media="(max-width: 767px)"
                  type="image/webp" width="315" height="170">
                <img src="<?php echo IMAGEPATH; ?>/about/business-img01.webp" alt="カラフルな子供服が並んでいる様子"
                  class="business__img" width="1088" height="220" loading="lazy">
              </picture>
            </div>
            <p class="business__subtitle">ベビー＆<br>子供服アパレル事業</p>
          </a>
          <p class="business__text">
          「子どものことを第一に考えた」ものづくりに取り組み、そのクオリティとデザインは世界中から定評をいただいています。国内直営店約90店舗をはじめ、パリ、ニューヨーク、ロンドン、シンガポール、上海、台北、バンコク、ホーチミン、ソウル、メルボルンなど世界各都市に107店舗（2025年7月現在）を展開。また国内外でオンラインショッピングも行っています。
          </p>
        </li>

        <li class="business__item">
          <a href="https://www.mhkidspal.com/" class="business__link" target="_blank" rel="noopener noreferrer">
            <div class="business__img-wrap">
              <picture>
                <source srcset="<?php echo IMAGEPATH; ?>/about/business-img02-sp.webp" media="(max-width: 767px)"
                  type="image/webp" width="315" height="170">
                <img src="<?php echo IMAGEPATH; ?>/about/business-img02.webp" alt="幼児教室の入口とロゴ看板が並ぶ明るい教室"
                  class="business__img" width="529" height="220" loading="lazy">
              </picture>
            </div>
            <p class="business__subtitle">教育事業</p>
          </a>
          <p class="business__text">
          グループ企業であるミキハウス子育て総研株式会社では、楽習（楽しい学び）を通して親子の今を未来につなげる幼児教室「ミキハウスキッズパル」、１歳からの本格的で楽しい幼児専門の英会話教室「ミキハウス 英会話くらぶ」、志望校合格という親子の夢を全力で応援する「ミキハウスキッズパル 小学校受験コース」を全国の有名百貨店内で展開しています。
          </p>
        </li>

        <li class="business__item">
          <a href="https://www.happy-note.com/" class="business__link" target="_blank" rel="noopener noreferrer">
            <div class="business__img-wrap">
              <picture>
                <source srcset="<?php echo IMAGEPATH; ?>/about/business-img03-sp.webp" media="(max-width: 767px)"
                  type="image/webp" width="315" height="170">
                <img src="<?php echo IMAGEPATH; ?>/about/business-img03.webp" alt="絵本やぬいぐるみなど子育て支援のアイテムが並ぶ様子"
                  class="business__img" width="529" height="220" loading="lazy">
              </picture>
            </div>
            <p class="business__subtitle">子育て支援事業</p>
          </a>
          <p class="business__text">
          グループ企業であるミキハウス子育て総研株式会社では、子育て応援ポータルサイトとして日本最大級の「ハッピーノート.com」を運営。子育ての不安や悩みに専門家や先輩ママがアドバイスをしています。また、年4回全国の直営店や提携医療機関で配布されているフリーマガジン「Happy-Note」では、子どもを取り巻く健康的で楽しい安心・安全なくらしの提案や、家族の思い出づくりのサポートをしています。
          </p>
        </li>

      </ul>

    </div>
  </section>

  <section class="brand" id="brand">
    <div class="brand__inner sub-inner">

      <div class="brand__header sub-section-header02">
        <h2 class="sub-section-header02__title sub-section-header02__title--center js-text-animate">ミキハウスのブランド</h2>
      </div>
      <p class="brand__lead">
        ミキハウスの原点にあるもの－それは「子どもたちへの愛情」です。創業以来、ベビー・子供服アパレルの分野で、子どものことを第一に考えたものづくりに取り組んできました。「子どもたちと家族の毎日が笑顔になるように」というビジョンのもと、「子供服ブランド」という概念を覆す分野へと活動の領域を広げていきます。世界中のベビーと子どもとご家族のために、できることをひとつひとつ取り組みカタチにしていきたい･･･ミキハウスの事業は、日本から世界へとさらに広がっていきます。
      </p>

      <div class="brand__main js-fade-in">
        <a href="https://www.mikihouse.co.jp/pages/brand-mikihouse-goldlabel-index" class="brand__link" target="_blank"
          rel="noopener noreferrer">
          <div class="brand__main-img-wrap">
            <img src="<?php echo IMAGEPATH; ?>/about/brand-img01.webp" alt="白いセーターを着て笑顔を見せる女の子" class="brand__main-img"
              width="1088" height="614.62" loading="lazy">
          </div>
          <div class="brand__logo-wrap">
            <img src="<?php echo IMAGEPATH; ?>/common/logo-gold.svg" alt="MIKI HOUSE GOLD LABEL ロゴ"
              class="brand__logo brand__logo--main" width="171.64" height="30" loading="lazy">
            <p class="brand__tag">(GOLD LABEL)</p>
          </div>
        </a>
      </div>

      <ul class="brand__list">

        <li class="brand__item brand__item--01 js-fade-in">
          <a href="https://www.mikihouse.co.jp/pages/brand/mikihouse_baby" class="brand__link" target="_blank"
            rel="noopener noreferrer">
            <div class="brand__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/about/brand-img02.webp" alt="ベビー用アウターを着た赤ちゃん二人" class="brand__img"
                width="329.33" height="270" loading="lazy">
            </div>
            <div class="brand__logo-wrap">
              <img src="<?php echo IMAGEPATH; ?>/common/logo.svg" alt="MIKI HOUSE ロゴ" class="brand__logo" width="171.64"
                height="30" loading="lazy">
              <p class="brand__tag">(BABY)</p>
            </div>
          </a>
        </li>

        <li class="brand__item brand__item--02 js-fade-in --delay-2">
          <a href="https://www.mikihouse.co.jp/pages/brand/mikihouse" class="brand__link" target="_blank"
            rel="noopener noreferrer">
            <div class="brand__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/about/brand-img03.webp" alt="カラフルな衣装を着た子どもたち" class="brand__img"
                width="329.33" height="270" loading="lazy">
            </div>
            <div class="brand__logo-wrap">
              <img src="<?php echo IMAGEPATH; ?>/common/logo.svg" alt="MIKI HOUSE ロゴ" class="brand__logo" width="171.64"
                height="30" loading="lazy">
              <p class="brand__tag">(BOYS&amp;GIRLS)</p>
            </div>
          </a>
        </li>

        <li class="brand__item brand__item--03 js-fade-in --delay-4">
          <a href="https://www.mikihouse.co.jp/pages/brand/mikihouse_formal" class="brand__link" target="_blank"
            rel="noopener noreferrer">
            <div class="brand__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/about/brand-img04.webp" alt="フォーマルなスーツとワンピースを着た子どもたち"
                class="brand__img" width="329.33" height="270" loading="lazy">
            </div>
            <div class="brand__logo-wrap">
              <img src="<?php echo IMAGEPATH; ?>/common/logo.svg" alt="MIKI HOUSE ロゴ" class="brand__logo" width="171.64"
                height="30" loading="lazy">
              <p class="brand__tag">(FORMAL)</p>
            </div>
          </a>
        </li>

        <li class="brand__item brand__item--04 js-fade-in">
          <a href="https://www.mikihouse.co.jp/pages/brand/doubleb" class="brand__link" target="_blank"
            rel="noopener noreferrer">
            <div class="brand__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/about/brand-img05.webp" alt="赤い乗り物に乗って遊ぶ子どもたち" class="brand__img"
                width="329.33" height="270" loading="lazy">
            </div>
            <div class="brand__logo-wrap">
              <img src="<?php echo IMAGEPATH; ?>/common/logo-double-b.svg" alt="DOUBLE.B ロゴ" class="brand__logo"
                width="180" height="43.681" loading="lazy">
            </div>
          </a>
        </li>

        <li class="brand__item brand__item--05 js-fade-in --delay-2">
          <a href="https://www.mikihouse.co.jp/pages/brand/chiecosaku" class="brand__link" target="_blank"
            rel="noopener noreferrer">
            <div class="brand__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/about/brand-img06.webp" alt="ピンク色のドレスを着た子どもたち" class="brand__img"
                width="329.33" height="270" loading="lazy">
            </div>
            <div class="brand__logo-wrap">
              <img src="<?php echo IMAGEPATH; ?>/common/logo-chicco-saku.webp" alt="CHICCO SAKU ロゴ" class="brand__logo"
                width="170" height="42" loading="lazy">
            </div>
          </a>
        </li>

        <li class="brand__item brand__item--06 js-fade-in --delay-4">
          <a href="https://www.mikihouse.co.jp/pages/brand/hotbiscuits" class="brand__link" target="_blank"
            rel="noopener noreferrer">
            <div class="brand__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/about/brand-img07.webp" alt="明るい色の洋服を着て笑う子どもたち" class="brand__img"
                width="329.33" height="270" loading="lazy">
            </div>
            <div class="brand__logo-wrap">
              <img src="<?php echo IMAGEPATH; ?>/common/logo-hot-biscuits.webp" alt="HOT BISCUITS ロゴ"
                class="brand__logo" width="179" height="45" loading="lazy">
            </div>
          </a>
        </li>

      </ul>

    </div>
  </section>

  <section class="company" id="company">
    <div class="company__inner sub-inner">

      <div class="company__header sub-section-header02">
        <h2 class="sub-section-header02__title sub-section-header02__title--center js-text-animate">会社概要</h2>
      </div>

      <dl class="company__list">

        <div class="company__item">
          <dt class="company__term">商号</dt>
          <dd class="company__desc">三起商行株式会社</dd>
        </div>

        <div class="company__item">
          <dt class="company__term">創業</dt>
          <dd class="company__desc">1971年4月（昭和46年）</dd>
        </div>

        <div class="company__item">
          <dt class="company__term">設立</dt>
          <dd class="company__desc">1978年9月（昭和53年）</dd>
        </div>

        <div class="company__item">
          <dt class="company__term">資本金</dt>
          <dd class="company__desc">2,030百万円</dd>
        </div>

        <div class="company__item">
          <dt class="company__term">事業内容</dt>
          <dd class="company__desc">
            子供服及び子どもを取りまくファミリー関連商品の企画・製造・販売、及び<br>
            出版・教育・子育て支援などの文化事業
          </dd>
        </div>

        <div class="company__item">
          <dt class="company__term">事業所</dt>
          <dd class="company__desc">
            本社/大阪、営業所/東京<br>
            海外現地法人/パリ、ニューヨーク、ロンドン、成都、シンガポール、台北
          </dd>
        </div>

        <div class="company__item">
          <dt class="company__term">主なグループ企業</dt>
          <dd class="company__desc">
            (株)ミキハウス、MIKIHOUSE FRANCE、<br>
            MIKIHOUSE AMERICAS、MIKIHOUSE U.K.、<br>
            三起（成都）貿易有限公司、MIKIHOUSE(SINGAPORE)、MIKIHOUSE(TAIWAN)<br>
            ミキハウス子育て総研(株)、(株)ミキハウス&小学館プロダクション、(株)ミキハウストレード
          </dd>
        </div>

        <div class="company__item">
          <dt class="company__term">業績</dt>
          <dd class="company__desc">売上高 : 18,269 百万円<time class="company__date company__date--long"
              datetime="2025-02">（2025年2月期）</time></dd>
        </div>

        <div class="company__item">
          <dt class="company__term">社員数</dt>
          <dd class="company__desc">432&nbsp;名<time class="company__date" datetime="2025-02">（2025年2月）</time></dd>
        </div>

      </dl>

    </div>
  </section>


</main>

<?php get_footer(); ?>