<?php
    $dta[0]["NIM"] = "2201010152";
    $dta[0]["NAMA"] = "I Made Dwipayana Hendrawan";
    $dta[0]["JKEL"] = "L";
    $dta[0]["TGL"] = "21 Desember 2003";
    $dta[0]["ALAMAT"] = "Gayang Sari gg wilis no 2 Kutuh, Kuta Selatan, Badung";
    $dta[0]["HOBBY"] = "PRAGOS";

    $dta[1]["NIM"] = "2201010110";
    $dta[1]["NAMA"] = "I Made Putra Sedana";
    $dta[1]["JKEL"] = "L";
    $dta[1]["TGL"] = "12 Oktober 2003";
    $dta[1]["ALAMAT"] = "Gumi Tabanan";
    $dta[1]["HOBBY"] = "Liu lah cewek";

    $dta[2]["NIM"] = "2201010467";
    $dta[2]["NAMA"] = "I Made Ananta Wijaya";
    $dta[2]["JKEL"] = "L";
    $dta[2]["TGL"] = "5 Februari 2004";
    $dta[2]["ALAMAT"] = "LAPAS Kerobokan";
    $dta[2]["HOBBY"] = "Nyari cewek namanya tata";

    $dta[3]["NIM"] = "2201010423";
    $dta[3]["NAMA"] = "I Made Dharma Putra";
    $dta[3]["JKEL"] = "L";
    $dta[3]["TGL"] = "17 Agustus 2003";
    $dta[3]["ALAMAT"] = "Pemogan";
    $dta[3]["HOBBY"] = "Punyah";

    $dta[4]["NIM"] = "2201010111";
    $dta[4]["NAMA"] = "NEKOOO";
    $dta[4]["JKEL"] = "P";
    $dta[4]["TGL"] = "1 Januari 2004";
    $dta[4]["ALAMAT"] = "Ubud";
    $dta[4]["HOBBY"] = "PUBG";

    header("Content-type: application/json; charset: utf-8");
    echo json_encode($dta);