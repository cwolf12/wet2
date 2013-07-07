<?php

include 'mysql.php';
if (isset($_GET['title'])) {
    $_POST['title']=stripslashes(strip_tags(escapeshellcmd($_GET['title'])));
    $sql = "select * from Details where Titel ='" . $_GET['title'] . "'";
}
else
    $sql = "select * from Details";
$result = mysql_query($sql, $con);
echo 'ID;Titel;Infos;Bewertung<br>';
while ($row = mysql_fetch_row($result)) {
    echo $row[0] . ";" . $row[1] . ";" . $row[2] . ";" . $row[4];
    if (!isset($_SESSION['Admin'])) {
        echo '<form name="Kaufen" action="" method="post">
                <select name="Anzahl">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <input type="submit" value="In den Warenkorb"/>
                
                </form>';
        include 'Saalplan.php';
        include 'add2Warenkorb.php';
    }
    if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === "true") {
        echo '<form name="upload" action="" enctype="multipart/form-data" method="post">
                <input type="file" name="uploadfile"/>
                <input type="submit" value="upload"/>
        </form>';
        include 'upload.php';
    }
    echo "<br>";
}
mysql_close($con);
?>
