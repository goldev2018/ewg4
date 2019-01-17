<?php
$file_url = 'downloads/ResearchReport-EWC-AlphaDeal-Final.pdf';
//file_get_contents is standard function
// $file_url = 'http://www.myremoteserver.com/file.exe';
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
readfile($file_url); 


    ?>