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
    // header('Content-Disposition: attachment; filename="downloads/Research Report - EWC - Alpha Deal - Final.pdf"');
    // header("Content-Length: " . filesize("downloads/Research Report - EWC - Alpha Deal - Final.pdf"));

    // $fp = fopen("downloads/Research Report - EWC - Alpha Deal - Final.pdf", "r");
    // fpassthru($fp);
    // fclose($fp);


$file_url = 'downloads/ResearchReport-EWC-AlphaDeal-Final.pdf';
// $filename = 'downloadedpdf.pdf';
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.$file_url.'"');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . filesize($file_url)); //Absolute URL
ob_clean();
flush();
readfile($file_url); //Absolute URL
exit();
		// $pdfname = basename ($file_url);
		// header('Content-Type: application/pdf');
		// header("Content-Transfer-Encoding: Binary");
		// header("Content-disposition: attachment; filename=".$pdfname);
		// flush();
		// readfile($file_url);
		// exit();



?>