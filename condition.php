<?php 
    $age = 20;

    if($age >= 21){
        echo 'you are here';
    }else {
        echo 'sorry dear';

    }
    
    $t = date('H');
    
    if($t < 12){
        echo "good morning";
    }else if($t < 17){
        echo 'good afternoon';
    }else{
        echo 'good evening';
    }

    $post = ['first post'];

    if(!empty($post)){
        echo $post[0];
    }else{
        echo 'no posts';
    }
    
    echo !empty($post) ? $post[0] : 'no posts';
    

    $favclr = 'red';

    switch($favclr) {
        case 'red':
            echo 'this is red';
            break;
        case 'blue':
            echo 'this ois blue';
            break;
        case 'green':
            echo 'this is green';
            break;
        default:
        echo 'not found';
    }
?>