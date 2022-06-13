<?php
require("vendor/autoload.php");

use Idleberg\WordpressViteAssets\WordpressViteAssets;

$baseUrl = get_stylesheet_directory();
$manifest = $baseUrl . "/manifest.json";
$entryPoint = "./src/main.ts";

$viteAssets = new WordpressViteAssets($manifest, $baseUrl);
$viteAssets->addAction($entryPoint);