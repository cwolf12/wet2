
<?php

if (isset($_POST['User']) && isset($_POST['Kennwort'])) {
    include 'mysql.php';
    $sql = "select * from user where user = '" . $_POST['User'] . "' ";
    $result = mysql_query($sql, $con);
    while ($row = mysql_fetch_row($result)) {
        if ($_POST["User"] == $row[1] && $_POST["Kennwort"] == $row[2]) {
            $_SESSION["User"] = $_POST["User"];
            if ($row[4] === "1")
                $_SESSION["Admin"] = "true";
            echo 'Anmeldung erfolgreich!<br>';
        }
        else
            echo 'Anmeldung nicht erfolgreich!<br>';
    }
}
?>
