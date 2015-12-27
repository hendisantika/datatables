<?php
$hostname_cn_datatables = "localhost";
$database_cn_datatables = "db_datatables";
$username_cn_datatables = "root";
$password_cn_datatables = "";
$cn_datatables = mysql_pconnect($hostname_cn_datatables, $username_cn_datatables, $password_cn_datatables) or trigger_error(mysql_error(),E_USER_ERROR); 
?>