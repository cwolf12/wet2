<?php

include 'mysql.php';
$sql = "select * from Programm";
$result = mysql_query($sql, $con);
echo 'ID;Datum;Uhrzeit;Titel;Art<br>';
while ($row = mysql_fetch_row($result)) {
    echo $row[0] . ";" . $row[1] . ";" . $row[2] . ";" . $row[3] . ";" . $row[4] . "<a href=pages/Details.php?title=$row[3]?eventID=$row[0]>;Details</a>";
    if (isset($_SESSION['Admin']) && $_SESSION['Admin'] == "true") {
        echo "<a href=php/editProgramm.php?id='$row[0]'>;Edit</a>
        <a href=php/delProgramm.php?id=$row[0]>;Delete</a>";
    }
    echo '<br>';
           

}
mysql_close($con);
?>       
