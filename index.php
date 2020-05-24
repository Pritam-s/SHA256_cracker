<!DOCTYPE html>

<head>
    <title>Pritam Singh SHA-256256 Cracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
</head>

<body class= "ui container" style="background-color:black;">


<div class= "ui black" style="margin-top:10% ;background-color:black; color: white; text-align:center;">

    <h1>SHA-256 cracker</h1>
    <p>This application takes an SHA-256 hash of a four digit pin/characters and check all the possible four digit PINS/characters to determine the original PIN/characters. </p>
    
    <p><strong>Accepted [ a-z, A-Z, 0-9 ]</strong></p>

    
    <pre>
Debug Output:
<?php
$goodtext = "Not found";


// If there is no parameter, this code is all skipped
if (isset($_GET['sha256'])) {
    $time_pre = microtime(true);
    $sha256 = $_GET['sha256'];

    // This is our alphabet
    $txt = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()_=+';
    $show = 15;

    // Outer loop go go through the alphabet for the
    // first position in our "possible" pre-hash
    // text

    //1st
    for ($i = 0; $i < strlen($txt); $i++) {
        $ch1 = $txt[$i];   // The first character 1st

        //2nd
        // Our inner loop Note the use of new variables
        // $j and $ch2 
        for ($j = 0; $j < strlen($txt); $j++) {
            $ch2 = $txt[$j];   // Our second character 2nd


            //3rd
            // Our inner loop Note the use of new variables
            // $k and $ch3 
            for ($k = 0; $k < strlen($txt); $k++) {
                $ch3 = $txt[$k];  //our third character 3rd


                //4th
                // Our inner loop Note the use of new variables
                // $l and $ch4 
                for ($l = 0; $l < strlen($txt); $l++) {
                    $ch4 = $txt[$l];   //our fourth character 4th


                    //Better not be performed unless optimized and in fewer arrays and loops 

                    /*
                    //5th
                    // Our inner loop Note the use of new variables
                    // $l and $ch4 
                    for ($m = 0; $m < strlen($txt); $m++) {
                        $ch5 = $txt[$m];   //our fifth character 5th

                        
                        //6th
                        // Our inner loop Note the use of new variables
                        // $l and $ch4 
                        for ($n = 0; $n < strlen($txt); $n++) {
                            $ch6 = $txt[$n];   //our sixth character 6th


                            //7th
                            // Our inner loop Note the use of new variables
                            // $l and $ch4 
                            for ($o = 0; $o < strlen($txt); $o++) {
                                $ch7 = $txt[$o];   //our seventh character 7th

                                

                                

                                
                                //8th
                                // Our inner loop Note the use of new variables
                                // $l and $ch4 
                                for ($p = 0; $p < strlen($txt); $p++) {
                                    $ch8 = $txt[$p];   //our eightth character 8th



                                //9th
                                // Our inner loop Note the use of new variables
                                // $l and $ch4 
                                for ($q = 0; $q < strlen($txt); $q++) {
                                    $ch9 = $txt[$q];   //our ninth character 9th



                                //10th
                                // Our inner loop Note the use of new variables
                                // $l and $ch4 
                                for ($r = 0; $r < strlen($txt); $r++) {
                                    $ch10 = $txt[$r];   //our tenth character 10th

                                */





    
                                    // Concatenate the four characters together to 
                                    // form the "possible" pre-hash text
                                    $try = $ch1 . $ch2 . $ch3 . $ch4 ;//. $ch5. $ch6. $ch7. $ch8. $ch9. $ch10;

                                    // Run the hash and then check to see if we match
                                    $check = hash('sha256', $try);
                                    if ($check == $sha256) {
                                        $goodtext = $try;
                                        break;   // Exit the inner loop
                                    }

                                    // Debug output until $show hits 0
                                    if ($show > 0) {
                                        print "$check $try\n";
                                        $show = $show - 1;

                                    }
                                    }
                                }
                            }
                        }
    

    // Compute elapsed time
    $time_post = microtime(true);
    print "Elapsed time: ";
    print $time_post - $time_pre;
    print "\n";
}
?>
</pre>
    <!-- Calling htmlentities() -->
    <h3>Pin : <span style="color:red ; background-color:black"><?= htmlentities($goodtext); ?></span></h3>
    <form>
        <input type="text" placeholder="Please enter SHA-256 hash values of exact 4 characters [ a-z, A-Z, 0-9 ]" name="sha256" size="80" />
        <input type="submit" value="Crack SHA-256" />
        <p><br><em>Note:- It may take upto 10-30 secs for the result to be displayed.</em></p><br>
    </form>
    <!-- <ul class= "ui justified container"> -->
        <p><button class="ui green button"><a style="color:white !important;" href="index.php">Reset</a></button></p><br>
        <p><button class="ui violet button"><a style="color:white !important;" href="sha256.php">SHA-256 Encoder</a></button></p><br>
        <!--<li><a href="makecode.php">sha256 Code Maker</a></li> -->
        <p><button  class="ui red button"><a style="color:white !important;" href="https://github.com/SaGE1704/SHA256_cracker" target="_blank">Source code for this application</a></button></p>
       
        <br><br><br><br><p style="color: #404040">Made By Pritam Singh ❤️</p>
</div>



    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
</body>

</html>