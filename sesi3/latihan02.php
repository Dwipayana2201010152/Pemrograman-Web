<?php
    $age = array("Jordi"=>"20", "JohnPablo"=>"12", "Pakde Biden"=>"105","Elon Musk"=>"35");

    echo "Umur dari JohnPablo ".$age["JohnPablo"]. " tahun<br>";

    echo"<hr>";

    foreach($age as $nama=> $umur){
        echo "Umur dari ". $nama . "    : " . $umur . "<br>";
    }