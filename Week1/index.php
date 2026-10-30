<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "hellow muuse";
    echo "<br>";

     

    for ($row = 1; $row <= 3; $row++) {

    for ($column = 1; $column <= 3; $column++) {

        $results = $row * $column;

        echo "Row is $row, Column is $column, Result is $results";
        echo "<br>";
    }

}



    ?>
</body>
</html>