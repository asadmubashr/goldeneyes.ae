<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();



session_start();

// Set the default language to English
$default_lang = 'en';

// Check if the language is set via URL or session
if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
    $_SESSION['lang'] = $language;
} elseif (isset($_SESSION['lang'])) {
    $language = $_SESSION['lang'];
} else {
    $language = $default_lang;
}

// Load the language file
$lang_file = __DIR__ . "/../languages/" . $language . ".php";
if (file_exists($lang_file)) {
    $lang = include($lang_file);
} else {
    $lang = include(__DIR__ . "/../languages/" . $default_lang . ".php");
}