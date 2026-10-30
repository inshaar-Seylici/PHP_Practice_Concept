<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP</title>
</head>
<body>

    <?php
        echo "Wecolme to PHP <br>";
        print "Welcome to php  Using Print display";

        //Comments in PHP
        //Use /* at the start and */ at the end. For example:


        /* This is a section of multiline comments which will not be
        interpreted */

        //Single line comment

        // Use double forward slash (//) 

        // This is a single line comment


        // Variables

        $name = "Abdihakiim <br>";
        echo "My name is $name";

        //Constants

       define("NAME", "Muuse");

       echo NAME ; 
    
        echo "<br>";


       //Operators


        $a = 10;
        $b = 3;

        echo $a + $b; 
        echo "<br>";

        echo $a - $b; 
        echo "<br>";

        echo $a * $b; 
        echo "<br>";

        echo $a / $b; 
        echo "<br>";

        echo $a % $b;
         echo "<br>";

        //Control Structures

        $age = 20;

        if ($age >= 23) {
            echo "You are an adult";
        } else
        echo "You are child";


    echo "<br>";


        $age = 20;

        if ($age >= 18) {
            echo "You are an adult";
        }

        $score = 80;

        if ($score >= 90) {
            echo "Grade A";
            
        } elseif ($score >= 70) {
            echo "Grade B";

        } elseif ($score >= 50) {
            echo "Grade C";
        } else {
            echo "Fail";
        }

        echo "<br>";

        // The switch Statement

        $day = "Monday";

        switch ($day) {

        case "Monday":
            echo "Today is Monday";
            break;

        case "Tuesday":
            echo "Today is Tuesday";
            break;

        case "Wednesday":
            echo "Today is Wednesday";
            break;

        default:
            echo "Unknown day";


}

        echo "<br>";

        //The ? Operator
        $age = 20;

        if ($age >= 18) {
            echo "Adult";
        } else {
            echo "Not Adult";
        }


        





        ?>







        
    

</body>
</html>