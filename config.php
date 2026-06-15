<?php
    
$server= "sql12.freemysqlhosting.net";
$username="sql12619196";
$password="GlDrbqkVZl";
$con= mysqli_connect($server,$username,$password,'sql12619196');
if(!$con){
    die("Error : Connection not made due to".mqsqli_connect_error());
}

?>
