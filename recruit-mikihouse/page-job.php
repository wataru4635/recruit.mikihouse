<?php
/*
Template Name: ミキハウスの仕事
*/
?>

<?php get_header(); ?>

<main>

  <section class="sub-fv">
    <div class="sub-fv__content">
      <p class="sub-fv__label">job</p>
      <h1 class="sub-fv__title">ミキハウスの仕事</h1>
    </div>
    <div class="sub-fv__img-wrap">
      <picture>
        <source srcset="<?php echo IMAGEPATH; ?>/job/job-fv-sp.webp" media="(max-width: 767px)" type="image/webp"
          width="375" height="180">
        <img src="<?php echo IMAGEPATH; ?>/job/job-fv.webp" alt="笑顔で会話を交わすスタッフたち" class="sub-fv__img" width="1440"
          height="390">
      </picture>
    </div>
  </section>

  <div class="sub-breadcrumbs">
    <div class="sub-breadcrumbs__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
  </div>

  <section class="job">
    <div class="job__inner sub-inner">

      <div class="job__header sub-section-header">
        <h2 class="sub-section-header__title js-text-animate">「飾らないありのままのあなた」と向き合いたい</h2>
      </div>
      <p class="job__lead">
        “会社の未来は人がつくる”という考えのもと、私たちMIKI
        HOUSEは創業当時から一人ひとりの多様な個性や価値観を大切にしてきました。<br>採用活動はそのスタートであり、私たち採用チームは​「飾らないありのままのあなた」と向き合いたいと考えています。
      </p>

      <ul class="job__list">

        <li class="job__item">
          <div class="job__item-header">
            <p class="job__category">Creative</p>
            <p class="job__subtitle">ものづくりに携わる仕事</p>
          </div>
          <ul class="job__role-list">
            <li class="job__role">商品企画</li>
            <li class="job__role">生産管理</li>
            <li class="job__role">商品MD</li>
          </ul>
        </li>

        <li class="job__item">
          <div class="job__item-header">
            <p class="job__category">Sales</p>
            <p class="job__subtitle">笑顔を届ける仕事</p>
          </div>
          <ul class="job__role-list">
            <li class="job__role">商品企画</li>
            <li class="job__role job__role--sub">営業<br><span class="job__role-sub">（国内／海外）</span></li>
            <li class="job__role job__role--sub">エリアマネージャー<br><span class="job__role-sub">（国内／海外）</span></li>
            <li class="job__role">ストアマネージャー</li>
            <li class="job__role">ファッションアドバイザー</li>
          </ul>
        </li>

        <li class="job__item">
          <div class="job__item-header">
            <p class="job__category">Fashion Adviser</p>
            <p class="job__subtitle">事業を支える仕事</p>
          </div>
          <ul class="job__role-list">
            <li class="job__role">経営管理</li>
            <li class="job__role">人事採用</li>
            <li class="job__role">財務経理</li>
            <li class="job__role job__role--sub">事業開発<br><span class="job__role-sub">（国内／海外）</span></li>
            <li class="job__role">物流管理</li>
          </ul>
        </li>

        <li class="job__item">
          <div class="job__item-header">
            <p class="job__category">Branding</p>
            <p class="job__subtitle">ミキハウスを伝える仕事</p>
          </div>
          <ul class="job__role-list">
            <li class="job__role">広報</li>
            <li class="job__role">広告宣伝／販売促進</li>
            <li class="job__role">デジタルマーケティング</li>
          </ul>
        </li>

      </ul>

    </div>
  </section>

  <div class="job-nav">
    <div class="job-nav__inner sub-inner">
      <div class="job-nav__content">
        <div class="job-nav__header">
          <p class="job-nav__title">活躍したいフィールドは<br class="u-mobile">どこにありますか？</p>
          <p class="job-nav__lead">
            個性や経験を十分に発揮し、自分のスキルや感性を磨いていってほしい。<br>
            そんな想いから、一人ひとりが自分自身の志向に合わせてキャリア形成を行えるよう、コース別採用を行っています。<br>
            あなたはどんなキャリアで自分の可能性を広げていきますか？
          </p>
        </div>
        <div class="job-nav__list-wrap">
          <ul class="job-nav__list">
            <li class="job-nav__item">
              <a href="/recruit/course/creative" class="job-nav__link">
                <span class="job-nav__link-arrow"></span>
                <span class="job-nav__link-text">ものづくりに携わる仕事</span>
              </a>
            </li>
            <li class="job-nav__item">
              <a href="/recruit/course/sales" class="job-nav__link">
                <span class="job-nav__link-arrow"></span>
                <span class="job-nav__link-text">笑顔を広げる仕事</span>
              </a>
            </li>
            <li class="job-nav__item">
              <a href="/recruit/course/adviser" class="job-nav__link">
                <span class="job-nav__link-arrow"></span>
                <span class="job-nav__link-text">笑顔を届ける仕事</span>
              </a>
            </li>
            <li class="job-nav__item">
              <a href="/recruit/course/backoffice" class="job-nav__link">
                <span class="job-nav__link-arrow"></span>
                <span class="job-nav__link-text">事業を支える仕事</span>
              </a>
            </li>
            <li class="job-nav__item">
              <a href="/recruit/course/branding" class="job-nav__link">
                <span class="job-nav__link-arrow"></span>
                <span class="job-nav__link-text">ミキハウスを伝える仕事</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <section class="job-detail">
    <div class="job-detail__inner sub-inner">

      <!-- Creative -->
      <div class="job-detail__block" id="creative">
        <div class="job-detail__header">
          <p class="job-detail__category">Creative</p>
          <h2 class="job-detail__title">ものづくりに携わる仕事</h2>
        </div>
        <p class="job-detail__lead">
          子どもたちに安心と笑顔を届けるミキハウスのものづくり。その中心にあるのが、Creative職です。商品企画、生産管理、商品MDといった各分野が連携しながら、一つひとつのアイテムを形にしています。アイデアを生み、品質を守り、価値を市場へと届ける――世界に誇る“ミキハウスクオリティ”を支える重要な役割です。
        </p>
        <div class="job-detail__interview">
          <div class="job-detail__profile">
            <p class="job-detail__name">A.A</p>
            <p class="job-detail__info">2013年 入社・商品企画</p>
            <p class="job-detail__text">
              この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。
            </p>
            <div class="job-detail__btn">
              <a href="#" class="btn-link">インタビューを読む</a>
            </div>
          </div>
          <div class="job-detail__img-wrap">
            <img src="<?php echo IMAGEPATH; ?>/person/sn-2009-sales02.webp" alt="スーツ姿で笑顔を見せる営業担当者"
              class="job-detail__image" width="208" height="314" loading="lazy">
          </div>
        </div>
      </div>

      <!-- Sales -->
      <div class="job-detail__block" id="sales">
        <div class="job-detail__header">
          <p class="job-detail__category">Sales</p>
          <h2 class="job-detail__title">笑顔を広げる仕事</h2>
        </div>
        <p class="job-detail__lead">
          ミキハウスの商品を、より多くのご家庭や世界の子どもたちに届けるのがSales職です。国内外の営業担当は、お客様や取引先との信頼関係を築きながらブランドの魅力を広げます。EC担当は、オンラインを通じて新しい購買体験をつくり、より身近にミキハウスを感じてもらう役割を担います。現場とお客様をつなぎ、笑顔を世界へ広げる重要な仕事です。
        </p>
        <div class="job-detail__interview">
          <div class="job-detail__profile">
            <p class="job-detail__name">A.A</p>
            <p class="job-detail__info">2013年 入社・営業（海外）</p>
            <p class="job-detail__text">
              「語学を使う仕事」「人と関わる仕事」を軸に就職活動を行い、誠実に向き合ってくれた人事担当者との出会いが決め手でミキハウスへ入社。物流や営業事務、店舗マネージャーなど多様な職種を経験し、現在は法人営業として企業や自治体との新規ビジネスを創出。「0から1を生み出す」挑戦にやりがいを感じながら、国内外でのブランド価値向上を目指し、グローバル展開にも挑もうとしています。
            </p>
            <div class="job-detail__btn">
              <a href="#" class="btn-link">インタビューを読む</a>
            </div>
          </div>
          <div class="job-detail__img-wrap">
            <img src="<?php echo IMAGEPATH; ?>/person/sn-2009-sales01.webp" alt="スーツ姿で笑顔を見せる営業担当者"
              class="job-detail__image" width="208" height="314" loading="lazy">
          </div>
        </div>
      </div>

      <!-- Fashion Adviser -->
      <div class="job-detail__block" id="fashion-adviser">
        <div class="job-detail__header">
          <p class="job-detail__category">Fashion Adviser</p>
          <h2 class="job-detail__title">笑顔を届ける仕事</h2>
        </div>
        <p class="job-detail__lead">
          ミキハウスの店舗は、子どもたちと家族の大切な瞬間に寄り添う場所。その現場を支えるのがFashion
          Adviser職です。お客様と直接ふれあい、最適な提案を行うファッションアドバイザー、店舗を運営するストアマネージャー、そして国内外の店舗を統括するエリアマネージャー。いずれも「接客」を超え、家族の思い出づくりをサポートし、ミキハウスのブランド体験を広げる役割を担っています。
        </p>
        <div class="job-detail__interview">
          <div class="job-detail__profile">
            <p class="job-detail__name">A.A</p>
            <p class="job-detail__info">2013年 入社・エリアマネージャー（海外）</p>
            <p class="job-detail__text">
              この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。
            </p>
            <div class="job-detail__btn">
              <a href="#" class="btn-link">インタビューを読む</a>
            </div>
          </div>
          <div class="job-detail__img-wrap">
            <img src="<?php echo IMAGEPATH; ?>/person/sn-2009-sales02.webp" alt="店舗で接客するファッションアドバイザー"
              class="job-detail__image" width="208" height="314" loading="lazy">
          </div>
        </div>
      </div>

      <!-- Management -->
      <div class="job-detail__block" id="management">
        <div class="job-detail__header">
          <p class="job-detail__category">Management</p>
          <h2 class="job-detail__title">事業を支える仕事</h2>
        </div>
        <p class="job-detail__lead">
          ミキハウスの挑戦を支え、未来を形にしていくのがManagement職です。経営管理・財務経理は企業基盤を安定させ、人事採用は仲間を迎え育て、物流管理は商品を確実に届けます。さらに国内外での事業開発は、新しい市場や価値を切り拓く役割を担います。多様な専門性が結集し、ものづくりと販売を支える――ミキハウス全体を動かす要の仕事です。
        </p>
        <div class="job-detail__interview">
          <div class="job-detail__profile">
            <p class="job-detail__name">A.A</p>
            <p class="job-detail__info">2013年 入社・人事</p>
            <p class="job-detail__text">
              この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。
            </p>
            <div class="job-detail__btn">
              <a href="#" class="btn-link">インタビューを読む</a>
            </div>
          </div>
          <div class="job-detail__img-wrap">
            <img src="<?php echo IMAGEPATH; ?>/person/sn-2009-sales02.webp" alt="オフィスで働く管理職の社員"
              class="job-detail__image" width="208" height="314" loading="lazy">
          </div>
        </div>
      </div>

      <!-- Branding -->
      <div class="job-detail__block" id="branding">
        <div class="job-detail__header">
          <p class="job-detail__category">Branding</p>
          <h2 class="job-detail__title">ミキハウスを伝える仕事</h2>
        </div>
        <p class="job-detail__lead">
          ミキハウスの想いと価値を社会に伝え、ブランドを育てていくのがBranding職です。広報は企業の理念や活動を発信し、広告宣伝・販売促進は商品やイベントを通じてお客様との接点をつくります。デジタルマーケティングはオンラインの力で新しい顧客体験を生み出し、世界中にミキハウスの魅力を広げます。ブランドの未来を形づくる、創造性あふれる仕事です。
        </p>
        <div class="job-detail__interview">
          <div class="job-detail__profile">
            <p class="job-detail__name">A.A</p>
            <p class="job-detail__info">2013年 入社・広報</p>
            <p class="job-detail__text">
              この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。
            </p>
            <div class="job-detail__btn">
              <a href="#" class="btn-link">インタビューを読む</a>
            </div>
          </div>
          <div class="job-detail__img-wrap">
            <img src="<?php echo IMAGEPATH; ?>/person/sn-2009-sales02.webp" alt="プレゼンテーションを行う広報担当者"
              class="job-detail__image" width="208" height="314" loading="lazy">
          </div>
        </div>
      </div>

    </div>
  </section>


  <div class="space" style="height: 100px;"></div>


</main>

<?php get_footer(); ?>