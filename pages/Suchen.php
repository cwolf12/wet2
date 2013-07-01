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
        echo '<form name="Suchen" action="" method="post">
        Titel <input type="text" name="Titel"/>
        Datum <input type="text" name="Datum"/>
        <input type="submit" value="Suchen"/>
        </form>
        
        ';
        include 'php/search.php';
        ?>
    </body>
</html>
