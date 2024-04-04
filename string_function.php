<?php
    $string = 'Hello World';

    //get the length of a string
    echo strlen($string);

    //find the position of the first occurrence of a substring in a string
    echo strpos($string, 'o');

    //find the last word of occurrence in a string
    echo strrpos($string,'o');

    //reverse a string
    echo strrev($string);

    //convert alll characters to a lowercase
    echo strtolower($sttring);

    //convert all char to uppercase
    echo strtoupper($string);

    //uppercase the first word 
    echo ucwords($string);

    //string replace
    echo str_replace('World', 'Everyone', $string);

    //return portion of a string specifed by the offsset and length
    echo substr($string,0,5);
    echo substr($string,5);

    

?>