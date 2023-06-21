<?php
    
    function TentangAplikasi(){
        echo "<h3>Aplikasi APAsaja</h3>";
        echo "<sup>versi 1.0</sup>";
    }

    function cetaklabel01($tx){
        echo "Isi Label : ".$tx;
    }

    function cetaklabel02($tx="Isikan Label"){
        echo "Isi Label : ".$tx;
    }

    function jumlahkan($angka1=0, $angka2=0){
        return $angka1+$angka2;
    }