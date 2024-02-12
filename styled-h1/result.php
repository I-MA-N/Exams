<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    
    <?php
        $backColor = $_POST["backColor"];
        $foreColor = $_POST["foreColor"];
        $fontName = $_POST["fontName"];
        $fontSize = $_POST["fontSize"];

        function printH1($backColor, $foreColor, $fontName, $fontSize) {
            $styleStr = "
                background-color: $backColor;
                color: $foreColor;
                font-family: $fontName;
                font-size: $fontSize;
                text-align: center;
            ";
            echo "<h1 style='$styleStr'>Welcome to result</h1>";
        }

        printH1($backColor, $foreColor, $fontName, $fontSize);

        // => Second way
        // if (
        //     isset($backColor) && !empty($backColor) &&
        //     isset($foreColor) && !empty($foreColor) &&
        //     isset($fontName) && !empty($fontName) &&
        //     isset($fontSize) && !empty($fontSize)
        // ) {
        //     printH1($backColor, $foreColor, $fontName, $fontSize);
        // } else {
        //     echo "<script>
        //         alert('Please fill all the fillds!');
        //         window.location.replace('index.php');
        //     </script>";
        // }
    ?>

</body>
</html>