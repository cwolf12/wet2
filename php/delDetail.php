<?php

if (isset($_GET['title'])) {
    include 'mysql.php';
    mysql_query("delete from filme where ID = '" . $_GET['title'] . "'");
    mysql_close($con);
    echo 'Film gelöscht!<br>';
}
?>
