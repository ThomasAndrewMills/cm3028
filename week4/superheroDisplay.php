<html>
    <head>

    </head>
    <body>
        <?php
            $name = $_POST["name"];
            $gender = $_POST["gender"];
            $power = $_POST["power"];

            echo "Hello {$name}{$gender}{$power}";
        ?>
    </body>
</html>