<?php  
 header("Content-type: text/json");

 

 

$output = array(
    array("name" => "Data", "data"  => [floatval(90), floatval(0), floatval(80)])
);
 
 echo json_encode($output);

 ?>  