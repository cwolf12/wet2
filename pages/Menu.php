
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $menu = array("Home", "Programm", "Suchen", "Kontakt", "Login", "Warenkorb");
        echo "<ul>";
        for ($x = 0; $x < count($menu); $x++) {
            echo "<li><a href=http://localhost/wet2/index.php?page=$menu[$x].php>$menu[$x]</li></a>";
        }
        echo "</ul><br>";
        ?>
    </body>
</html>
