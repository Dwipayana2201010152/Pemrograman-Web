<?php
    $dta["NIM"] = "2201010152";
    $dta["NAMA"] = "I Made Dwipayana Hendrawan🔥";
    $dta["JKEL"] = "L";
    $dta["TGL"] = "21 Desember 2003";
    $dta["ALAMAT"] = "Gayang Sari gg wilis no 2 Kutuh, Kuta Selatan, Badung";
    $dta["HOBBY"] = "SADBOI🔥";




    header("Content-type: application/json; charset: utf-8");
    echo json_encode($dta);