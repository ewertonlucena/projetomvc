<?php
require_once 'environment.php';

global $config;
$config = [];

if(ENVIRONMENT == "development"){
    $config['dbname'] = 'sexol671_mvc';
    $config['host'] = 'mvc.estoquefacil.net.br:3306';
    $config['dbuser'] = 'sexol671_mvc';
    $config['dbpass'] = 'Ton@9811008';
} else {
    $config['dbname'] = 'sexol671_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'sexol671_mvc';
    $config['dbpass'] = 'Ton@9811008';
    
}

