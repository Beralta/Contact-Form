<?php

function dd($dump) {
    var_dump($dump);
    die();
}

function request() {
    $request = $_SERVER['REQUEST_METHOD'];

    if($request == $_POST) {
        dd($_POST);
    }
    
    return $_GET;

}
