<?php
/**
 * Created by PhpStorm.
 * User: gry260
 * Date: 9/5/2017
 * Time: 6:29 PM
 */

$data = json_decode(file_get_contents('php://input'), true);
require_once('../init.php');
$instance = \Db\DB::getInstance();
$pdo_dbh = $instance->getConnection();

$loader->addNamespace('\Report', $_SERVER['DOCUMENT_ROOT'].'/app/phpapp');
$loader->loadClass("Report\Report");
$report = new \Report\Report(3, $data);
$r = $report->GetResults();
echo !empty($r) ? json_encode($r) : false;