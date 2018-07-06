<!DOCTYPE html>
<html>

<body>
    
    <?php
        $text = $_POST["text"];
        if($text){
            $x=strlen($text);
            echo "El nombre de caracters es de: ".$x;
        }
    ?>
    <form action="form.php" method="post">
        Escriu:
        <input type="text" name="text">
        <br /> 
        <input type="submit">
    </form>
</body>

</html>