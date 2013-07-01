
<?php
session_start();
if (isset($_GET['id']) && isset($_SESSION['Admin']) && $_SESSION['Admin'] === "true") {
    include 'mysql.php';
    mysql_query("delete from programm where ID = '" . $_GET['id'] . "'");
    mysql_close($con);
    echo 'Programm gelöscht!<br>';
}
?>
