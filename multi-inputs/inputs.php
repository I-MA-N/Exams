<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputs</title>
    <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body>

    <form action="result.php" method="post">
        <?php
            if (isset($_POST["count"]) && !empty($_POST["count"]) && (int)$_POST["count"]) {
                $count = (int)$_POST["count"];
                echo "<input type='text' name='count' value='$count' hidden>";
    
                for ($i=0; $i < $count; $i++) { 
                    echo "<label for='input$i'>Input $i: </label>";
                    echo "<input type='text' name='input$i' id='input$i'>";
                }
            } else {
                echo "<script>
                    alert('Please enter a number!');
                    window.location.replace('index.php');
                </script>";
            }
        ?>

        <input type="button" value="Submit" id="btn">
    </form>

    <p id="error"></p>

    <script src="./assets/js/inputs.js"></script>
</body>
</html>