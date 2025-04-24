<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
use Dotenv\Dotenv;

// Load .env from current directory
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Your Account SID and Auth Token from twilio.com/console
// To set up environmental variables, see http://twil.io/secure
$account_sid = $_ENV['TWILIO_ACCOUNT_SID'];
$auth_token = $_ENV['TWILIO_AUTH_TOKEN'];
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with Voice capabilities
$twilio_number = "+17753627999";

// Where to make a voice call (your cell phone?)
$to_number = "+38344806028";

$client = new Client($account_sid, $auth_token);
$client->account->calls->create(
    $to_number,
    $twilio_number,
    array(
        "url" => "http://demo.twilio.com/docs/voice.xml"
    )
);
