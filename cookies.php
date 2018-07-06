<!DOCTYPE html>
<html>
<body>
    
    <?php
        $email = $_POST["email"];
        $password = $_POST["password"];
        if($password=="test"){
            echo "Email: $email , Password: $password";
            setcookie("guardapas", $password, time() + (86400 * 30), "/");
        }
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
</body>
</html>