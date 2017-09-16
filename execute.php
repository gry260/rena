<?php




$data = json_decode(file_get_contents('php://input'), true);



$typess = array('Active_Life'=>"Entertainment & Hobbies", 'Arts_&_Entertainment'=>'Entertainment & Hobbies',
  "Automotive"=>"Auto & Transport", "Beauty_&_Spas"=>"Health & Fitness",
  "Education"=>'Education',
"Food"=>"Food & Dining",   "Health_&_Medical"=>"Health & Fitness", 'Home_Services'=>'Home',
  'Hotels_&_Travel'=>'Entertainment & Hobbies', 'Local_Services'=>'Personal Care', 'Nightlife'=>'Entertainment & Hobbies',
'Pets'=>"Pets", 'Shopping'=>'Shopping'
  );


require_once('./app/db/DB.php');
require_once('./app/db/DbLayer.php');


$types = array("id"=>PDO::PARAM_INT, "name"=>PDO::PARAM_STR, "category_id"=>PDO::PARAM_INT);
$instance = \Db\DB::getInstance();
$pdo_dbh = $instance->getConnection();



foreach($typess as $key=> $type){
  $q = ' select * from chicheng.category where name = "'.$type.'"';
  $sth = $pdo_dbh->prepare($q);
  $sth->execute();
  $result = $sth->fetch(PDO::FETCH_ASSOC);

  if(empty($result)){
    echo $type.'<br />';
  }

  $words = explode(",", $_POST[$key]);
  foreach($words as $word){
    $dd = array('word'=>$word, 'category_id'=>$result['id']);
    \Db\DbLayer\DbLayer::insert('chicheng.keywords_by_category', $dd, $types);
  }
}