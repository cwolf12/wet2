<?php

if (isset($_POST['Titel']) && $_POST['Titel'] != "")
    $sql = "select * from Programm where Titel = '" . $_POST['Titel'] . "'";
elseif (isset($_POST['Datum']) && $_POST['Datum'] != "")
    $sql = "select * from Programm where Datum = '" . $_POST['Datum'] . "'";
else
    return;
include 'mysql.php';
$result = mysql_query($sql, $con);
while ($row = mysql_fetch_row($result)) {
    echo $row[0] . ";" . $row[1] . ";" . $row[2] . ";" . $row[3] . ";" . $row[4] . "<a href=pages/Details.php?title=$row[3]&programmid=$row[0]>;Details</a>";
}
echo '<br>';
?>
