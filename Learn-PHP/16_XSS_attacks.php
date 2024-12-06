<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms using GET </title>
</head>
<body>
    <?php
    var_dump($_POST)
    ?>

<!-- htmlspecialchars prevent cross site scripting as it converts the tags entered in input into special quotes with help of which no one can manipulate data -->
 
<form action="16_XSS_attacks.php" method="POST">
    <input type="text" name="firstname" value="<?php if( !empty($_POST['firstname'])) echo htmlspecialchars( $_POST['firstname'],ENT_QUOTES,UTF-8);?>"/>
    <input type="submit" value="Submit"/>
</form>




</body>
</html>