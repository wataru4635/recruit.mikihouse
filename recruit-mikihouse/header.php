<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <link type="image/x-icon" rel="shortcut icon"
    href="https://www.mikihouse.co.jp/cdn/shop/t/29/assets/_src.44976065.favicon.ico?v=69320511775598620361689246606">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!---------  header  --------->

  <header class="header">
    <div class="header__inner">
      <a href="<?php echo HOME_URL; ?>" class="header__logo-link">
        <?php
          $logo_tag = (is_front_page() || is_home()) ? 'h1' : 'div';
        ?>
        <<?php echo esc_attr($logo_tag); ?> class="header__logo">
          <img src="<?php echo IMAGEPATH; ?>/common/logo.svg" alt="ミキハウスのロゴ" class="header__logo-img" width="171.64"
            height="30">
          <p class="header__logo-text">新卒採用2027</p>
        </<?php echo esc_attr($logo_tag); ?>>
      </a>
      <div class="header__menu">
        <nav class="header__nav">
          <?php
            $current_id = get_queried_object_id();

            $person_page = get_page_by_path('person');
            $person_id = $person_page ? $person_page->ID : null;

            $is_about      = is_page('about');
            $is_job        = is_page('job');
            $is_recruit    = is_page('recruitment');
            $is_internship = is_page('internship');

            $is_person = false;
            if ($person_id) {
              $is_person = is_page($person_id) || in_array($person_id, get_post_ancestors($current_id));
            }
          ?>

          <ul class="header__nav-list">
            <li class="header__nav-item">
              <a href="<?php echo ABOUT_URL; ?>" class="header__nav-link<?php echo $is_about ? esc_attr(' is-current') : ''; ?>">
                <span class="header__nav-label">ミキハウスを知る</span>
                <span class="header__nav-sub">about</span>
              </a>
            </li>

            <li class="header__nav-item">
              <a href="<?php echo JOB_URL; ?>" class="header__nav-link<?php echo $is_job ? esc_attr(' is-current') : ''; ?>">
                <span class="header__nav-label">ミキハウスの仕事</span>
                <span class="header__nav-sub">job</span>
              </a>
            </li>

            <li class="header__nav-item">
              <a href="<?php echo PERSON_URL; ?>"
                class="header__nav-link<?php echo $is_person ? esc_attr(' is-current') : ''; ?>">
                <span class="header__nav-label">ミキハウスの人</span>
                <span class="header__nav-sub">person</span>
              </a>
            </li>

            <li class="header__nav-item">
              <a href="<?php echo RECRUITMENT_URL; ?>"
                class="header__nav-link<?php echo $is_recruit ? esc_attr(' is-current') : ''; ?>">
                <span class="header__nav-label">採用情報</span>
                <span class="header__nav-sub">recruitment</span>
              </a>
            </li>

            <li class="header__nav-item">
              <a href="<?php echo INTERNSHIP_URL; ?>"
                class="header__nav-link<?php echo $is_internship ? esc_attr(' is-current') : ''; ?>">
                <span class="header__nav-label">インターンシップ</span>
                <span class="header__nav-sub">internship</span>
              </a>
            </li>
          </ul>
        </nav>
        <div class="header__entry">
          <a href="https://mypage.3010.i-webs.jp/mikihouse2027/applicant/login/baitai-entry/entrycd/2027"
            class="header__entry-link" target="_blank" rel="noopener noreferrer">
            <span class="header__entry-label">今すぐ！エントリー</span>
            <span class="header__entry-text">entry</span>
          </a>
        </div>
      </div>
    </div>
  </header>

  <div class="header-hamburger">
    <button class="header-hamburger__btn js-hamburger" type="button" aria-label="メニューを開く">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>

  <!---------  drawer  --------->
  <div class="header__drawer js-drawer">
    <div class="header__drawer-header">
      <img src="<?php echo IMAGEPATH; ?>/common/logo-white.svg" alt="ミキハウスのロゴ" class="header__drawer-header-img"
      width="171.64" height="30">
      <p class="header__drawer-header-text">新卒採用2027</p>
    </div>
    <div class="header__drawer-body">
      <nav class="header__drawer-nav">
        <ul class="header__drawer-items">
          <li class="header__drawer-item">
            <a href="<?php echo ABOUT_URL; ?>" class="header__drawer-item-link"><span
                class="header__drawer-item-label">ミキハウスを知る</span><span class="header__drawer-item-sub">about</span></a>
          </li>
          <li class="header__drawer-item">
            <a href="<?php echo JOB_URL; ?>" class="header__drawer-item-link"><span
                class="header__drawer-item-label">ミキハウスの仕事</span><span class="header__drawer-item-sub">job</span></a>
          </li>
          <li class="header__drawer-item">
            <a href="<?php echo PERSON_URL; ?>" class="header__drawer-item-link"><span
                class="header__drawer-item-label">ミキハウスの人</span><span class="header__drawer-item-sub">person</span></a>
          </li>
          <li class="header__drawer-item">
            <a href="<?php echo RECRUITMENT_URL; ?>" class="header__drawer-item-link"><span class="header__drawer-item-label">採用情報</span><span
                class="header__drawer-item-sub">recruitment</span></a>
          </li>
          <li class="header__drawer-item">
            <a href="<?php echo INTERNSHIP_URL; ?>" class="header__drawer-item-link"><span class="header__drawer-item-label">インターンシップ</span><span
                class="header__drawer-item-sub">internship</span></a>
          </li>
        </ul>
      </nav>
      <div class="header__drawer-entry-btn">
        <a href="https://mypage.3010.i-webs.jp/mikihouse2027/applicant/login/baitai-entry/entrycd/2027"
          class="header__drawer-entry-btn-link" target="_blank" rel="noopener noreferrer">
          <span class="header__drawer-entry-btn-label"><span class="header__drawer-entry-btn-label-ls">今</span>すぐ! エントリー</span>
          <span class="header__drawer-entry-btn-text">entry</span>
        </a>
      </div>
    </div>
  </div>