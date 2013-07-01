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
            echo "ProgrammID: " .$_SESSION['programmid']. "<br>";
            echo "Anzahl: " .$_SESSION['Anzahl']."<br>";
        ?>
    </body>
</html>
