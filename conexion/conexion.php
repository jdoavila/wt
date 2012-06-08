<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hnWiredtab = "localhost";
$dbWiredtab = "wiredtab";
$unWiredtab = "root";
$pwWiredtab = "root";
$conWiredtab = mysql_pconnect($hnWiredtab, $unWiredtab, $pwWiredtab) or trigger_error(mysql_error(),E_USER_ERROR); 
?>