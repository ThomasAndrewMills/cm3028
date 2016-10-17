<html>
    <head>

    </head>
    <body>
        <?php
            $name = $_GET["name"];
            $gender = $_GET["gender"];
            $power = $_GET["power"];

            echo "Hello {$name}{$gender}{$power}";
        ?>
    </body>
</html>