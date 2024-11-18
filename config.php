<?php
require_once 'vendor/autoload.php';

use Dotenv\Dotenv;

// Chargement du fichier .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
?>