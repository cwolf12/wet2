
        <?php
        session_start();
        if (!isset($_SESSION['User'])) {
            echo '<form name="Login" action="" method="post">
            <p>Benutzer: <input type="text" name="User"/></p>
           <p>Kennwort: <input type="password" name="Kennwort"/></p> 
            <p><input type="submit" name="login" value="Abschicken"/>
            </p>
        </form>';
            echo "Noch kein Login?<br>";
            echo '<form name="Register" action="" method="post">
            <p>Benutzer: <input type="text" name="User"/></p>
            <p>E-Mail: <input type="email" name="email"/></p>
           <p>Kennwort: <input type="password" name="Kennwort"/></p> 
           <p>Kennwortbestätigung: <input type="password" name="Kennwortbestätigung"/></p>
            <p><input type="submit" name="anlegen" value="Abschicken"/>
            </p>
        </form>';
        }
        include 'php/login.php';
        ?>
    