<?php

$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

$uriPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '';
$controller = trim(str_replace($basePath, '', $uriPath), '/');

if ($controller === '' || $controller === 'index' || $controller === 'index.php') {
    $controller = 'index';
} elseif (substr($controller, -4) === '.php') {
    $controller = substr($controller, 0, -4);
}

if (! file_exists("../controllers/{$controller}.controller.php")) {
    abort(404);
}

require "../controllers/{$controller}.controller.php";
