<?php
/**
 * Created by PhpStorm.
 * User: gry260
 * Date: 7/26/2017
 * Time: 5:00 PM
 */

require_once('../init.php');
$loader->addNamespace('\Category', $_SERVER['DOCUMENT_ROOT'] . '/app/phpapp');
$loader->loadClass("Db\DbLayer");
$instance = \Db\DB::getInstance();
$pdo_dbh = $instance->getConnection();

$loader->addNamespace('\User', $_SERVER['DOCUMENT_ROOT'] . '/app/phpapp');
$loader->loadClass("\User");


if (!empty($_GET['a']) && $_GET['a'] == 'addcategorytype') {
  $data = array('user_id' => $_GET['user_id'], 'name' => $_GET['name']);
  $types = array('user_id' => \PDO::PARAM_INT, 'name' => \PDO::PARAM_STR);
  echo \Db\DbLayer\DbLayer::insert('chicheng.user_category', $data, $types);
  exit;
}

if (!empty($_GET['a']) && $_GET['a'] == 'addsubcategorytype') {
  if (empty($_GET['category_id']) || empty($_GET['name'])) {
    return;
  }
  $data = array('user_id' => $_GET['user_id'], 'name' => $_GET['name']);
  $_GET['type'] == "c" ? $data['category_id'] = $_GET['category_id'] : false;
  $_GET['type'] == "u" ? $data['user_category_id'] = $_GET['category_id'] : false;
  $types = array('user_id' => \PDO::PARAM_INT, 'name' => \PDO::PARAM_STR, 'category_id' => \PDO::PARAM_INT, 'user_category_id' => \PDO::PARAM_INT);
  $id = \Db\DbLayer\DbLayer::insert('chicheng.user_subcategory', $data, $types);
  echo $id;
  return ;
}

if (!empty($_GET['a']) && $_GET['a'] == 'getsubcategory') {
  if (empty($_GET['category_id']) || !preg_match('/^[0-9]+$/', $_GET['category_id'])) {
    return;
  }
  if (empty($_GET['type']) || ($_GET['type'] !== 'u' && !empty($_GET['type'] !== 'c'))) {
    return;
  }
  $category_id = trim($_GET['category_id']);
  $type = trim($_GET['type']);
  $loader->loadClass("Category");
  $loader->loadClass("Category\SubCategory");
  echo json_encode(\Category\Category::getSubCategoryByID($category_id, $type));
}

if (!empty($_GET['a']) && ($_GET['a'] == 'addexpense' || $_GET['a'] == 'updateexpense')) {
  $data = array('user_id' => $_GET['user_id'],
    'name' => $_GET['name'], 'price' => $_GET['price'], 'date_entered'=>date('Y-m-d H:i:s'),
    'date' => $_GET['date'], 'comment' => $_GET['comment']);
  isset($_GET['category_id']) ? $data['category_id'] = $_GET['category_id'] : false;
  isset($_GET['subcategory_id']) ? $data['subcategory_id'] = $_GET['subcategory_id'] : false;
  isset($_GET['user_category_id']) ? $data['user_category_id'] = $_GET['user_category_id'] : false;
  isset($_GET['user_subcategory_id']) ? $data['user_subcategory_id'] = $_GET['user_subcategory_id'] : false;
  $loader->addNamespace('\Expense', $_SERVER['DOCUMENT_ROOT'] . '/app/phpapp');
  $loader->loadClass("\Expense");
  $types = array('user_id' => \PDO::PARAM_INT, 'name' => \PDO::PARAM_STR, 'price' => \PDO::PARAM_STR,
    'comment' => \PDO::PARAM_STR,  'date' => \PDO::PARAM_STR,    'subcategory_id' => \PDO::PARAM_INT,
    'id' => \PDO::PARAM_INT,
    'user_category_id' => \PDO::PARAM_INT, 'date_entered' => \PDO::PARAM_STR,
    'category_id' => \PDO::PARAM_INT, 'user_category_id' => \PDO::PARAM_INT, 'user_subcategory_id'=>\PDO::PARAM_INT);
  $u = new \User\User();

  if($_GET['a'] == 'addexpense') {
    $u->AddExpense($data, $types);
  }

  if($_GET['a'] == 'updateexpense'){
    $where = array();
    isset($_GET['id']) ? $where['id'] = $_GET['id'] : false;
    $u->UpdateExpense('chicheng.users_expense;', $data, $types, $where);
  }
}


if(!empty($_GET['deleteusercategoryid'])){
  $id = trim($_GET['deleteusercategoryid']);
  $u = new \User\User();
  $u->DeleteCategory($_GET['deleteusercategoryid']);
}

if(!empty($_GET['deleteusersubcategoryid'])){
  $id = trim($_GET['deleteusersubcategoryid']);
  $u = new \User\User();
  $u->DeleteSubCategory($id);
}

if(!empty($_GET['a'] == 'removeexpenseid')) {
  $id = trim($_GET['id']);
  $u = new \User\User();
  $u->RemoveExpense($id);
}

