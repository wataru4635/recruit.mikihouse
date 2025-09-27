<?php
/*
Template Name: 採用情報
*/
?>

<?php get_header(); ?>

<main>

<section class="sub-fv">
    <div class="sub-fv__content">
      <p class="sub-fv__label">recruitment</p>
      <h1 class="sub-fv__title sub-fv__title--indent-none">採用情報</h1>
    </div>
    <div class="sub-fv__img-wrap">
      <picture>
        <source srcset="<?php echo IMAGEPATH; ?>/recruitment/recruitment-fv-sp.webp" media="(max-width: 767px)" type="image/webp"
          width="375" height="180">
        <img src="<?php echo IMAGEPATH; ?>/recruitment/recruitment-fv.webp" alt="採用情報" class="sub-fv__img" width="1440" height="390">
      </picture>
    </div>
  </section>

</main>

<?php get_footer(); ?>