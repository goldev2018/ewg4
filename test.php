<?php 
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



 ?>