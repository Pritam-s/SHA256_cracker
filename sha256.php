<?php
$sha256 = "Not computed";
if ( isset($_GET['encode']) ) {
    $sha256 = hash('sha256', $_GET['encode']);
}
?>
<!DOCTYPE html>
<head><title>Pritam Singh sha256</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
</head>
<body class= "ui container" style="background-color:#262626; color:white">
<h1>sha256 Maker</h1>
<p><strong><em>Accepted [ a-z, A-Z, 0-9 ]</em></strong></p>
<p>sha256: <?= htmlentities($sha256); ?></p>
<form>
<input type="text" placeholder="Example - Ab12, AB12, he99 [ a-z, A-Z, 0-9 ]" name="encode" size="40" />
<input type="submit" value="Compute sha256"/>
<p><em>Note:- Please Enter Exact 4 characters. </em></p>
</form>
<p><button  class="ui green button"><a style="color:white" href="sha256.php">Reset</a></button></p>
<p><button  class="ui red button"><a style="color:white" href="index.php">Back to Cracking</a></button></p>
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
</body>
</html>
