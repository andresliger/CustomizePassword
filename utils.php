<?php
    #Fichero utilitario para las funciones de generación de password

    define('__VOWELS',array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " "));
    define('__CONSONANTS',array("b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "ñ","p","q","r","s","t","v","w","x","y","z",
                                "B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "Ñ","P","Q","R","S","T","V","W","X","Y","Z"," "));

    function removeVowelsFromString($mString){
        $auxString = $mString;
        $auxString = str_replace(__VOWELS, "", $auxString);
        return  $auxString;
    }

    function removeConsonantsFromString($mString){
        $auxString = $mString;
        $auxString = str_replace(__CONSONANTS, "", $auxString);
        return  $auxString;
    }

    function getAge($date) {
        $date_time = strtotime($date);
        $date_year = date('Y', $date_time);
        $age = date('Y') - $date_year;
        if(strtotime('+' . $age . ' years', $date_time) > time()) $age--;
        return $age;
    }

?>