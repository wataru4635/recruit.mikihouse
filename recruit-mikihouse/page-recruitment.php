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
              <ul class="recruit-info__positions">
                <li class="recruit-info__position">
                  Fashion Adviser（FA）
                </li>
                <li class="recruit-info__position">
                  Store Manager（店長）
                </li>
                <li class="recruit-info__position">
                  Area Manager
                </li>
                <li class="recruit-info__position">
                  Global Manager
                </li>
              </ul>
            </li>
          </ul>

          <p class="recruit-info__course">General Staff（GS）コース　若干名</p>
          <ul class="recruit-info__role-rows">
            <li class="recruit-info__role-row">
              <p class="recruit-info__dept">Creative部門</p>
              <ul class="recruit-info__positions">
                <li class="recruit-info__position">商品企画</li>
                <li class="recruit-info__position">生産管理</li>
                <li class="recruit-info__position">商品MD</li>
              </ul>
            </li>
            <li class="recruit-info__role-row">
              <p class="recruit-info__dept">Sales部門</p>
              <ul class="recruit-info__positions">
                <li class="recruit-info__position">営業 （国内/海外）</li>
                <li class="recruit-info__position">広告宣伝/販売促進</li>
                <li class="recruit-info__position">EC/デジタルマーケティング/ITエンジニア</li>
                <li class="recruit-info__position">物流・貿易管理</li>
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
        そんな想いから、ミキハウスではOnline・Offline問わず<br class="u-desktop">
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
            <p class="process__subtitle">エントリー</p>
            <ul class="process__details">
              <li class="process__detail">① プロフィールシート</li>
              <li class="process__detail">② 自己PR動画</li>
            </ul>
            <p class="process__text">
              上記2点を「MIKI HOUSE新卒採用マイページ」より<br class="u-desktop">
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
            <span class="process__step-label">STEP 3</span>
          </div>
          <div class="process__dot process__dot--bottom">
            <img src="<?php echo IMAGEPATH; ?>/recruitment/process-dot.svg" alt="ドット" class="process__dot-img"
              width="10" height="10">
          </div>
          <div class="process__body">
            <span class="process__step-label-sp">STEP 3</span>
            <p class="process__subtitle">内々定</p>
          </div>
        </li>

      </ul>

    </div>
  </section>

  <section class="faq" id="faq">
    <div class="faq__inner sub-inner">

      <div class="faq__header sub-section-header02">
        <h2 class="sub-section-header02__title sub-section-header02__title--center js-text-animate">よくある質問</h2>
      </div>

      <div class="faq__group">
        <p class="faq__group-title">新卒採用について</p>
        <dl class="faq__list">

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">OB・OG訪問は受け付けていますか？</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                本来ならばお受けしたいのですが、毎年たくさんのご応募をいただき、全ての希望を受けきれないため、こちらからOB・OGを紹介することはしていません。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">既卒でもエントリーできますか？</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                はい、エントリーできます。新卒採用と同じ時期にエントリーをしていただき、基本的には新卒と同じ条件での4月入社となります。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">インターンシップや選考は本当に普段着で参加して良いのですか？</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                Online・Offline問わず、ミキハウスのインターンシップや選考はリクルートスーツではなく、あなたらしい普段着で参加いただいています。ジーンズが好きな人はジーンズで、靴やバッグ・小物にこだわる人はお気に入りのアイテムを取り入れるなど、1番リラックスできるファッションでお越しください。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">留学生の採用が増えている中で、語学力は必須ですか？</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                いいえ、必須ではありません。もちろん優れた語学力をお持ちの方は大きな強みとなりますが、採用段階ではスキルよりもその人自身の個性や想いを重要視していますので必須項目ではありません。しかし将来、海外を舞台に活躍したいとお考えの方は、入社後に語学力の習得が必要となります。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">海外出張や駐在はありますか？</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                日本を拠点としながら海外出張ベースの働き方をしている社員が多いですが、状況に応じて海外駐在の業務を担当する可能性もあります。現在、社内では欧米・アジア圏で複数名の海外駐在スタッフが活躍しています。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">留学生の在留資格変更サポートはありますか？</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                あります。いわゆる「留学ビザ」から「就労ビザ」への変更申請をしっかりサポートします。ミキハウスでは既にたくさんの外国籍社員が様々なフィールドで活躍していますので、安心してください。
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
                <span class="faq__item-question-text">配属や勤務地はどのように決まりますか？</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                選考の際にエントリーしていただいたコースに基づいて配属を考えます。ただし1年目から希望の部署に配属されるとは限りません。初年度の配属は、将来希望の部署で活躍するために必要な知識やスキルを習得できるよう決定されます。また、初めての配属については希望勤務地を確認し、できるだけ本人の意志にそえるように配慮しながら決定していきます。将来的には、キャリアに応じてしっかり話をした上で、転居を伴う全国転勤の可能性もあります。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">入社後、別のコースや職種への異動はありますか？</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                年2回の自己申告アンケートを通して自分のやりたいことをアピールする機会があります。組織として社内の状況が優先されるため、全ての人の希望通りになるというわけではありませんが、本人の意志と情熱、そして会社側の評価によって希望する仕事に就いた実例もたくさんあります。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">産休・育休について教えてください。</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                産休・育休取得率100%を継続しており、「仕事も子育ても両立して頑張りたい」というスタッフのために、「ママJOBセミナー」など、育児休暇からの復帰に向けたサポートにも取り組んでいます。もちろん会社や店舗の状況によって、個人の希望を全て実現できるわけではありませんが、子育てをしながら自分の経験をお客様に伝えていきたいと手を挙げるスタッフには、「OB・OG制度」など会社としてもできるだけ柔軟に対応していきたいと考えています。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">出産や子育てを経験した社員はどのように働いているのですか？</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                ミキハウスでは、妊娠・出産・子育てといったライフイベントはキャリアに繋がると考えています。若いスタッフに向けたベビー研修の開催や、新商品の提案など、あらゆるシーンで自身の出産や子育て経験を活かした活躍をしています。また、独自の研修プログラムに1年間参加し、マタニティとベビーの接客スペシャリストと認められたスタッフを、社内資格の「子育てキャリアアドバイザー(KCA)」として認定し、お客様のライフアドバイザーとしてのキャリアアップの支援も行っています。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">内定者期間・入社後の研修制度について教えてください。</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                内定者期間には、同期の絆を深めることや安心して入社を迎えることを目的として、数回の研修が行われます。また、入社後も成長を続けるためにMIKI HOUSEオリジナルの研修プログラムが様々用意されています。詳しくは教育・研修制度のページをご覧ください。<br><a href="http://recruit.mikihouse.co.jp/job/ " class="faq__item-answer-link">http://recruit.mikihouse.co.jp/job/ </a>
              </span>
            </dd>
          </div>

        </dl>
      </div>

      <div class="faq__group">
        <p class="faq__group-title">ミキハウスについて</p>
        <dl class="faq__list">

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">ミキハウスの企業理念（Brand Promise）は何ですか？</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                「子どもと家族の毎日を笑顔でいっぱいに」です。創業以来、世界中の子どもたちの健やかな成長を願い、アパレルだけでなく、出版事業や教育、子育て・スポーツ支援など、子どもに関わるすべての分野を事業フィールドとしています。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">ミキハウスのグローバル展開について教えてください。</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                現在は、フランス、アメリカ、イギリス、中国の現地法人と世界16の国と地域で108店舗（2025年8月現在）を展開しています。またOfflineだけでなくOnline(EC)の展開も積極的に行い、今後はいずれの販路も強化しながら多様なチャネルでの相乗効果を図っていきます。
              </span>
            </dd>
          </div>

          <div class="faq__item">
            <dt class="faq__item-question">
              <button class="faq__item-question-btn js-faq-question">
                <span class="faq__item-question-icon">Q</span>
                <span class="faq__item-question-text">今後ますます少子化が進んでいくと思うのですが、どう考えていますか？</span>
                <span class="faq__item-question-toggle-icon"></span>
              </button>
            </dt>
            <dd class="faq__item-answer">
              <span class="faq__item-answer-text">
                たしかに日本の出生数は年々低下していますが、ベビー・子ども服は着る人と買う人が異なる特殊なジャンルです。購買層の数は減っておらず、逆に少子化が進む中で、子どもに安心・安全なものを与えたいという考えが深く根付いてきています。だからこそ、クオリティにこだわり信頼されるものづくりを続けてきた私たちは、少子化はむしろチャンスであると考えています。
              </span>
            </dd>
          </div>

        </dl>
      </div>
      <div class="entry-btn">
        <a href="https://mypage.3010.i-webs.jp/mikihouse2027/applicant/login/baitai-entry/entrycd/2027" class="entry-btn__link" target="_blank" rel="noopener noreferrer">
          <span class="entry-btn__label">今すぐ! エントリー</span>
          <span class="entry-btn__text">ENTRY</span>
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>