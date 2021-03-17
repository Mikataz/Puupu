<?php


function check(){
    include "dataMahasiswa.php";
    for($int = 0; $int < count($NRP); $int++){

        if($NRP[$int] % 2 == 0){
            

        }else{

            echo "NRP: " . $NRP[$int] . "<br>" . "Nama: " . $nama[$int] . "<br>" . "Tanggal Kelahiran: " . $lahir[$int] . "<br> <br>";
        }
    }
    
}

check();
?>