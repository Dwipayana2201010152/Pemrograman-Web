<?php

    $cars = array("Nissan","BMW","Toyota","Audi");

    $jmldata = count($cars);
    echo "Jumlah Data Mobil : ". $jmldata ."<br>";
    for($i=0;$i<4;$i++){
        echo "<br>Mobil ". $cars[$i]. "🔥";
    }   

    echo "<hr>";

    echo "<ol class=\"Mobil\">";
    foreach($cars as $data){
        echo "<li>Mobil" . $data . "</li>";
    } 
    echo"</ol>";
    