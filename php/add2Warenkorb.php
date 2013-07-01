
<?php

session_start();
if (isset($_SESSION['User'])){
$_SESSION['programmID'] = $_POST['programmID'];
$_SESSION['Anzahl'] = $_POST['Anzahl'];
var_dump($_SESSION);
echo 'Warenkorb aktualisiert<br>';
}
?>
