<?php
/*
 * Template Name: トップページ
 */
?>
<?php get_header(); ?>
<main>

  <section class="fv">
    <div class="fv__inner">
      <div class="fv__swiper swiper js-fv-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="swiper-img">
              <picture>
                <source srcset="<?php echo IMAGEPATH; ?>/top/fv01-sp.webp" media="(max-width: 767px)" type="image/webp"
                  width="375" height="440">
                <img src="<?php echo IMAGEPATH; ?>/top/fv01.webp" alt="子ども服を丁寧にコーディネートする社員の姿。" width="1211" height="690"
                  loading="eager" decoding="async" fetchpriority="high" class="fv__slide-img">
              </picture>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-img">
              <picture>
                <source srcset="<?php echo IMAGEPATH; ?>/top/fv02-sp.webp" media="(max-width: 767px)" type="image/webp"
                  width="375" height="440">
                <img src="<?php echo IMAGEPATH; ?>/top/fv02.webp" alt="チームで意見を交わしながら商品を手に取る社員たち。" width="1211"
                  height="690" loading="lazy" decoding="async" class="fv__slide-img">
              </picture>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-img">
              <picture>
                <source srcset="<?php echo IMAGEPATH; ?>/top/fv03-sp.webp" media="(max-width: 767px)" type="image/webp"
                  width="375" height="440">
                <img src="<?php echo IMAGEPATH; ?>/top/fv03.webp" alt="グローバルに活躍する社員同士の対話。" width="1211" height="690"
                  loading="lazy" decoding="async" class="fv__slide-img">
              </picture>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-img">
              <picture>
                <source srcset="<?php echo IMAGEPATH; ?>/top/fv04-sp.webp" media="(max-width: 767px)" type="image/webp"
                  width="375" height="440">
                <img src="<?php echo IMAGEPATH; ?>/top/fv04.webp" alt="商品を手に笑顔で語り合う社員たち。" width="1211" height="690"
                  loading="lazy" decoding="async" class="fv__slide-img">
              </picture>
            </div>
          </div>
        </div>
      </div>
      <div class="fv__space"></div>
      <div class="fv__content">
        <div class="fv__vision-label">our&nbsp;vision</div>
        <span class="fv__vision-dot"></span>
        <h2 class="fv__title fv__title--jp" lang="ja" aria-label="日本発のラグジュアリーブランドで、世界の子どもを笑顔にする挑戦。">
          <span class="fv__text-line fv__text-line-01" aria-hidden="true">日本発の<span
              class="fv__text-line-ls01">ラグジュアリーブラ</span><span class="fv__text-line-ls02">ン</span>ドで､</span>
          <span class="fv__text-line fv__text-line-02" aria-hidden="true">世界の<span
              class="fv__text-line-ls03">子</span><span class="fv__text-line-ls04">ど</span><span
              class="fv__text-line-ls05">も</span>を<span class="fv__text-line-ls06">笑</span>顔<span
              class="fv__text-line-ls07">に</span>する<span class="fv__text-line-ls08">挑</span>戦｡</span>
        </h2>
        <h2 class="fv__title fv__title--other">
          日本発のラグジュアリーブランドで、<br>
          世界の子どもを笑顔にする挑戦。
        </h2>
        <h2 class="fv__title fv__title--other fv__title--other-en" lang="en">
          <span class="hl-line">A luxury brand from Japan takes on</span><br>
          <span class="hl-line">the challenge of bringing smiles to the</span><br class="u-mobile"> <span
            class="hl-line">faces of children around the world.</span>
        </h2>
      </div>
      <div class="scroll-down">
        <span class="scroll-down__text">scroll</span>
        <span class="scroll-down__icon">
          <img src="<?php echo IMAGEPATH; ?>/common/scroll-down.svg" class="scroll-down__icon-img" alt="" width="135"
            height="8" aria-hidden="true">
        </span>
      </div>
    </div>
  </section>

  <?php
  function ix_is_external_url( $url ) {
    if ( empty($url) ) return false;
    $link_host = wp_parse_url( $url, PHP_URL_HOST );
    $home_host = wp_parse_url( home_url(), PHP_URL_HOST );
    if ( empty($link_host) || empty($home_host) ) return false;
    return ( strtolower($link_host) !== strtolower($home_host) );
  }

  $news_q = new WP_Query([
    'post_type'      => 'news',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
    'no_found_rows'  => true,
  ]);
  ?>

  <section class="top-news">
    <div class="top-news__inner inner">
      <div class="top-news__content">
        <h2 class="top-news__title">news</h2>
        <ul class="top-news__list">
          <?php if ( $news_q->have_posts() ) : ?>
          <?php while ( $news_q->have_posts() ) : $news_q->the_post(); ?>
          <?php
              $acf_url = trim( (string) get_field('news_url') );
              $label   = get_the_title();
              $is_ext  = $acf_url && ix_is_external_url( $acf_url );
              $target  = $is_ext ? '_blank' : '';
              $rel     = $is_ext ? 'noopener noreferrer' : '';
              ?>
          <li class="top-news__item">
            <?php if ( $acf_url ) : ?>
            <a href="<?php echo esc_url($acf_url); ?>" class="top-news__link"
              <?php if ($target): ?>target="<?php echo esc_attr($target); ?>" <?php endif; ?>
              <?php if ($rel): ?>rel="<?php echo esc_attr($rel); ?>" <?php endif; ?>>
              <span class="top-news__date-wrap">
                <time class="top-news__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                  <?php echo esc_html(get_the_date('Y/m/d')); ?>
                </time>
                <span class="top-news__icon"></span>
              </span>
              <span class="top-news__text"><?php echo esc_html($label); ?></span>
            </a>
            <?php else : ?>
            <span class="top-news__link" style="pointer-events: none;">
              <span class="top-news__date-wrap">
                <time class="top-news__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                  <?php echo esc_html(get_the_date('Y/m/d')); ?>
                </time>
                <span class="top-news__icon"></span>
              </span>
              <span class="top-news__text"><?php echo esc_html($label); ?></span>
            </span>
            <?php endif; ?>
          </li>
          <?php endwhile; wp_reset_postdata(); ?>
          <?php else : ?>
          <li class="top-news__item">
            <span class="top-news__text" style="pointer-events: none;">現在お知らせはありません</span>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </section>

  <section class="top-message">
    <div class="top-message__inner inner">
      <div class="top-message__content">
        <div class="top-message__text-wrap">
          <div class="top-message__header section-header">
            <h2 class="section-header__title">message</h2>
            <span class="section-header__dot"></span>
          </div>
          <p class="top-message__lead js-text-animate">一着の服がつなぐ、<br>世界の親子に受け継がれる笑顔</p>
          <p class="top-message__text">ミキハウスの一着には、上質なものづくりへの思いと、<br
              class="u-desktop">子どもと家族の笑顔を広げる願いが宿っています。<br>ここであなたが挑むのは、ただの"アパレルの仕事"ではありません。<br>日本発のラグジュアリーブランドとして、子どもの最初の一歩を支え、<br
              class="u-desktop">家族の物語を彩り、世界へ笑顔を広げる<span
              style="letter-spacing: -0.2em;">――</span><br>そんな社会的インパクトを、若手のうちから自らの手で生み出すキャリアです。
          </p>
        </div>
        <div class="top-message__img-wrap js-scaleImg">
          <picture>
            <source srcset="<?php echo IMAGEPATH; ?>/top/message-img-sp.webp" media="(max-width: 767px)" type="image/webp" width="356" height="431">
            <img class="top-message__img" src="<?php echo IMAGEPATH; ?>/top/message-img.webp" alt="社員たちが働く様子や笑顔の集合写真"
              width="525" height="657" loading="lazy">
          </picture>
        </div>
      </div>
    </div>
  </section>

  <section class="top-about">
    <div class="line-bg js-line-bg01 line-bg--01">
      <img src="<?php echo IMAGEPATH; ?>/top/line-bg01.svg" class="line-bg__img" alt="" aria-hidden="true" width="1440"
        height="742" loading="lazy">
    </div>
    <div class="top-about__inner inner">
      <div class="top-about__header section-header">
        <p class="section-header__title">about</p>
        <span class="section-header__dot"></span>
        <h2 class="section-header__title-ja js-text-animate">ミキハウスについて</h2>
      </div>
      <ul class="top-about__list">
        <li class="top-about__item top-about__item--left">
          <div class="top-about__img-wrap js-scaleImg">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/about-img01-sp.webp" media="(max-width: 767px)"
                type="image/webp" width="335" height="328">
              <img src="<?php echo IMAGEPATH; ?>/top/about-img01.webp" alt="スーツ姿の男女が並んで笑顔で立つ様子" class="top-about__img"
                width="510" height="500" loading="lazy">
            </picture>
          </div>
          <div class="top-about__body">
            <h3 class="top-about__subtitle js-text-animate">ミキハウスを知る</h3>
            <p class="top-about__text">
              50年以上、子どもと家族の笑顔を創り続ける日本発のラグジュアリーブランド──ミキハウス。最高級品質のものづくりとおもてなしは、すでに世界15超の国へ広がっています。
            </p>
            <div class="top-about__btn">
              <a href="<?php echo ABOUT_URL; ?>" class="btn-link">詳しくはこちら</a>
            </div>
          </div>
        </li>
        <li class="top-about__item top-about__item--right">
          <div class="top-about__img-wrap js-scaleImg">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/about-img02-sp.webp" media="(max-width: 767px)"
                type="image/webp" width="335" height="328">
              <img src="<?php echo IMAGEPATH; ?>/top/about-img02.webp" alt="女性社員が子供と接客している様子" class="top-about__img"
                width="510" height="500" loading="lazy">
            </picture>
          </div>
          <div class="top-about__body">
            <h3 class="top-about__subtitle js-text-animate">ミキハウスの仕事</h3>
            <p class="top-about__text">
              ものづくり、営業・マーケティング、人事・財務経理から店舗運営、マーケティング、海外事業、DX推進まで──、「一着」の誕生から世界へ届く瞬間までを担う多彩なフィールドで、あなたのキャリアアップを実現できます。
            </p>
            <div class="top-about__btn">
              <a href="<?php echo JOB_URL; ?>" class="btn-link">詳しくはこちら</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="top-person">
    <div class="line-bg js-line-bg03 line-bg--03">
      <img src="<?php echo IMAGEPATH; ?>/top/line-bg03.svg" class="line-bg__img" alt="" aria-hidden="true" width="1440"
        height="888" loading="lazy">
    </div>
    <div class="top-person__inner inner">
      <div class="top-person__text-wrap">
        <div class="top-person__header section-header">
          <p class="section-header__title">person</p>
          <span class="section-header__dot"></span>
          <h2 class="section-header__title-ja js-text-animate">ミキハウスの人</h2>
        </div>
        <p class="top-person__lead">国籍や年齢や入社年次に関係なく、お互いの意見を尊重し合い、子どもの笑顔を広げるために一緒に成長していく。そんな想いを共有できるのがミキハウスの仲間です。</p>
        <div class="top-person__btn">
          <a href="<?php echo PERSON_URL; ?>" class="btn-link">詳しくはこちら</a>
        </div>
      </div>
      <!-- 準備中の為非表示：2025/10/24 ※top-person__coming-soonは公開時に削除 -->
      <!-- <ul class="top-person__list js-top-person-list">
        <li class="top-person__item top-person__item--01">
          <a href="<?php echo PERSON_SN_2009_SALES02; ?> " class="top-person__link">
            <div class="top-person__img-wrap">
              <picture>
                <source srcset="<?php echo IMAGEPATH; ?>/person/person_sn-2009a-sp.webp" media="(max-width: 767px)"
                  type="image/webp" width="280" height="400">
                <img src="<?php echo IMAGEPATH; ?>/person/sn-2009-sales02-1.webp" class="top-person__img"
                  alt="スーツ姿の男性社員のポートレート" width="357" height="500" loading="lazy">
              </picture>
            </div>
            <div class="top-person__info">
              <div class="top-person__info-inner">
                <p class="top-person__name">A.A</p>
                <p class="top-person__position">2013年入社・商品企画 デザイナー</p>
              </div>
            </div>
          </a>
        </li>

        <li class="top-person__item top-person__item--02">
          <a href="<?php echo PERSON_SN_2009_SALES04; ?> " class="top-person__link">
            <div class="top-person__img-wrap">
              <picture>
                <source srcset="<?php echo IMAGEPATH; ?>/person/person_sn-2009b-sp.webp" media="(max-width: 767px)"
                  type="image/webp" width="280" height="400">
                <img src="<?php echo IMAGEPATH; ?>/person/sn-2009-sales04.webp" class="top-person__img"
                  alt="黄色と水色のシャツを着た女性社員のポートレート" width="357" height="500" loading="lazy">
              </picture>
            </div>
            <div class="top-person__info">
              <div class="top-person__info-inner">
                <p class="top-person__name">A.A</p>
                <p class="top-person__position">2013年入社・商品企画 デザイナー</p>
              </div>
            </div>
          </a>
        </li>

        <li class="top-person__item top-person__item--03">
          <a href="<?php echo PERSON_SN_2009_SALES05; ?> " class="top-person__link">
            <div class="top-person__img-wrap">
              <picture>
                <source srcset="<?php echo IMAGEPATH; ?>/person/person_sn-2009c-sp.webp" media="(max-width: 767px)"
                  type="image/webp" width="280" height="400">
                <img src="<?php echo IMAGEPATH; ?>/person/sn-2009-sales05.webp" class="top-person__img"
                  alt="ネイビーのジャケットを着た男性社員のポートレート" width="357" height="500" loading="lazy">
              </picture>
            </div>
            <div class="top-person__info">
              <div class="top-person__info-inner">
                <p class="top-person__name">A.A</p>
                <p class="top-person__position">2013年入社・商品企画 デザイナー</p>
              </div>
            </div>
          </a>
        </li>
      </ul> -->
    </div>
    <div class="top-person__coming-soon"></div>
  </section>

  <section class="top-recruit">
    <div class="top-recruit__inner inner">
      <div class="top-recruit__header section-header section-header--center">
        <p class="section-header__title">recruitment</p>
        <span class="section-header__dot"></span>
        <h2 class="section-header__title-ja js-text-animate">採用情報</h2>
      </div>
      <ul class="top-recruit__list">
        <li class="top-recruit__item js-clip-item">
          <a href="<?php echo RECRUITMENT_URL; ?>#recruit-info" class="top-recruit__link">
            <div class="top-recruit__img-wrap">
              <picture>
                <source srcset="<?php echo IMAGEPATH; ?>/top/top-recruit-img01-sp.webp" media="(max-width: 767px)"
                  type="image/webp" width="335" height="400">
                <img src="<?php echo IMAGEPATH; ?>/top/top-recruit-img01.webp" alt="笑顔で会話する男女社員" loading="lazy"
                  class="top-recruit__img" width="347" height="450">
              </picture>
            </div>
            <span class="top-recruit__text">募集要項</span>
          </a>
        </li>
        <li class="top-recruit__item js-clip-item --delay-1">
          <a href="<?php echo RECRUITMENT_URL; ?>#faq" class="top-recruit__link">
            <div class="top-recruit__img-wrap">
              <picture>
                <source srcset="<?php echo IMAGEPATH; ?>/top/top-recruit-img02-sp.webp" media="(max-width: 767px)"
                  type="image/webp" width="335" height="400">
                <img src="<?php echo IMAGEPATH; ?>/top/top-recruit-img02.webp" alt="商品を手に持ち説明する男性社員" loading="lazy"
                  class="top-recruit__img" width="347" height="450">
              </picture>
            </div>
            <span class="top-recruit__text">よくある質問</span>
          </a>
        </li>
        <li class="top-recruit__item js-clip-item --delay-2">
          <a href="<?php echo RECRUITMENT_URL; ?>#process" class="top-recruit__link">
            <div class="top-recruit__img-wrap">
              <picture>
                <source srcset="<?php echo IMAGEPATH; ?>/top/top-recruit-img03-sp.webp" media="(max-width: 767px)"
                  type="image/webp" width="335" height="400">
                <img src="<?php echo IMAGEPATH; ?>/top/top-recruit-img03.webp" alt="子供向け商品を案内する女性社員" loading="lazy"
                  class="top-recruit__img" width="347" height="450">
              </picture>
            </div>
            <span class="top-recruit__text">選考プロセス</span>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="recruit-links">
    <div class="recruit-links__inner inner">
      <ul class="recruit-links__list">
        <li class="recruit-links__item">
          <a href="https://mypage.3010.i-webs.jp/mikihouse2027/applicant/login/baitai-entry/entrycd/2027"
            class="recruit-links__btn recruit-links__btn--01" target="_blank" rel="noopener noreferrer">
            <span class="recruit-links__text">
              <span class="recruit-links__category">新卒採用</span>
              <span class="recruit-links__title">マイページ</span>
            </span>
          </a>
        </li>

        <li class="recruit-links__item">
          <a href="https://recruit.mikihouse.co.jp/digitalbook/jp/?pNo=1"
            class="recruit-links__btn recruit-links__btn--02" target="_blank" rel="noopener noreferrer">
            <span class="recruit-links__text">
              <span class="recruit-links__category">デジタル版</span>
              <span class="recruit-links__title">採用パンフレット</span>
            </span>
          </a>
        </li>

        <li class="recruit-links__item">
          <a href="https://www.instagram.com/mikihouse_recruit/?hl=ja" class="recruit-links__btn recruit-links__btn--03"
            target="_blank" rel="noopener noreferrer">
            <span class="recruit-links__text">
              <span class="recruit-links__category">新卒採用</span>
              <span class="recruit-links__title">インスタグラム</span>
            </span>
          </a>
        </li>
      </ul>
    </div>
  </section>


</main>

<?php get_footer(); ?>