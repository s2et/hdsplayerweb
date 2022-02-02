<?php
 //error_reporting(E_ALL);
 $data1 = $_POST['data1'];
 $data2 = $_POST['data2'];
 //echo $data1;
 //echo $data2;
 mkdir($data2);
 $s=scandir('DisplayID/',1);
 foreach($s as $f){
     if(!is_dir("DisplayID/$f")){
         copy("DisplayID/$f","$data2/$f");
     }
 }
 mkdir($data2.'/imgs');
 $s1=scandir('DisplayID/imgs',1);
 foreach($s1 as $f1){
     if(!is_dir("DisplayID/imgs/$f1")){
         copy("DisplayID/imgs/$f1","$data2/imgs/$f1");
     }
 }
 mkdir($data2.'/js');
 $s2=scandir('DisplayID/js',1);
 foreach($s2 as $f2){
     if(!is_dir("DisplayID/js/$f2")){
         copy("DisplayID/js/$f2","$data2/js/$f2");
     }
 }
 $fh = fopen("$data2/dat.txt", 'w+');
 fwrite($fh, $data1);
 fclose($fh);
?>
