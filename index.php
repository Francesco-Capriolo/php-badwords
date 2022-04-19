<?php
    $paraghrap= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, asperiores minima ipsam ad, obcaecati tenetur ab a adipisci, quod aperiam sint? Dolor vel quam, minus corrupti eum ipsam atque voluptatum.";
    $name= $_GET['word'];
?>

<!DOCTYPE html>
    <html lang = "it">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    </head>
    <body>
        
            <?php
            echo $paraghrap;
            echo '<br>';
            echo strlen($paraghrap);
            echo '<br>';
            echo str_replace($name,'***', $paraghrap);
            ?>
    </body>

</html>