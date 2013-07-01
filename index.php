<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'pages/Header.php';
        include 'pages/Menu.php';
        if (isset($_GET['page']))
            $page = $_GET['page'];
        else
            $page = "pages/Home.php";
        switch ($page) {
            case "Home.php":
                include 'pages/Home.php';
                break;
            case "Programm.php":
                include 'pages/Programm.php';
                break;
            case "Details.php":
                include 'pages/Details.php';
                break;
            case "Suchen.php":
                include 'pages/Suchen.php';
                break;
            case "Kontakt.php":
                include 'pages/Kontakt.php';
                break;
            case "Login.php":
                include 'pages/Login.php';
                break;
            case "Warenkorb.php":
                include 'pages/Warenkorb.php';
                break;
            default:
                include 'pages/Home.php';
                break;
        }
        include 'pages/Footer.php';
        ?>

    </body>
</html>
