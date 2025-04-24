<?php

require __DIR__ . '/vendor/autoload.php'; // Load composer packages

use Dotenv\Dotenv;

// Load .env from current directory
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Now access your environment variables
$account_sid = $_ENV['TWILIO_ACCOUNT_SID'];
$auth_token = $_ENV['TWILIO_AUTH_TOKEN'];

echo "SID: $account_sid\n";
echo "TOKEN: $auth_token\n";
