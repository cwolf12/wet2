<?php

if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === "true") {

    include 'addDetails.php';
    include 'showDetails.php';
}
?>
