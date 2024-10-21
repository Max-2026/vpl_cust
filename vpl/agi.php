#!/usr/bin/php -q

<?php

require('phpagi.php');

$agi = new AGI();

$caller_number = $agi->request['agi_callerid'];

$url = 'http://your-laravel-app.com/api/forwarding-address/' . $caller_number;
$response = file_get_contents($url);
$data = json_decode($response, true);

if (isset($data['sip_url'])) {
    $agi->exec("Dial", "SIP/" . $data['sip_url']);
} else {
    $agi->exec("Playback", "sorry-no-service");
    $agi->hangup();
}
