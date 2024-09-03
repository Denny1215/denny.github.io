<?php
    $fruits = ['grapes', 'apple', 'mango', 'pineapple'];

    // for($x = 0; $x < sizeof($fruits); $x++ ) {
    //     echo "<p>{$fruits[$x]}</p>";
    // }

    foreach($fruits as $key => $fruit) {
        // $fruit = $fruits[$key];
        echo "<p>$key - {$fruit}</p>";
    }


    $person = [
        'name' => 'Denny',
        'status' => 'single',
        'occupation' => 'Chauffer',
        'hobby' => 'Playing basketball'
    ];

    // print_r($person);

    echo "<br /><br />";

    $obj_person = (object) $person;
    // print_r($obj_person);

    echo $obj_person->hobby;
?>