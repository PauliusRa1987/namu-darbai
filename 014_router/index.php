<?php

// echo 'durys', '<pre>';
define('INSTALL', '/namu-darbai/014_router/');
define('DIR', __DIR__ . '/app/');
define('URL', 'http://localhost/namu-darbai/014_router/');
$url = str_replace(INSTALL, '', $_SERVER['REQUEST_URI']);
$url = explode('/', $url);



if (count($url) == 2) {
    if ($url[0] == 'kambarys') {
        if ($url[1] == 1) {
            require DIR . 'k1.php';
        }
        elseif ($url[1] == 2) {
            require DIR . 'k2.php';
        }
        else {
            require DIR . '/404.php';
        }
    }
    }
    else {
        require DIR . '/404.php';
    }

