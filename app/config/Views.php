<?php

use League\Plates\Engine;
use League\Plates\Extension\Asset;
use League\Plates\Extension\URI;

// Registrasi View Engine (Plates)
Flight::register('view', Engine::class, [], function ($templates) {
    foreach (glob(__DIR__ . '/../modules/*/views/') as $viewDir) {
        $moduleName = basename(dirname($viewDir));
        $templates->addFolder($moduleName, $viewDir);
    }

    // Tambahkan ekstensi
    $templates->loadExtension(new Asset('assets', false));
    $requestUri = strtok($_SERVER['REQUEST_URI'], '?');
    $templates->loadExtension(new URI($requestUri));

    // Tambahkan fungsi kustom
    $templates->registerFunction('uppercase', fn($string) => strtoupper($string));
    $templates->registerFunction('lowercase', fn($string) => strtolower($string));
    $templates->registerFunction('capitalize', fn($string) => ucwords($string));
    $templates->registerFunction('formatSize', function ($bytes, $decimals = 2) {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $factor = floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . ' ' . ($units[$factor] ?? '');
    });
    $templates->registerFunction(
        'formatTime',
        fn($timestamp, $format = 'd M Y, g:i a') =>
        is_numeric($timestamp) ? date($format, (int) $timestamp) : '-'
    );
});
