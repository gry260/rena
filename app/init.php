<?php
/**
 * Created by PhpStorm.
 * User: gry260
 * Date: 7/20/2017
 * Time: 2:02 PM
 */

require_once( __DIR__ .'/Psr4AutoloaderClass.php');
$loader = new Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace('\Db', $_SERVER['DOCUMENT_ROOT'].'/app/db');
$loader->loadClass("Db\Db");
$loader->addNamespace('\Form', $_SERVER['DOCUMENT_ROOT'].'/app/Form');
$loader->loadClass("Form\FormBuilder");

?>


