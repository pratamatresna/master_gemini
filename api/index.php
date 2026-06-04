<?php
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Ensure /tmp/storage exists for Vercel
if (!is_dir('/tmp/storage')) {
    mkdir('/tmp/storage/framework/views', 0777, true);
    mkdir('/tmp/storage/framework/cache/data', 0777, true);
    mkdir('/tmp/storage/framework/sessions', 0777, true);
    mkdir('/tmp/storage/logs', 0777, true);
}

// Maintenance mode
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoloader
require __DIR__.'/../vendor/autoload.php';

// Bootstrap
$app = require_once __DIR__.'/../bootstrap/app.php';

// Use /tmp for storage on Vercel
$app->useStoragePath('/tmp/storage');

// Handle request
$app->handleRequest(Request::capture());
