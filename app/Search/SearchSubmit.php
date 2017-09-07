<?php
/**
 * Created by PhpStorm.
 * User: gry260
 * Date: 9/5/2017
 * Time: 6:29 PM
 */

$data = json_decode(file_get_contents('php://input'), true);
echo '<pre>';
print_r($data);
echo '</pre>';

$keys = array('category_ids', 'name', 'price', '');

$q = ' and ';
if(!empty($data['category_ids']) && is_array($data['category_ids'])){
    foreach($data['category_ids'] as $key => $val){
        if($val["type"] == "c"){
            $q .= 'category_id='.$val["id"];
        }
    }
}


echo $q;