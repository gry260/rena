<?php
require_once('./app/init.php');
$instance = \Db\DB::getInstance();
$pdo_dbh = $instance->getConnection();
$loader->addNamespace('\Category', $_SERVER['DOCUMENT_ROOT'].'/app/phpapp');
$loader->loadClass("Category\Category");
$categories = \Category\Category::getAllCategory();
$loader->addNamespace('\Expense', $_SERVER['DOCUMENT_ROOT'] . '/app/phpapp');
$loader->loadClass("\Expense");
$expenses = \Expense\Expense::getAllExpenses();



?>

<crudcategory categories='<?php echo json_encode($categories);?>'></crudcategory>

<crudSubcategory></crudSubcategory>



<br /><br /><br />
<expense Expenses='<?php echo json_encode($expenses);?>'></expense>