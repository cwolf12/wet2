<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_POST['Name']) && isset($_POST['Alter']) && isset($_POST['Thema']) && isset($_POST['email']) && isset($_POST['Anfragetext'])) {
            echo "Name: " . $_POST['Name'] . "<br>";
            echo "Alter: " . $_POST['Alter'] . "<br>";
            echo "Thema: " . $_POST['Thema'] . "<br>";
            echo "E-Mail: " . $_POST['email'] . "<br>";
            echo "Anfragetext: " . $_POST['Anfragetext'] . "<br>";
        } else {
            echo "Bitte füllen Sie das Formular vollständig aus!";
            echo '<form name="Kontakt" action="" method="post">
            <p>Name: <input type="text" name="Name"/></p>
            <p>Alter: 
                <input type="radio" name="Alter" value="0-14"/> bis 14
                <input type="radio" name="Alter" value="15-29"/> 15 - 29
                <input type="radio" name="Alter" value="30-49"/> 30 - 49
                <input type="radio" name="Alter" value="50-99"/> ab 50
            </p>
            <p>Thema: 
                <select name="Thema">
                    <option value="Kinoprogramm">Kinoprogramm</option>
                    <option value="Ticketreservierung">Ticketreservierung</option>
                    <option value="Sonstiges">Sonstiges</option>
                </select>
            <p>E-Mail: <input type="email" name="email"/></p>
            <p>Anfragetext: <textarea name="Anfragetext"></textarea> </p>
            <p><input type="submit" value="Abschicken"/>
                <input type="reset" value="Zurücksetzen"/>
            </p>
        </form>';
        }
        ?>
    </body>
</html>
