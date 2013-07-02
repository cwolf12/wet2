<?php

session_start();
if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === "true") {

    if (isset($_POST['titel']) && isset($_POST['info']) && isset($_POST['foto']) && isset($_POST['bewertung'])) {
        include 'mysql.php';
        if (isset($_GET['id']))
            mysql_query("update Details set Titel = '" . $_POST['titel'] . "', Info='" . $_POST['info'] . "', Foto = '" . $_POST['foto'] . "', Bewertung= '" . $_POST['bewertung'] . "' where ID = '" . $_GET['id'] . "'");
        else
            mysql_query("insert into Details (Titel, Info, Foto, Bewertung) values ('" . $_POST['titel'] . "','" . $_POST['info'] . "','" . $_POST['foto'] . "', '" . $_POST['bewertung'] . "')");
        mysql_close($con);
        echo 'Detail hinzugefügt<br>';
    }
    echo '<p><form name="addDetalis" action="" method="post">
                Titel: <input type="text" name="titel"/>
                Info: <input type="text" name="info"/>
                Foto: <input type="text" name="foto"/>
                Bewertung: <input type="text" name="bewertung"/>
                <input type="submit" value="speichern"/>
                </form></p>';
}
?>