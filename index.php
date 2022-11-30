<?php
require_once 'src/createCsv_ZeroSplit.class.php';
require_once "src/AWS_Bucket.php";
require_once 'src/functions.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$key = $_ENV['KEY'];
$secret = $_ENV['SECRET'];
$region = $_ENV['REGION'];
$version = $_ENV['VERSION'];
$Bucket = $_ENV['BUCKET'];
$endpoint = $_ENV['ENDPOINT'];


        $path=AWS_Bucket::recent_object($key, $secret,$region,$version, $Bucket, $endpoint);

        $csv = new Csv_ZeroSplit();
        $csv->createCSV($rows,$path);
?>
