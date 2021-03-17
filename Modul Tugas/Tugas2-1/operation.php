<?php

function operation()
{   
    $operator = $_GET['taskOption'];

    if($operator == "plus")
    {
    $hasil = $_GET['num1'] + $_GET['num2'];
   
    return $hasil;

    }elseif ($operator == "minus")
    {
    $hasil = $_GET['num1'] - $_GET['num2'];
    
    return $hasil;

    }elseif( $operator == "divide")
    {
    $hasil = $_GET['num1'] / $_GET['num2'];
    return $hasil;

    }elseif( $operator == "times")
    {
    $hasil = $_GET['num1'] * $_GET['num2'];
    return $hasil;
    }

}


?>