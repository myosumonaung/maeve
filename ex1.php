<!-- if/else: write a script that checks if a number is even or odd. -->
<?php
    $number = 15;
    echo "Checking Number : " . $number . "<br>\n";
    if($number %2 == 0){
        echo "$number is Even number.";
    }else{
        echo "$number is Odd Number.";
    }
    echo "<br>";

?>

<!-- Switch: Create a simple calculator using switch for operations (+, -, *, /). -->
<?php 
    $num1 = 20;
    $num2 = 5;
    $action = "+";  // +, -, *, / 
    $result = 0;

    switch ($action) {
        case '+':
            $result = $num1 + $num2;
            break;
        
        case '-':
            $result = $num1 - $num2;
            break;
        
        case '*':
            $result = $num1 * $num2;
            break;

        case '/':
            // Checking for division by zero
            if ($num2 != 0) {
                $result = $num1 / $num2;
            }else{
                echo "Error : Cannot be divided by zero (0).";
                exit();  // If an error occurs, stop and do not execute the code below
            }
            break;

        default:
            // If not the specified 4 symbols
            echo "Error : Invalid Operator";
            exit();
    }
    echo "Calculating Result : " . $num1 . " " . $action . $num2 . " = " . $result;
?>


<!-- function default value  -->
<?php  
    function greeting($name = "Guest"){
        return "Hello " . $name;
    }
    $result = greeting();
    echo "<br>";
    echo $result;

  // default value, 
  // type restriction
  // scope (local, global)


  // Project Start
  // PO - Product Owner | PCo - Project Coordinator, 
  // BA - Business Analyst, 
  // PM - Project Manager, 
  // QA - Quality Assurance, 
  // FE - Front End, 
  // BE - Back End 

    // Array
  // 1. Indexed Array
  // 2. Associative Array
  // 3. Multidimensional Array

  // 1. Indexed Array - eg
    $fruits = array("Apple","orange","Banana");
    //   foreach 
    foreach ($fruits as $fruit) {
        echo "<br>";
        echo $fruit;
    }

    // 2. Associative Array - eg 
    $person = array(
        "name" => "John",
        "age" => 30,
        "city" => "New York"
    );
    // foreach loop 
    foreach ($person as $key => $value) {
        echo "<br>";
        echo $key . ":" . $value;
    }

    // Ex 
    $mark  = array(
        "Aung" => 80,
        "Kyaw" => 40,
        "Hla" => 70
    );

    foreach ($mark as $key => $value) {
        if ($value >= 50) {
            echo "<br>";
            echo $key . " Passed.";
        }else{
            echo "<br>";
            echo $key . " Failed.";
        }
    }

    // Multidimensional Array 
    $users = array(
        array("name" => "Aung" , "age" => 28 , "city" => "Mandalay"),
        array("name" => "Kyaw" , "age" => 30 , "city" => "Bagan"),
        array("name" => "Hla" , "age" => 27 , "city" => "Bago")
    );

    foreach ($users as $user) {
        echo "<br>";
        echo $user["name"] . " , " . $user["age"] . " , " . $user["city"];
    }

?>

<?php  echo "<br> Hello"; ?>
<?= "<br> hello"; ?>