<?php
    if (!empty($_GET) && !empty($_POST)) {
        print "<h1>All fields are required</h1>";
    }
    else if (isset($_GET['firstName']) && isset($_GET['lastName'])) {
        $fName = $_GET['firstName'];
        $lName = $_GET['lastName'];

        print "<h1>Hello $fName $lName, welcome to my PHP playground, designed to simulate the value of server-side development and use in web development!</h1>";
    }
    else if (isset($_GET['hammNumber'])) {
        $hNum = $_GET['hammNumber'];
        
        if ($hNum < 1) {
            print "<h1>Number must be greater than 0!</h1>";
        }

        // Hamming Number Function found Online
        // Cite: https://www.w3resource.com/php-exercises/challenges/1/php-challenges-1-exercise-20.php
        function is_hamming_numbers($x) {
            if ($x == 1) {
                return "<h1>The provided number is a hamming number!</h1>";
            }
            if ($x % 2 == 0) {
                return is_hamming_numbers($x/2);
            }
            if ($x % 3 == 0) {
                return is_hamming_numbers($x/3);
            }
            if ($x % 5 == 0) {
                return is_hamming_numbers($x/5);
            }	
            return "<h1>The provided number is not a hamming number!</h1>";
        }
        print(is_hamming_numbers($hNum));
    }
    else if (isset($_POST['Username']) && isset($_POST['Password'])) {
        $user = $_POST['Username'];
        $pass = $_POST['Password'];

        if ($user == 'test-user' && $pass == 'test-password') {
            print "<h1>Credentials validated with POST</h1>";
        }
        else {
            print "<h1>Username or password is incorrect</h1>";
        }
    }
    else if (isset($_GET['valueOne']) && isset($_GET['valueTwo'])) {
        $a = ord($_GET['valueOne']);
        $b = ord($_GET['valueTwo']);

        // Parts of this found online
        // Cite: https://stackoverflow.com/questions/40440136/how-to-print-a-list-of-all-ascii-characters-with-php
        if ($a < $b) {
            print "<h1>[ ";
            for ($i = $a; $i < $b; $i++) {
                echo utf8_encode( chr($i) ) . ", ";
            }
            echo utf8_encode( chr($i) );
            print " ]</h1>";
        }
        else if ($a > $b) {
            print "<h1>[ ";
            for ($j = $a; $j > $b; $j--) {
                echo utf8_encode( chr($j) ) . ", ";
            }
            echo utf8_encode( chr($j) );
            print " ]</h1>";
        }
        else {
            print "<h1>[" . chr($a) . "] ... Values are the same</h1>";
        }
    }
    else if (isset($_GET['Height']) && isset($_GET['Radius'])) {
        $ht = $_GET['Height'];
        $rad = $_GET['Radius'];

        if ($ht > 0 && $rad > 0) {
            $total = (2*pi()*$ht*$rad) + (2*pi()*$rad*$rad); // A=2πrh+2πr^2
            $total = number_format($total, 2, '.', ',');
            print "<h1>Surface Area = $total</h1>";
        }
        else {
            print "<h1>Number must be positive!</h1>";
        }
    }
    else {
        print "<h1>All fields are required</h1>";
    }
?>