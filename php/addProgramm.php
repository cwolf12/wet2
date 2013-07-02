<?php
if (!isset($_SESSION))
session_start();
if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === "true") {
    if (isset($_POST['delete']) && isset($_POST['id'])) {
        $sql = "delete from Details where ID = '" . $_GET['id'] . "'";
    }

    if (isset($_POST['datum']) && isset($_POST['uhrzeit']) && isset($_POST['titel']) && isset($_POST['art'])) {
        include 'mysql.php';
        if (isset($_GET['id']))
            mysql_query("update Programm set Datum = '" . $_POST['datum'] . "', Uhrzeit='" . $_POST['uhrzeit'] . "', Titel = '" . $_POST['titel'] . "', Art= '" . $_POST['art'] . "' where ID = '" . $_GET['id'] . "'");
        else
            mysql_query("insert into Programm (Datum, Uhrzeit, Titel, Art) values ('" . $_POST['datum'] . "','" . $_POST['uhrzeit'] . "','" . $_POST['titel'] . "', '" . $_POST['art'] . "')");
        mysql_close($con);
        echo 'Programm hinzugefügt<br>';
    }
    
}
?>
