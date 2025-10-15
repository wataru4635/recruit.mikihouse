<?php
/*
Template Name: インターンシップ
*/
?>
<?php
if ( ! function_exists('mz_get_alt_with_fallback') ) {
  function mz_get_alt_with_fallback( $attachment_id, $default_alt = 'インターンシップバナー画像' ) {
    if ( ! $attachment_id ) return esc_attr( $default_alt );
    $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );
    return esc_attr( $alt ?: $default_alt );
  }
}

if ( ! function_exists('mz_collect_items_nested') ) {
  function mz_collect_items_nested( array $parent, string $itemPrefix = 'item', int $max = 10 ): array {
    $rows = [];
    for ( $i = 1; $i <= $max; $i++ ) {
      $num = str_pad((string)$i, 2, '0', STR_PAD_LEFT);
      $rows[] = (isset($parent["{$itemPrefix}{$num}"]) && is_array($parent["{$itemPrefix}{$num}"])) ? $parent["{$itemPrefix}{$num}"] : [];
    }
    return $rows;
  }
}

if ( ! function_exists('mz_count_valid_items_by_keys') ) {
  function mz_count_valid_items_by_keys( array $items, array $keys ): int {
    $count = 0;
    foreach ( $items as $it ) {
      foreach ( $keys as $k ) {
        if ( ! empty( $it[ $k ] ) ) { $count++; break; }
      }
    }
    return $count;
  }
}

if ( ! function_exists('mz_is_external_url') ) {
  function mz_is_external_url( string $url ): bool {
    $url = trim($url);
    if ( $url === '' ) return false;
    if ( preg_match('/^(mailto:|tel:|#)/i', $url) ) return false;
    if ( preg_match('#^/([^/]|$)#', $url) ) return false;

    $home_host = wp_parse_url( home_url(), PHP_URL_HOST );
    $link_host = wp_parse_url( $url, PHP_URL_HOST );

    if ( empty($link_host) ) return false;
    return ( strtolower($link_host) !== strtolower($home_host) );
  }
}

