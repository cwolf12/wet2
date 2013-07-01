
<?php

if (isset($_POST['User']) && isset($_POST['Kennwort']) && isset($_POST['Kennwortbestätigung']) && isset($_POST['email'])) {
    if ($_POST['Kennwort'] === $_POST['Kennwortbestätigung']) {
        $con = mysql_connect("localhost", "root", "wet2root");
        mysql_select_db("wet2", $con);
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
