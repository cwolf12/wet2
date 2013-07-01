<?php

if (isset($_GET['id'])) {
    include 'mysql.php';
    mysql_query('delete from Details where ID = "'  .$_GET['id'] . '" ');
    mysql_close($con);
    echo 'Details gelöscht!<br>';
}
?>
