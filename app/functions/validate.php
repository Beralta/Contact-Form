<?php

function validate(array $fields) {


    $validate = [];

    $request = request();

    foreach ($fields as $key => $type) {
        switch ($type) {
            case 's':
                $validate[$key] = strip_tags($_POST[$key]);
                break;
            case 'e':
                $validate[$key] = filter_var($request[$key], FILTER_SANITIZE_EMAIL);
                break;
            case 'i':
                $validate[$key] = filter_var($request[$key], FILTER_SANITIZE_NUMBER_INT);
                break;           
            
            default:
                 echo "Deu ruim";
                break;
        }
    }

    return (object)$validate;

}