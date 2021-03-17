<?php

class TableProgram{

    public $Input;
    

    public function Table($Input){

        for($i=1; $Input*$i<=$Input*10;$i++){

            $newinput=$Input*$i;
            
            echo "$newinput,";

        }

    }

 

}

$a = new TableProgram();
$a->Table(3);








?>