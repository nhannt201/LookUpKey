<?php
if (isset($_GET['txt'])) {
    $data = ($_GET['txt']);
} else { 
      $ac = file_get_contents("tm.txt");
      if ($ac <= 5) {
        echo file_get_contents("of.txt"); 
          $myfile = fopen("tm.txt", "w") or die("0");
          $ac = $ac + 1;
fwrite($myfile, $ac);
fclose($myfile);
      } else {
         $myfile = fopen("of.txt", "w") or die("0");
fwrite($myfile, "Offline");
fclose($myfile);
 echo file_get_contents("of.txt"); 
}
    exit; 
    
}
    if ($data == "on") {
        $datay = "Online";
        $myfile = fopen("tm.txt", "w") or die("0");
fwrite($myfile, "0");
fclose($myfile);
    } elseif ($data == "off") {
        $datay = "Offline";
    } else { $datay = "Offline";} 
     $myfile = fopen("of.txt", "w") or die("Offline");
fwrite($myfile, $datay);
fclose($myfile);
 echo file_get_contents("of.txt");

 ?>