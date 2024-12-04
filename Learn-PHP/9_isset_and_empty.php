<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iset and empty</title>
</head>
<body>
    <pre>
        <?php
        $pagetitle="PHP is amazing";
        var_dump(isset($pagetitle)); //checks whether that the variable exists or not

        $page="";
        var_dump((empty($page))); // checks both variable and value is empty or not
        ?>
        </pre>
</body>
</html>