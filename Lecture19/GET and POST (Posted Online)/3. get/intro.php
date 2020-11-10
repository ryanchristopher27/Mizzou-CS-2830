<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri 


    print_r($_GET);
    
    // The format of the URL will be something like:
    // http://example.com/get/intro.php?name=Prof.Wergeles&lang=ch

    $name = $_GET['name'];

    $language = $_GET['language'];

    if ($language == 'ch') {
        print "Ni Hao $name";
    }
    else {
        print "Hello $name";
    }

?>