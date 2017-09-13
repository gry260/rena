<?php
/**
 * Created by PhpStorm.
 * User: gry260
 * Date: 9/5/2017
 * Time: 6:29 PM
 */

$data = json_decode(file_get_contents('php://input'), true);


$keys = array('category_ids', 'name', 'price', '');
$res = array();
$q = 'SELECT * FROM chicheng.users_expense e
where e.user_id = 3 ';
if (!empty($data['category_ids']) && is_array($data['category_ids'])) {
    $q .= ' and (';
    foreach ($data['category_ids'] as $key => $val) {
        $q .= $key != 0 ? ' or ' : false;
        if ($val["type"] == "c") {
            $q .= ' e.category_id=' . $val["id"];
        }
        else if ($val["type"] == "uc") {
            $q .= ' e.user_category_id=' . $val["id"];
        }
        $res[] = $val["id"];
    }
    $q .= ')';
}



$l = false;
if (!empty($data['subcategory_ids']) && is_array($data['subcategory_ids'])) {
    $q .= ' and (';
    foreach ($data['subcategory_ids'] as $key => $val) {
        if(!empty($val['category_id']) && in_array($val['category_id'], $res)){
            continue;
        }
        if(!empty($val['user_category_id']) && in_array($val['user_category_id'], $res)){
            continue;
        }

        $l = true;
        $q .= $key != 0 ? ' or ' : false;
        $q .= '(';
        $q .= $val["type"] == 'us' ? ' e.user_subcategory_id='.$val["id"] : false;
        $q .= $val["type"] == 's' ? ' e.subcategory_id='.$val["id"] : false;
        $q .= ' and ';
        $q .= !empty($val['category_id']) ? ' e.category_id='.$val["category_id"] : false;
        $q .= !empty($val['user_category_id']) ? ' e.user_category_id='.$val["user_category_id"] : false;
        $q .= ')';
    }
    $q .= ')';
    if($l == false){
        $q = substr($q, 0, -6);
    }
}


echo $q;

if (!empty($data['price']) && is_array($data['price'])) {
    $q .= ' and (';
    foreach ($data['price'] as $key => $val) {
        $q .= $key != 0 ? ' or ' : false;
        $sign = $val['operator'] != "≈" ? $val['operator'] : false;
        $sign !== false ? $q .= 'e.price' . $sign . $val["price"] : false;
        if ($val['operator'] == "≈") {
            $div = $val['price'] * 0.15;
            $min = $val['price'] - $div;
            $max = $val['price'] + $div;
            $q .= ' e.price > ' . $min . ' and e.price < ' . $max;
        }
    }
    $q .= ')';
}

if (!empty($data['name'])) {
    $q .= ' and e.name like "%' . $data['name'] . '%"';
}

if(!empty($data['last'])){
    if($data['last'] == 'This Month'){
        $q .= ' and YEAR(e.date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) and MONTH(e.date) = MONTH(CURRENT_DATE()) ';
    }
    else if($data['last'] == 'Last Month'){
        $q .= ' and YEAR(e.date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) and MONTH(e.date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)';
    }
    else if($data['last'] == 'Last 3 Months'){
        $q .= ' and YEAR(e.date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) and MONTH(e.date) = MONTH(CURRENT_DATE - INTERVAL 3 MONTH)';
    }
    else if($data['last'] == 'Last 6 Months'){
        $q .= ' and YEAR(e.date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) and MONTH(e.date) = MONTH(CURRENT_DATE - INTERVAL 6 MONTH)';
    }
    else if($data['last'] == 'This Year'){
        $q .= ' and YEAR(e.date) = YEAR(CURDATE())';
    }
    else if($data['last'] == 'Last Year'){
        $q .= ' and e.date >= DATE_SUB(NOW(),INTERVAL 1 YEAR);';
    }
}

if(!empty($data['from'])){
    $q .= ' and e.date >=' .$data['from'] ;
}

if(!empty($data['end'])){
    $q .= ' and e.date <=' .$data['end'] ;
}

