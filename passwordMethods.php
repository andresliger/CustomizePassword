<?php

    require 'utils.php';
    define('__TITLE_SYSTEM','Password Management');

    /**
     * Funcion que completa la tabla con el registro y la clave actualizada
     */
    function generatePasswordResult(){
        global $_POST;  //Variable global que tiene el arreglo $_POST      
        echo '
            <tbody>
            <tr>
            <td>1</td>
            <td>'.$_POST['website'].'</td>';
        switch ($_POST['website']) {
            case "www.google.com":
                echo "<td>".generateGooglePassword()."</td>";
                break;
            case "www.facebook.com":
                echo "<td>".generateFacebookPassword()."</td>";
                break;
            case "www.instagram.com":
                echo "<td>".generateInstagramPassword()."</td>";
                break;
        };

        echo ' </tr>
               </tbody>';

    }

    /**
     * Tomara todas las vocales de cada registro más día de la fecha de nacimiento, más número de la suerte.
     */
    function generateGooglePassword(){
        $response = "";
        if(isset($_POST['firstName']) && isset($_POST['confirmFirstName']))
            $response .= removeConsonantsFromString($_POST['firstName']);
        
        if(isset($_POST['lastName']) && isset($_POST['confirmLastName']))
            $response .= removeConsonantsFromString($_POST['lastName']);

        if(isset($_POST['userName']) && isset($_POST['confirmUserName']))
            $response .= removeConsonantsFromString($_POST['userName']);
        
        if(isset($_POST['birthdate']) && isset($_POST['confirmBirthDate']) ){
            $time = strtotime($_POST['birthdate']);
            $new_date = date('d', $time);
            $response .= $new_date;
        }
        
        if(isset($_POST['luckyNumber']) && isset($_POST['confirmLuckyNumber']) ){
            $response .= $_POST['luckyNumber'];
        }
        
        return $response;
    }

    /**
     * Tomará todas las consonantes de cada registro más día de la fecha de nacimiento, más número de la suerte.
     */
    function generateFacebookPassword(){
        $response = "";
        if(isset($_POST['firstName']) && isset($_POST['confirmFirstName']))
            $response .= removeVowelsFromString($_POST['firstName']);
        
        if(isset($_POST['lastName']) && isset($_POST['confirmLastName']))
            $response .= removeVowelsFromString($_POST['lastName']);

        if(isset($_POST['userName']) && isset($_POST['confirmUserName']))
            $response .= removeVowelsFromString($_POST['userName']);
        
        if(isset($_POST['birthdate']) && isset($_POST['confirmBirthDate']) ){
            $time = strtotime($_POST['birthdate']);
            $new_date = date('d', $time);
            $response .= $new_date;
        }
        
        if(isset($_POST['luckyNumber']) && isset($_POST['confirmLuckyNumber']) ){
            $response .= $_POST['luckyNumber'];
        }
        
        return $response;
    }

    /**
     * Combinará una a una las letras de cada palabra y al finalizar se concatenará con la edad multiplicada por el número de la suerte.
     */
    function generateInstagramPassword(){
        
        $max = 0;
        $response = "";
        $arrayFirstName = [];
        $arrayFirstName = [];
        $arrayFirstName = [];
        
        if(isset($_POST['firstName']) && isset($_POST['confirmFirstName'])){
            $arrayFirstName = str_split($_POST['firstName']);
            if($max<count($arrayFirstName))
                $max=count($arrayFirstName);

        }

        if(isset($_POST['lastName']) && isset($_POST['confirmLastName'])){
            $arrayLastName = str_split($_POST['lastName']);
            if($max<count($arrayLastName))
                $max=count($arrayLastName);
                
        }

        if(isset($_POST['userName']) && isset($_POST['confirmUserName'])){
            $arrayUserName = str_split($_POST['userName']);
            if($max<count($arrayUserName))
                $max=count($arrayUserName);
                
        }
        
        for($i=0; $i<$max;$i++){
            if(count($arrayFirstName)>$i)
                $response .= $arrayFirstName[$i];
            if(count($arrayLastName)>$i)
                $response .= $arrayLastName[$i];
            if(count($arrayUserName)>$i)
                $response .= $arrayUserName[$i];
        }

        $response .= getAge($_POST['birthdate'])*($_POST['luckyNumber']);

        return $response;
    }


    /**
     * Funcion que permite hacer debug a un objeto
     */
    function debug($value){
        echo '<pre>';
        var_dump($value);
        echo '</pre>';
    }   

?>
