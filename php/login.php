<?php

if (isset($_POST['Logout'])) {
    echo "Auf wiedersehen!<br>";
    session_destroy();    // TODO: Session-Daten löschen?
} elseif (isset($_SESSION['User'])) {
    echo "Hallo " . $_SESSION['User'] . "<br>";
    echo var_dump($_SESSION) . "<br>";
    echo '<form name = "Logout" action = "" method = "post">
            <input type="submit" value="Abmelden" name="Logout"/>
            </form>';
} elseif (isset($_POST['login']) && isset($_POST['User']) && isset($_POST['Kennwort'])) {
    $_POST['User'] = stripslashes(strip_tags(escapeshellcmd($_POST['User'])));
    $_POST['Kennwort'] = stripslashes(strip_tags(escapeshellcmd($_POST['Kennwort'])));
    include 'mysql.php';
    $sql = "select * from user where user = '" . $_POST['User'] . "' ";
    $result = mysql_query($sql, $con);
    while ($row = mysql_fetch_row($result)) {
        if ($_POST["User"] == $row[1] && $_POST["Kennwort"] == $row[2]) {
            $_SESSION["User"] = $_POST["User"];
            if ($row[4] === "1")
                $_SESSION['Admin'] = "true";
            echo 'Anmeldung erfolgreich!<br>';
        }
        else
            echo 'Anmeldung nicht erfolgreich!<br>';
    }
} elseif (isset($_POST['anlegen']) && isset($_POST['User']) && isset($_POST['Kennwort']) &&
        isset($_POST['Kennwortbestätigung']) && isset($_POST['email'])) {
    $_POST['User'] = stripslashes(strip_tags(escapeshellcmd($_POST['User'])));
    $_POST['Kennwort'] = stripslashes(strip_tags(escapeshellcmd($_POST['Kennwort'])));
    $_POST['Kennwortbestätigung'] = stripslashes(strip_tags(escapeshellcmd($_POST['Kennwortbestätigung'])));
    $_POST['email'] = stripslashes(strip_tags(escapeshellcmd($_POST['email'])));
    if ($_POST['Kennwort'] === $_POST['Kennwortbestätigung']) {
        include 'mysql.php';
        //TODO: Überprüfen ob user bereits exisitert!
        mysql_query("insert into user (user, password, email) values ('" . $_POST['User'] . "',
            '" . $_POST['Kennwort'] . "', '" . $_POST['email'] . "')");
        mysql_close($con);
        echo "Registration completed!<br>";
    } else {
        echo 'Kennwörter stimmen nicht überein!<br>';
    }
} else {
    echo "Bitte füllen Sie alle Felder aus!<br>";
}
?>
