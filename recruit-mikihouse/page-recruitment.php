<?php
/*
Template Name: 採用情報
*/
?>

<?php get_header(); ?>

<main>
 <img src="./assets/images/common/.webp" alt="" width="" height="" loading="lazy">
  <section class="sub-fv">
    <div class="sub-fv__content">
      <p class="sub-fv__label">recruitment</p>
      <h1 class="sub-fv__title sub-fv__title--indent-none">採用情報</h1>
    </div>
    <div class="sub-fv__img-wrap">
      <picture>
        <source srcset="<?php echo IMAGEPATH; ?>/recruitment/recruitment-fv-sp.webp" media="(max-width: 767px)"
          type="image/webp" width="375" height="180">
        <img src="<?php echo IMAGEPATH; ?>/recruitment/recruitment-fv.webp" alt="ミキハウスの店舗で子供服のぬいぐるみを手に取るスタッフの様子"
          class="sub-fv__img" width="1440" height="390">
      </picture>
    </div>
  </section>

  <div class="sub-breadcrumbs">
    <div class="sub-breadcrumbs__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
  </div>

  <section class="recruit-info" id="recruit-info">
    <div class="recruit-info__inner sub-inner">

      <div class="recruit-info__header sub-section-header">
        <h2 class="sub-section-header__title sub-section-header__title--transform-none js-text-animate">募集要項</h2>
      </div>

      <dl class="recruit-info__list">

        <!-- 募集コース -->
        <dt class="recruit-info__term">募集コース・職種及び募集予定人数</dt>
        <dd class="recruit-info__desc">
          <p class="recruit-info__course">Fashion Adviser（FA）コース　約20名</p>
          <ul class="recruit-info__role-rows">
            <li class="recruit-info__role-row">
              <p class="recruit-info__dept recruit-info__dept--black"><a href="https://recruit.mikihouse.co.jp/person/ryu.html" class="recruit-info__link">Fashion Adviser（FA）</a></p>
              <ul class="recruit-info__positions">
                <li class="recruit-info__position"><a href="https://recruit.mikihouse.co.jp/person/yamauchi.html" class="recruit-info__link">Store Manager（店長）</a></li>
              </ul>
            </li>
            <li class="recruit-info__role-row">
              <p class="recruit-info__dept">Expert Career</p>
              <ul class="recruit-info__positions">
                <li class="recruit-info__position">Area Manager（国内/海外）</li>
              </ul>
            </li>
          </ul>

          <p class="recruit-info__course">General Staff（GS）コース　若干名</p>
          <ul class="recruit-info__role-rows">
            <li class="recruit-info__role-row">
              <p class="recruit-info__dept">Creative部門</p>
              <ul class="recruit-info__positions">
                <li class="recruit-info__position"><a href="https://recruit.mikihouse.co.jp/person/shimizu.html" class="recruit-info__link">商品企画</a></li>
                <li class="recruit-info__position">生産管理</li>
                <li class="recruit-info__position"><a href="https://recruit.mikihouse.co.jp/person/maeda.html" class="recruit-info__link">商品MD</a></li>
              </ul>
            </li>
            <li class="recruit-info__role-row">
              <p class="recruit-info__dept">Sales部門</p>
              <ul class="recruit-info__positions">
                <li class="recruit-info__position">国内営業</li>
                <li class="recruit-info__position">海外営業</li>
                <li class="recruit-info__position">広告宣伝/販売促進</li>
                <li class="recruit-info__position">EC/デジタルマーケティング</li>
                <li class="recruit-info__position">物流管理</li>
              </ul>
            </li>
            <li class="recruit-info__role-row">
              <p class="recruit-info__dept">Management部門</p>
              <ul class="recruit-info__positions recruit-info__positions--gap-small">
                <li class="recruit-info__position">経営/人事/広報</li>
                <li class="recruit-info__position">財務経理</li>
                <li class="recruit-info__position">事業開発 （国内/海外）</li>
              </ul>
            </li>
          </ul>

          <p class="recruit-info__note">
            ※MIKI HOUSE新卒採用マイページの募集要項に、具体的な職種内容や福利厚生、制度の詳細を掲載しています。
          </p>
        </dd>

        <!-- 募集学部・学科 -->
        <dt class="recruit-info__term">募集学部・学科</dt>
        <dd class="recruit-info__desc recruit-info__desc--single">全学部全学科&emsp;※文理不問</dd>

        <!-- 初任給／昇給・賞与 -->
        <dt class="recruit-info__term">初任給／昇給・賞与</dt>
        <dd class="recruit-info__desc">
          <dl class="recruit-info__sublist">
            <div class="recruit-info__row">
              <dt class="recruit-info__label">初任給</dt>
              <dd class="recruit-info__value">FA職：230,000円&emsp;※勤務地域により、異なります。&emsp;GS職：250,000円</dd>
            </div>
            <div class="recruit-info__row">
              <dt class="recruit-info__label">昇給・賞与</dt>
              <dd class="recruit-info__value">昇給年1回、賞与年2回（別途業績により特別賞与あり）</dd>
            </div>
          </dl>
        </dd>

        <!-- 諸手当 -->
        <dt class="recruit-info__term">諸手当</dt>
        <dd class="recruit-info__desc recruit-info__desc--single">
          通勤手当、時間外勤務手当、赴任手当、子育て手当、特別手当(予算達成手当、優秀店舗報奨金)
        </dd>

        <!-- 勤務時間／休日休暇 -->
        <dt class="recruit-info__term">勤務時間／休日休暇</dt>
        <dd class="recruit-info__desc">
          <dl class="recruit-info__sublist">
            <div class="recruit-info__row">
              <dt class="recruit-info__label">勤務時間</dt>
              <dd class="recruit-info__value">8：45～18：00&emsp;休憩75分&emsp;実働8時間/日&emsp;(店舗・部署により異なります)</dd>
            </div>
            <div class="recruit-info__row">
              <dt class="recruit-info__label">休日休暇</dt>
              <dd class="recruit-info__value">年間休日115日、有給休暇（初年度10日）、慶弔休暇</dd>
            </div>
          </dl>
        </dd>

        <!-- 保険 -->
        <dt class="recruit-info__term">保険</dt>
        <dd class="recruit-info__desc recruit-info__desc--single">健康保険・厚生年金保険・雇用保険・労災保険</dd>

      </dl>

    </div>
  </section>

  <section class="process" id="process">
    <div class="process__inner sub-inner">

      <div class="process__header sub-section-header02">
        <h2 class="sub-section-header02__title js-text-animate">選考プロセス</h2>
      </div>
      <p class="process__lead">
        飾らないありのままのあなたにお会いしたい。<br>
        そんな想いから、MIKI HOUSEではOnline・Offline問わず<br class="u-desktop">
        選考時の服装はリクルートスーツではなく、リラックスできるあなたらしいファッションで参加ください。
      </p>

      <ul class="process__list">

        <li class="process__item">
          <div class="process__step">
            <span class="process__step-label">STEP 1</span>
          </div>
          <div class="process__dot process__dot--top">
            <img src="<?php echo IMAGEPATH; ?>/recruitment/process-dot.svg" alt="ドット" class="process__dot-img"
              width="10" height="10">
          </div>
          <div class="process__body">
            <span class="process__step-label-sp">STEP 1</span>
            <p class="process__subtitle">ご応募</p>
            <ul class="process__details">
              <li class="process__detail">① エントリーシート</li>
              <li class="process__detail">② 自己PR動画</li>
            </ul>
            <p class="process__text">
              上記2点を「MIKI HOUSE新卒採用マイページ」より<br>
              ご登録いただくことで、一次選考の応募が完了となります。<br>
              ※登録期限はマイページにてご確認ください。
            </p>
          </div>
        </li>

        <li class="process__item">
          <div class="process__step">
            <span class="process__step-label">STEP 2</span>
          </div>
          <div class="process__dot">
            <img src="<?php echo IMAGEPATH; ?>/recruitment/process-dot.svg" alt="ドット" class="process__dot-img"
              width="10" height="10">
          </div>
          <div class="process__body">
            <span class="process__step-label-sp">STEP 2</span>
            <p class="process__subtitle">書類・動画選考</p>
          </div>
        </li>

        <li class="process__item">
          <div class="process__step">
            <span class="process__step-label">STEP 3</span>
          </div>
          <div class="process__dot">
            <img src="<?php echo IMAGEPATH; ?>/recruitment/process-dot.svg" alt="ドット" class="process__dot-img"
              width="10" height="10">
          </div>
          <div class="process__body">
            <span class="process__step-label-sp">STEP 3</span>
            <p class="process__subtitle">面接・選考</p>
            <p class="process__text">
              個人面接・グループ面接、WEBテスト、グループワークなど、<br class="u-desktop">
              複数回の選考を予定しております。<br>
              ※選考時期により、内容が変更となる場合がございます。
            </p>
          </div>
        </li>

        <li class="process__item">
          <div class="process__step">
            <span class="process__step-label">STEP 4</span>
          </div>
          <div class="process__dot process__dot--bottom">
            <img src="<?php echo IMAGEPATH; ?>/recruitment/process-dot.svg" alt="ドット" class="process__dot-img"
              width="10" height="10">
          </div>
          <div class="process__body">
            <span class="process__step-label-sp">STEP 4</span>
            <p class="process__subtitle">内々定</p>
          </div>
        </li>

      </ul>

    </div>
  </section>

  <section class="faq" id="faq">
    <div class="faq__inner sub-inner">

      <div class="faq__header sub-section-header02">
        <h2 class="sub-section-header02__title sub-section-header02__title--center js-text-animate">FAQ</h2>
      </div>

      <div class="faq__group">
        <p class="faq__group-title">新卒採用について</p>
        <dl class="faq__list">

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">質問のタイトルが入ります</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">質問のタイトルが入ります</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">質問のタイトルが入ります</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">質問のタイトルが入ります</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">質問のタイトルが入ります</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
              </span>
            </dd>
          </div>

        </dl>
      </div>

      <div class="faq__group">
        <p class="faq__group-title">働き方・キャリアについて</p>
        <dl class="faq__list">

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">質問のタイトルが入ります</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">質問のタイトルが入ります</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">質問のタイトルが入ります</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">質問のタイトルが入ります</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">質問のタイトルが入ります</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
              </span>
            </dd>
          </div>

        </dl>
      </div>

      <div class="faq__group">
        <p class="faq__group-title">MIKI HOUSEについて</p>
        <dl class="faq__list">

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">質問のタイトルが入ります</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">質問のタイトルが入ります</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">質問のタイトルが入ります</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">質問のタイトルが入ります</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">質問のタイトルが入ります</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
              </span>
            </dd>
          </div>

        </dl>
      </div>

    </div>
  </section>


</main>

<?php get_footer(); ?>