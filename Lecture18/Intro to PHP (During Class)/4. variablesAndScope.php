<!DOCTYPE html>
<!-- Created by Professor Wergeles for CS2830 at the University of Missouri -->
<html>
<head>
	<title>Variables and Scope</title>
</head>
<body>
    <?php
        /* Creating (Declaring) PHP Variables */
        
        
        
        echo $txt;
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $y;
        
        echo "<br><br>";
        
        
        
        
        
        /* Global and Local Scope */
        
        function myTest() {
            
            echo "<p>Variable x inside function is: $x</p>";
        }
        
        echo "<p>Variable x outside function is: $x</p>";
        
        
        
        function myTest2() {
            
            echo "<p>Variable n inside function is: $n</p>";
        }
        
        
        
        echo "<p>Variable n outside function is: $n</p>";
        

        
        function myTest3() {
            $y = $x + $y;
        }
        
    ?>
</body>
</html>
