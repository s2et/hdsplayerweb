<?php
 //error_reporting(E_ALL);
 $data1 = $_POST['data1'];
 $data2 = $_POST['data2'];
 //echo $data1;
 //echo $data2;
 mkdir($data2);
 $s=scandir('login/',1);
 foreach($s as $f){
     if(!is_dir("login/$f")){
         copy("login/$f","$data2/$f");
     }
 }
 $fh = fopen("$data2/reg.txt", 'w+');
 fwrite($fh, $data1);
 fclose($fh);
?>
