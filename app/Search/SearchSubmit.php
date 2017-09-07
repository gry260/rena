<?php
/**
 * Created by PhpStorm.
 * User: gry260
 * Date: 9/5/2017
 * Time: 6:29 PM
 */

echo 'asdf';

echo '<pre>';
print_r(getallheaders());
echo '</pre>';


$data = json_decode(file_get_contents('php://input'), true);
print_r($data);


echo '<pre>';
print_r($_REQUEST);
echo '</pre>';