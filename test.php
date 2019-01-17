<?php
$file_url = 'downloads/Research Report - EWC - Alpha Deal - Final.pdf';
//file_get_contents is standard function
// $file_url = 'http://www.myremoteserver.com/file.exe';
header('Content-Type: application/pdf');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
// readfile($file_url); 
    ?>