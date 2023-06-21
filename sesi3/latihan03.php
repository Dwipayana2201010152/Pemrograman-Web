<?php

    $mhs = array(
        array("NAMA"=>"PABLO ESCOBRA","ID"=>"0420","KOTA"=>"KOLOMBIA"),
        array("NAMA"=>"UPIN ESPYHTON","ID"=>"4200","KOTA"=>"NGAWI"),
        array("NAMA"=>"IPIN ESDERIK","ID"=>"4002","KOTA"=>"BOGOR"),
        array("NAMA"=>"IJAT ESKRIM","ID"=>"4020","KOTA"=>"JOGJA")
    );

    // echo $mhs[1]["NAMA"];
    // echo "<hr>";
    // print_r($mhs);
    // echo "<hr>";

/*     foreach($mhs as $data){

        foreach($data as $lb => $nval){
            echo $lb . " : " .  $nval . "<br>";
        }

        echo "<br>";
    } */


    header("content-type: application/json");
    echo json_encode($mhs);