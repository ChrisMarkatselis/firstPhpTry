<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHPTryTest</title>
    </head>
    <body>
        
        <?php
        
        const BR = '<br/>'; 
        
        beginState(0,0);
        
        
        function beginState ($FirstX, $FirstY) {
            $str1 = "The first X from your position is: ";
            $str2 = "The first Y from your position is: ";
            echo $str1, $FirstX; 
            echo BR;
            echo $str2, $FirstY;
        }
        
        
        
        ?>
    </body>
</html>
