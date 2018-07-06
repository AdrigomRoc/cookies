<!DOCTYPE html>
<html>
<body>
    
    <?php
        if(isset($_POST["email"])){
            $email = $_POST["email"];
        }
        if(isset($_POST["password"])){
            $password = $_POST["password"];
        }

        $cookie_name="guardapas";
        if(isset($password) && $password=="test"){
            echo "Email: $email , Password: $password";
            setcookie($cookie_name, $password, time() + (86400 * 30), "/");
        }
        if(isset($_COOKIE[$cookie_name])){
            echo "Cookie existeix!";
        }
        //var_dump($_COOKIE);
    ?>
    <form action="cookies.php" method="post">
        Correu: 
        <input type="text" name="email">
        <br />
        Contrasenya: 
        <input type="password" name="password">
        <br />
        <input type="submit">
    </form>
    <?php
    $array = array();
    $array["Adri"] = 10;
    $array["Aitor"] = 20;
    $array["Alex"] = 30;
    
    //var_dump($array);

?>
</body>
</html>