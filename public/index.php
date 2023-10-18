<?php require('../bootstrap.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php 
        try {
            require load();
        } catch (Exception $ed) {
            echo $ed->getMessage();
        }  ?>
    </div>
    
</body>
</html>