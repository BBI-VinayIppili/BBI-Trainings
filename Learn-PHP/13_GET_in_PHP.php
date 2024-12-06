<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using $_GET </title>
</head>
<body>
    <?php
    var_dump($_GET); 
    ?>

    <?php if(!empty($_GET["book"])):?>
    <h1><?php echo $_GET['book']; ?></h1>
    <?php endif; ?>
    <br>


    <?php /*
<a href="13_GET_in_PHP.php?book=HarryPotter">Harry Potter</a> <br>
<a href="13_GET_in_PHP.php?book=Beauty&Beast">Beauty & the beast</a>
*/?>

<!-- GET gives the params on the url and we can see and manipulate -->

<a href="13_GET_in_PHP.php?<?php echo http_build_query(['book'=> 'Harry Potter']);?>">Harry Potter</a><br>
<a href="13_GET_in_PHP.php?<?php echo http_build_query(['book'=> 'Beauty & the beast']);?>">Beauty & the Beast</a>
 <!-- http build query helps to add symbols like & in the url parameters so that there is no problem during the submitting the form -->




</body>
</html>