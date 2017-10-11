<?php
  define('BASE_URL', 'https://www.jackkaze.info');
  define('BASE_URL_SSL', 'https://www.jackkaze.info');
  define('BASE_PATH', dirname(dirname(dirname(dirname(__FILE__)))).'/');

  define('LOCATION_HREF_HOME', '/Home/');
  define('LOCATION_HREF_MEMO', '/Memo/');
  define('LOCATION_HREF_MEMO_ADD', '/Memo/save_data/add/');
  define('LOCATION_HREF_GUEST', '/Guest/');
  define('LOCATION_HREF_GUEST_ADD', '/Guest/save_data/add/');
  define('LOCATION_HREF_GUEST_UPDATE', '/Guest/save_data/update/');
  define('LOCATION_HREF_ACCOUNT', '/Account/');
  define('LOCATION_HREF_ACCOUNT_CREATE', '/Account/create/');
  define('LOCATION_HREF_ACCOUNT_ADD', '/Account/save_data/add/');
  define('LOCATION_HREF_LOGIN', '/Login/');
  define('LOCATION_HREF_LOGIN_SSO', '/Login/sso/');

  define('HTML_HREF_HOME', '/Home/');
  define('HTML_HREF_MEMO', '/Memo/');
  define('HTML_HREF_GUEST', '/Guest/');
  define('HTML_HREF_GUEST_CREATE', '/Guest/create/');
  define('HTML_HREF_GUEST_TOTAL', '/Guest/total/');
  define('HTML_HREF_ACCOUNT', '/Account/');
  define('HTML_HREF_ACCOUNT_CREATE', '/Account/create/');
  define('HTML_HREF_LOGIN', '/Login/');
  define('HTML_HREF_LOGIN_LOGOUT', '/Login/logout/');

  define('IMAGE_WWW_IMAGES', '/images/');

  define('JS_WWW_JS', '/js/');

  $config['jacklin'] = array();
  $config['mail_set'] = array("bcc" => "jackkaze@yahoo.com.tw",
                                 "cc" => "jackkaze@yahoo.com.tw",
                                 "from" => "root@sv78.ifastnet.com",
                                 "from_name" => "root@sv78.ifastnet.com"
                             );