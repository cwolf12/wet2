<?php

include 'mysql.php';
$sql = "select * from Programm";
$result = mysql_query($sql, $con);
echo 'ID;Datum;Uhrzeit;Titel;Art<br>';
while ($row = mysql_fetch_row($result)) {
    echo $row[0] . ";" . $row[1] . ";" . $row[2] . ";" . $row[3] . ";" . $row[4] . 
            "<a href=pages/Details.php?title=$row[3]&programmid=$row[0]>;Details</a>";
    echo '<br>';
}
mysql_close($con);
?>       
