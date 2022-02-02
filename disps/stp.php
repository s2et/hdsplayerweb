<?php
 error_reporting(E_ALL);
 echo "isetphp executed";
 $data1 = $_POST['data1'];
 $data2 = $_POST['data2'];
 $data3 = $_POST['data3'];
 $f = fopen("$data2/$data3", "a+")or die("1 can't open file");
 fclose($f);
 $fh = fopen("$data2/$data3", "a+")or die("2 can't open file");
 fwrite($fh, $data1);
 fclose($fh);
 //file_put_contents($url1, $data1, 'w+');
?>


