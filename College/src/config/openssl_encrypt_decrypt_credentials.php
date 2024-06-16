<?php
$encrypt_method = "AES-256-CBC";
$secret_key = "FERRARI-DAYTONA-SP3-812-COMPETITIZIONE";
$iv = "SDFDSFATEGHADAPLEARN";


$key = hash('sha256', $secret_key);
$iv = substr(hash('sha256', $iv), 0, 16);
?>