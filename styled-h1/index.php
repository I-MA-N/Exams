<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body>

    <!-- We have two ways to validate inputs:
        1: validate in result.php
        2: validate using js & e.preventDefault() on form submitting
    -->

    <h1 style="margin-bottom: 30px;">Set styles for h1</h1>

    <form action="result.php" method="post">
        <label for="backColor">Background color: </label>
        <input type="text" name="backColor" id="backColor">

        <label for="foreColor">Foreground color: </label>
        <input type="text" name="foreColor" id="foreColor">

        <!-- Text input | Select box -->
        <label for="fontName">Font name: </label>
        <input type="text" name="fontName" id="fontName">

        <!-- <select name="fontName" id="fontName">
            <option value="auto">auto</option>
            <option value="cursive">cursive</option>
            <option value="monospace">monospace</option>
            <option value="sans-serif">sans-serif</option>
            <option value="serif">serif</option>
        </select> -->

        <label for="fontSize">Font size: </label>
        <input type="text" name="fontSize" id="fontSize">

        <input type="submit" value="Submit">
    </form>

    <!-- => First way -->
    <script src="./assets/js/index.js"></script>
    
</body>
</html>