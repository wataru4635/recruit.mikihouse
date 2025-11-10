<?php
// ==========================================================================
// 定義
// ==========================================================================
/* ---------- パスの短縮 ---------- */
define('IMAGEPATH',            get_template_directory_uri() . '/assets/images');
define('VIDEOPATH',            get_template_directory_uri() . '/assets/video');

/* ---------- 各ページのリンク ---------- */
define('HOME_URL',             esc_url(home_url('/')));                          // トップページ
define('ABOUT_URL',            esc_url(home_url('/about/')));                    // ミキハウスを知る
define('JOB_URL',              esc_url(home_url('/job/')));                      // ミキハウスの仕事
define('RECRUITMENT_URL',      esc_url(home_url('/recruitment/')));              // 採用情報
define('INTERNSHIP_URL',       esc_url(home_url('/internship/')));               // インターンシップ
define('NEWS_URL',             esc_url(home_url('/news/')));                     // お知らせ

// Personページ
define('PERSON_URL',           esc_url(home_url('/person/')));                   // ミキハウスの人

// 社員ごとの詳細
define('PERSON_SN_2009_SALES01', esc_url(home_url('/person/sn-2009-sales01/')));
define('PERSON_SN_2009_SALES02', esc_url(home_url('/person/sn-2009-sales02/')));
define('PERSON_SN_2009_SALES03', esc_url(home_url('/person/sn-2009-sales03/')));
define('PERSON_WJ_2022_FA', esc_url(home_url('/person/wj-2022-fa/')));
define('PERSON_YK_2024_FA', esc_url(home_url('/person/yk-2024-fa/')));
define('PERSON_WJ_2017_MD', esc_url(home_url('/person/wj-2017-md/')));
define('PERSON_YB_2003_CHILDCARE_ADVISOR', esc_url(home_url('/person/yb-2003-childcare_advisor/')));
define('PERSON_YJ_2017_NEW_BUSINESS',      esc_url(home_url('/person/yj-2017-new_business/')));
define('PERSON_AP_2018_SALES',             esc_url(home_url('/person/ap-2018-sales/')));
define('PERSON_MH_2016_STORE_MANAGER',     esc_url(home_url('/person/mh-2016-store_manager/')));
