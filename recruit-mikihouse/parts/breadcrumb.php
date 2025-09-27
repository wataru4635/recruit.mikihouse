<?php
if (!is_home() && !is_front_page()) :
?>
  <nav class="breadcrumb" aria-label="パンくずリスト">
    <ul class="breadcrumb__list">
      <li class="breadcrumb__item">
        <a href="<?php echo esc_url(home_url()); ?>" class="breadcrumb__link">新卒採用TOP</a>
      </li>

      <?php
      // 固定ページ
      if (is_page()) :
        ?>
        <li class="breadcrumb__item">
          <?php the_title(); ?>
        </li>

      <?php
      // 投稿（通常の投稿）
      elseif (is_single() && get_post_type() === 'post') :
        $category = get_the_category();
        if (!empty($category)) :
      ?>
          <li class="breadcrumb__item">
            <a href="<?php echo esc_url(get_category_link($category[0]->term_id)); ?>" class="breadcrumb__link">
              <?php echo esc_html($category[0]->name); ?>
            </a>
          </li>
        <?php endif; ?>
        <li class="breadcrumb__item"><?php the_title(); ?></li>

      <?php
      // カスタム投稿タイプ
      elseif (is_singular() && get_post_type() !== 'post') :
        $post_type = get_post_type_object(get_post_type());
        ?>
        <li class="breadcrumb__item">
          <a href="<?php echo esc_url(get_post_type_archive_link($post_type->name)); ?>" class="breadcrumb__link">
            <?php echo esc_html($post_type->label); ?>
          </a>
        </li>

        <?php
        // カスタムタクソノミーがある場合（例：genre）
        $taxonomies = get_object_taxonomies(get_post_type());
        foreach ($taxonomies as $taxonomy) {
          $terms = get_the_terms(get_the_ID(), $taxonomy);
          if (!empty($terms) && !is_wp_error($terms)) {
            $term = $terms[0]; // 最初のタームのみ表示
        ?>
            <li class="breadcrumb__item">
              <a href="<?php echo esc_url(get_term_link($term)); ?>" class="breadcrumb__link">
                <?php echo esc_html($term->name); ?>
              </a>
            </li>
        <?php
            break;
          }
        }
        ?>
        <li class="breadcrumb__item"><?php the_title(); ?></li>

      <?php
      // カスタム投稿タイプのアーカイブページ
      elseif (is_post_type_archive()) :
        $post_type = get_post_type_object(get_post_type());
      ?>
        <li class="breadcrumb__item">
          <?php echo esc_html($post_type->label); ?>
        </li>

      <?php
      // カテゴリーアーカイブ
      elseif (is_category()) :
      ?>
        <li class="breadcrumb__item"><?php single_cat_title(); ?></li>

      <?php
      // カスタム分類アーカイブ
      elseif (is_tax()) :
        $term = get_queried_object();
      ?>
        <li class="breadcrumb__item"><?php echo esc_html($term->name); ?></li>
      <?php endif; ?>
    </ul>
  </nav>
<?php endif; ?>
