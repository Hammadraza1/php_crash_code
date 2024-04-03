<?php
    for ($x = 0; $x <= 10; $x++){
        echo ' number '. $x.'<br>';
        echo $x;
    }

    $i = 1;
    while($i <= 15){
        echo 'number ' . $i . '<br>';
        $i++;
    }

    $d = 1;
    do{
        echo 'number ' . $d . '<br>';
        $d++;
    }while ($d <= 4);

    $posts = ['first post','second post','third post'];

    for($i = 0; $i < count($posts); $i++){
        echo $posts[$i];
    }

    foreach($posts as $index => $post){
        echo $index . $post . '<br>';
    }

    $person = [
        'first name' => 'hammad',
        'second name' => 'raza',
        'email' => 'hammadraza@gmail.com'
    ];

    foreach($person as $key => $value){
        echo "$key - $value <br>";
    }


?>