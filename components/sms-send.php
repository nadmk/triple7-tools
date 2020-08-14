<?php
session_start();
require_once "../config.php";

$recipients[0] = $_GET['destination'];
$sender = $_GET['sender'];
$message = utf8_encode ($_GET['message']);
$url = "https://gatewayapi.com/rest/mtsms";
$api_token = $SMS_GATEWAY_KEY;
$json = [
    'sender' => $sender,
    'message' => $message,
    'recipients' => [],
];
foreach ($recipients as $msisdn) {
    $json['recipients'][] = ['msisdn' => $msisdn];
}

$real_sender = $_SESSION["username"];
$resultsql = mysqli_query($link, "SELECT `username`, `sms_credits` FROM `users` WHERE username = '$real_sender' AND sms_credits > 0");
if(mysqli_num_rows($resultsql) > 0)
{
    $resultsql = mysqli_query($link, "UPDATE `users` SET `sms_credits` = sms_credits - 1 WHERE username = '$real_sender'");
$finalsql = mysqli_query($link,"INSERT INTO sms_log (`id`,`timestamp`,`from`,`to`, `message`, `callerID`)
VALUES (NULL,current_timestamp(),'$real_sender','$recipients[0]','$message','$sender')");
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
    curl_setopt($ch,CURLOPT_USERPWD, $api_token.":");
    curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($json));
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    print($result);
    $json = json_decode($result);
    print_r($json->ids);
    $_SESSION["status"] = $result;
    header( 'Location: ../sms-spoof.php');
}
else {
    $_SESSION["status"] = 'Not Enough Credits';
    header( 'Location: ../sms-spoof.php');

}
