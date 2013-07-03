<?php

if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === "true") {
    if (isset($_FILES['uploadfile'])) {
        $uploaddir = '/xampp/htdocs/wet2/upload/';
        $uploadfile = $uploaddir . basename($_FILES['uploadfile']['name']);
        if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile)) {
            echo "Datei ist valide und wurde erfolgreich hochgeladen.\n";
        } else {
            echo "Möglicherweise eine Dateiupload-Attacke!\n";
        }
        echo 'Weitere Debugging Informationen:';
        print_r($_FILES);
    }
}
?>
