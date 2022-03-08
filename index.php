<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '':
    case '/':
    case '/homa/homa-kah-beta/':
        require __DIR__ . '/main.html';
        break;

    case '/homa/homa-kah-beta/gdpr/':
    case '/homa/homa-kah-beta/gdpr':
        require __DIR__ . '/avisodeprivacidad.html';
        break;

    default:
        http_response_code(404);
        console_log($request);
        require __DIR__ . '/main.html';
        break;
}