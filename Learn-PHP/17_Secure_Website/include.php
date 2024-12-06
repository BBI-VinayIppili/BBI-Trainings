<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function e($value)
    {
        return htmlspecialchars($value,ENT_QUOTES, 'UTF-8');
    }

    $pages = [
        'High_Mountains' => 'High Mountains',
        'Lake_Town' => 'Lake Town',
        'Rock_mountain' => 'Rock mountain',
        'Snow_fall' => 'Snow fall'
    ];
    ?>


    <form method="GET" action="include.php">
        <select name="page">
            <option value="">Please Select</option>

            <?php foreach ($pages as $key => $value): ?>

                <option value="<?php echo e($key) ?>"<?php if (!empty($_GET['page']) && $_GET['page'] == $key) echo "selected"; ?>>
                    <?php echo e($value); ?>

                </option>

            <?php endforeach; ?>
        </select>
        <input type="submit" Value="Submit" />
    </form>


    <!-- <form method="GET" action="include.php">
        <select name="page">
        <option value="">Please Select</option>
            <option value="High_Mountains"<?php /*if($_GET['page']=='High_Mountains') echo "selected";*/ ?>>High Mountains</option>
            <option value="Lake_Town"<?php /*if($_GET['page']=='Lake_Town') echo "selected";*/ ?>>Lake Town</option>
            <option value="Rock_mountain"<?php /*if($_GET['page']=='Rock_mountain') echo "selected";*/ ?>>Rock mountain</option>
            <option value="Snow_fall"<?php /*if($_GET['page']=='Snow_fall') echo "selected";*/ ?>>Snow fall</option> 
        </select>
        <input type="submit" Value="Submit"/>
    </form> -->

    <?php
    //    echo file_get_contents("pages/{$_GET['page']}.php");
    ?>


    <?php
    if (!empty($_GET['page'])) {
        $page = $_GET['page'];
        if (!empty($pages[$page])) {
            echo file_get_contents("pages/{$page}.php");
        }
    }
    ?>
</body>

</html>