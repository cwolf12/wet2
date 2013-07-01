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
            if (isset($_SESSION['programmid']) && isset($_SESSION['Anzahl'])) {
            echo "ProgrammID: " .$_SESSION['programmid']. "<br>";
            echo "Anzahl: " .$_SESSION['Anzahl']."<br>";
            } else
                echo "Warenkorb ist leer<br>";
                
        ?>
    </body>
</html>
