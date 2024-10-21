#!/usr/bin/php -q

<?php

require('phpagi.php');

$agi = new AGI();

$caller_number = $agi->request['agi_callerid'];

$base_url = 'http://dialify.dgtlid.com';
$url = $base_url . "/forwarding/{$caller_number}";

$response = file_get_contents($url);
$data = json_decode($response, true);

if (isset($data['sip_url'])) {
    $agi->exec("Dial", "SIP/" . $data['sip_url']);
} else {
    $agi->exec("Playback", "sorry-no-service");
    $agi->hangup();
}
