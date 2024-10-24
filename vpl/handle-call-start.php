#!/usr/bin/php -q

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', '/var/log/asterisk/agi-php-error.log');

require(__DIR__ . '/vendor/autoload.php');

$agi = new AGI();

$call_id = $agi->get_variable("SIPCALLID");
$caller_number = $agi->request['agi_callerid'];
$call_timestamp = date('Y-m-d H:i:s');
$remote_ip = $agi->request['agi_peer'];
$called_number = $agi->request['agi_extension'];

$base_url = 'http://dialify.dgtlid.com';
$sip_secret = 'abcdefghijklmnopqrstuvwxyz';

$url = $base_url . "/call-start/{$called_number}/{$sip_secret}?timestamp={$call_timestamp}&ip={$remote_ip}&caller={$caller_number}&call_id={$call_id}";

$response = file_get_contents($url);
$data = json_decode($response, true);

if (isset($data['sip_url'])) {
    $agi->exec("Dial", "SIP/" . $data['sip_url']);
} else {
    $agi->exec("Playback", "sorry-no-service");
    $agi->hangup();
}
