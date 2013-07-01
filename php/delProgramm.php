
<?php

if (isset($_GET['id'])) {
    include 'mysql.php';
    mysql_query("delete from programm where ID = '" . $_GET['id'] . "'");
    mysql_close($con);
    echo 'Programm gelöscht!<br>';
}
?>
