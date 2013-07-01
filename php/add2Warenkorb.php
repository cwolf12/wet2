
<?php

if (isset($_SESSION['User'])  && isset($_GET['programmid']) && isset($_POST['Anzahl'])){
echo "Warenkorb:<br>";
$_SESSION['programmid'] = $_GET['programmid'];
$_SESSION['Anzahl'] = $_POST['Anzahl'];
var_dump($_SESSION);
echo 'Warenkorb aktualisiert<br>';
}
?>
