<?php

date_default_timezone_set('Asia/Jakarta');

$ds = DIRECTORY_SEPARATOR;

// Define constants for base directories
define('BASE_DIR', dirname(__DIR__));
define('APP_DIR', BASE_DIR . $ds . 'app');

// Error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Sanitize input
foreach ($_GET as $key => $value) {
    $_GET[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

// Handle allowed HTTP methods
if (!in_array($_SERVER['REQUEST_METHOD'], ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'])) {
    http_response_code(405);
    exit('Method Not Allowed');
}

// Load the application bootstrap
require(APP_DIR . $ds . 'bootstrap.php');
