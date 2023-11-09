<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title> Page </title>
</head>

<body>
    <?php
        echo "<h3> endif </h3>";
        $a = 50;
        echo "the value entered was $a, so he is ";

        if ($a < 50):
            echo "less then 50";
        elseif ($a > 50):  
            echo "bigger the 50";
        else:
            echo "equal to";
        endif;

    echo "<hr>";
    echo "<h3> foreach </h3>";

        $cars=["toyota", "gol","wolkswagen","tesla","mercedes","bmw","fiat"];
        foreach($cars as $car){
            echo "brand: $car <br>";
        }
    echo "<hr>";
    echo "<h3> function without parameters and without return</h3>";
        //create to function
        function message_hello()
        {
            echo "Hello,\n";
            echo "Welcome!";
        }
        // use function
        message_hello();
    ?>
</body>
</html>