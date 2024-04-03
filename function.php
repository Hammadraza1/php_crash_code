 <?php
    // $y = 'raza';
    function registerUser($email){ // regular function
        // global $y;
        // echo $y;
        echo 'user registered';
        echo "$email . registered";
    }
    registerUser('hammad@gmail.com');

    function sum($n1, $n2){ // we can also use as default value here $n1 = 4, $n2 = 5
        return $n1 + $n2;
    }
    echo sum(5,5);

    $substract = function($n1, $n2){
        return $n1 - $n2; //ananomous function
    };

    echo $substract(10,5);

    $multiply = fn($n1, $n2) => $n1 * $n2; //arrow function
    echo $multiply(20,2);
 ?>