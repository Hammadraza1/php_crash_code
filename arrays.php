<?php
    $numbers = [1,44,99];
    print_r($numbers[1]); //var_dump
    var_dump($numbers);

    //asscociative array
    $colours = [
        1 => 'red',
        5 => 'blue',
        4 => 'green'
    ];
    echo $colours[4];


    $hex = [
        'red' => '#f00',
        "blue" => '#0f0',
        "green" => '#00f'
    ];

    echo $hex['blue'];
    // var_dump('red');

    $person = [
        'first_name' => 'hammad',
        'last_name' => 'raza',
        'email' => 'ahmedhammadraza@gmail.com'
    ];

    echo $person['first_name'];

    $people = [
        [
            'first_name' => 'hammad',
            'last_name' => 'raza',
            'email' => 'ahmedhammadraza@gmail.com'
        ],
        [
            'first_name' => 'muqthdeer',
            'last_name' => 'attari',
            'email' => 'attari@gmail.com'
        ],
        [
            'first_name' => 'munstansir',
            'last_name' => 'raza',
            'email' => 'munstansirraza@gmail.com'
        ],
        ];

        echo $people[1]['email'];

        var_dump(json_encode($people));

