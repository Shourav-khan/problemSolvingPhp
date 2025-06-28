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


                function twoRange($r,$t){

                    return ($r >= 20 && $r <= 50 || $t >= 20 && $t <= 50);

                }


                // var_dump(twoRange(10, 19));


                // Remove "yt" from Index 1
                // Write a PHP program to check if a string 'yt' appears at index 1 in a given string. If it appears return a string without 'yt' otherwise return the original string.
                // Sample Input:
                // "Python"
                // "ytade"
                // "jsues"


            function yt($s){

                return substr( $s,1,2 ) == "yt" ? substr($s, 0, 1 ) . substr($s, 3,strlen($s)-2) : $s;
            }

            // echo yt("yt");


            // Write a PHP program to check which number nearest to the value 100 among two given integers. 
            // Return 0 if the two numbers are equal.
            // Sample Input:
            // 78, 95
            // 95, 95
            // 99, 70


            function nearest100($r,$t){

                $x = 100;

                $val = abs($r - $x);  
                $val2 = abs($t - $x); 

                return $val == $val2 ? 0 : ($val < $val2 ? $r : $t);

            }

            // echo nearest100(60,70);


            





    ?>

</body>
</html>