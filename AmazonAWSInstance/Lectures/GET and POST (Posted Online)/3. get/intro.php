<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri 

    // prints all the contents from the $_GET
    print_r($_GET);
    
    // The format of the URL will be something like:
    // http://example.com/get/intro.php?name=Prof.Wergeles&language=ch

    // look for the 'name' key
    $name = $_GET['name'];

    // look for the 'language' key and return the value
    $language = $_GET['language'];

    // if the language is Chinese, say hi in Chinese
    if ($language == 'ch') {
        print "Ni Hao $name";
    }
    // otherwise default to english
    else {
        print "Hello $name";
    }

?>