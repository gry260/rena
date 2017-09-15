<?php
/**
 * Created by PhpStorm.
 * User: gry260
 * Date: 9/14/2017
 * Time: 10:40 AM
 */



$content = file_get_contents('./data.php');
$keywords = preg_split("/<strong>/", $content);

require_once('./app/db/DB.php');
require_once('./app/db/DbLayer.php');


$types = array("id"=>PDO::PARAM_INT, "name"=>PDO::PARAM_STR, "category_id"=>PDO::PARAM_INT);

$instance = \Db\DB::getInstance();
$pdo_dbh = $instance->getConnection();
array_shift($keywords);

$categories = array();
if(!empty($keywords)){
  foreach($keywords as $key => $value){
    $c = preg_split("/<\/strong>/", $value);
    $categories[trim($c[0])]  = array();
    $c1 = preg_split("/<ul>/", $c[1]);
    $c1 = preg_split("/<li>/", $c[1]);
    array_shift($c1);
    $d = array("name"=>trim($c[0]));
    $cid = \Db\DbLayer\DbLayer::insert('chicheng.category', $d, $types);
    foreach($c1 as $cc){
      if(!empty($cc)) {
        $categories[trim($c[0])][] = strip_tags($cc);
        $dd = array('name'=>strip_tags($cc), 'category_id'=>$cid);
        \Db\DbLayer\DbLayer::insert('chicheng.subcategory', $dd, $types);
      }
    }
  }
}





