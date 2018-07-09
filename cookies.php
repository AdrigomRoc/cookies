<!DOCTYPE html>
<html>
<body>
    
    <?php
    $cookie_name="guardapas";
    
        if(isset($_POST["type"])){
            if($_POST["type"] === "create"){
                if(isset($_POST["email"])){
                    $email = $_POST["email"];
                }
                if(isset($_POST["password"])){
                    $password = $_POST["password"];
                }
    
                if(isset($password) && $password=="test"){
                    echo "Email: $email , Password: $password";
                    setcookie($cookie_name, $password, time() + (86400 * 30), "/");
                    echo "COOKIE CREADA";
                }

            }else if($_POST["type"] === "delete"){
                if(isset($_COOKIE[$cookie_name])){
                    setcookie($cookie_name, null, -1, '/');
                    echo "COOKIE ELIMINADA";
                }
            }
        
        }

        if(isset($_COOKIE[$cookie_name])){
            echo "Cookie existeix!";
        }
        //var_dump($_COOKIE);
    ?>
    <form action="cookies.php" method="post">
        <input type="hidden" name="type" value="create">
        Correu: 
        <input type="text" name="email">
        <br />
        Contrasenya: 
        <input type="password" name="password">
        <br />
        <input type="submit">
        <br/>
    </form>
    <hr/>
    <form action="cookies.php" method="post">
        <input type="hidden" name="type" value="delete">
        <input type="submit" value="Logout">
        <br/>
    </form>
</body>
</html>