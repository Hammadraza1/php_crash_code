<?php
    $fruits = ['apple','orange','pear'];
    
    // get length
    // echo count($fruits);

    //search array
    // echo in_array('apple',$fruits); //doubt**

    //add to array
    $fruits[] = 'grape';
    array_push($fruits, 'watermelon','melon');
    array_unshift($fruits,'pine');

    //remove from arrray
    array_pop($fruits);
    array_shift($fruits);
    unset($fruits[2]);

    print_r($fruits);

    //split into 2 chunk
    $chunkedArray = array_chunk($fruits, 2);
    print_r($chunkedArray);

    //merge array

    $arr1 = [1,2,3];
    $arr2 = [4,5,6];

    $arr3 = array_merge($arr1, $arr2);
    print_r($arr3);
    
    //like key and value use array combine

    $a = ['green','red','yellow'];
    $b = ['avacado', 'apple', 'banana'];

    $c = array_combine($a, $b);

    print_r($c);

    $key = array_keys($c);
    print_r($key);
    

    // to flip the above data 
    $flipped = array_flip($c);
    print_r($flipped);

    //any range number btwn 2 numbers
    $numbers = range(1,20);
    // print_r($numbers);

    //map array its does not change length of an array
    $newNumbers = array_map(function($number) {
        return 'number ' . $number;
    },$numbers );

    // print_r($newNumbers);

    $lessthan10 = array_filter($numbers, fn($number) => $number <= 10);

    print_r($lessthan10);

   //reduce method

   $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
   print_r($sum)
   
?>