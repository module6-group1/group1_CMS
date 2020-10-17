<?php
    ini_set('display_errors', 1); 

    $firstName = "Jane";
    $lastName = "Doe";
    $age = 20;
    $married = true;
    $childrenNames = array("Alice", "Bob" );

    $fullName = $firstName . " " . $lastName;
    // $dogYears = $age/7;
    // $isAdult = $dogYears > 4;
    // $isSettled = $isAdult and $married;

    function getIsSettled($age, $married){
        $dogYears = $age/7;
        $isAdult = $dogYears > 4;
        $isSettled = $isAdult and $married;
        return $isSettled;

        echo $isSettled;
    }

    getIsSettled($age, $married);
    $isSettled = getIsSettled(35, false);

    echo $fullName;
    echo '<h1>Hello World</h1>';

    if ($isSettled){
        echo $fullName . " is settled.";
    } else {
        echo $fullName . " is not settled.";
    }
   
?>

