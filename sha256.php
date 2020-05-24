<?php
$sha256 = "Not computed";
if (isset($_GET['encode'])) {
    $sha256 = hash('sha256', $_GET['encode']);
}
?>
<!DOCTYPE html>

<head>
    <title>Pritam Singh SHA-256</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
</head>

<body class="ui container" style="background-color:black; color:white; text-align:center">

<div class= "ui black" style="margin-top:10% ;background-color:black">
    <h1>SHA-256 Maker</h1>
    <p><strong><em>Accepted [ a-z, A-Z, 0-9 ]</em></strong></p>
    <h4>SHA-256 : <span style="color:red ; background-color:black"><?= htmlentities($sha256); ?></span></h4>
    <form>
        <input type="text" placeholder="Example - Ab12, AB12, he99 [ a-z, A-Z, 0-9 ]" name="encode" size="40" />
        <input type="submit" value="Compute SHA-256" />
        <p><br><em>Note:- Please Enter Exact 4 characters. (This can hash any number of characters, but our Cracking application currently supports just 4 characters) </em></p><br>
    </form>
    <p><button class="ui green button"><a style="color:white" href="sha256.php">Reset</a></button></p>
    <p><button class="ui red button"><a style="color:white" href="index.php">Back to Cracking</a></button></p>

    <br><br><br><br><p style="color: #404040">Made By Pritam Singh ❤️</p>

    
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>

</div>
</body>

</html>