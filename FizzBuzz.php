<?php
/*
 *FizzBuzz - Write a program that prints the numbers 1 to 100. For multiples of three print "Fizz" and for multiples of five print "Buzz".
 *          For multiples of both three and five, print "FizzBuzz".
 */

#First start a loop to count 1 to 100
for($i=1;$i<101;$i++) {
    $value = $i;
    #check for multiples of three
    if($i % 3 == 0):
        $value = "Fizz";
    endif;
    #check for multiples of five
    if($i % 5 == 0):
        if(!is_numeric($value))//Check for multiple of both 3 and 5
            $value .= "Buzz";
        else
            $value = "Buzz";
    endif;
    echo $value."\n<br>";
}
?>