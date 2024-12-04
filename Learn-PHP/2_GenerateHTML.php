<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate</title>
    <style>
        .body-1{background-color: red;}
        .body-2{background-color: blue;}
        .body-3{background-color: green;}
        .body-4{background-color: aqua;}
        .body-5{background-color: yellow;}
        .body-6{background-color: purple;}
        
    </style>
</head>
<body class="body-<?php echo rand(1,6)?>">
    <?php echo "<h1>This is Background generator</h1>"?>
</body>
</html>