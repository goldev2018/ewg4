<?php
// include 'include/config.php';

// $sql = $db->query("SELECT * FROM counter WHERE count_id=1");
// $sql->execute();
// $row = $sql->fetch(PDO::FETCH_ASSOC);

// $newCount = $row['count_num']+1;

// $countsql = $db->query("UPDATE counter SET count_num='$newCount' WHERE count_id=1");
// 	if ($countsql->execute()) {
// 		// header("location: downloads/Research Report - EWC - Alpha Deal - Final.pdf");


//     header('Content-Type: application/download');
//     header('Content-Disposition: attachment; filename="downloads/Research Report - EWC - Alpha Deal - Final.pdf"');
//     header("Content-Length: " . filesize("downloads/Research Report - EWC - Alpha Deal - Final.pdf"));

//     $fp = fopen("downloads/Research Report - EWC - Alpha Deal - Final.pdf", "r");
//     fpassthru($fp);
//     fclose($fp);

// }



$file="include/count.txt";
$doc=file_get_contents($file);

$line=explode("\n",$doc);
foreach($line as $newline){
    $qwe = $newline+1;
}
echo $qwe;


$my_file = 'include/count.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = 'This is the data';
fwrite($handle, $qwe);


    // header('Content-Type: application/download');
    // header('Content-Disposition: attachment; filename="downloads/ResearchReport-EWC-AlphaDeal-Final.pdf"');
    // header("Content-Length: " . filesize("downloads/ResearchReport-EWC-AlphaDeal-Final.pdf"));

    // $fp = fopen("downloads/ResearchReport-EWC-AlphaDeal-Final.pdf", "r");
    // fpassthru($fp);
    // fclose($fp);


$file_url = 'downloads/ResearchReport-EWC-AlphaDeal-Final.pdf';
//file_get_contents is standard function
// $file_url = 'http://www.myremoteserver.com/file.exe';
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
readfile($file_url); 




?>