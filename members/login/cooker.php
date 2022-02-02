<?php
 echo "Logout executed";
 //header("Location: https://guc.s2ecotech.com/login/cooke.txt");
 $f = fopen('cooke.txt', 'w+');
 fclose($fh);
 echo "<script>window.close();</script>";
?>


