<?php
namespace malkusch\bav;

require_once(__DIR__ . '/../../config.php');

$configuration = new DefaultConfiguration();

$pdo = new \PDO('mysql:host='.DB_URL.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWD);
$configuration->setDataBackendContainer(new PDODataBackendContainer($pdo));

$configuration->setUpdatePlan(new AutomaticUpdatePlan());

return $configuration;