<?php
ini_set("error_reporting", E_ALL);
$dir    = 'send/';
//$files1 = dirToArray($dir);
$files = array_diff(scandir($dir), array('.', '..'));
$num1 = (count($files) + 1);
if ($num1 < 1) {
    $num1 = $num1 + 1;
} else {
    $db2 = rand(2,$num1);
$datak = $files[$db2];
     $getk = "tontai/".($datak);
 $getk2 = "send/".($datak);
     if (file_exists($getk)) { 
            if (strlen($getk2) >= 6) {  
                unlink($getk2);  
                
            }
     } else {
         echo  $files[rand(2,(count($files)) + 1)];
     }
}


//print_r($files);
