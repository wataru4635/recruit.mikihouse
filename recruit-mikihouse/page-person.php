<?php
/*
* Template Name: ミキハウスの人
*/
?>
<?php get_header(); ?>

<main>

  <section class="sub-fv">
    <div class="sub-fv__content">
      <p class="sub-fv__label">person</p>
      <h1 class="sub-fv__title">ミキハウスの人</h1>
    </div>
    <div class="sub-fv__img-wrap">
      <picture>
        <source srcset="<?php echo IMAGEPATH; ?>/person/person-fv-sp.webp" media="(max-width: 767px)" type="image/webp"
          width="375" height="180">
        <img src="<?php echo IMAGEPATH; ?>/person/person-fv.webp" alt="カラフルなTシャツを着た5人の若いスタッフが笑顔でガッツポーズをしている様子"
          class="sub-fv__img" width="1440" height="390">
      </picture>
    </div>
  </section>

  <div class="sub-breadcrumbs">
    <div class="sub-breadcrumbs__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
  </div>

  <section class="employees">
    <div class="employees__inner sub-inner">
      <div class="employees__header sub-section-header">
        <h2 class="sub-section-header__title sub-section-header__title--transform-none js-text-animate">社員紹介</h2>
      </div>

      <!-- フィルターメニュー -->
      <ul class="employees__filters">
        <li data-filter="all" class="employees__filter mixitup-control-active">すべて表示</li>
        <li data-filter=".sales" class="employees__filter">営業・グローバル推進</li>
        <li data-filter=".plan" class="employees__filter">企画・生産管理</li>
        <li data-filter=".md" class="employees__filter">商品MD</li>
        <li data-filter=".marketing" class="employees__filter">マーケティング</li>
        <li data-filter=".manager" class="employees__filter">ストアマネージャー</li>
      </ul>

      <!-- 社員リスト -->
      <ul class="employees__list" id="employees-list">
        <li class="employees__item mix sales">
          <a href="<?php echo PERSON_SN_2009_SALES01; ?>" class="employees__link">
            <div class="employees__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/person/sn-2009-sales01.webp" class="employees__img"
                alt="青いスーツにオレンジのネクタイを着用した男性社員のポートレート" width="264" height="400" loading="lazy">
            </div>
            <div class="employees__info">
              <div class="employees__info-inner">
                <p class="employees__name">S.N</p>
                <p class="employees__position">2009年入社・営業</p>
              </div>
            </div>
          </a>
        </li>

        <li class="employees__item mix plan">
          <a href="<?php echo PERSON_YJ_2017_NEW_BUSINESS; ?>" class="employees__link">
            <div class="employees__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/person/yj-2017-plan.webp" class="employees__img"
                alt="ピンク色のシャツを着た女性社員のポートレート" width="264" height="400" loading="lazy">
            </div>
            <div class="employees__info">
              <div class="employees__info-inner">
                <p class="employees__name">Y.J</p>
                <p class="employees__position">2017年入社・新規事業</p>
              </div>
            </div>
          </a>
        </li>

        <li class="employees__item mix sales">
          <a href="<?php echo PERSON_AP_2018_SALES; ?>" class="employees__link">
            <div class="employees__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/person/ap-2018-sales.webp" class="employees__img"
                alt="スーツとストライプのシャツを着た男性社員のポートレート" width="264" height="400" loading="lazy">
            </div>
            <div class="employees__info">
              <div class="employees__info-inner">
                <p class="employees__name">A.P</p>
                <p class="employees__position">2018年入社・営業</p>
              </div>
            </div>
          </a>
        </li>

        <li class="employees__item mix manager">
          <a href="<?php echo PERSON_MH_2016_STORE_MANAGER; ?>" class="employees__link">
            <div class="employees__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/person/mh-2016-manager.webp" class="employees__img"
                alt="水色のシャツと蝶ネクタイを着用した女性店長のポートレート" width="264" height="400" loading="lazy">
            </div>
            <div class="employees__info">
              <div class="employees__info-inner">
                <p class="employees__name">M.H</p>
                <p class="employees__position">2016年入社・Store Manager</p>
              </div>
            </div>
          </a>
        </li>

        <li class="employees__item mix manager">
          <a href="<?php echo PERSON_YB_2003_CHILDCARE_ADVISOR; ?>" class="employees__link">
            <div class="employees__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/person/yb-2003-advisor.webp" class="employees__img"
                alt="水色のシャツと緑と赤のストライプの蝶ネクタイを着用した女性社員のポートレート" width="264" height="400" loading="lazy">
            </div>
            <div class="employees__info">
              <div class="employees__info-inner">
                <p class="employees__name">Y.B</p>
                <p class="employees__position">2003年入社・子育てキャリアアドバイザー</p>
              </div>
            </div>
          </a>
        </li>

        <li class="employees__item mix sales">
          <a href="<?php echo PERSON_SN_2009_SALES02; ?>" class="employees__link">
            <div class="employees__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/person/sn-2009-sales02-1.webp" class="employees__img"
                alt="ネイビーのスーツにピンク色のチェック柄ネクタイを着用した男性社員のポートレート" width="264" height="400" loading="lazy">
            </div>
            <div class="employees__info">
              <div class="employees__info-inner">
                <p class="employees__name">S.N</p>
                <p class="employees__position">2009年入社・営業</p>
              </div>
            </div>
          </a>
        </li>

        <li class="employees__item mix sales">
          <a href="<?php echo PERSON_SN_2009_SALES03; ?>" class="employees__link">
            <div class="employees__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/person/sn-2009-sales03.webp" class="employees__img"
                alt="黄色のブラウスを着た女性社員のポートレート" width="264" height="400" loading="lazy">
            </div>
            <div class="employees__info">
              <div class="employees__info-inner">
                <p class="employees__name">S.N</p>
                <p class="employees__position">2009年入社・営業</p>
              </div>
            </div>
          </a>
        </li>

        <li class="employees__item mix sales">
          <a href="<?php echo PERSON_SN_2009_SALES04; ?>" class="employees__link">
            <div class="employees__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/person/sn-2009-sales04.webp" class="employees__img"
                alt="水色と黄色の2色に分かれたシャツを着た女性社員のポートレート" width="264" height="400" loading="lazy">
            </div>
            <div class="employees__info">
              <div class="employees__info-inner">
                <p class="employees__name">S.N</p>
                <p class="employees__position">2009年入社・営業</p>
              </div>
            </div>
          </a>
        </li>

        <li class="employees__item mix sales">
          <a href="<?php echo PERSON_SN_2009_SALES05; ?>" class="employees__link">
            <div class="employees__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/person/sn-2009-sales05.webp" class="employees__img"
                alt="スーツ姿の男性社員のポートレート" width="264" height="400" loading="lazy">
            </div>
            <div class="employees__info">
              <div class="employees__info-inner">
                <p class="employees__name">S.N</p>
                <p class="employees__position">2009年入社・営業</p>
              </div>
            </div>
          </a>
        </li>

        <li class="employees__item mix sales">
          <a href="<?php echo PERSON_SN_2009_SALES06; ?>" class="employees__link">
            <div class="employees__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/person/sn-2009-sales06.webp" class="employees__img"
                alt="スーツ姿の男性社員のポートレート" width="264" height="400" loading="lazy">
            </div>
            <div class="employees__info">
              <div class="employees__info-inner">
                <p class="employees__name">S.N</p>
                <p class="employees__position">2009年入社・営業</p>
              </div>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="talk">
    <div class="talk__inner sub-inner">
      <div class="talk__header sub-section-header02">
        <h2 class="sub-section-header02__title js-text-animate">トーク・対談</h2>
      </div>
      <p class="talk__lead">
        この文章はダミーです。この文章はダミーです。この文章はダミーです。
      </p>
      <div class="talk__frame">
        <p class="talk__frame-text">トーク・対談が入ります</p>
      </div>
    </div>
  </section>


</main>

<?php get_footer(); ?>