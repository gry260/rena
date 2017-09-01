<?php
require_once('./app/init.php');
$instance = \Db\DB::getInstance();
$pdo_dbh = $instance->getConnection();
$loader->addNamespace('\Category', $_SERVER['DOCUMENT_ROOT'].'/app/phpapp');
$loader->loadClass("Category\Category");
$categories = \Category\Category::getAllCategory();
$loader->addNamespace('\User', $_SERVER['DOCUMENT_ROOT'] . '/app/phpapp');
$loader->loadClass("\User");
$user = new \User\User();
$usercategories = $user->getUserCategory();
$usersubcategories = $user->getUserSubCategory();
$loader->addNamespace('\Expense', $_SERVER['DOCUMENT_ROOT'] . '/app/phpapp');
$loader->loadClass("\Expense");
$expenses = \Expense\Expense::getAllExpenses();
$parameters = $user->getAllUsersParamters();



?>

<crudcategory categories='<?php echo json_encode($categories);?>' usercategories='<?php echo json_encode($usercategories);?>' ></crudcategory>
<crudSubcategory userSubCategories='<?php echo json_encode($usersubcategories);?>'></crudSubcategory>
<br /><br /><br />
<expense Expenses='<?php echo json_encode($expenses);?>'></expense>
<profile></profile>
<search parameters='<?php echo json_encode($parameters);?>'></search>



