<!DOCTYPE html>
<!-- Created by Professor Wergeles for CS2830 at the University of Missouri -->
<html>
<head>
	<title>Variables and Scope</title>
</head>
<body>
    <?php
        /* Creating (Declaring) PHP Variables */
        
        /*
            in PHP, a variable starts with a $ sign,
            followed by the name of the variable
        */
        $txt = "Hello World!";
        $x = 5;
        $y = 10.5;
        
        echo $txt;
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $y;
        
        echo "<br><br>";
        
        $x = 6;
        $y = 4;
        echo $x + $y;
    
        /*
            In the example above, notice that you do
            not have to tell PHP whih data type the
            variable is.
            
            PHP automatically converts the variable to
            type, depending on it's value
        */
        
        
        
        /* Global and Local Scope */
    
        $x = 5; // global scop
        
        function myTest() {
            global $x;
            echo "<p>Variable x inside function is: $x</p>";
        }
        myTest();
        
        echo "<p>Variable x outside function is: $x</p>";
        
        
        
        function myTest2() {
            $n = 10;
            echo "<p>Variable n inside function is: $n</p>";
        }
        myTest2();
        
        
        echo "<p>Variable n outside function is: $n</p>";
        
        
        $x = 6;
        $y = 14;
        
        function myTest3() {
            global $x, $y;
            $y = $x + $y;
        }
        myTest3();
    
        echo $y;
        
    ?>
</body>
</html>
