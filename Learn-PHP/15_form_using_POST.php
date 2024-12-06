<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms using GET </title>
</head>
<body>
    <?php
   // var_dump($_GET); 
    var_dump($_POST)
    ?>

<!-- POST method helps to not print any params on the url and submits the form -->
 
<form action="15_form_using_POST.php" method="POST">
    <input type="text" name="username" value="<?php if( !empty($_POST['username'])) echo $_POST['username'];?>"/>
    <input type="password" name="password"/>
    <input type="submit" value="login"/>
</form>




</body>
</html>