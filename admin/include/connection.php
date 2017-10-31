<?php
define('host','localhost');
define('user','root');
define('password','');
define('db_name','db_class230');

$link=mysqli_connect(host,user,password,db_name) or die(mysqli_connect_error($link));



?>