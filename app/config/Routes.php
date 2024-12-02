<?php

// Memuat semua rute dari modul
foreach (glob(__DIR__ . '/../modules/*/routes.php') as $routeFile) {
    require $routeFile;
}
