<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // // Example 1
    // // 2 dimentional array with  numeric index
    // $numbers = array(
    //     array(1, 2, 3),
    //     array(4, 5, 6),
    //     array(7, 8, 9)
    // );  
    // foreach ($numbers as $row) {
    //     echo " $row[0] <br>";
    // }
    //  foreach ($numbers as $row) {
    //     foreach($row as $n){

    //         echo " $row[0] <br>";
    //     }
    // }

    // Example 2: is_array funciton
    // // $info = "Abukar Ibrahim Mohamed";
    // // //Array
    $info = array(
        "Mohamed",
        "Abdi",
        90
    );
    // // // Check if its an array
    // if (is_array($info))
    //     {
    //         echo "Is Array <br>";
    //     } else {
    //         echo "Is not Array <br>";
    //     }

    //     // Example 3: in_array funciton
        // if (in_array(90, $info))
        //     {
        //         echo "Found";
        //     }
        //     else {
        //         echo "Not Found";
        //     }

            // // Associative array 
            // $arrays = array(
            //     array(90, "Abukar", "Ibrahim"),
            //     array(80, "Omar", "Ibrahim"),
            // );
            // // display the size f array usung count function
            // echo "Size of the array is count($arrays) <br>"; // error a so baxayo waayo waxaa is diidaye echo wixi uso celinayo iyo waxa soo baxayo oo kala ah string io number 
            // echo 'Size of the array is count($arrays) <br> ';
            // echo "Size of the array is: " . count($arrays) . "<br>";


            // Example 4: Implode function
            $fullname = array("Abukar", "Ibrahim", "Mohamed");
            $info = implode(" ", $fullname);
            echo $info;


            // // Example 4: Explode function
            // $fullname = "Abukar Ibrahim Mohamed";
            // $info = explode(" ", $fullname);
            // echo "<pre>";
            // print_r($info);

            // //Example 5: Shuffle function
            // shuffle($info);
            // echo "<pre>";
            // print_r($info);

            // // // Example 6: Array_merge function
            // $array1 = array("Abukar", "Ibrahim", "Mohamed");
            // $array2 = array("Omar", "Ibrahim", "Mohamed");
            // $array3 = array_merge($array1, $array2);
            // echo "<pre>";
            // print_r($array3);

            // // Example 7: Array_reverse function
            // $array4 = array_reverse($array3);
            // echo "<pre>";
            // print_r($array4);

            // // Example 8: Array_push function
            // array_push($array3, "Abdi", "Mohamed");
            // echo "<pre>";
            // print_r($array3);

            // // Example 9: Array_pop function
            // array_pop($array1);
            // echo "<pre>";
            // print_r($array1);

            // // Example 10: END function
            // $array5 = array(1,2,3,4,5);
            // $last_element = end($array5);
            // echo "<pre>";
            // print_r($last_element);


            // Example 11: Defining a function
            // function myFunction($name, $age) {
            //     echo "My name is $name and I am $age years old.";
            // }
            // myFunction("Abukar", 25);

            // // Example 12: Factorial function
            // function factorial($a){
            //     $result = 1;
            //     for ($i = 1; $i <= $a; $i++){
            //         $result *= $i;
            //         echo "The factorial of $a is: $result <br>";
            //         }
            //     }
            // factorial(5);
    ?>
</body>
</html>