
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
            echo '<p><form name="manageProgramm" action="" method="post">
                ID (update / delete): <input type="text" name="id"/>
                Datum: <input type="text" name="datum"/>
                Uhrzeit: <input type="text" name="uhrzeit"/>
                Titel: <input type="text" name="titel"/>
                Art: <input type="text" name="art"/>
                <input type="submit" name="update" value="update"/>
                <input type="submit" name="delete" value="delete"/>
                <input type="submit" name ="speichern" value="speichern"/>
                </form></p>';
            include 'php/manageProgramm.php';
            include 'php/showProgramm.php';
            echo '<p>Details bearbeiten:</p>';
            echo '<p><form name="manageDetails" action="" method="post">
                ID (update / delete): <input type="text" name="id"/>
                Titel: <input type="text" name="titel"/>
                Info: <input type="text" name="info"/>
                Bewertung: <input type="text" name="bewertung"/>
                <input type="submit" name="update" value="update"/>
                <input type="submit" name="delete" value="delete"/>
                <input type="submit" name="speichern" value="speichern"/>
                </form></p>';
            include 'php/manageDetails.php';
            include 'php/showDetails.php';
        }
        else
            include 'php/showProgramm.php';
        ?>
    </body>
</html>
