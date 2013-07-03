<?php

if (!isset($_SESSION))
    session_start();
if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === "true") {
    include 'mysql.php';
    if (isset($_POST['delete']) && isset($_POST['id'])) {
        $_POST['id'] = stripslashes(strip_tags(escapeshellcmd($_POST['id'])));
        $sql = "delete from Programm where ID = '" . $_POST['id'] . "'";
        mysql_query($sql);
        mysql_close($con);
    } elseif (isset($_POST['datum']) && isset($_POST['uhrzeit']) &&
            isset($_POST['titel']) && isset($_POST['art'])) {
        $_POST['datum'] = stripslashes(strip_tags(escapeshellcmd($_POST['datum'])));
        $_POST['uhrzeit'] = stripslashes(strip_tags(escapeshellcmd($_POST['uhrzeit'])));
        $_POST['titel'] = stripslashes(strip_tags(escapeshellcmd($_POST['titel'])));
        $_POST['art'] = stripslashes(strip_tags(escapeshellcmd($_POST['art'])));
        if (isset($_POST['update']) && isset($_POST['id'])) {
            $_POST['id'] = stripslashes(strip_tags(escapeshellcmd($_POST['id'])));
            $sql = "update Programm set Datum = '" . $_POST['datum'] . "',
                    Uhrzeit='" . $_POST['uhrzeit'] . "', Titel = '" . $_POST['titel'] . "',
                        Art= '" . $_POST['art'] . "' where ID = '" . $_POST['id'] . "'";
            mysql_query($sql);
            mysql_close($con);
        } elseif (isset($_POST['speichern'])) {
            $sql = "insert into Programm (Datum, Uhrzeit, Titel, Art) values 
                ('" . $_POST['datum'] . "','" . $_POST['uhrzeit'] . "','" . $_POST['titel'] . "',
                    '" . $_POST['art'] . "')";
            mysql_query($sql);
            mysql_close($con);
        }
    }
}
else {
    echo 'Sie benötigen Admin-Rechte!';
}
?>