if ( ! function_exists('mz_link_target_rel') ) {
  function mz_link_target_rel( string $url ): string {
    return mz_is_external_url($url) ? ' target="_blank" rel="noopener noreferrer"' : '';
  }
}
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
        <source srcset="<?php echo esc_url( IMAGEPATH ); ?>/internship/internship-fv-sp.webp" media="(max-width: 767px)" type="image/webp" width="375" height="180">
        <img
          src="<?php echo esc_url( IMAGEPATH ); ?>/internship/internship-fv.webp"
          alt="ミキハウスの店舗の外観。ガラス張りのショーウィンドウに「mikiHOUSE」のロゴが表示され、店内には子供服やディスプレイが見える"
          class="sub-fv__img" width="1440" height="390">
      </picture>
    </div>
  </section>

  <div class="sub-breadcrumbs">
    <div class="sub-breadcrumbs__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
  </div>

  <?php
  $current = get_field('current') ?: [];
  $other   = get_field('other')   ?: [];
  $past    = get_field('past')    ?: [];
  ?>

  <section class="internship">
    <div class="internship__inner sub-inner">

      <div class="internship__header sub-section-header">
        <h2 class="sub-section-header__title sub-section-header__title--transform-none js-text-animate">
          現在募集中の<br class="u-mobile">インターンシップ
        </h2>
      </div>

      <?php
      $current_items = mz_collect_items_nested($current, 'item', 10);
      $current_valid = mz_count_valid_items_by_keys($current_items, ['image','link']);
      ?>

      <?php if ( $current_valid > 0 ) : ?>
        <ul class="internship__list">
          <?php foreach ( $current_items as $it ) :
            $img_id = isset($it['image']) ? (int)$it['image'] : 0;
            $url    = isset($it['link'])  ? $it['link']       : '';
            if ( ! $img_id && ! $url ) continue;
            $alt = mz_get_alt_with_fallback($img_id, 'インターンシップバナー画像');
          ?>
            <li class="internship__item">
              <?php if ( $url ) : ?>
                <a href="<?php echo esc_url($url); ?>"<?php echo mz_link_target_rel($url); ?> class="internship__link">
              <?php else: ?>
                <div class="internship__link">
              <?php endif; ?>

                <div class="internship__img-wrap">
                  <?php
                  if ( $img_id ) {
                    echo wp_get_attachment_image(
                      $img_id,
                      'full',
                      false,
                      [
                        'class'   => 'internship__img',
                        'loading' => 'lazy',
                        'width'   => 1100,
                        'height'  => 280,
                        'alt'     => $alt,
                      ]
                    );
                  }
                  ?>
                </div>

              <?php if ( $url ) : ?>
                </a>
              <?php else: ?>
                </div>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php else: ?>
        <p class="internship__none" style="margin-top:40px;text-align:center;">現在募集中のインターンシップはありません</p>
      <?php endif; ?>

      <?php
      $other_items = mz_collect_items_nested($other, 'item', 10);
      $other_valid = mz_count_valid_items_by_keys($other_items, ['link','text']);
      ?>
      <div class="internship__other">
        <p class="internship__other-heading">その他のインターンシップ</p>

        <?php if ( $other_valid > 0 ) : ?>
          <ul class="internship__other-list">
            <?php foreach ( $other_items as $it ) :
              $url  = isset($it['link']) ? $it['link'] : '';
              $text = isset($it['text']) ? $it['text'] : '';
              if ( ! $url && ! $text ) continue;
              $label = $text ?: 'インターンシップ';
            ?>
              <li class="internship__other-item">
                <?php if ( $url ) : ?>
                  <a href="<?php echo esc_url($url); ?>"<?php echo mz_link_target_rel($url); ?> class="internship__other-link">
                <?php else: ?>
                  <div class="internship__other-link">
                <?php endif; ?>
                    <span class="internship__arrow"></span>
                    <span class="internship__other-text"><?php echo esc_html($label); ?></span>
                <?php if ( $url ) : ?>
                  </a>
                <?php else: ?>
                  </div>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php else: ?>
          <p class="internship__none" style="margin-top:30px;text-align:center;">その他のインターンシップはありません</p>
        <?php endif; ?>
      </div>

      <?php
      $year_keys = ['year_1','year_2'];
      ?>
      <div class="internship__past">
        <p class="internship__past-heading">過去のインターンシップ</p>

        <?php
        $rendered_any_year = false;
        foreach ( $year_keys as $yk ) :
          $yearGroup = (isset($past[$yk]) && is_array($past[$yk])) ? $past[$yk] : [];
          $title     = isset($yearGroup['title']) ? $yearGroup['title'] : '';

          $year_items = mz_collect_items_nested($yearGroup, 'item', 10);
          $year_valid = mz_count_valid_items_by_keys($year_items, ['link','text']);

          if ( ! $title && $year_valid === 0 ) continue;
          $rendered_any_year = true;
        ?>
          <div class="internship__year">
            <?php if ( $title ) : ?>
              <p class="internship__year-title"><?php echo esc_html($title); ?></p>
            <?php endif; ?>

            <?php if ( $year_valid > 0 ) : ?>
              <ul class="internship__year-list">
                <?php foreach ( $year_items as $it ) :
                  $url  = isset($it['link']) ? $it['link'] : '';
                  $text = isset($it['text']) ? $it['text'] : '';
                  if ( ! $url && ! $text ) continue;
                  $label = $text ?: 'インターンシップ';
                ?>
                  <li class="internship__year-item">
                    <?php if ( $url ) : ?>
                      <a href="<?php echo esc_url($url); ?>"<?php echo mz_link_target_rel($url); ?> class="internship__year-link">
                    <?php else: ?>
                      <div class="internship__year-link">
                    <?php endif; ?>
                        <span class="internship__arrow"></span>
                        <span class="internship__year-text"><?php echo esc_html($label); ?></span>
                    <?php if ( $url ) : ?>
                      </a>
                    <?php else: ?>
                      </div>
                    <?php endif; ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php else: ?>
              <p class="internship__none" style="margin-top:30px;text-align:center;">過去のインターンシップはありません</p>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>

        <?php if ( ! $rendered_any_year ) : ?>
          <p class="internship__none" style="margin-top:30px;text-align:center;">過去のインターンシップはありません</p>
        <?php endif; ?>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>