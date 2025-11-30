<?php
    echo "Hello world!";
    echo "<br>";
    $name = "John";
    echo "Hello $name";
    // string, integer, float, boolean, array, object, null
    $age = 25;
    echo "<br>";
    echo "Hello $name, you are $age years old.";

    $height = 1.80;
    echo "<br>";
    echo "Hello $name, you are $age years old and $height meters tall.";

    // $is_married = false;
    $is_married = true;
    echo "<br>";
    echo "Hello $name, you are $age years old and $height meters tall and $is_married.";

    $hobbies = array("coding","sleeping","eating");
    echo "<br>";
    echo "Hello $name, you are $age years old and $height meters tall and $is_married, Your hobbies are $hobbies[0], $hobbies[1], $hobbies[2].";

    // control flow 
    // if, else,elseif, switch 
    if($age < 18){
        echo "<br>";
        echo "You are not allowed to vote.";
    }else{
        echo "<br>";
        echo "You are allowed to vote.";
    }

    // loops 
    // while, do while, for 
    while ($age < 18) {
        echo "<br>";
        echo "You are not allowed to vote.";
        $age++;
    }

    for ($i=0; $i < 5; $i++) { 
        echo "<br>";
        echo "Hello $name";
    }

    // functions 
    // function name($parameter){
    //     ... code
    // }
    function sayHello($name){
        echo "<br>";
        echo "Hello $name";
    }
    sayHello("John");

    // swap two variables using a tempoary third variable 
    $a = 10;
    $b = 20;
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "<br> $a";
    echo "<br> $b";

    // check data types using var_dump 
    echo "<br>";
    var_dump($name);
    echo "<br>";
    var_dump($age);
    echo "<br>";
    var_dump($height);
    echo "<br>";
    var_dump($is_married);
    echo "<br>";
    var_dump($hobbies);
?>

<!-- php statements -->
<!-- variable and types -->
<!-- control flow -->
<!-- loops  -->
 <!-- functions  -->