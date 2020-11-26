<?php
mb_internal_encoding("utf8");

$pdo = new PDO ("mysql:dbname=lesson01;host=localhost;","root","root");

$pdo-> exec("insert into 4each_keijiban(handlename,title,comment) values (
'".$_POST['handlename']."','".$_POST['title']."','".$_POST['comment']."');");
           
header("Location:http://localhost/4each_keijiban/index.php");

?>