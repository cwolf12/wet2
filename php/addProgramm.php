
<?php

if (isset($_POST['datum']) && isset($_POST['uhrzeit']) && isset($_POST['titel']) && isset($_POST['art'])) {
   include 'mysql.php';
    mysql_query("insert into Programm (Datum, Uhrzeit, Titel, Art) values ('" . $_POST['datum'] . "','" . $_POST['uhrzeit'] . "','" . $_POST['titel'] . "', '" . $_POST['art'] . "')");
    mysql_close($con);
    echo 'Programm hinzugefügt<br>';
}
    echo '<p><form name="addProgramm" action="" method="post">
                Datum: <input type="text" name="datum"/>
                Uhrzeit: <input type="text" name="uhrzeit"/>
                Titel: <input type="text" name="titel"/>
                Art: <input type="text" name="art"/>
                <input type="submit" value="speichern"/>
                </form></p>';

?>
