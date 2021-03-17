<?php
class insertReplace{

    
    public $InsertedValue;
    public $Position;
    public $newarr;
     public $arr = [1,2,3,4,5,6];
    
    

    public function change($Position,$InsertedValue){
        
        
        $newarr = array_splice($this->arr,$this->Position,0,$this->InsertedValue);
        echo "After inserting $InsertedValue in $Position of this array is : "; 
        // echo "$newarr";
        // echo "$this->arr";
        // echo implode("",$newarr);
        echo "$newarr";
        // foreach ($newarr as $x)  
        // { 
        // echo "$x "; 
        // } 
        

    }
    

}
 $obj = new insertReplace();
//  print_r($obj->arr);
 $obj->change(3,10);






?>