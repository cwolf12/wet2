
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        if (isset($_SESSION['programmid']) && isset($_SESSION['Anzahl'])) {
            for ($x = 0; $x <= sizeof($_SESSION['programmid']); $x++) {
                if (isset($_SESSION['programmid'][$x])) {
                    echo "ProgrammID: " . $_SESSION['programmid'][$x] . "<br>";
                    echo "Anzahl: " . $_SESSION['Anzahl'][$x] . "<br>";
                }
            }
        }
        else
            echo "Warenkorb ist leer<br>";
        ?>
    </body>
</html>
