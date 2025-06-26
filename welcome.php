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


            // Write a PHP program to check two given integers, and 
            // return true if one of them is 30 or if their sum is 30.
            // Sample Input:
            // 30, 0
            // 25, 5
            // 20, 30
            // 20, 25


                
                function checkSum($n,$m){

                    return ($n == 30 || $m == 30 || ($n + $m == 30)); 
                }

                // var_dump(checkSum(50, -10));



        //  Write a PHP program to check a given integer and 
        //  return true if it is within 10 of 100 or 200.
        //  Sample Input:
        // 103
        // 90
        // 89

                function withinNumbers($x){

                    if(abs($x-100) <= 10 || abs($x-200) <= 10)
                             return true;
                             return false;
                    
                       
                    
                }

                // var_dump(withinNumbers(50));



        // Write a PHP program to create a new string where 'if' is added to the front of a given string. 
        // If the string already begins with 'if', return the string unchanged.
        // Sample Input:
        // "if else"
        // "else"
        // "if"


                    function prepand($r){

                        if(strlen($r) >= 2 && substr($r, 0,2) == "if"){

                            return $r;

                        }

                        return "if" . $r ; 

                    }

                    // echo prepand("if aiodhoid ");


//  Write a PHP program to exchange the first and last characters 
//  in a given string and return the new string.
// Sample Input:
// "abcd"
// "a"
// "xy"    
                                                    
                    function swap($maya){

                        return strlen ($maya) > 1 ?  substr($maya, strlen($maya)-1) . substr($maya,1,strlen($maya)-2) . substr($maya, 0,1) : $maya ;

                    }

                    // echo swap("nos");



            //    Write a PHP program to check two given integers 
            //    whether either of them is in the range 100..200 inclusive.    
                    
            function rangeHas($r,$t){

                return  ($r >= 100 && $r <= 200 || $t >=100 && $t <= 200);
            }
                    // var_dump(rangeHas(100,150)); 


                  function hasRange3($r,$t){

                    return ($r >= 20 && $r <= 50 || $t >= 20 && $t <= 50);

                  }  

                //   var_dump(hasRange3(50, 19));


                



    ?>

</body>
</html>