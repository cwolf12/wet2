
<?php

if (isset($_POST['User']) && isset($_POST['Kennwort']) && isset($_POST['Kennwortbestätigung']) && isset($_POST['email'])) {
    if ($_POST['Kennwort'] === $_POST['Kennwortbestätigung']) {
        include 'mysql.php';
        //TODO: Überprüfen ob user bereits exisitert!
        mysql_query("insert into user (user, password, email) values ('" . $_POST['User'] . "','" . $_POST['Kennwort'] . "', '" . $_POST['email'] . "')");
        mysql_close($con);
        echo "Registration completed!<br>";
    } else {
        echo 'Kennwörter stimmen nicht überein!<br>';
    }
} else {
    echo "Bitte füllen Sie alle Felder aus!<br>";
}
?>
