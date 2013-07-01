<?php
        if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === "true") {

$con = mysql_connect("localhost", "root", "wet2root");
mysql_select_db("wet2", $con);
        }
?>
