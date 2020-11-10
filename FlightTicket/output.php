<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    echo '<div class="MainContainer">';
    echo '<div class="container2">';
    for ($i=0; $i < count($_POST); $i++)
    { 
        echo '<h1>'.str_replace("_"," ",array_keys($_POST)[$i]).':'.'<h1>';
    }
    echo '</div>';
    echo '<div class="container">';

    if($_POST['Bagazas'] > 20)
    {
        $_POST['Kaina'] = $_POST['Kaina'] + 30;
    }
    foreach($_POST as $value => $key)
    {
        echo '<h1>'.$key.'</h1>';
    }
    echo '</div>'; 

    echo '</div>'; 
    ?>
</body>
</html>