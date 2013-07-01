
<?php

session_start();
if (isset($_SESSION['User'])){
$_SESSION['programmid'] = $_GET['programmid'];
$_SESSION['Anzahl'] = $_POST['Anzahl'];
var_dump($_SESSION);
echo 'Warenkorb aktualisiert<br>';
}
?>
