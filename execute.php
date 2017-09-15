<?php


echo '<pre>';
print_r($_POST);
echo '</pre>';

$data = json_decode(file_get_contents('php://input'), true);



$types = array('Active_Life'=>"Hobbies",
  "Automotive"=>"Automotive", "Beauty_&_Spas"=>"Healthcare",
  "Education"=>'Education', "Event_Planning_&_Services"=>'Events',
"Food"=>"Food",   "Health_&_Medica"=>"HealthCare"



  );