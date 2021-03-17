<?php
class palindrome{

    public $number;
    


    public function reverse($number){

        $num = (string)$number;
        $revstr = strrev($num);
        $reverse = (int)$revstr;
        // echo "$reverse";


        if ( $reverse == $number ){
            echo "This is Pallidrome";
    
        }else{
            echo "This is not Pallidrome";
        }
        
    }

}
$New = new palindrome();
$New->reverse(12121);





?>