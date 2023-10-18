<?php

require ("../../../bootstrap.php");

    $validate = validate([
        'name' => 's',
        'email' => 'e',
        'assunto' => 's'
    ]);

    dd($validate -> name);
    

    
    
?>
