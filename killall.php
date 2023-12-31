<?php
if ((isset($_GET['tk'])) == "14051997") {
$files = glob('tontai/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file))
    unlink($file); // delete file
}
$files2 = glob('get/*'); // get all file names
foreach($files2 as $file2){ // iterate files
  if(is_file($file2))
    unlink($file2); // delete file
}
}