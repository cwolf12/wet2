<?php

if (!isset($_SESSION))
    session_start();
if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === "true") {
    if (isset($_POST['delete']) && isset($_POST['id'])) {
        $sql = "delete from Details where ID = '" . $_POST['id'] . "'";
    }
    elseif (isset($_POST['titel']) && isset($_POST['info']) && isset($_POST['foto'])
            && isset($_POST['bewertung'])) {
        if (isset($_POST['update']) && isset($_POST['id'])) {
            $sql = "update Details set Titel = '" . $_POST['titel'] . "',
                    Info='" . $_POST['info'] . "', Foto = '" . $_POST['foto'] . "',
                        Bewertung= '" . $_POST['bewertung'] . "' where ID = '" . $_POST['id'] . "'";
        }
        elseif (isset($_POST['speichern'])) {
            $sql = "insert into Details (Titel, Info, Foto, Bewertung) values 
                ('" . $_POST['titel'] . "','" . $_POST['info'] . "','" . $_POST['foto'] . "',
                    '" . $_POST['bewertung'] . "')";
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
