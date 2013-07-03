<?php

if (!isset($_SESSION))
    session_start();
if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === "true") {
    include 'mysql.php';
    if (isset($_POST['delete']) && isset($_POST['detailsid'])) {
        $_POST['id'] = stripslashes(strip_tags(escapeshellcmd($_POST['detailsid'])));
        $sql = "delete from Details where ID = '" . $_POST['id'] . "'";
        mysql_query($sql);
        mysql_close($con);
    } elseif (isset($_POST['titel']) && isset($_POST['info']) && isset($_POST['bewertung'])) {
        $_POST['titel'] = stripslashes(strip_tags(escapeshellcmd($_POST['titel'])));
        $_POST['info'] = stripslashes(strip_tags(escapeshellcmd($_POST['info'])));
        $_POST['bewertung'] = stripslashes(strip_tags(escapeshellcmd($_POST['bewertung'])));
        if (isset($_POST['update']) && isset($_POST['detailsid'])) {
            $_POST['id'] = stripslashes(strip_tags(escapeshellcmd($_POST['detailsid'])));
            $sql = "update Details set Titel = '" . $_POST['titel'] . "',
                    Info='" . $_POST['info'] . "', Bewertung= '" . $_POST['bewertung'] . "'
                    where ID = '" . $_POST['id'] . "'";
            mysql_query($sql);
            mysql_close($con);
        } elseif (isset($_POST['speichern'])) {
            $sql = "insert into Details (Titel, Info, Bewertung) values 
                ('" . $_POST['titel'] . "','" . $_POST['info'] . "', '" . $_POST['bewertung'] . "')";
            mysql_query($sql);
            mysql_close($con);
        }
    }
}
else {
    echo 'Sie benötigen Admin-Rechte!';
}
?>
