<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php


// Write a PHP program to compute the sum of the two given integer values. 
// If the two values are the same, then returns triple their sum.
// Sample Input
// 1, 2
// 3, 2
// 2, 2
          function ektaFunc($n,$m){

                return $n==$m ? ($n+$m)*3 : ($n+$m); 
          }

        //   echo ektaFunc(10,5);


// Write a PHP program to get the absolute difference between n and 51. 
// If n is greater than 51 return triple the absolute difference.
// Sample Input:
// 53
// 30
// 51

            function absolute($n){

                $x = 51;

                if($n>$x){

                    return ($n-$x)*3 ;

                }

                return $n - $x ; 

            } 


                // echo absolute(50);


                


        
    ?>

</body>
</html>