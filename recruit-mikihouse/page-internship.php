<?php
/*
Template Name: インターンシップ
*/
?>

<?php get_header(); ?>

<main>

<section class="sub-fv">
    <div class="sub-fv__content">
      <p class="sub-fv__label">internship</p>
      <h1 class="sub-fv__title sub-fv__title--indent-none">インターンシップ</h1>
    </div>
    <div class="sub-fv__img-wrap">
      <picture>
        <source srcset="<?php echo IMAGEPATH; ?>/internship/internship-fv-sp.webp" media="(max-width: 767px)"
          type="image/webp" width="375" height="180">
        <img src="<?php echo IMAGEPATH; ?>/internship/internship-fv.webp" alt="ミキハウスの店舗の外観。ガラス張りのショーウィンドウに「mikiHOUSE」のロゴが表示され、店内には子供服やディスプレイが見える"
          class="sub-fv__img" width="1440" height="390">
      </picture>
    </div>
  </section>

  <div class="sub-breadcrumbs">
    <div class="sub-breadcrumbs__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
  </div>

</main>

<?php get_footer(); ?>