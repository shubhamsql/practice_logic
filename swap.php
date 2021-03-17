<?php
class Swap{
    public $a;
    public $b;


    public function SwapDigit($a,$b){

        echo "a = $a   b = $b <br>";
        echo "b = $b   a = $a";
        

    }

}

$newno = new Swap();
$newno->SwapDigit(4,5);



?>