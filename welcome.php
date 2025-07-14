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



        // Write a PHP program to find the larger value from two positive integer values that is in the range 20.
        // .30 inclusive, or return 0 if neither is in that range.
        // Sample Input:
        // 78, 95
        // 20, 30
        // 21, 25
        // 28, 28


            function largestRange($r, $t){

                if( $r >= 20 &&  $r <= 30 || $t >= 20 &&  $t <= 30){

                    if($r >= $t){
                        return $r;
                    }else{
                        return $t; 
                    }

                } elseif($r >= 20 &&  $r <= 30){
                    return $r; 
                }elseif($t >= 20 &&  $t <= 30){
                    return $t; 

            } else {
                return ("oi korsos ki? hoy nai to input dewa."); 
            }
        }


        // echo largestRange(200,250);  

            // Write a PHP program to check if two given non-negative integers have the same last digit.
            // Sample Input:
            // 123, 456
            // 12, 512
            // 7, 87
            // 12, 45


        function lastDgtSame($r,$t){


            return abs($r % 10) == abs($t % 10);

        }

        // var_dump(lastDgtSame(27,37));


        //  Write a PHP program to convert the last 3 characters of a given string in upper case. 
        //         If the length of the string has less than 3 then uppercase all the characters.
        // Sample Input:
        // "Python"
        // "Javascript"
        // "js"
        // "PHP"

        function lastUpperCase($r){

            if(strlen($r) < 3){

                return strtoupper($r);

            }else {
                $first_part = substr($r,0, strlen($r)-3);
                $last_part =  strtoupper(substr($r, strlen($r)-3));

                 return $first_part . $last_part;
            }

        }

        // echo lastUpperCase("lenovo");



//  Write a PHP program to create a new string which is n (non-negative integer) 
//  copies of the the first 3 characters of a given string. 
//   If the length of the given string is less than 3 then return n copies of the string.
// Sample Input:
// "Python", 2
// "Python", 3
// "JS", 3


        function nCopyofChar($s, $n){

            $fakastring = "";

            $prothom3tachar = 3;

            if($prothom3tachar > strlen($s)){

                $prothom3tachar = strlen($s); 

            }
                  
        }

        // Write a PHP program to check a specified number is present in a given array of integers.


        function specNumber ($nums, $n){

            foreach($nums as $num){

                 if($num == $n){

                return true;

            }

            return false; 

            }

           
        }

        // var_dump(specNumber(array(1,2,3,4,5), 9));


        // Write a PHP program to check if one of the first 4
        //  elements in an array of integers is equal to a given element.

            function first4($nums, $n){
            
                    if (sizeof($nums) < 4){
                        $limit = sizeof($nums);
                    } else {

                        $limit = 4; 
                    }

                    for($i=0; $i < $limit; $i++){

                        if($nums[$i] == $n){

                           return true; 

                        }

                    }

                     return false; 
                   
            }

            // var_dump(first4(array(1,2,3,4,5,6),9)); 


            // Write a PHP program to check whether the sequence of numbers 1, 2, 3 appears in 
            // a given array of integers somewhere.


            function sequenceMtch($nums){

                for ($i = 0; $i < sizeof($nums)-2; $i++){

                    if($nums[$i] == 1 && $nums[$i+1] == 2 && $nums[$i+2] == 3){

                        return true;

                    }
                    return false;

                }

            }

            var_dump(sequenceMtch(array(1,2,4,45,5,6,7)));


            











    ?>

</body>
</html>