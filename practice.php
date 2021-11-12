<?php

    // echo is used to print data onto the screen 
    echo 'Hello mike';

    // variables, you dont have to define if its an int or a const, php will do it for you
    echo '<hr>';
    $a = 30;
    echo '<br>';
    $c = 'Tell me more about php';
    $b = 50;
    echo $a . $c;

    // operations in php 
    $r = $a + $b;
    // $r = $a - $b;
    // $r = $a * $b;
    // $r = $a / $b;
    // $r = $a % $b;

    echo $r;
    echo '<br>';
    echo '<hr>';

    // conditional statements in php 
    if($a > $b){
        echo 'a is greater than b';
    } elseif ($a == $b) {
        echo 'a is equal to b';
    } else {
        echo 'a is smaller than b';
    };

    echo '<br>';
    echo '<hr>';

    // arrays in php 
    // we have two types of arrays on php one is index array 
    $index_array = ['1', '2', '3', '4', 1234];
    echo $index_array[1];

    echo '<br>';
    // associative array 
    $associative_array = [2 => 'text', 'pens' => 10, 'books' => 15];
    echo $associative_array['2'];

    echo '<br>';
    // loops in php 
    // for loop 
    for($i = 0; $i < 20; $i++ ) {
        echo $i;
    }
    echo '<br>';
    // while loop 
    while($a < $b) {
        echo $a;
        $a++;
    }

    echo '<br>';
    foreach($associative_array as $ar) {
        echo $ar;
    }

    echo '<br>';
    if(isset($_GET['username'])) {
        echo 'Hello'. $_GET['username'];
    }

    echo '<br>';
    // functions in php 
    (function () {
        echo 'Hello its mike';
    })()

?>