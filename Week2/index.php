<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Week 2 - Practice";
    echo "<br />";
    // Loops
    // while loop
    $i = 1;
    while ($i <= 15) {
        echo "$i, ";
        $i++;
    }
    echo "<br />";
    $count = 1;
    while ($count <= 12) {
        echo "$count times 12 is" . $count * 12 . "<br>";
        ++$count;
    }


    // DO while loop
    echo "<h1>Do While Loop</h1>";
    $result = 1;
    $n = 5;
    do {
        $result *= $n;
        // $result = $result *$n;
        echo "The value of n is: $n <br />";
        $n--;
    } while ($n > 0);
    echo "Result: ", $result;

    // Break and continue
    $i = 1;


    // Nested Loop
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= 5; $j++)
            echo ("$i * $j = " . ($i * $j) . "<br />");
    }

    echo "<br />";

    echo "<h1>Arrays </h1>";
    // Chapter 3 Arrays
    // Arrays
    // 1. Numeric Array
    // 2. Associative array
    // 3. Multidimensional array
    $collections = array();
    $collections[0] = "Mohamed";
    $collections[1] = "Omar";
    $collections[2] = "Mohamed Abdirahim";

    // var_dump
    var_dump($collections);
    echo "<br />";
    // echo
    echo "$collections[0]";

    foreach ($collections as $collection) {
        echo "<h3>$collection</h3>";
    }

    // creating and initializing
    $numbers = array(2, 3, 4, 6, 7);
    foreach ($numbers as $n) {
        echo "$n <br>";
    }
    echo "<pre />";
    echo print_r($numbers);
    echo "<pre />";

    echo "<h2>Associative Arrays</h2>";
    echo "<pre>";

    $student = ["name" => "Ali", "age" => 20, "city" => "Mogadishu"];
    $car = ["brand" => "Toyota", "model" => "Corolla", "year" => 2020];

    echo "Student name: " . $student["name"] . "\n";
    $student["phone"] = "0612345678";
    $student["age"] = 21;
    unset($student["city"]);

    echo "Student details:\n";
    print_r($student);
    echo "Car details:\n";
    foreach ($car as $key => $value) {
        echo "$key : $value\n";
    }

    $developer = [
        "name" => "Mohamed Abdirahim",
        "role" => "Developer",
        "skills" => ["PHP", "HTML", "CSS"],
        "location" => "Mogadishu"
    ];

    echo "Developer profile:\n";
    print_r($developer);
    echo "First skill: " . $developer["skills"][0] . "\n";

    $students = [
        ["name" => "Ali",  "grade" => 90],
        ["name" => "Omar", "grade" => 85]
    ];
    foreach ($students as $s) {
        echo $s["name"] . " : " . $s["grade"] . "\n";
    }

    echo "Car count: " . count($car) . "\n";
    echo "Brand exists: " . (array_key_exists("brand", $car) ? "yes" : "no") . "\n";
    echo "Color is set: " . (isset($car["color"]) ? "yes" : "no") . "\n";
    echo "Toyota is included: " . (in_array("Toyota", $car) ? "yes" : "no") . "\n";
    echo "Car keys:\n";
    print_r(array_keys($car));
    echo "Car values:\n";
    print_r(array_values($car));

    ?>
</body>

</html>