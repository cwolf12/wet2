<?php

if (isset($_POST['titel']) && isset($_POST['info']) && isset($_POST['foto']) && isset($_POST['bewertung'])) {
   include 'mysql.php';
    mysql_query("insert into Details (Titel, Info, Foto, Bewertung) values ('" . $_POST['titel'] . "','" . $_POST['info'] . "','" . $_POST['foto'] . "', '" . $_POST['bewertung'] . "')");
    mysql_close($con);
    echo 'Detail hinzugefügt<br>';
} else {
    echo '<p><form name="addDetalis" action="../php/addDetails.php" method="post">
                Titel: <input type="text" name="titel"/>
                Info: <input type="text" name="info"/>
                Foto: <input type="text" name="foto"/>
                Bewertung: <input type="text" name="bewertung"/>
                <input type="submit" value="speichern"/>
                </form></p>';
}
?>


// Immer alles in die session schreiben?