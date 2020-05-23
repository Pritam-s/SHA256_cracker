<?php
$error = false;
$sha256 = false;
$code = "";
if ( isset($_GET['code']) ) {
    $code = $_GET['code'];
    if ( strlen($code) != 2 ) {
        $error = "Input must be exactly two characters";
    } else if ( $code[0] < "a" || $code[0] > "z" || 
                $code[1] < "a" || $code[1] > "z" ) {
        $error = "Input must two lower case letters";
    } else {
        $sha256 = hash('sha256', $code);
    }
}
?>
<!DOCTYPE html>
<head><title>Pritam Singh PIN Code</title></head>
<body>
<h1>sha256 PIN Maker</h1>
<?php
if ( $error !== false ) {
    print '<p style="color:red">';
    print htmlentities($error);
    print "</p>\n";
}

if ( $sha256 !== false ) {
    print "<p>sha256 value: ".htmlentities($sha256)."</p>";
}
?>
<p>Please enter a two-leter key for encoding.</p>
<form>
<input type="text" name="code" value="<?= htmlentities($code) ?>"/>
<input type="submit" value="Compute sha256 for CODE"/>
</form>
<p><a href="makecode.php">Reset</a></p>
<p><a href="index.php">Back to Cracking</a></p>
</body>
</html>
