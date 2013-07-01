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
        session_start();
        if(isset($_POST['Logout'])) {
            echo "Auf wiedersehen!<br>";
            session_destroy ();    // TODO: Session-Daten löschen?
        } elseif (isset($_SESSION['User'])) {
            echo "Hallo " . $_SESSION['User'] . "<br>";
            echo var_dump($_SESSION) . "<br>";
            echo '<form name = "Logout" action = "" method = "post">
            <input type="submit" value="Abmelden" name="Logout"/>
            </form>';
        } elseif (isset($_POST['User']) && isset($_POST['Kennwort'])) { // TODO!!!!!!!
                include 'php/dologin.php';        
        } else {   // TODO: auslagern
            echo '<form name="Login" action="" method="post">
            <p>Benutzer: <input type="text" name="User"/></p>
           <p>Kennwort: <input type="password" name="Kennwort"/></p> 
            <p><input type="submit" value="Abschicken"/>
            </p>
        </form>';
            include 'php/doLogin.php';
            echo "Noch kein Login?<br>";
            echo '<form name="Register" action="php/register.php" method="post">
            <p>Benutzer: <input type="text" name="User"/></p>
            <p>E-Mail: <input type="email" name="email"/></p>
           <p>Kennwort: <input type="password" name="Kennwort"/></p> 
           <p>Kennwortbestätigung: <input type="password" name="Kennwortbestätigung"/></p>
            <p><input type="submit" value="Abschicken"/>
            </p>
        </form>';
        }
        ?>
    </body>
</html>
