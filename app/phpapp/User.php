<?php

namespace User;


class User
{
  private $_expenses = array();
  public function __construct()
  {
  }

  public function getID()
  {

  }

  public function getFirstName()
  {

  }

  public function getLastName()
  {

  }

  public function getEmail()
  {

  }

  public static function addUser($parameters)
  {

  }

  public function UpdateExpense($table, $data, $type, $where)
  {
    echo '<pre>';
    print_r($where);
    echo '</pre>';

    echo '<pre>';
    print_r($type);
    echo '</pre>';

    echo '<pre>';
    print_r($data);
    echo '</pre>';

    \Db\DbLayer\DbLayer::update('chicheng.users_expense', $data, $where, $type);
  }

  public function AddExpense($data, $type)
  {
    \Db\DbLayer\DbLayer::insert('chicheng.users_expense', $data, $type);
    $this->_expenses[] = new \Expense\Expense($data);
  }

  public function getExpense()
  {
    return $this->_expenses;
  }

  public static function authenticate($username, $password)
  {
    global $pdo_dbh;
    $q = 'select * from chicheng.users where username = :USERNAME and password = :PASSWORD';
    $sth = $pdo_dbh->prepare($q);
    $sth->bindValue(':USERNAME', $username, \PDO::PARAM_STR);
    $sth->bindValue(':PASSWORD', $password, \PDO::PARAM_STR);
    $sth->execute();
    $count = $sth->rowCount();
    return $count > 0 ? true : false;
  }

}



