<?php
    #Script principal para manejar las variables principales del Usuario

    /**
     * Inicialización de Variables 
     */
     define('__TITLE_SYSTEM','Password Management');
     $name = ""; //Nombre del usuario
     $lastName = ""; //Apellido del usuario
     $userName = ""; //Nick del usuario
     $birthDate = NULL; //Fecha de cumpleaños
     $luckyNumber = NULL; //Se guarda el número de la suerte
     $today = date('d/m/Y'); //Fecha actual
    
    define('__FACEBOOK_URL','www.facebook.com'); //URL Constante Facebook
    define('__GOOGLE_URL','www.google.com'); //URL Constante Google
    define('__INSTAGRAM_URL','www.instagram.com'); //URL Constante Instagram
    
    $availableSites = []; //Arreglo de sitios disponibles
    $availableSites["google"] = __GOOGLE_URL;
    $availableSites["facebook"] = __FACEBOOK_URL;
    $availableSites["instagram"] = __INSTAGRAM_URL;
   
    /**
     * Se arma dinamicamente de acuerdo al array de sitios disponibles
     */
    function showAvailableSites(){
        global $availableSites; //Referencia a la variable global para usar dentro de la funcion
        foreach($availableSites as $site){
            echo ("<option value=".$site.">".$site."</option>");
        }

    }

    /**
     * Funcion que permite hacer debug a un objeto
     */
    function debug($value){
        echo '<pre>';
        var_dump($value);
        echo '</pre>';

    }

    function footer(){
        global $today;
        echo <<<EOT
        <figure>
        <blockquote class="blockquote">
        <p>Se más fuerte que tus excusas.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
        Leído el día <cite title="Hoy">.$today.</cite>
        </figcaption></figure>
        EOT;
    }



?>
