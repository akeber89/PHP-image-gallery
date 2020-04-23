<?php

require 'directoryreader.php';

$images = directoryreader('images');

if (!$images){
    die('Could not load files.');
}


?>

<!doctype html> 

 
<html lang="en"> 

    <head> 

        <meta charset="utf-8"> 

        <title>Image gallery</title> 

        <link rel="stylesheet" href="styles.css">


    </head> 

    <body class = container>

        <?php foreach ($images as $image): ?>

            <img src = "<?php echo $image; ?>">

        <?php endforeach; ?>
        
    </body> 

</html> 