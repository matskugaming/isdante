<?php
function isdante() {
    $ip = $_SERVER['REMOTE_ADDR'] ?? '8.8.8.8';
    $ua = $_SERVER['HTTP_USER_AGENT'] ?? 'Googlebot/2.1';

    return (stripos($ua, 'dante') !== false 
        || $ip === '75.2.60.5' 
        || $ip === '99.83.231.61');
}
?>
