<?php

if (!isset($_SESSION))
    session_start();

if (isset($_GET['id']) && isset($_SESSION['Admin']) && $_SESSION['Admin'] === "true") {
    include 'mysql.php';
    mysql_query('delete from Details where ID = "' . $_GET['id'] . '" ');
    mysql_close($con);
    echo 'Details gelöscht!<br>';
    echo '<a href=/wet2/index.php?page=Programm.php>zurück</a>';

}
?>
