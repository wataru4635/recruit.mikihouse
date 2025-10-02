<?php get_header(); ?>

<main>

<section class="sub-fv sub-fv--not-found">
    <div class="sub-fv__content">
      <p class="sub-fv__label">Not Found</p>
      <h1 class="sub-fv__title" style="text-indent: 0;">404</h1>
    </div>
    <div class="sub-fv__img-wrap">
        <img src="<?php echo IMAGEPATH; ?>/common/not-found-fv.webp" alt="404" class="sub-fv__img" width="1440"
          height="390">
    </div>
  </section>

  <div class="sub-breadcrumbs">
    <div class="sub-breadcrumbs__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
  </div>

  <section class="not-found">
    <div class="not-found__inner sub-inner">
      <h2 class="not-found__title">ページが見つかりませんでした</h2>
      <p class="not-found__text">お探しのページは移動または削除された可能性があります。<br class="u-desktop">URLをご確認いただくか、以下のボタンからトップページへお戻りください。</p>
      <div class="not-found__button-wrap">
        <a href="<?php echo HOME_URL; ?>" class="not-found__button">トップページ</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>