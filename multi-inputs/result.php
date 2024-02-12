<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body>

    <?php
        $count = (int)$_POST["count"];

        for ($i=0; $i < $count; $i++) {
            $value = $_POST["input$i"];
            if (!empty($value)) {
                echo "<h1>$value</h1>";
            }
        }
    ?>
    
</body>
</html>