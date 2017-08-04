<?php
require_once('../init.php');
$fields = array('username'=>array('type'=>'text', 'label'=>'UserName'),
  'password'=>array('type'=>'password', 'label'=>'Password'));
session_start();
?>
<form method="POST" action="./app/Users/UserActions.php">
  <?php
  echo \Form\FormBuilder::build($fields);
  ?>
  <input type="submit" value="Login" name="Login" />
</form>