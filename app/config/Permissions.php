<?php

// Memuat semua permissions dari modul
Flight::set('permissions', function () {
    $permissions = [];
    foreach (glob(__DIR__ . '/../modules/*/Permissions.php') as $file) {
        $modulePermissions = include $file;
        if (isset($modulePermissions['permissions'])) {
            $permissions = array_merge($permissions, $modulePermissions['permissions']);
        }
    }
    return $permissions;
});
