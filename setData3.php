<?php
/**
 * Created by PhpStorm.
 * User: gry260
 * Date: 9/15/2017
 * Time: 2:15 PM
*/


$content = file_get_contents('./data3.php');
require_once('./app/db/DB.php');
require_once('./app/db/DbLayer.php');


$types = array("id"=>PDO::PARAM_INT, "name"=>PDO::PARAM_STR, "category_id"=>PDO::PARAM_INT);

$instance = \Db\DB::getInstance();
$pdo_dbh = $instance->getConnection();

$keywords = preg_split("/<div>/", $content);
array_shift($keywords);


if(!empty($keywords)){
  foreach($keywords as $row){
    $k = preg_split("/<tr>/", $row);
    array_shift($k);
    $c = preg_split("/<td>/", $k[0]);
    $category = strip_tags($c[1]);
    $d = array("name"=>trim($category));
   // $cid = \Db\DbLayer\DbLayer::insert('chicheng.category', $d, $types);
    array_shift($k);
    foreach($k as $value){
      $s = preg_split("/<td>/", $value);
      $s = strip_tags($s[1]);
      $dd = array('name'=>$s, 'category_id'=>$cid);
    //  \Db\DbLayer\DbLayer::insert('chicheng.subcategory', $dd, $types);
    }
  }
}
