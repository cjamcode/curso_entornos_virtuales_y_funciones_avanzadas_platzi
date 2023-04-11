<?php

function get_country_name_switch($country){
    $name = "";

    switch ($country) {
        case 'MX':
            $name = "Mexico";
            break;

        case 'COL':
            $name = "Colombia";
            break;

        case 'USA':
            $name = "ESTADOS UNIDOS";
            break;
        
        default:
            $name = "Lo siento, no reconozco el pais";
            break;  
    }

    return $name;
}

$pais = get_country_name_switch("MX");

echo $pais;

function get_country_name_match($country){
    
    return match($country){
        "MX" => "Mexico",
        "COL" => "Colombia",
        "USA" => "Estados Unidos",
        default => "NO reconozco el pais"
    };
}

$pais2 = get_country_name_match("MX");

echo $pais2;