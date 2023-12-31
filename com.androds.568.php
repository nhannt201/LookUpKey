<?php
//echo '<div class="highlight">sadadasdasda<div>';
if (isset($_GET['q'])) {
    $data = htmlspecialchars($_GET['q']);
     $klo = "tontai/".base64_encode($data).".txt";
    $urlsk = "send/".base64_encode($data).".txt";
    $get = "get/".base64_encode($data).".txt";
     if (file_exists($get)) { 
         unlink($urlsk); 
        $readit = fopen($get, "r") or die("Not1");
        while(!feof($readit)) {
  $dat2 = fgets($readit);
  $ksecho = str_replace("[u0k0]", "<hr/>", $dat2);
   $ksecho = str_replace("[u0k1]", "<br/>", $ksecho);
  echo $ksecho."<br/>";
                                }
        fclose($readit);
        unlink($get); 
        unlink($klo);
     } else {
    if (file_exists($urlsk)) { 
        
    } else {
        if (file_exists($klo)) {           unlink($urlsk); } else {
 $myfile = fopen($urlsk, "w") or die("0error");
fwrite($myfile, $data);
fclose($myfile);
} }
}
}
?>