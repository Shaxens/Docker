<?php

$DBNAME = getenv('MYSQL_DATABASE') ?: 'test';
$DBHOST = getenv('MYSQL_HOST') ?: 'localhost';
$DB_USER = getenv('MYSQL_USER') ?: 'test';
$DB_PASS = getenv('MYSQL_PASSWORD') ?: 'test';
$DB_DSN = 'mysql:host=' . $DBHOST . ';dbname=' . $DBNAME;

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // encodage utf-8
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // gérer les erreurs en tant qu'exception
    PDO::ATTR_EMULATE_PREPARES => false // faire des vrais requêtes préparées et non une émulation
);
