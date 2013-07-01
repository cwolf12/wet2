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
        include 'Header.php';
        include 'Menu.php';
        if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === "true") {
            include '../php/manageDetails.php';
        }else{
        include '../php/showDetails.php';
        }
        include 'Footer.php';
        ?>
    </body>
</html>