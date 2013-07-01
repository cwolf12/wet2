
<?php

if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === "true") {

    include 'addProgramm.php';
    include 'showProgramm.php';
}
?>
