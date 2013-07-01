<?php

include 'mysql.php';
if (isset($_GET['title']))
    $sql = "select * from Details where Titel ='" . $_GET['title'] . "'";
else
    $sql = "select * from Details";
$result = mysql_query($sql, $con);
echo 'ID;Titel;Infos;Fotos;Bewertung<br>';
while ($row = mysql_fetch_row($result)) {
    echo $row[0] . ";" . $row[1] . ";" . $row[2] . ";" . $row[3] . ";" . $row[4];
    if (isset($_SESSION['Admin']) && $_SESSION['Admin'] == "true") {
        echo '<a href=php/editDetails.php?id="'.$row[0].'">;Edit</a>
        <a href=php/delDetails.php?id=$row[0]>;Delete</a>
                <form name="Kaufen" action="add2Warenkorb.php" method="post">
                    <select name="Anzahl">
                    <option value="1"/>1</option>
                    <option value="2"/>2</option>
                    <option value="3"/>3</option>
                    <option value="4"/>4</option>
                    </select>
                    <input type="text" name="programmID" value="'.$_GET['eventID'].'" visibility="hidden"/>
                    <input type="submit" value="In den Warenkorb"/>
                </form>';
    }
}
mysql_close($con);
?>
