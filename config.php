<?php 

$db = new PDO(
    'mysql:host=127.0.0.1;dbname=ipg_estate_trial',
    'root',
    'root',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
