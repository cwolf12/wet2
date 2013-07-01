
<?php

if (isset($_SESSION['User'])  && isset($_GET['programmid']) && isset($_POST['Anzahl'])){
echo "Warenkorb:<br>";
if (!isset($_SESSION['programmid']))
    $_SESSION['programmid'];
$_SESSION['programmid'][sizeof($_SESSION['programmid'])] = $_GET['programmid'];
$_SESSION['Anzahl'][sizeof($_SESSION['Anzahl'])] = $_POST['Anzahl'];
var_dump($_SESSION);
echo 'Warenkorb aktualisiert<br>';
}
?>
