<?php

require_once "../vendor/autoload.php";

// Config
define("ROOT", realpath(dirname(__FILE__) . "/../") . "/");

// App Config
define("APP_NAME", "Sortable");
define("APP_ROOT", ROOT . "app/");
define("APP_PROTOCOL", stripos($_SERVER["SERVER_PROTOCOL"], "https") === true ? "https://" : "http://");
define("APP_URL", APP_PROTOCOL . $_SERVER["HTTP_HOST"] . str_replace("public_html", "", dirname($_SERVER["SCRIPT_NAME"])));
define("APP_CONFIG_FILE", APP_ROOT . "config.php");

// Public Config
define("PUBLIC_ROOT", ROOT . "public/");

// Controller Config
define("CONTROLLER_PATH", "\App\Controllers\\");
define("DEFAULT_CONTROLLER", CONTROLLER_PATH . "Index");
define("DEFAULT_CONTROLLER_ACTION", "index");

// View Config
define("VIEW_PATH", "../app/views/");
define("DEFAULT_404_PATH", "template/404.php");
define("DEFAULT_HEADER_PATH", "template/header");
define("DEFAULT_FOOTER_PATH", "template/footer");
define("HTMLENTITIES_FLAGS", ENT_QUOTES);
define("HTMLENTITIES_ENCODING", "UTF-8");
define("HTMLENTITIES_DOUBLE_ENCODE", false);
