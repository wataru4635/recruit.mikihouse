<?php
// 採用トピックスの個別ページからフロントページにリダイレクト
wp_redirect( home_url(), 302 );
exit;