<?php
// ==========================================================================
// 定義
// ==========================================================================
/* ---------- パスの短縮 ---------- */
define('IMAGEPATH',            get_template_directory_uri() . '/assets/images');

/* ---------- 各ページのリンク ---------- */
define('HOME_URL',             esc_url(home_url('/')));                          // トップページ
define('ABOUT_URL',            esc_url(home_url('/about/')));                    // ミキハウスを知る
define('JOB_URL',              esc_url(home_url('/job/')));                      // ミキハウスの仕事
define('RECRUIT_URL',          esc_url(home_url('/recruit/')));                  // 採用情報
define('INTERNSHIP_URL',       esc_url(home_url('/internship/')));                // インターンシップ
define('NEWS_URL',             esc_url(home_url('/news/')));                     // お知らせ

// Personページ
define('PERSON_URL',           esc_url(home_url('/person/')));                   // ミキハウスの人

// 社員ごとの詳細
define('PERSON_SN_2009A',      esc_url(home_url('/person/sn-2009a/')));
define('PERSON_SN_2009B',      esc_url(home_url('/person/sn-2009b/')));
define('PERSON_SN_2009C',      esc_url(home_url('/person/sn-2009c/')));
define('PERSON_SN_2009D',      esc_url(home_url('/person/sn-2009d/')));
define('PERSON_SN_2009E',      esc_url(home_url('/person/sn-2009e/')));
define('PERSON_SN_2009F',      esc_url(home_url('/person/sn-2009f/')));

define('PERSON_YB_2003',       esc_url(home_url('/person/yb-2003/')));
define('PERSON_YJ_2017',       esc_url(home_url('/person/yj-2017/')));
define('PERSON_AP_2018',       esc_url(home_url('/person/ap-2018/')));
define('PERSON_MH_2016',       esc_url(home_url('/person/mh-2016/')));