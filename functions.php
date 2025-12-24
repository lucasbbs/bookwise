<?php

function view($view, $data = [])
{

    foreach ($data as $key => $value) {

        $$key = $value;
    }

    require 'views/template/app.php';
}

function dd(...$dump)
{

    echo '<pre>';
    var_dump($dump);
    echo '</pre>';

    die();
}

function abort($code)
{

    http_response_code($code);

    view($code);

    die();
}

function flash()
{
    return new Flash();
}

function config($chave = null)
{
    $config = require 'config.php';
    if (strlen($chave) > 0) {
        return $config[$chave];
    }
    return $config;
}

function auth()
{

    if (! isset($_SESSION['auth'])) {

        return null;
    }

    return $_SESSION['auth'];
}

function url($path = '')
{
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    $path = ltrim($path, '/');
    return $path === '' ? ($base ?: '/') : ($base ? "$base/$path" : "/$path");
}


// Utility for rendering star ratings based on a book array
function getRating(Book $book)
{
    if (! $book->evaluation) {
        return '☆☆☆☆☆';
    }
    $fullStars = floor(num: $book->evaluation);
    $halfStar = ($book->evaluation - $fullStars) >= 0.5 ? 1 : 0;
    $emptyStars = 5 - $fullStars - $halfStar;

    return str_repeat('★', $fullStars) . str_repeat('⯪', $halfStar) . str_repeat('☆', $emptyStars);
}
