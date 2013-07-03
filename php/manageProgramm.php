<?php

if (!isset($_SESSION))
    session_start();
if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === "true") {
    if (isset($_POST['delete']) && isset($_POST['id'])) {
        stripslashes(strip_tags(escapeshellcmd($_POST['id'])));
        $sql = "delete from Programm where ID = '" . $_POST['id'] . "'";
    }
    elseif (isset($_POST['datum']) && isset($_POST['uhrzeit']) && isset($_POST['titel'])
            && isset($_POST['art'])) {
        stripslashes(strip_tags(escapeshellcmd($_POST['datum'])));
        stripslashes(strip_tags(escapeshellcmd($_POST['uhrzeit'])));
        stripslashes(strip_tags(escapeshellcmd($_POST['titel'])));
        stripslashes(strip_tags(escapeshellcmd($_POST['art'])));
        if (isset($_POST['update']) && isset($_POST['id'])) {
            stripslashes(strip_tags(escapeshellcmd($_POST['id'])));
            $sql = "update Programm set Datum = '" . $_POST['datum'] . "',
                    Uhrzeit='" . $_POST['uhrzeit'] . "', Titel = '" . $_POST['titel'] . "',
                        Art= '" . $_POST['art'] . "' where ID = '" . $_POST['id'] . "'";
        }
        elseif (isset($_POST['speichern'])) {
            $sql = "insert into Programm (Datum, Uhrzeit, Titel, Art) values 
                ('" . $_POST['datum'] . "','" . $_POST['uhrzeit'] . "','" . $_POST['titel'] . "',
                    '" . $_POST['art'] . "')";
        }
        include 'mysql.php';
        mysql_query($sql);
        mysql_close($con);
    }
    else
        echo 'Bitte füllen Sie alle Felder aus!';
    }
else {
    echo 'Sie benötigen Admin-Rechte!';
}

?>
