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


    </head> 

    <body>

        <?php foreach ($images as $image): ?>

            <img width="50%" height="50%" src = "<?php echo $image; ?>">

        <?php endforeach; ?>
        
    </body> 

</html> 