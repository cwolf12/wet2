
<?php
if (!isset($_SESSION))
    session_start ();
if (isset($_SESSION['User']) && isset($_GET['programmid']) && isset($_POST['Anzahl'])) {
    stripslashes(strip_tags(escapeshellcmd($_GET['programmid'])));
    stripslashes(strip_tags(escapeshellcmd($_POST['Anzahl'])));
    echo "Warenkorb:<br>";
    if (!isset($_SESSION['programmid']))
        $_SESSION['programmid'] = array();;
    if (!isset($_SESSION['Anzahl']))
        $_SESSION['Anzahl'] = array();
    $_SESSION['programmid'][sizeof($_SESSION['programmid'])] = $_GET['programmid'];
    $_SESSION['Anzahl'][sizeof($_SESSION['Anzahl'])] = $_POST['Anzahl'];
    var_dump($_SESSION);
    echo 'Warenkorb aktualisiert<br>';
}
?>
