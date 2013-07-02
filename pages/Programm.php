<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === "true") {
            echo '<p>Programm bearbeiten:</p>';
            echo '<p><form name="addProgramm" action="" method="post">
                ID: <input type="text" name="id"/>
                Datum: <input type="text" name="datum"/>
                Uhrzeit: <input type="text" name="uhrzeit"/>
                Titel: <input type="text" name="titel"/>
                Art: <input type="text" name="art"/>
                <input type="submit" value="update"/>
                <input type="submit" value="delete"/>
                <input type="submit" value="speichern"/>
                </form></p>';
            include 'php/addProgramm.php';
            include 'php/showProgramm.php';
            echo '<p>Details bearbeiten:</p>';
            echo '<p><form name="addDetalis" action="" method="post">
                ID: <input type="text" name="id"/>
                Titel: <input type="text" name="titel"/>
                Info: <input type="text" name="info"/>
                Foto: <input type="text" name="foto"/>
                Bewertung: <input type="text" name="bewertung"/>
                <input type="submit" value="update"/>
                <input type="submit" value="delete"/>
                <input type="submit" value="speichern"/>
                </form></p>';
            include 'php/addDetails.php';
            include 'php/showDetails.php';
        }
        else
            include 'php/showProgramm.php';
        ?>
    </body>
</html>
